import { Component, OnInit } from '@angular/core';
import { FaceSnapsService } from '../services/face-snaps.service';
import { FaceSnap } from '../models/face-snap.model';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-single-face-snap',
  templateUrl: './single-face-snap.component.html',
  styleUrls: ['./single-face-snap.component.css'],
})
export class SingleFaceSnapComponent implements OnInit {
  faceSnap!: FaceSnap;
  isAlreadySnapped!: boolean;
  buttonText!: string;

  constructor(
    private faceSnapSerivce: FaceSnapsService,
    private route: ActivatedRoute
  ) {}

  ngOnInit() {
    this.isAlreadySnapped = false;
    this.buttonText = 'Oh Snap !';
    const faceSnapId = +this.route.snapshot.params['id'];
    this.faceSnap = this.faceSnapSerivce.getFaceSnapById(faceSnapId);
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
}
