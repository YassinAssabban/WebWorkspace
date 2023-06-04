import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { MenuItem } from 'primeng/api';
import { AuthService } from '../auth.service';
import { User } from '../user';
import { Subscription } from 'rxjs';

@Component({
  selector: 'app-inscription-form',
  templateUrl: './inscription-form.component.html',
  styleUrls: ['./inscription-form.component.css'],
})
export class InscriptionFormComponent implements OnInit {
  sections!: String[];
  items!: MenuItem[];

  constructor(private api: AuthService, private router: Router) {}

  ngOnInit() {
    this.sections = [
      'Kinésithérapie',
      'Ergothérapie',
      'Psychomotricité',
      'Bio Médicale',
      'Bio Pharmaceutique',
    ];

    this.items = [
      {
        label: 'File',
        icon: 'pi pi-fw pi-file',
      },
      {
        label: 'Edit',
        icon: 'pi pi-fw pi-pencil',
      },
      {
        label: 'Users',
        icon: 'pi pi-fw pi-user',
      },
      {
        label: 'Events',
        icon: 'pi pi-fw pi-calendar',
      },
    ];
  }

  errorMsg: string = '';

  newUser: User = {
    id: 0,
    matricule: '',
    email: '',
    firstname: '',
    lastname: '',
    password: '',
    section: '',
  };

  AddUser() {
    const subscription = this.api.addUser(this.newUser).subscribe({
      next: () => {
        console.log('User registered');
        this.router.navigate(['/home']);
        subscription.unsubscribe();
      },
      error: (err) => {
        console.log(err);
        this.errorMsg = 'Login/Password incorrect';
      },
    });
    console.log(this.newUser);
  }
}
