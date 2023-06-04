import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { MenuItem } from 'primeng/api';
import { LoginService } from '../login.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {

  navbar!: MenuItem[];
  loginData: any = JSON.parse("" + localStorage.getItem('loginData'));
  userRole: any = localStorage.getItem('userRole');

  constructor(
    private router: Router,
    private loginService : LoginService
  ) { }

  ngOnInit(): void {
    this.navbar = [
        {
            label: 'Utilisateurs',
            icon: 'pi pi-users',
            routerLink: '/users',
            visible: this.userRole == '1'
        },
        {
            label: 'Comptes',
            icon: 'pi pi-money-bill',
            routerLink: '/accounts',
            visible: this.userRole == '1'
        },
        {
            label: 'Transactions',
            icon: 'pi pi-arrow-right-arrow-left',
            routerLink: '/treatment'
        }
    ];
  }

  logout()
  {
    const subscription = this.loginService.deleteToken(this.loginData.tokenWalletId).subscribe(() => 
    { 
      localStorage.clear();
      this.router.navigate(['/login']);
      subscription.unsubscribe(); 
    });
  }
}
