let opcion = document.querySelector('#opcion-btn');
let biesis = document.querySelector('.biesis');
opcion.onclick = () => {
    opcion.classList.toggle('cap-nu');
    biesis.classList.toggle('activa');
}
function videoslider(links) {
    document.querySelector(".slider").src = links;
}

let op8 = document.querySelector('.acceso1');
let op9 = document.querySelector('.ventanamodal');
op8.onclick = () => {
    op9.classList.toggle('ventanamodal13');
}
