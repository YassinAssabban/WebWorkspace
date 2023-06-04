import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

import { environment } from 'src/environments/environment';

import { Treatment } from './treatment';

@Injectable({
  providedIn: 'root'
})
export class TreatmentService {

  
  constructor(private http: HttpClient) { }
  
  getTreatments() {
    const loginData = JSON.parse("" + localStorage.getItem('loginData'));
    return this.http.get<Treatment[]>(`${environment.apiUrl}/Transactions`, { headers: { 'x-auth-token': loginData.token } });
  }
  
  getTreatment(userId: number) {
    const loginData = JSON.parse("" + localStorage.getItem('loginData'));
    return this.http.get<Treatment>(`${environment.apiUrl}/Transactions/${userId}`, { headers: { 'x-auth-token': loginData.token } });
  }

  addTreatment(treatment: Treatment) {
    return this.http.post(`${environment.apiUrl}/Transactions`, treatment);
  }
}
