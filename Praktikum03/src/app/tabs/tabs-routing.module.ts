import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TabsPage } from './tabs.page';

const routes: Routes = [
  {
    path: 'tabs',
    component: TabsPage,
    children: [
      {
        path: 'aufgaben',
        loadChildren: () => import('../aufgaben/aufgaben.module').then(m => m.AufgabenPageModule)
      },
      {
        path: 'erledigt',
        loadChildren: () => import('../erledigt/erledigt.module').then(m => m.ErledigtPageModule)
      },
      {
        path: 'hilfe',
        loadChildren: () => import('../hilfe/hilfe.module').then(m => m.HilfePageModule)
      },
      {
        path: 'einstellungen',
        loadChildren: () => import('../einstellungen/einstellungen.module').then(m => m.EinstellungenPageModule)
      },
      {
        path: '',
        redirectTo: '/tabs/aufgaben',
        pathMatch: 'full'
      }
    ]
  },
  {
    path: '',
    redirectTo: '/tabs/aufgaben',
    pathMatch: 'full'
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
})
export class TabsPageRoutingModule {}
