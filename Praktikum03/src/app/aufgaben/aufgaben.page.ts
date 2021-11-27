import {Component, OnInit} from '@angular/core';
import {AufgabenService} from '../services/aufgaben.service';
import {Aufgabe} from './Aufgabe';
import {ModalController} from '@ionic/angular';
import {AufgabenModalComponent} from '../aufgaben-modal/aufgaben-modal.component';


@Component({
  selector: 'app-aufgaben',
  templateUrl: './aufgaben.page.html',
  styleUrls: ['./aufgaben.page.scss'],
})
export class AufgabenPage implements OnInit {


  constructor(private aufgabenService: AufgabenService,
              private modalCtrl: ModalController) {
  }

  ngOnInit() {

  }

  async initModal() {
    const modal = await this.modalCtrl.create({
      component: AufgabenModalComponent,
      cssClass: 'small-modal'

    });

    return await modal.present();
  }

  public addAufgabe(description: string) {
    this.aufgabenService.addAufgabe(description);
  }

  public getAufgaben(): Aufgabe[] {
    return this.aufgabenService.getAufgaben().filter(this.notErledigt);
  }

  public markErledigt(id: number) {
    this.aufgabenService.markErledigt(id);
  }

  public deleteAufgabe(id: number) {
    this.aufgabenService.deleteAufgabe(id);
  }

  private notErledigt(element, index, array) {
    return (!element.erledigt);
  }


}
