import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ErledigtPageRoutingModule } from './erledigt-routing.module';

import { ErledigtPage } from './erledigt.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ErledigtPageRoutingModule
  ],
  declarations: [ErledigtPage]
})
export class ErledigtPageModule {}
