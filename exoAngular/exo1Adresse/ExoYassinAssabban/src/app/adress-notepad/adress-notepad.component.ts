import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-adress-notepad',
  templateUrl: './adress-notepad.component.html',
  styleUrls: ['./adress-notepad.component.css']
})
export class AdressNotepadComponent implements OnInit {

  constructor(){ };
  ngOnInit(): void {
    throw new Error('Method not implemented.');
  }

  info = {
    name : 'Brunquers',
    firstname : 'Benjamin',
    email : 'brunquersb@helha.be',
    phone : '+32 495 92 52 93'
  }


  @Input()
  users:any = [];

}
