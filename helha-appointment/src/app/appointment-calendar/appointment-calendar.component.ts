import { Component, OnInit } from '@angular/core';
import { CalendarOptions } from '@fullcalendar/angular';
import { Appointment } from '../appointment';
import { environment } from 'src/environments/environment';
import { AppointmentService } from 'src/services/appointment.service';
import { FullCalendarModule } from '@fullcalendar/angular';

@Component({
  selector: 'app-appointment-calendar',
  templateUrl: './appointment-calendar.component.html',
  styleUrls: ['./appointment-calendar.component.css'],
})
export class AppointmentCalendarComponent implements OnInit {
  calendarOptions: CalendarOptions = {
    initialView: 'dayGridMonth',
    themeSystem: 'standard',
    height: 750,
    locale: 'fr',
    firstDay: 1,
    buttonText: {
      today: "Aujourd'hui",
    },
    events: [
      {
        id: '1',
        title: 'Exemple 1',
        start: '2023-06-11 16:00:00',
        end: '2023-06-11 16:30:00',
      },
      {
        id: '2',
        title: 'Exemple 2',
        start: '2023-06-06 16:30:00',
        end: '2023-06-06 17:00:00',
      },
    ],
  };

  constructor(private appointmentSerivce: AppointmentService) {}

  // ngOnInit(): void {
  //   this.appointmentSerivce
  //     .getAppointments()
  //     .subscribe((appointments: Appointment[]) => {
  //       console.log(appointments);
  //       this.calendarOptions.events = appointments.map(
  //         (appointment: Appointment) => {
  //           return {
  //             id: appointment.id,
  //             title: appointment.nom + ' ' + appointment.prenom,
  //             start: appointment.startDate,
  //             end: appointment.endDate,
  //           };
  //         }
  //       );
  //     });
  // }

  ngOnInit(): void {
    this.appointmentSerivce
      .getAppointments()
      .subscribe((appointments: Appointment[]) => {
        const events: Appointment[] = [];

        appointments.forEach((appointment: Appointment) => {
          const event = {
            id: appointment.id,
            title: appointment.nom + ' ' + appointment.prenom,
            start: appointment.startDate,
            end: appointment.endDate,
          };
          events.push(event);
        });
        this.calendarOptions.events = events;
      });
  }
}
