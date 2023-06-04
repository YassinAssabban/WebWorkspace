import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Treatment } from '../treatment';
import { TreatmentService } from '../treatment.service';
import { UserService } from '../user.service';
import { User } from '../user';
import { Account } from '../account';
import { AccountService } from '../account.service';
import { forkJoin } from 'rxjs';
import {Message} from 'primeng/api';

@Component({
  selector: 'app-treatment-add',
  templateUrl: './treatment-add.component.html',
  styleUrls: ['./treatment-add.component.css']
})

export class TreatmentAddComponent implements OnInit {

  users!: { userId: number; role: string, fullname: string; }[];
  errorMessage: Message[] = [];
  
  userRole: string = localStorage.getItem('userRole') || '';
  loginData: any = localStorage.getItem('loginData') ? JSON.parse(localStorage.getItem('loginData') || '') : null;

  srcUser!: User;
  srcUserId!: number;
  srcAccount!: Account;

  dstUser!: User;
  dstUserId!: number;
  dstAccount!: Account;

  newTreatment: Treatment = {
    id: 0,
    userId: 0,
    montant: 0,
    dateHeure: new Date(),
    compteBanqueId: 0,
    compteBanqueIdDestinataire: 0
  };

  constructor(
    private service: TreatmentService,
    private userService: UserService,
    private accountService: AccountService,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.userService.getUsers().subscribe({
      next: (users) => {
        this.users = users.map(user => {
          return {
            userId: user.userId,
            role: user.role,
            fullname: `${user.prenom} ${user.nom}`
          }
        });

        if (this.userRole == '2')
        {
          this.users = this.users.filter(user => user.userId != this.loginData.userId && user.role != '1');
        }
        else
        {
          this.users = this.users.filter(user => user.role != '1');
        }
      }
    });

    if (this.userRole == '2') {
      this.fillSrc(this.loginData.userId);
    }
  }

  addTreatment() {
    if (this.srcUser && this.srcAccount && this.dstAccount) 
    {
      this.newTreatment.userId = this.srcUser.userId;
      this.newTreatment.compteBanqueId = this.srcAccount.id;
      this.newTreatment.compteBanqueIdDestinataire = this.dstAccount.id;

      if (this.newTreatment.montant <= this.srcAccount.solde && this.newTreatment.montant > 0)
      {
        if (this.srcUser.userId != this.dstUser.userId)
        {
          this.srcAccount.solde -= +this.newTreatment.montant;
          this.dstAccount.solde += +this.newTreatment.montant;

          const subscription = forkJoin([this.service.addTreatment(this.newTreatment), this.accountService.updateAccount(this.srcAccount), this.accountService.updateAccount(this.dstAccount)])
            .subscribe({
              next: () => {
                this.router.navigate(['/treatment']);
                subscription.unsubscribe();
              }
          });
        }
        else
        {
          this.errorMessage = [];
          this.errorMessage.push({severity:'error', summary:'Erreur', detail:'Vous ne pouvez pas effectuer un virement au même utilisateur'});
        }
      }
      else
      {
        this.errorMessage = [
          {severity:'error', summary:'Erreur', detail:"Le montant doit être supérieur à 0 et inférieur au solde du compte"}  
        ];
      }
    }
    else
    {
      this.errorMessage = [
        {severity:'error', summary:'Erreur', detail:"Un problème est survenu lors de l'envoie du virement"}  
      ]; 
    }
  }

  fillSrc(id?: number)
  {
    if (id)
    {
      const subscription = forkJoin([this.userService.getUser(id!), this.accountService.getAccountByUserId(id!)])
        .subscribe({
          next: (data) => {
            this.srcUser = data[0];
            this.srcAccount = data[1];

            subscription.unsubscribe();
          }
        });
    }
    else
    {
      const subscription = forkJoin([this.userService.getUser(this.srcUserId), this.accountService.getAccountByUserId(this.srcUserId)])
        .subscribe({
          next: (data) => {
            this.srcUser = data[0];
            this.srcAccount = data[1];

            subscription.unsubscribe();
          }
        });
    }
  }

  fillDst()
  {
    const subscription = forkJoin([this.userService.getUser(this.dstUserId), this.accountService.getAccountByUserId(this.dstUserId)])
      .subscribe({
        next: (data) => {
          this.dstUser = data[0];
          this.dstAccount = data[1];

          subscription.unsubscribe();
        }
      });
  }
}
