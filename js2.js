/* document.addEventListener('DOMContentLoaded', function () {
    const toggleModeButton = document.getElementById('toggleModeButton');
    const body = document.body;
    const iconMoon = document.getElementById('iconMoon');
    const iconSun = document.getElementById('iconSun');

    toggleModeButton.addEventListener('click', function () {
        body.classList.toggle('night-mode');

        // Cambiar entre el icono de luna y sol
        iconMoon.style.display = iconMoon.style.display === 'none' ? 'inline' : 'none';
        iconSun.style.display = iconSun.style.display === 'none' ? 'inline' : 'none';
        
        // Cambiar el texto del botón
        const buttonText = body.classList.contains('night-mode') ? 'Modo Claro' : 'Modo Noche';
        toggleModeButton.textContent = `${body.classList.contains('night-mode') ? '☀️' : '🌙'} ${buttonText}`;
    });
}); */

const body = document.body;

function toggleModoNoche() {
    body.classList.toggle("modo-noche");
}

// Ejemplo de cambio de modo al hacer clic en un botón
const botonModo = document.querySelector(".boton-flotante");
botonModo.addEventListener("click", toggleModoNoche);
document.body.appendChild(botonModo);