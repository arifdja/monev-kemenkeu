import { Component } from '@angular/core';

@Component({
  selector: 'app-login-modal',
  templateUrl: './modal.component.html',
  styleUrls: ['./modal.component.css']
})
export class ModalComponent {

  closeModal(){
    const modalDiv = document.getElementById('modal-lg');
    if(modalDiv!=null)
    {
      modalDiv.style.display = 'none';
    }
  }
}
