import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

import { environment } from 'src/environments/environment';

import { User } from './user';

@Injectable({
  providedIn: 'root'
})
export class UserService {
  
  constructor(private http: HttpClient) { }

  getUsers() {
    return this.http.get<User[]>(`${environment.apiUrl}/users`);
  }

  getUser(id: number) {
    return this.http.get<User>(`${environment.apiUrl}/users/${id}`);
  }

  addUser(user: User) {
    return this.http.post(`${environment.apiUrl}/users`, user);
  }

  updateUser(user: User) {
    return this.http.put(`${environment.apiUrl}/users/${user.userId}`, user);
  }

  deleteUser(id: number) {
    return this.http.delete(`${environment.apiUrl}/users/${id}`);
  }
}
