import {Injectable} from '@angular/core';
@Injectable({
  providedIn: 'root'
})
export class BooksDataService {

  private _id = 1;

  private books: Book [];

  constructor(private localStorage: LocalStorageManagerService) {
    this.books = this.getBooksFromMemory() || [];

    if(this.getBooksFromMemory()!= null){
       this.id = this.getBooksFromMemory().length;
    }else{
      this.id = 1;
    }
  }

  public addBook(book: Book) {
    book.id = this.id++;
    this.books.push(book)

    this.putBooksInMemory()
  }

  public removeBook(id:number){
    const index = this.books.findIndex(Book => Book.id === id);
    if (index > -1 ){
      this.books.splice(index,1);
      this.putBooksInMemory()
    }
  }

  public getBooks() : Book[]{
    return this.books;
  }

  private getBooksFromMemory(): Book[] {
    return JSON.parse(<string>this.localStorage.getFromLocalStorage('books'))

  }


  private putBooksInMemory() {
    this.localStorage.addToLocalStorage('books', JSON.stringify(this.books));
  }

  public removeBooksFromMemory() {
    this.localStorage.removeFromLocalStorage('books')

  }

  get id(){
    return this._id
  }

  set id(id :number){
    this._id = id;
  }

}
import {Book} from '../books/book'

import {LocalStorageManagerService} from "./local-storage-manager.service";
