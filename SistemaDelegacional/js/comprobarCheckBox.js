$(document).ready(function() {

    // Comprobacion usando .prop() (jQuery > 1.6)
    if ($('#servicio1').prop('checked') ) {
        console.log("Servicio seleccionado");
    }

   /*  // Comprobacion usando .attr() (jQuery < 1.6)
    if ($('#servicio1').attr('checked') ) {
        console.log("Checkbox seleccionado");
    }

    // Comprobacion usando funcion .is()
    if ($('#servicio1').is(':checked') ) {
        console.log("Checkbox seleccionado");
    } */

    // Comprobar cuando cambia un checkbox
    $('input[type=checkbox]').on('change', function() {
        if ($(this).is(':checked') ) {
            alert("Servicio " + $(this).prop("id") +  " (" + $(this).val() + ") => Seleccionado");
        } else {
            alert("Servicio " + $(this).prop("id") +  " (" + $(this).val() + ") => Deseleccionado");
        }
    });

    // Comprobar cuando se deseleciona un checkbox
    $('input[type=checkbox]:checked').on('change', function() {
        console.log("Servicio " + $(this).prop("id") +  " (" + $(this).val() + ") => Deseleccionado");
    });


    // Comprobar los checkbox seleccionados
    $('#submit').on('click', function() {

        var serviciosSeleccionados = new Array();

        $('input[type=checkbox]:checked').each(function() {
            serviciosSeleccionados.push($(this).val());
        });

        alert("Servicios seleccionados => " + serviciosSeleccionados);
    });

});