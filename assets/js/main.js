document.addEventListener('DOMContentLoaded', function () {
    console.log('main.js');

    if (document.body.classList.contains('home')) {
        import('./home.js')
            .then(module => {
                module.default();
            })
            .catch(err => console.error('Error al cargar home.js:', err));
    }
});
