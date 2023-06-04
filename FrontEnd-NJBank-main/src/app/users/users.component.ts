import { Component, OnInit } from '@angular/core';
import { UserService } from '../user.service';
import { User } from '../user';
import { MenuItem } from 'primeng/api';
import { Router } from '@angular/router';
import {Message} from 'primeng/api';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {

  dropdownItems!: MenuItem[];
  users$!: User[];
  errorMessage: Message[] = [];

  selectedUser!: User;

  constructor(
    private userService: UserService,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.dropdownItems = [
      {
        label: 'Modifier',
        icon: 'pi pi-pencil',
        command: () => this.router.navigate(['/user-update', this.selectedUser.userId])
      },
      {
        label: 'Supprimer',
        icon: 'pi pi-trash',
        command: () => this.deleteUser(this.selectedUser.userId)
      }
    ];

    this.userService.getUsers().subscribe(users => this.users$ = users, error => console.log(error));
  }

  selectUser(user: User) {
    this.selectedUser = user;
  }

  deleteUser(id: number) {
    this.userService.deleteUser(id).subscribe(() => {
      this.users$ = this.users$.filter(user => user.userId !== id);
      this.errorMessage = [
        {severity:'success', summary:'Succès', detail:"L'utilisateur à été supprimé"}  
      ];
    });
  }
}
