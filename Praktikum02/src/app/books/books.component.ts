import {Component} from '@angular/core';
import {Book} from "./book";
import {BooksDataService} from "../services/books-data.service";

@Component({
  selector: 'app-books',
  templateUrl: './books.component.html',
  styleUrls: ['./books.component.css']
})
export class BooksComponent {

  id: number = 0;
  autor: string = "";
  title: string = "";
  year: number = 0;
  pages: number = 0;
  publisher: string = "";


  constructor(private bookService :BooksDataService) {
  }



  public removeBook(id:number){

    this.bookService.removeBook(id);

  }


  public getBooksFromService() : Book[]{
    return this.bookService.getBooks();

  }

  public deleteList(){
    this.bookService.removeBooksFromMemory();
    location.reload()
  }


}
