$(function(){
    offset = get_offset_height()
    console.log(offset)
    $(window).scroll(function(){
        var window_scrolltop = $(this).scrollTop();
        console.log(window_scrolltop);
        $('.parallax').each(function(){
            var obj = $(this);
            // Garante que apenas trabalhemos no elemento que está visível na tela
            if ( window_scrolltop >= obj.position().top - obj.height()
                && window_scrolltop <= obj.position().top + obj.height()) {
                // O atributo data-divisor vai definir a velocidade do efeito
                var divisor = typeof obj.attr('data-divisor') == 'undefined' ? 4 : obj.attr('data-divisor');
                offset.forEach(function(item) {
                    if(window_scrolltop >= item){
                        d_divisor = offset.indexOf(item)
                        $(".nav li").removeClass("active");
                        $(".nav li a[data-divisor="+(d_divisor+1)+"]").parent('li').addClass("active");
                    }
                })
                // Corrige a diferença do primeiro elemento
                if ( obj.is(':first-child') ) {
                    var bg_pos = ( window_scrolltop - obj.position().top ) / divisor;
                } else {
                    var bg_pos = ( window_scrolltop - obj.position().top + ( obj.height() ) ) / divisor ;                   
                }
                // Modifica a posição do bg
                obj.css({
                    'background-position' : '50% -' + bg_pos + 'px'
                });

                // Animação do primeiro texto
                obj.children('.text').css({
                    'bottom' : ( window_scrolltop - obj.position().top ) + 'px'
                });
            }
        });
    });

    $(".nav li a").click(function(){
        data_divisor = $("div[data-divisor="+this.attributes['data-divisor'].value +"]")
        $('html, body').animate({
            scrollTop: parseInt(data_divisor.offset().top - 51)
        }, 1500);
        return false;
    });
}); // jQuery

function get_offset_height(){
    offset = []
    $(".nav li a").each(function(){
        offset.push($("div[data-divisor="+this.attributes['data-divisor'].value +"]").offset().top - 51)
    });
    return offset
}