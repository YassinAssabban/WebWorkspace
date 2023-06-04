import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { FullCalendarModule } from '@fullcalendar/angular';
import dayGridPlugin from '@fullcalendar/daygrid'; // a plugin!
import bootstrap5Plugin from '@fullcalendar/bootstrap5';
import { FormsModule } from '@angular/forms';
import { HomepageComponent } from './homepage/homepage.component';
import { AppointmentFormComponent } from './appointment-form/appointment-form.component';
import { AppointmentCalendarComponent } from './appointment-calendar/appointment-calendar.component';
import { HeaderComponent } from './header/header.component';
import { HelhaPipe } from './pipes/helha.pipe';
import { AdminComponent } from './admin/admin.component';

FullCalendarModule.registerPlugins([ // register FullCalendar plugins
  dayGridPlugin,
  bootstrap5Plugin
]);

@NgModule({
  declarations: [
    AppComponent,
    HomepageComponent,
    AppointmentFormComponent,
    AppointmentCalendarComponent,
    HeaderComponent,
    HelhaPipe,
    AdminComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FullCalendarModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
