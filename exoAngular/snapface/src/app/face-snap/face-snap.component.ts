import { Component, Input, OnInit } from '@angular/core';
import { FaceSnap } from '../models/face-snap.model';
import { FaceSnapsService } from '../services/face-snaps.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-face-snap',
  templateUrl: './face-snap.component.html',
  styleUrls: ['./face-snap.component.css'],
})
export class FaceSnapComponent implements OnInit {
  @Input() faceSnap!: FaceSnap;

  isAlreadySnapped!: boolean;
  buttonText!: string;

  constructor(
    private faceSnapSerivce: FaceSnapsService,
    private router: Router
  ) {}

  ngOnInit() {
    this.isAlreadySnapped = false;
    this.buttonText = 'Oh Snap !';
  }

  onSnap() {
    if ((this.buttonText = 'Oh Snap !') && this.isAlreadySnapped == false) {
      this.buttonText = 'Oops, un Snap!';
      this.isAlreadySnapped = true;
      this.faceSnapSerivce.snapFaceSnapById(this.faceSnap.id, 'snap');
    } else {
      this.buttonText = 'Oh Snap !';
      this.isAlreadySnapped = false;
      this.faceSnapSerivce.snapFaceSnapById(this.faceSnap.id, 'unsnap');
    }
  }

  onViewFaceSnap() {
    this.router.navigateByUrl(`facesnaps/${this.faceSnap.id}`);
  }
}
