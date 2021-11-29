import { Component, OnInit } from '@angular/core';
import { AufgabenService } from '../services/aufgaben.service';

@Component({
  selector: 'app-einstellungen',
  templateUrl: './einstellungen.page.html',
  styleUrls: ['./einstellungen.page.scss'],
})
export class EinstellungenPage implements OnInit {

  constructor(private aufgabenService: AufgabenService) { }

  ngOnInit() {
  }

  public deleteFromMemory(){
    this.aufgabenService.clearData();


  }

}
