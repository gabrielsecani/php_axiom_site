$(function(){
    $(window).scroll(function(){
        var window_scrolltop = $(this).scrollTop();
        $('.parallax').each(function(){
            var obj = $(this);

            // Garante que apenas trabalhemos no elemento que está visível na tela
            if ( window_scrolltop >= obj.position().top - obj.height()
                && window_scrolltop <= obj.position().top + obj.height()) {

                // O atributo data-divisor vai definir a velocidade do efeito
                var divisor = typeof obj.attr('data-divisor') == 'undefined' ? 4 : obj.attr('data-divisor');

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
        $(".nav li").removeClass("active");
        $(this).parent("li").addClass("active");
        data_divisor = $("div[data-divisor="+this.attributes['data-divisor'].value +"]")
        $('html, body').animate({
            scrollTop: parseInt(data_divisor.offset().top)
        }, 1000);
        return false;
    });
}); // jQuery