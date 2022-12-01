import Swal from 'sweetalert2'

const form_delete = document.getElementById('form-delete');
const form_submit = document.getElementById('form-submit');

const deleteProducto = (event) => {
    event.preventDefault();

    Swal.fire({
        title: '¿Está seguro de eliminar este producto?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Si',
        denyButtonText: `No`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire('Elemento eliminado!', '', 'success')
          form_delete.submit();
        } else if (result.isDenied) {
          Swal.fire('Acción cancelada', '', 'info')
        }
      })
}

form_submit.addEventListener('click', deleteProducto);

