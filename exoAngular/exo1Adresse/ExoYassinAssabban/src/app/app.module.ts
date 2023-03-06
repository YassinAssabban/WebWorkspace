import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { TitleComponent } from './title/title.component';
import { AdressNotepadComponent } from './adress-notepad/adress-notepad.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { AddContactFormComponent } from './add-contact-form/add-contact-form.component';
import { PageIndexComponent } from './page-index/page-index.component';
import { FormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    TitleComponent,
    AdressNotepadComponent,
    AddContactFormComponent,
    PageIndexComponent
  ],
  imports: [
    BrowserModule,
    NgbModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
