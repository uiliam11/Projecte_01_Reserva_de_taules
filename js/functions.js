function abrirMapas() {
    // var salon1 =
    // var salon2 = 
    var terraza = document.getElementById('terraza');
}


// Abrir modal
$(document).ready(function() {
    $('.trigger').on('click', function() {
        $('.modal-wrapper').toggleClass('open');
        $('.page-wrapper').toggleClass('blur-it');
        return false;
    });
});

// enviar id mesa


var id_mesa = function() {
    document.getElementById('1').className = 'modalbox resize';
    document.getElementById("tituloResultado").innerHTML = 'Ejercicio 1';
    document.getElementById("contenidoResultado").innerHTML = '<a href="#" onclick="listarMeses()">Los meses del año son...</a>';
}