var menu = document.getElementById('navegacion');
var altura = menu.offsetTop;

window.addEventListener('scroll', function(){
    if(window.pageYOffset > altura){
       menu.classList.add('fixed');
    }else{
        menu.classList.remove('fixed');
    }
})