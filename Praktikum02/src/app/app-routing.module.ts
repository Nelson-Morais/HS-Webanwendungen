import {NgModule} from '@angular/core';
import {RouterModule, Routes} from '@angular/router';
import {HomeComponent} from "./home/home.component";
import {BooksComponent} from "./books/books.component";
import {BooksModalComponent} from "./books-modal/books-modal.component";

const routes: Routes = [
  {path: 'welcome', component: HomeComponent},
  {path: 'Books', component: BooksComponent},
  {path: 'Modal', component: BooksModalComponent},
  {path: '', redirectTo: '/welcome', pathMatch: 'full'},
  {path: '**', redirectTo: '/welcome', pathMatch: 'full'},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {
}
