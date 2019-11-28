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
        scrollTop: (Math.floor((num-1)/4) * 200) + 20
    }, 500);
}

function search(){
    busca = $('#search').val();
    
}