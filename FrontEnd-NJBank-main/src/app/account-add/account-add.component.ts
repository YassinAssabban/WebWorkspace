import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Account } from '../account';
import { AccountService } from '../account.service';
import { UserService } from '../user.service';
import { User } from '../user';
import {Message} from 'primeng/api';

@Component({
  selector: 'app-account-add',
  templateUrl: './account-add.component.html',
  styleUrls: ['./account-add.component.css']
})

export class AccountAddComponent implements OnInit {

  users!: { userId: number; role: string, fullname: string; }[];

  selectedUser!: User;
  
  errorMessage: Message[] = [];

  newAccount: Account = {
    id: 0,
    userId: 0,
    numero: '',
    solde: 0
  };

  constructor(
    private service: AccountService,
    private userService: UserService,
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

        this.users = this.users.filter(user => user.role === '2');
    }, 
      error: (error) => console.log(error)})
  }

  addAccount() {
    const subscription = this.service
      .addAccount(this.newAccount)
      .subscribe({
        next: () => {
          this.router.navigate(['/accounts']);
          subscription.unsubscribe();
        },
        error: () => {
          this.errorMessage = [
            {severity:'error', summary:'Erreur', detail:"Les informations fournies sont incorrectes"}  
          ];
        }
      });
  }

  selectUser(user: User) {
    this.selectedUser = user;
    this.newAccount.userId = user.userId;
  }
}
