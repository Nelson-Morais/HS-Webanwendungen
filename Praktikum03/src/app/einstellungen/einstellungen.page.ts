import { Component, OnInit } from '@angular/core';
import {StorageService} from '../services/storage.service';

@Component({
  selector: 'app-einstellungen',
  templateUrl: './einstellungen.page.html',
  styleUrls: ['./einstellungen.page.scss'],
})
export class EinstellungenPage implements OnInit {

  constructor(private storageService: StorageService) { }

  ngOnInit() {
  }

  public deleteFromMemory(){
    this.storageService.clearLocalStorage();
    window.location.reload()


  }

}
