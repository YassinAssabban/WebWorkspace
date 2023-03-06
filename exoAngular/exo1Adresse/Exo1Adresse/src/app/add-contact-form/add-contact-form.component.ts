import { Component, EventEmitter, OnInit, Output } from '@angular/core';

@Component({
  selector: 'app-add-contact-form',
  templateUrl: './add-contact-form.component.html',
  styleUrls: ['./add-contact-form.component.css'],
})
export class AddContactFormComponent {
  constructor() {}
  ngOnInit() {}

  //users:any = [];

  userToAdd: {
    id: number;
    name: string;
    firstname: string;
    email: string;
    phone: string;
    dateBorn: string;
    photo: string;
  } = {
    id: 0,
    name: '',
    firstname: '',
    email: '',
    phone: '',
    dateBorn: '',
    photo: '',
  };

  @Output()
  saveEvent: EventEmitter<any> = new EventEmitter();

  addUser() {
    //this.userToAdd.id = this.users.length + 1;
    //this.users.push(this.userToAdd);
    //this.userToAdd = {id: 0, name: "", firstname: "", email: "", phone: "", dateBorn: "", photo: ""};
    this.saveEvent.emit(this.userToAdd);
    console.log(this.userToAdd);
    console.log(this.saveEvent);
  }
}
