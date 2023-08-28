import { Component } from '@angular/core';
import { OnInit, ViewEncapsulation } from '@angular/core';
import { Renderer2 } from '@angular/core';
import { ViewChild } from '@angular/core';
import { SweetAlertOptions } from 'sweetalert2';
import { SwalComponent } from '@sweetalert2/ngx-sweetalert2';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
  encapsulation: ViewEncapsulation.None,
})

export class LoginComponent implements OnInit {
  @ViewChild('tes')
  public readonly tes!: SwalComponent;

  formModal:any;
  public displayStyle = "modal block";

  public peringatan: SweetAlertOptions = {
    title: 'Pemberitahuan!',
    html: 'Sehubungan dengan rencana pengembangan aplikasi monev kemenkeu mohon kesediaan Bapak/Ibu untuk meluangkan waktu mengisi survey pada tautan berikut <a href="https://forms.office.com/r/J6TrLu8A3h" target="_blank" >Survey Pengembangan Aplikasi Monev Kemenkeu</a>',
    confirmButtonColor: '#59AAF1'
  };

  public informasi: SweetAlertOptions = {
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    icon: 'success',
  title: 'Signed in successfully'
  };
  // "['Oops!', 'This is not implemented yet :/', 'warning']";


  constructor(private renderer: Renderer2) {
    this.renderer.addClass(document.body, 'body-class');
  }

  ngOnInit():void{
    
  }

  // simpleNotification()
  // {
  //   SwalComponent()
  // }

  openModel() {
    const modelDiv = document.getElementById('myModal');
    if(modelDiv!= null) {
      modelDiv.style.display = 'block';
    } 
  }

  CloseModel() {
    const modelDiv = document.getElementById('myModal');
    if(modelDiv!= null) {
      modelDiv.style.display = 'none';
    } 
  }

  onItemChange(event: any) {
    if (event.target.checked === true) {
      (<HTMLInputElement>document.getElementById('password')).setAttribute(
        'type',
        'text'
      );
    } else {
      (<HTMLInputElement>document.getElementById('password')).setAttribute(
        'type',
        'password'
      );
    }
  }
}
