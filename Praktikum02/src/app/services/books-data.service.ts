import {Injectable} from '@angular/core';
import {Book} from '../books/book'
import {LocalStorageManagerService} from "./local-storage-manager.service";

@Injectable({
  providedIn: 'root'
})
export class BooksDataService {

  private books: Book [];

  constructor(private localStorage: LocalStorageManagerService) {
    this.books = this.getBooksFromMemory() || [];

  }

  public addBook(book: Book) {
    this.books.push(book)
    this.putBooksInMemory()
  }

  public removeBook(id:number){
    const index = this.books.findIndex(Book => Book.id === id);
    if (index > -1 ){
      this.books.splice(index,1);
    }
  }

  public getBooks() {
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
}
