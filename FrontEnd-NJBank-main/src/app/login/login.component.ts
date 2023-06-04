import { Component, OnInit } from '@angular/core';
import {Message} from 'primeng/api';
import { Router } from '@angular/router';
import { LoginService } from '../login.service';
import { UserService } from '../user.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  email!: string;
  password!: string;
  errorMessage: Message[] = [];

  constructor(
    private loginService: LoginService,
    private userService: UserService,
    private router: Router
  ) { }

  ngOnInit(): void {
    if (localStorage.getItem('loginData')) {
      this.router.navigate(['/users']);
    }
  }

  connect()
  {
    if (localStorage.getItem('loginData') == null)
    {
      this.loginService.login(this.email, this.password)
        .subscribe({
          next: (response: any) => {

            this.userService.getUser(response.userId).subscribe({
              next: (user) => {
                localStorage.setItem('userRole', user.role);
                localStorage.setItem('loginData', JSON.stringify(response));
                
                if (user.role == '1') {
                  this.router.navigate(['/users']);
                }
                else
                {
                  this.router.navigate(['/treatment']);
                }
              }
            });
          },
          error: () => {
            this.errorMessage = [
              {severity:'error', summary:'Erreur', detail:"Le mail ou le mot de passe est incorrect"}  
            ];
          }
        });
    }
  }    
}
