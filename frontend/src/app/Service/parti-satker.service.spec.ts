import { TestBed } from '@angular/core/testing';

import { PartiSatkerService } from './parti-satker.service';

describe('PartiSatkerService', () => {
  let service: PartiSatkerService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(PartiSatkerService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
