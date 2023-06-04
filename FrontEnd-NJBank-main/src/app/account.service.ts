import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

import { environment } from 'src/environments/environment';

import { Account } from './account';

@Injectable({
  providedIn: 'root'
})
export class AccountService {

  
  constructor(private http: HttpClient) { }
  
  getAccounts() {
    const loginData = JSON.parse("" + localStorage.getItem('loginData'));
    return this.http.get<Account[]>(`${environment.apiUrl}/CompteBanques`, { headers: { 'x-auth-token': loginData.token } });
  }

  getAccount(accountId: number) {
    const loginData = JSON.parse("" + localStorage.getItem('loginData'));
    return this.http.get<Account>(`${environment.apiUrl}/CompteBanques/${accountId}`, { headers: { 'x-auth-token': loginData.token } });
  }

  getAccountByUserId(userId: number) {
    const loginData = JSON.parse("" + localStorage.getItem('loginData'));
    return this.http.get<Account>(`${environment.apiUrl}/CompteBanques/user/${userId}`, { headers: { 'x-auth-token': loginData.token } });
  }

  addAccount(account: Account) {
    const loginData = JSON.parse("" + localStorage.getItem('loginData'));
    return this.http.post(`${environment.apiUrl}/CompteBanques`, account, { headers: { 'x-auth-token': loginData.token } });
  }

  updateAccount(account: Account) {
    return this.http.put(`${environment.apiUrl}/CompteBanques/${account.id}`, account);
  }

  deleteAccount(id: number) {
    const loginData = JSON.parse("" + localStorage.getItem('loginData'));
    return this.http.delete(`${environment.apiUrl}/CompteBanques/${id}`, { headers: { 'x-auth-token': loginData.token } });
  }
}
