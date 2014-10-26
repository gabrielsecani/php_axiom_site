$(function(){
    //Parallex
    offset = get_offset_height()
    $('div.parallax').each(function(){
        var $obj = $(this);
        $(window).scroll(function() {
            if(is_mobile())
                return false;
            var window_scrolltop = $(this).scrollTop();
            var divisor = $obj.data('divisor');
            offset.forEach(function(item) {
                if(window_scrolltop >= item){
                    d_divisor = offset.indexOf(item)
                    console.log(window_scrolltop)

                    if(window_scrolltop > -51 && window_scrolltop < 265 ) {
                        d_divisor = 0;    
                    } 
                    $(".nav:first li").removeClass("active");
                    $(".go-section[data-divisor="+(d_divisor+1)+"]").parent('li').addClass("active");
                }
            })
        }); 
   });

    $(window).scroll(function() { 
        $('#contato').hide(250);
	});
    //Go-section
    $(".go-section").click(function(){
        $(".navbar-collapse").removeClass("in");
        data_divisor = $("div[data-divisor="+this.attributes['data-divisor'].value +"]");
        $('html, body').animate({
            scrollTop: parseInt(data_divisor.offset().top - 60)
        }, 1500);
        return false;
    });

    // Contato
    $("#abreContato").click(function(){
        $('#contato').toggle();
        return false;
    });

    // Portfolio Black&White
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true, // default true
        // set the path to BnWWorker.js for a superfast implementation
        webworkerPath : false,
        // to invert the hover effect
        invertHoverEffect: false,
        // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
        intensity:1,
        speed: { //this property could also be just speed: value for both fadeIn and fadeOut
            fadeIn: 200, // 200ms for fadeIn animations
            fadeOut: 800 // 800ms for fadeOut animations
        },
        onImageReady:function(img) {
            // this callback gets executed anytime an image is converted
        }
    });
    $('.bwWrapper h2').hide();
    $('.bwWrapper').hover(
        function(){
            $(this).find('h2').show();
        },
        function(){
            $('.bwWrapper h2').hide();
        }

    );
	//check if is mobile
    function is_mobile(){
        var a = navigator.userAgent||navigator.vendor||window.opera;
        return /android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile|o2|opera m(ob|in)i|palm( os)?|p(ixi|re)\/|plucker|pocket|psp|smartphone|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce; (iemobile|ppc)|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a);
    }

    //send form contact
    $("#form-contact .btn").click(function(){
        form = $("#form-contact")
        name = form.find("#name").val()
        email = form.find("#email").val()
        subject = form.find("#subject").val()
        body = form.find("#body").val()
        data = {
           name : name,
           email : email,
           subject : subject,
           body : body
        }
        $.ajax({
            url: 'etc/scripts/enviarContato.php',
            data: data,
            type: 'POST',
            success: function(data){
                data = data.split("|")
                $('.bs-example-modal-sm .modal-content').html(data[0])
                $('.bs-example-modal-sm').modal()
                if(data[1] == 2) {
                     $("#contato").toggle()
                }
            }, 
            beforeSend: function() {
                $('#facebookG').toggle();
            }
        }).done(function(){
            $("#facebookG").toggle();
        });
    });
    function get_offset_height(){
        offset = []
        $(".go-section").each(function(){
            offset.push(parseInt($("div[data-divisor="+this.attributes['data-divisor'].value +"] .content").offset().top - 51))
        });
        return offset
    }
}); // jQuery
