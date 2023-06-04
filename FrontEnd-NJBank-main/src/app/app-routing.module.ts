import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AccountAddComponent } from './account-add/account-add.component';
import { AccountsComponent } from './accounts/accounts.component';
import { TreatmentAddComponent } from './treatment-add/treatment-add.component';
import { TreatmentComponent } from './treatment/treatment.component';
import { AuthGuard } from './auth.guard';
import { LoginComponent } from './login/login.component';
import { UserAddComponent } from './user-add/user-add.component';
import { UserUpdateComponent } from './user-update/user-update.component';
import { UsersComponent } from './users/users.component';
import { RoleGuard } from './role.guard';

const routes: Routes = [
  { path: 'login', component: LoginComponent },
  { path: 'users', component: UsersComponent, canActivate: [AuthGuard, RoleGuard] },
  { path: 'accounts', component: AccountsComponent, canActivate: [AuthGuard, RoleGuard] },
  { path: 'account-add', component: AccountAddComponent, canActivate: [AuthGuard, RoleGuard] },
  { path: 'treatment', component: TreatmentComponent, canActivate: [AuthGuard] },
  { path: 'treatment-add', component: TreatmentAddComponent, canActivate: [AuthGuard] },
  { path: 'user-add', component: UserAddComponent, canActivate: [AuthGuard, RoleGuard] },
  { path: 'user-update/:id', component: UserUpdateComponent, canActivate: [AuthGuard, RoleGuard] },
  { path: '', redirectTo: '/login', pathMatch: 'full' },
  { path: '**', redirectTo: '/login', pathMatch: 'full' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
