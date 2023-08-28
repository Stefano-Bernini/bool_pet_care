import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


//costante di tutti i pulsanti di cancellazione
const deleteSubmitButton = document.querySelectorAll('.delete-animal-form button[type="submit"]');

//ciclo di tutti i pulsanti di cancellazione
deleteSubmitButton.forEach((button) =>{

    //tutti i pulsanti attendono l'evento click
    button.addEventListener('click', (event) => {

        //no sottomissione form
        event.preventDefault();

        //recupero dell'html della modale
        const modal = document.getElementById('confirmAnimalDelete');

        //istanza classe modal di bootstrap
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        //recupero del pulsante di cancellazione
        const buttonDelete = document.querySelector('.confirm-delete-button');

        //in attesa dell'evento click
        buttonDelete.addEventListener('click', ()=> {

            //sottomissione form
            button.parentElement.submit();
        });
    })
});