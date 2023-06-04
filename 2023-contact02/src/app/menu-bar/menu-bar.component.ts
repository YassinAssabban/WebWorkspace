import { Component, EventEmitter, OnInit, Output } from '@angular/core';

@Component({
  selector: 'app-menu-bar',
  templateUrl: './menu-bar.component.html',
  styleUrls: ['./menu-bar.component.css'],
})
export class MenuBarComponent implements OnInit {
  @Output()
  addNewContact: EventEmitter<string> = new EventEmitter();

  constructor() {}

  ngOnInit(): void {}

  btnClickNewContact() {
    this.addNewContact.emit('new_contact');
  }
}
