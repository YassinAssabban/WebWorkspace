import { Component, OnInit } from '@angular/core';
import { MenuItem } from 'primeng/api';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css'],
})
export class HeaderComponent implements OnInit {
  itemsButton!: MenuItem[];
  items!: MenuItem[];

  ngOnInit() {
    this.itemsButton = [
      {
        label: 'Profile',
        icon: 'pi pi-user',
      },
      {
        label: 'Historique',
        icon: 'pi pi-history',
      },
      { separator: true },
      {
        label: 'Deconnexion',
        icon: 'pi pi-fw pi-sign-out',
      },
    ];
    this.items = [
      {
        label: 'Créer une équation de recherche',
        icon: 'pi pi-fw pi-file',
      },
      {
        label: 'Comment ça marche ?',
        icon: 'pi pi-fw pi-pencil',
      },
      {
        label: "Qu'est ce que pico ?",
        icon: 'pi pi-fw pi-user',
      },
    ];
  }
}
