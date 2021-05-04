import { Component, OnInit } from '@angular/core';
import {Rate} from '../shared/rate';
import {RATES} from '../shared/rates';
import {RateService} from '../services/rate.service';




@Component({
  selector: 'app-rate',
  templateUrl: './rate.component.html',
  styleUrls: ['./rate.component.scss']
})
export class RateComponent implements OnInit {
  displayedColumns: string[] = ['position', 'name', 'weight', 'symbol'];
  dataSource = RATES;
  
  constructor(private rateservice:RateService) { }

  ngOnInit(): void {
  }

}
