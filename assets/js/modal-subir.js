$('.contenedor-subir').hide();
$('.capa-negra').hide();

$('.agregar-elemento').on('click', function(){
    
    $('.capa-negra').show();
    $('.contenedor-subir').css({
        display: 'inline-block'//para que se muestre
    })
    $('.contenedor-subir').show();
})

$('nav').on('click', function(){
    
$('.contenedor-modificar').hide();
    
})

$('.capa-negra').on('click', function(){
    
    $('.capa-negra').hide();
    $('.contenedor-subir').hide();
    
})


