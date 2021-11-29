import {Injectable} from '@angular/core';
import {Aufgabe} from '../aufgaben/Aufgabe';
import {StorageService} from './storage.service';


@Injectable({
  providedIn: 'root'
})
export class AufgabenService {

  private id = 1;

  private aufgaben: Aufgabe[] = [];

  constructor(private storageService: StorageService) {
    this.aufgaben = this.getAufgabenFromMemory() || [];
    if(this.getAufgabenFromMemory()!= null){
      this.id = this.getAufgabenFromMemory().length;
    }else{
      this.id = 1;
    }
  }

  public addAufgabe(description: string) {
    this.aufgaben.push(new Aufgabe(this.id++, description));
    this.putAufgabenInMemory();
  }

  public getAufgaben(): Aufgabe[]{
    return this.aufgaben;
  }

  public markErledigt(id: number){
      this.aufgaben.forEach((element) => {
        if(element.id === id){
          element.erledigt = true;
        }
      });
    }

    public deleteAufgabe(id: number){
      const index = this.aufgaben.findIndex(element => element.id === id);
      if (index > -1 ){
        this.aufgaben.splice(index,1);
        this.putAufgabenInMemory();
      }
    }

    clearData()
    {
      this.aufgaben.splice(0);
      this.putAufgabenInMemory();
    }


  private getAufgabenFromMemory(){
    return JSON.parse(this.storageService.getFromLocalStorage('aufgaben'));

  }

  private putAufgabenInMemory() {
    this.storageService.addToLocalStorage('aufgaben', JSON.stringify(this.aufgaben));
  }
}
