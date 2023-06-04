import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Role } from '../role';
import { User } from '../user';
import { UserService } from '../user.service';
import {Message} from 'primeng/api';

@Component({
  selector: 'app-user-add',
  templateUrl: './user-add.component.html',
  styleUrls: ['./user-add.component.css']
})
export class UserAddComponent implements OnInit {

  roles!: Role[];
  selectedRole!: String;
  errorMessage: Message[] = [];

  newUser: User = {
    userId: 0,
    prenom: '',
    nom: '',
    email: '',
    password: '',
    role: ''
  };

  constructor(
    private service: UserService,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.roles = [
      {
        name: 'Administrateur',
        value: '1'
      },
      {
        name: 'Utilisateur',
        value: '2'
      }
    ];
  }

  addUser() {
    const subscription = this.service
      .addUser(this.newUser)
      .subscribe({
        next: () => {
          this.router.navigate(['/users']);
          subscription.unsubscribe();
        },
        error: () => {
          this.errorMessage = [
            {severity:'error', summary:'Erreur', detail:"Les informations fournies sont incorrectes"}  
          ];          
        }
      });
  }
}
