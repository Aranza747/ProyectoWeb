const divPreguntasFrecuentes = document.getElementById("preguntasFrecuentes")
const añadir = document.getElementById("añadir")
const guardar = document.getElementById("guardarCambios")

var html = "<div id='preguntasFrecuentes' class='card border-primary mb-3 preguntasFrecuentes' style='max-width: 1000px;'></div>"+
            "<div class='card-header'>Header</div>"+
            "<div class='card-body text-primary'><h5 class='card-title'>Primary card title</h5>"+
            "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>"+
            "</div></div>";

añadir.addEventListener("click", (evento) => {
    divPreguntasFrecuentes.innerHTML += html;
})