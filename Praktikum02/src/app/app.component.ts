import {Component} from '@angular/core';
import {Book} from "./book";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {


  id: number = 0;
  autor: string = "";
  title: string = "";
  year: number = 0;
  pages: number = 0;
  publisher: string = "";

  books : Book[] = [];

  constructor() {
  }

  public addBook(){
    this.books.push(new Book(this.id,this.autor,this.title,this.year,this.pages,this.publisher));

  }
}
