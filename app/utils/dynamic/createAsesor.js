const btnAceptar = document.querySelector('#aceptar')

btnAceptar.addEventListener('click', e =>{
    e.preventDefault()
    // Tu código JavaScript
    // Tu código JavaScript utilizando fetch
    Swal.fire({
        title: '¿Deseas convertirte en asesor? Haz clic en Aceptar para continuar.',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        denyButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Realiza una solicitud fetch a create_account.php
            fetch('../app/controllers/createAsesor.php', {
                method: 'POST'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Hubo un problema al procesar la solicitud.');
                }
                return response.json();
            })
            .then(data => {
                // Redirige a la URL devuelta

                if (!data.url) {
                    return
                }
                window.location.href = data.url;
            })
            .catch(error => {
                Swal.fire('Error', error.message, 'error');
            });
        }
    });


})