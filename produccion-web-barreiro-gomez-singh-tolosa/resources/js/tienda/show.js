import Swal from 'sweetalert2'

let btns = document.querySelectorAll(".btn");
btns.forEach(btn => {
   btn.addEventListener('click', (event)=> {
    Swal.fire(
        '¡Excelente!',
        'Agregaste un ítem a tu carrito.',
        'success'
      )
   });
});