
const form_delete = document.getElementById('form-delete');
const form_submit = document.getElementById('form-submit');

const deleteNews = (event) => {
    event.preventDefault();
    if(confirm('Esta seguro de eliminar esta noticia?')){
        form_delete.submit();
    }
}

form_submit.addEventListener('click', deleteNews);