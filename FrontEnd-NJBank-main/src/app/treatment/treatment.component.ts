import { Component, OnInit } from '@angular/core';
import { TreatmentService } from '../treatment.service';
import { Treatment } from '../treatment';
import { MenuItem } from 'primeng/api';
import { AccountService } from '../account.service';
import { forkJoin } from 'rxjs';
import { Account } from '../account';

@Component({
  selector: 'app-treatment',
  templateUrl: './treatment.component.html',
  styleUrls: ['./treatment.component.css']
})
export class TreatmentComponent implements OnInit {

  userRole: string = localStorage.getItem('userRole') || '';
  loginData: any = JSON.parse("" + localStorage.getItem('loginData'));
  dropdownItems!: MenuItem[];

  crossed!: {
    treatment: Treatment;
    accountSrc: Account;
    accountDst: Account;
  } [];

  constructor(
    private treatmentService: TreatmentService,
    private accountService: AccountService
  ) { }

  ngOnInit(): void {
    const subscription = forkJoin([this.treatmentService.getTreatments(), this.accountService.getAccounts()]).subscribe({
      next: (response) => {
        let treatments = response[0];
        let accounts = response[1];

        if (this.userRole == '1') // admin
        {
          this.crossed = treatments.map(treatment => {
            return {
              treatment: treatment,
              accountSrc: accounts.find(account => account.id === treatment.compteBanqueId) || { id: 0, solde: 0, numero: '', userId: 0, user: null },
              accountDst: accounts.find(account => account.id === treatment.compteBanqueIdDestinataire) || { id: 0, solde: 0, numero: '', userId: 0, user: null }
            }
          });
        }
        else // user
        {
          this.crossed = treatments.filter(treatment => treatment.userId === this.loginData.userId)
            .map(treatment => {
              return {
                treatment: treatment,
                accountSrc: accounts.find(account => account.id === treatment.compteBanqueId) || { id: 0, solde: 0, numero: '', userId: 0, user: null },
                accountDst: accounts.find(account => account.id === treatment.compteBanqueIdDestinataire) || { id: 0, solde: 0, numero: '', userId: 0, user: null }
              }
          });
        }

        subscription.unsubscribe();
      }
    });
  }
}
