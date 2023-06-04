import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = '2023-contact01';

  isTableView = true;

  switchView(isTableView: boolean) {
    this.isTableView = isTableView;
  }
}
