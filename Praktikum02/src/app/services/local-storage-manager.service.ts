import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class LocalStorageManagerService {

  constructor() { }

  addToLocalStorage(key: string, data: string){
    localStorage.setItem(key, data);
  }

  getFromLocalStorage(key: string){
    return localStorage.getItem(key);
  }

  clearLocalStorage(){
    localStorage.clear();
  }

  removeFromLocalStorage(key:string){
    localStorage.removeItem(key);
  }

}
