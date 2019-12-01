fechar();
function fechar(anim){
    $(".item p").hide(anim);
}

function abrir(num){
    teste = $("#item"+num+" p").is(":hidden");
    fechar("slow");
    if(teste){
        $("#item"+num+" p").show("slow");
    }
    
    $('html, body').animate({
        scrollTop: $("#item"+num).offset().top
    }, 600); 

}

function search(){
    busca = $('#search').val();
    
}