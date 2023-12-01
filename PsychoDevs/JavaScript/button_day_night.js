const btn = document.querySelector('.btn-neon-black');
const img1 = document.querySelector('.fa-solid');
const img2 = document.querySelector('.fa-solid');
let isClicked = false;


btn.addEventListener('click', () => {
    if (!isClicked) {
        // Cambio de imagen nocturno
        img1.classList.add('fa-sun');
        img1.classList.add('fa-moon');
        img2.classList.remove('fa-moon');
        img2.classList.add('fa-sun');
        img2.style.color = '#e5a315';
        // Restaura el color oscuro
        document.documentElement.style.setProperty('--Sombras', '#753194');
        document.documentElement.style.setProperty('--SombraNeon', '#eed48c');
        document.documentElement.style.setProperty('--ColorPrimario', '#ececec');
        document.documentElement.style.setProperty('--ColorTerciario', 'rgb(242, 220, 255)');
        document.documentElement.style.setProperty('--Fondo', ' #1c1c1c');
        document.documentElement.style.setProperty('--FondoBody', '#0f0f0f');
        document.documentElement.style.setProperty('--ColorBoton', '#454444');
        document.documentElement.style.setProperty('--ColorBotonTest', '#1e112d');
        document.documentElement.style.setProperty('--Sombras2', 'rgba(69, 0, 208, 0.75)');
    } else {
        // Cambio de imagen diurno
        img1.classList.remove('fa-moon');
        img1.classList.add('fa-sun');
        img2.classList.remove('fa-sun');
        img2.classList.add('fa-moon');
        // Restaura el color original
        document.documentElement.style.setProperty('--Sombras', 'rgba(69, 0, 208, 0.75)');
        document.documentElement.style.setProperty('--SombraNeon', '#0e0024');
        document.documentElement.style.setProperty('--ColorPrimario', 'rgb(20, 20, 20)')
        document.documentElement.style.setProperty('--ColorTerciario', 'rgb(54, 3, 84)');
        document.documentElement.style.setProperty('--Fondo', ' #f7eff9');
        document.documentElement.style.setProperty('--FondoBody', '#ffffff');
        document.documentElement.style.setProperty('--ColorBoton', 'rgb(237, 214, 255)');
        document.documentElement.style.setProperty('--ColorBotonTest', '#d6fbfb');
        document.documentElement.style.setProperty('--Sombras2', 'rgba(0, 0, 255, 0.75)');
        img2.style.color = '#7d1fa8';
    }
    isClicked = !isClicked;
});

