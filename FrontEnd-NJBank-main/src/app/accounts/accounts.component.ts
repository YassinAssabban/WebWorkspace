import { Component, OnInit } from '@angular/core';
import { AccountService } from '../account.service';
import { Account } from '../account';
import { MenuItem } from 'primeng/api';
import { Router } from '@angular/router';
import {Message} from 'primeng/api';

@Component({
  selector: 'app-accounts',
  templateUrl: './accounts.component.html',
  styleUrls: ['./accounts.component.css']
})
export class AccountsComponent implements OnInit {

  dropdownItems!: MenuItem[];
  accounts$!: Account[];
  errorMessage: Message[] = [];

  selectedAccount!: Account;

  constructor(
    private accountService: AccountService,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.dropdownItems = [
      {
        label: 'Supprimer',
        icon: 'pi pi-trash',
        command: () => this.deleteAccount(this.selectedAccount.id)
      }
    ];

    this.accountService.getAccounts().subscribe(accounts => this.accounts$ = accounts);
  }

  selectAccount(account: Account) {
    this.selectedAccount = account;
  }

  deleteAccount(id: number) {
    this.accountService.deleteAccount(id).subscribe(() => {
      this.accounts$ = this.accounts$.filter(account => account.id !== id);
      this.errorMessage = [
        {severity:'success', summary:'Succès', detail:"Le compte à été supprimé"}  
      ];
    });
  }
}
