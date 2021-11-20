import { Component, OnInit } from '@angular/core';
import {ModalDismissReasons, NgbModal} from '@ng-bootstrap/ng-bootstrap';
import {BooksDataService} from "../services/books-data.service";
import {Book} from "../books/book";

@Component({
  selector: 'app-books-modal',
  templateUrl: './books-modal.component.html',
  styleUrls: ['./books-modal.component.css']
})
export class BooksModalComponent implements OnInit {

  closeModal: string = '';

  autor: string = "";
  title: string = "";
  year: number = 0;
  pages: number = 0;
  publisher: string = "";

  constructor(private modalServie : NgbModal,
              private booksService : BooksDataService) { }

  ngOnInit(): void {
  }

  triggerModal(content : any){

    this.modalServie.open(content, {ariaLabelledBy: 'modal-basic-title'}).result.then((res) => {
      this.closeModal = `Closded with: ${res}`;
    },(res) => {
      this.closeModal = `Dismissed ${this.getDismissReason(res)}`;
      });
  }

  private getDismissReason(reason : any) : string{
    if (reason === ModalDismissReasons.ESC) {
      return 'by pressing ESC';
    } else if (reason === ModalDismissReasons.BACKDROP_CLICK) {
      return 'by clicking on a backdrop';
    } else {
      return  `with: ${reason}`;
    }
  }

  public addBook( autor : string, title : string, year : number, pages : number, publisher : string){
    this.booksService.addBook(new Book(autor,title,year,pages,publisher));
    this.clearFields();
  }

  private clearFields(){
    this.autor= "";
    this.title= "";
    this.year= 0;
    this.pages = 0;
    this.publisher= "";
  }

}
