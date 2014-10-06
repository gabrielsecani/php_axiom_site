$(document).ready(function(){
    html_height = $("html").height() - 70;
    $("footer").css('position', 'absolute').css('top', html_height)
});

$(function(){
    offset = get_offset_height()
    $(window).scroll(function(){
        if(is_mobile())
            return false;
        var window_scrolltop = $(this).scrollTop();
        $('.parallax').each(function(){
            var obj = $(this);
            // Garante que apenas trabalhemos no elemento que está visível na tela
            if ( window_scrolltop >= obj.position().top - obj.height()
                && window_scrolltop <= obj.position().top + obj.height()) {
                // O atributo data-divisor vai definir a velocidade do efeito
                var divisor = typeof obj.attr('data-divisor') == 'undefined' ? 4 : obj.attr('data-divisor');
                offset.forEach(function(item) {
                    if(window_scrolltop + 250 >= item){
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
        $(".navbar-collapse").removeClass("in")
        data_divisor = $("div[data-divisor="+this.attributes['data-divisor'].value +"]")
        $('html, body').animate({
            scrollTop: parseInt(data_divisor.offset().top - 81)
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

function is_mobile(){
var a = navigator.userAgent||navigator.vendor||window.opera;
    return /android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile|o2|opera m(ob|in)i|palm( os)?|p(ixi|re)\/|plucker|pocket|psp|smartphone|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce; (iemobile|ppc)|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a);
    
}