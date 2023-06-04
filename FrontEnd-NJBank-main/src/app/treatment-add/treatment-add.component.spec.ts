import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TreatmentAddComponent } from './treatment-add.component';

describe('TreatmentAddComponent', () => {
  let component: TreatmentAddComponent;
  let fixture: ComponentFixture<TreatmentAddComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TreatmentAddComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TreatmentAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
