import Swal from 'sweetalert2'

let btns = document.querySelectorAll(".btn-array");
btns.forEach(btn => {
   btn.addEventListener('click', (event)=> {
    Swal.fire(
        '¡Terminado!',
        'Eliminaste el ítem de tu carrito',
        'success'
      )
   });
});
