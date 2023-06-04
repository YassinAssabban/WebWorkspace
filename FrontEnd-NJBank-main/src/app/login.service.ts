import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

  constructor(private http: HttpClient) { }

  login(email: string, password: string) {
    return this.http.get(`${environment.apiUrl}/TokenWallets?email=${email}&password=${password}`);
  }

  deleteToken(id: number) {
    return this.http.delete(`${environment.apiUrl}/TokenWallets/${id}`);
  }
}
