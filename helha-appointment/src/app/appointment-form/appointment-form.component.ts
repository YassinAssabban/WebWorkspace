import { Component, OnInit } from '@angular/core';
import { AppointmentService } from 'src/services/appointment.service';
import { Appointment } from '../appointment';
import { Router } from '@angular/router';
import { Subscription, subscribeOn } from 'rxjs';
import * as moment from 'moment';


@Component({
  selector: 'app-appointment-form',
  templateUrl: './appointment-form.component.html',
  styleUrls: ['./appointment-form.component.css']
})
export class AppointmentFormComponent implements OnInit {

  newAppointment: Appointment = {};
  constructor(private appointmentSerivce: AppointmentService, private router: Router) { }

  ngOnInit(): void {
  }

  onSubmit() {
    const startDate = new Date(this.newAppointment.startDate + "");
    const endDate = startDate.getTime() + 30 * 1000;

    this.newAppointment.startDate = moment(this.newAppointment.startDate).format('YYYY-MM-DD HH:mm:ss');
    this.newAppointment.endDate = moment(endDate).format('YYYY-MM-DD HH:mm:ss');

    console.log(this.newAppointment);
    const subscription = this.appointmentSerivce.addAppointment(this.newAppointment).subscribe(() => {
      this.router.navigate(['/home']);
      console.log(this.newAppointment);
      subscription.unsubscribe;
    });
  }
}
