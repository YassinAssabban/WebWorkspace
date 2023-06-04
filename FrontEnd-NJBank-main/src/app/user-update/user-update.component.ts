import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Role } from '../role';
import { User } from '../user';
import { UserService } from '../user.service';
import {Message} from 'primeng/api';

@Component({
  selector: 'app-user-update',
  templateUrl: './user-update.component.html',
  styleUrls: ['./user-update.component.css']
})
export class UserUpdateComponent implements OnInit {

  roles!: Role[];
  selectedRole!: String;
  errorMessage: Message[] = [];

  updatedUser: User = {
    userId: 0,
    prenom: '',
    nom: '',
    email: '',
    password: '',
    role: ''
  }

  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private service: UserService,
  ) { }

  ngOnInit(): void {
    this.roles = [
      {
        name: 'Adminsitraeur',
        value: '1'
      },
      {
        name: 'Utilisateur',
        value: '2'
      }
    ];

    this.route.params.subscribe((params) => {
      const userId = params['id'];
      if (userId) {
        this.service.getUser(userId)
          .subscribe((user) => {
            this.updatedUser = user as User;
          });
      }
    });
  }

  updateUser() {
    const subscription = this.service
    .updateUser(this.updatedUser)
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
