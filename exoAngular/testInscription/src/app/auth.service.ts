import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from 'src/environments/environment.development';
import { User } from './user';

@Injectable({
  providedIn: 'root',
})
export class AuthService {
  constructor(private http: HttpClient) {}

  addUser(user: User): Observable<any> {
    return this.http.post<User>(`${environment.apiRegister}createUser`, user);
  }

  getUser(id?: number): Observable<any> {
    if (id) {
      return this.http.get<User>(`${environment.apiRegister}?id=${id}`);
    } else {
      return this.http.get<User>(`${environment.apiRegister}`);
    }
  }

  getUsers() {
    return this.http.get<User[]>(`${environment.apiRegister}/user`);
  }

  updateUser(user: User): Observable<any> {
    return this.http.put<User>(`${environment.apiRegister}/${user.id}`, user);
  }

  deleteUser(id: number): Observable<any> {
    return this.http.delete<User>(`${environment.apiRegister}/${id}`);
  }
}
