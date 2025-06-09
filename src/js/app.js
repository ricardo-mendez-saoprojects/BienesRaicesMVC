
document.addEventListener('DOMContentLoaded', function() {
    
    eventListener();
    darkMode();
});

function darkMode() {

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    //console.log(prefiereDarkMode.matches);

    // if(prefiereDarkMode) {
    //     document.body.classList.add('dark-mode');
    // }else{
    //     document.body.classList.remove('dark-mode');
    // } USA AUTOMATICAMENTE LA CONFIGURACION DEL SISTEMA MODO OSCURO O CLARO.

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode) {
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });


    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}

function eventListener() {
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenu.addEventListener('click', navegacionResponsive);

    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));

}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    //navegacion.classList.toggle('mostrar')
    
    if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar')
    }
}

function mostrarMetodosContacto(e) {
    const contactoDiv = document.querySelector('#contacto');
        if(e.target.value === 'telefono') {
            contactoDiv.innerHTML =  `
            <label for="telefono"></label>
            <input type="tel" placeholder="Tu Telefono" id="telefono" name="contacto[telefono]">
            
            <p>Elija la fecha y la hora para la llamada</p>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="contacto[fecha]">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">
            `;
        } else {
            contactoDiv.innerHTML = `
            <label for="email"></label>
            <input type="email" placeholder="Tu Email" id="email" name="contacto[email]" required>
            `;
        }
   
}
