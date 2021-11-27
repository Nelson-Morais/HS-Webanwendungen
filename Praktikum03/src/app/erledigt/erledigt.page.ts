import { Component, OnInit } from '@angular/core';
import {AufgabenService} from '../services/aufgaben.service';

@Component({
  selector: 'app-erledigt',
  templateUrl: './erledigt.page.html',
  styleUrls: ['./erledigt.page.scss'],
})
export class ErledigtPage implements OnInit {

  constructor(private aufgabenService: AufgabenService) { }

  ngOnInit() {
  }


  public getAufgaben() {
  return this.aufgabenService.getAufgaben().filter(this.checkErledigt);
  }

  public deleteAufgabe(id: number){
    this.aufgabenService.deleteAufgabe(id);
  }

  private checkErledigt(element,index,array){
    console.log(element)
    return(element.erledigt);
  }


}
