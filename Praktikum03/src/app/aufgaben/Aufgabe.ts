/* eslint no-underscore-dangle: 0 */
export class Aufgabe {

  public description: string;
  public erledigt: boolean;
  public id: number;

  constructor(id: number,description: string) {
    this.erledigt = false;
    this.description = description;
    this.id = id;
  }

}
