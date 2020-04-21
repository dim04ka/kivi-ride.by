window.jQuery = require('jquery');
var $ = require('jquery');
var jQuery = require('jquery');

 //auto complite adress


(function($){


    $(".form-send1").submit(function(e){
        e.preventDefault();
        var $form = $(this);

        var car_in = document.getElementById('car_in');
        console.log(car_in.value)
    })
    
    // вкладки на главной
    function formtabs() {
        $('.tablinks').click(function(el){
            var valTabs = $(this).val()
            $('.tablinks').each(function(ind,el) {
                $(el).removeClass('active')
            })
            $(this).addClass('active')

            $('.main-dev').each(function(el){
                $(this).removeClass('active');
            })

            $('.main-dev').each(function(el) {
                
                if ($(this).hasClass(valTabs)) {
                    $(this).addClass('active');
                }  
            })
        });
    }
    formtabs();

    

    //tarif-item-title slideShow/Hide
    function tarifTabs(){
        $('.tarif-item-title').click(function(){
            $(this).children().toggleClass('active')
            //$(this).next().toggleClass('active')
            $(this).next().slideToggle('active')
        })
    }
    tarifTabs();


    //menu btn
    $('.header-btn').click(function(){
        $(this).toggleClass('active');
        $('.header-ul').toggleClass('active');
    })

    //slider
    function slider(classNameItems, speed) {
        var active = 0;
        var $items = document.querySelectorAll(classNameItems);
        var slideInterval = setInterval(nextSlide,speed);

        function nextSlide() {
            $items[active].className = 'main-downBlock-text';
            active = (active+1)%$items.length;
            $items[active].className = 'main-downBlock-text active';
        }
    }

    if($('.main-downBlock .main-downBlock-text').length != 0 ) {
        slider('.main-downBlock .main-downBlock-text',2000)
    }
    


    $('.work-form').submit(function(e){
        e.preventDefault();

        var $inputs = document.querySelectorAll('.work-input');
        var $modal = document.querySelector('.modal');

        var name = document.querySelector('.work-input[name=name]').value
        var phone = document.querySelector('.work-input[name=phone]').value
        //var work = document.querySelector('.work-input[name=work]').value
        var comment = document.querySelector('.work-input[name=comment]').value    
        var request = {
            name: name,
            phone: phone,
            comment: comment
        }

        //console.log(request)

        sendAjaxForm('.work-form', 'mail.php');
      
        function sendAjaxForm(ajax_form, url) {
          $.ajax({
              url:     url, //url страницы (send.php)
              type:     "POST", //метод отправки
              dataType: "html",
              data: $(ajax_form).serialize(),  // Сеарилизуем объект
              success: function(response) { //Данные отправлены успешно
                //result = $.parseJSON(response);
                console.log(response);
            },
            error: function(response) { // Данные не отправлены
              console.log('Ошибка. Данные не отправлены.');
            }
         });
        }

        $inputs.forEach(function(el){
            el.value = ''
        })

        $modal.style.cssText = " opacity: 1; z-index: 1;"

        setTimeout(function(){
            $modal.style.cssText = " opacity: 0; z-index: -1;"
        },1500)
     })





    // $('form').submit(function(e){
    //     e.preventDefault();

    //     sendAjaxForm('form', 'send2.php');
      
    //     function sendAjaxForm(ajax_form, url) {
    //       $.ajax({
    //           url:     url, //url страницы (send.php)
    //           type:     "POST", //метод отправки
    //           dataType: "html",
    //           data: $(ajax_form).serialize(),  // Сеарилизуем объект
    //           beforeSend: function(data) { // событие до отправки
 
    //     		        },
    //           success: function(response) { //Данные отправлены успешно
    //             result = $.parseJSON(response);
    //             console.log(result);
    //             $("form").trigger("reset");
    //             $('.content__input').css('display','none')
    //             $('.reviews').css('display','block')

    //             setTimeout( function(){
    //                 $('.reviews').css('display','none')
    //                 $('.content__input').css('display','block')
    //                 $('.modal').css('display','none')
    //             },1500)
            
    //         },
    //         error: function(response) { // Данные не отправлены
    //           console.log('Ошибка. Данные не отправлены.');
    //         }
    //      });
    //     }


    // })
 

})(jQuery);
