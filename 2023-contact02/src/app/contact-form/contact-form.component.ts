import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { ApiService } from '../api.service';
import { Contact } from '../contact';

@Component({
  selector: 'app-contact-form',
  templateUrl: './contact-form.component.html',
  styleUrls: ['./contact-form.component.css'],
})
export class ContactFormComponent implements OnInit {
  @Output()
  newContactSaved: EventEmitter<Contact> = new EventEmitter();

  newContact: Contact = {
    id: -1,
    firstname: '',
    lastname: '',
    email: '',
    birthdate: '',
    phone: '',
  };

  constructor(private api: ApiService) {}

  ngOnInit(): void {}

  saveNewContact() {
    const sub = this.api.addContact(this.newContact).subscribe((contact) => {
      this.newContact = contact;
      this.newContactSaved.emit(this.newContact);
      sub.unsubscribe();
    });
  }
}
