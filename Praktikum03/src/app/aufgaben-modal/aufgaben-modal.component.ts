import {Component, Input, OnInit} from '@angular/core';
import {ModalController} from '@ionic/angular';
import {AufgabenService} from '../services/aufgaben.service';

@Component({
  selector: 'app-aufgaben-modal',
  templateUrl: './aufgaben-modal.component.html',
  styleUrls: ['./aufgaben-modal.component.scss'],
})
export class AufgabenModalComponent implements OnInit {

   description: string;

  constructor(
    private modalCtr: ModalController,
    private aufgabeService: AufgabenService
  ) { }

  ngOnInit() { }

  async close() {
    await this.modalCtr.dismiss();

  }

  public addAufgabe() {
    this.close();
    this.aufgabeService.addAufgabe(this.description);
    this.description = '';

  }
}
