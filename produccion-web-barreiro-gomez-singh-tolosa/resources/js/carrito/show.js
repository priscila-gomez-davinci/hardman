import Swal from 'sweetalert2'

let btns = document.querySelectorAll(".btn");
btns.forEach(btn => {
   btn.addEventListener('click', (event)=> {
    Swal.fire(
        '¡Terminado!',
        'Eliminaste el ítem de tu carrito',
        'success'
      )
   });
});


const form_submit = document.getElementById('form-submit');

const deleteNews = (event) => {
    event.preventDefault();
    Swal.fire({
        title: '¿Está seguro de eliminar el contenido del carrito?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Si',
        denyButtonText: `No`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire('Elimina!', '', 'success')
          form_delete.submit();
        } else if (result.isDenied) {
          Swal.fire('Acción cancelada', '', 'info')
        }
      })
}

form_submit.addEventListener('click', deleteNews);