import { Injectable } from '@angular/core';
import { FaceSnap } from '../models/face-snap.model';

@Injectable({
  providedIn: 'root',
})
export class FaceSnapsService {
  faceSnaps: FaceSnap[] = [
    {
      id: 1,
      title: 'Archibald',
      description: 'Mon meuilleur ami depuis tout petit !',
      imageUrl: 'http://lorempixel.com/400/200',
      snaps: 255,
      createdDate: new Date(),
      location: 'Paris',
    },

    {
      id: 2,
      title: 'Maurice',
      description: 'Mon chaton préféré !',
      imageUrl: 'http://lorempixel.com/400/200',
      snaps: 3,
      createdDate: new Date(),
      location: 'Lyon',
    },

    {
      id: 3,
      title: 'Albert',
      description: 'Mon chien préféré !',
      imageUrl: 'http://lorempixel.com/400/200',
      snaps: 60,
      createdDate: new Date(),
    },
  ];

  getAllFaceSnaps(): FaceSnap[] {
    return this.faceSnaps;
  }

  getFaceSnapById(id: number): FaceSnap {
    const facesnap = this.faceSnaps.find((faceSnap) => faceSnap.id === id);
    if (!facesnap) {
      throw new Error('FaceSnap not found');
    } else {
      return facesnap;
    }
  }

  snapFaceSnapById(faceSnapId: number, snapType: 'snap' | 'unsnap'): void {
    const faceSnap = this.getFaceSnapById(faceSnapId);
    snapType === 'snap' ? faceSnap.snaps++ : faceSnap.snaps--;
  }
}
