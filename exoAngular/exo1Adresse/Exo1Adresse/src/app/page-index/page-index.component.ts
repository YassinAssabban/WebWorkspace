import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-page-index',
  templateUrl: './page-index.component.html',
  styleUrls: ['./page-index.component.css']
})
export class PageIndexComponent implements OnInit {
  constructor() { };
  ngOnInit(){ };

  showForm = false;

  ButtonClicked(){
    this.showForm = true;
  }


  users:any[] = [
    {
      name : 'Brunquers',
      firstname : 'Benjamin',
      email : 'brunquersb@helha.be',
      phone : '+32 495 92 52 93'
    }
  ];

  addNewUser(newUser: any){
    this.users.push(newUser);
    this.showForm = false;
    }
}
