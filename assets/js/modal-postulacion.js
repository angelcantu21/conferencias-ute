$('.contenedor-subir').hide();
$('.capa-negra').hide();

$('.contenedor-subir').animate({
    marginLeft: '360',
    margin: '-400'
})

$('.agregar-elemento').on('click', function(){
    
    $('.capa-negra').show();
    $('.contenedor-subir').css({
        display: 'block'//para que se muestre
    })
    $('.contenedor-subir').animate({
    marginLeft: '360',
    margin: '0',
})
    $('.contenedor-subir').show();
})

$('.capa-negra').on('click', function(){
    
    $('.capa-negra').hide();
    $('.contenedor-subir').animate({
    marginLeft: '360',
    margin: '-400',
})
    $('.contenedor-subir').hide();
    
})