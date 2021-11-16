export class Book {

  constructor(private _id: number,
              private _autor: string,
              private _title: string,
              private _year: number,
              private _pages: number,
              private _publisher: string) {

  }


  get id(): number {
    return this._id;
  }

  set id(value: number) {
    this._id = value;
  }

  get autor(): string {
    return this._autor;
  }

  set autor(value: string) {
    this._autor = value;
  }

  get pages(): number {
    return this._pages;
  }

  set pages(value: number) {
    this._pages = value;
  }

  get publisher(): string {
    return this._publisher;
  }

  set publisher(value: string) {
    this._publisher = value;
  }

  get year(): number {
    return this._year;
  }

  set year(value: number) {
    this._year = value;
  }

  get title(): string {
    return this._title;
  }
}
