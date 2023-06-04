import { Component, Input, OnInit } from '@angular/core';
import { Observable } from 'rxjs';
import { ApiService } from '../api.service';
import { Contact } from '../contact';

@Component({
  selector: 'app-contact-list',
  templateUrl: './contact-list.component.html',
  styleUrls: ['./contact-list.component.css'],
})
export class ContactListComponent implements OnInit {
  @Input()
  contactsList!: Contact[];

  contacts$!: Observable<Contact[]>;

  constructor(protected api: ApiService) {}

  ngOnInit(): void {
    this.getContact();
  }

  getContact() {
    this.contacts$ = this.api.getContacts();
  }

  deleteContact(id: number) {
    const sub = this.api.deleteContact(id).subscribe(() => {
      this.getContact();
      sub.unsubscribe();
    });
  }
}
