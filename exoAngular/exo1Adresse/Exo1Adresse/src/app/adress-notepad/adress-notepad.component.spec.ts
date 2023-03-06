import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AdressNotepadComponent } from './adress-notepad.component';

describe('AdressNotepadComponent', () => {
  let component: AdressNotepadComponent;
  let fixture: ComponentFixture<AdressNotepadComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AdressNotepadComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AdressNotepadComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
