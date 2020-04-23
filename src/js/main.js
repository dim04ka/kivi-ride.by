window.jQuery = require('jquery');
var $ = require('jquery');
var jQuery = require('jquery');


(function($){
        $('#pickup-point').focus(function(e) {
            e.preventDefault();

            var $input = $(this);
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                var url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='
                    + position.coords.latitude
                    + ','
                    + position.coords.longitude
                    + '&key=AIzaSyBD-3DkLG3OTtUH9jraldIvZNi1D2oL0Es';

                $.ajax(url, {
                    method: 'GET',
                    success: function(res) {
                        if (res && res.results && res.results[0]) {
                            console.log($input[0]);
                            $($input[0]).val(res.results[0].formatted_address.split(',')[0]);
                        }
                        console.log(res.results[0].formatted_address.split(',')[0]);
                    }
                });

                console.log(position);
            });
        });

     $(function(){
        function counter(){
            var c = 0;

            return function(){
                if (c>5) {
                    return
                }

                $form = $(this).closest('form');
                $wrapper = $form.find('.newfield');
                var div = document.createElement('div');
                div.className = "field";
                div.setAttribute('index',c);
                div.innerHTML = "<input class='field-input' type='text' name='point' placeholder='Куда везем' required><input class='field-input field-input-podezd' name='pointEntrance' type='text' placeholder='Подъезд'> <input class='field-input field-input-kv' type='text' name='pointRoom' placeholder='Кв'><button class='del-btn' type='button'>&times;</button>";

                var delBtn = div.querySelector('.del-btn');
                div.querySelector('.del-btn').addEventListener("click", function() {
                    delBtn.parentElement.remove();
                    c--;
                });

                $wrapper.append(div);
                return c++;
            }
        }

        var counter1 = counter();
        var counter2 = counter();
        var counter3 = counter();

        $('.form-send1 .btn-add').click(function(){
            counter1.call(this)
        })
        $('.form-send2 .btn-add').click(function(){

            counter2.call(this)
        })
        $('.form-send3 .btn-add').click(function(){
            counter3.call(this)
        })
    })



    $('.form').submit(function(e) {
        e.preventDefault();

        var $form = $(this);
        var body = {};

        $form.serializeArray().forEach(function(input) {
            if (body[input.name] != undefined) {
                if (!(body[input.name] instanceof Array)) {
                    body[input.name] = [body[input.name]];
                }

                body[input.name].push(input.value);
            } else {
                body[input.name] = input.value;
            }
        });

        $.ajax('https://taxi0780.herokuapp.com/api/order-mail', {
            type: 'POST',
            data: body,
            success: function() {
                $form[0].reset();
            }
        });

        $('.form input[type="text"]').each(function(inx,el){
            $(el).val('');
        })
        $('.form .field-textarea').each(function(inx,el){
            $(el).val('');
        })
        var $modal = document.querySelector('.modal');
        $modal.style.cssText = " opacity: 1; z-index: 5;"
        setTimeout(function(){
            $modal.style.cssText = " opacity: 0; z-index: -1;"
        },1500)


        $('.newfield').each(function(inx,el){
            while (el.firstChild) {
                el.removeChild(el.firstChild);
            }
        })
    });

    $(".form-send1").submit(function(e){
        e.preventDefault();
        var $form = $(this);

        var car_in = document.getElementById('car_in');
        // console.log(car_in.value)
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

        //console.log(request)

        sendAjaxForm('.work-form', 'mail.php');

        function sendAjaxForm(ajax_form, url) {
          $.ajax({
              url:     url, //url страницы (send.php)
              type:     "POST", //метод отправки
              dataType: "html",
              data: $(ajax_form).serialize(),  // Сеарилизуем объект
              beforeSend: function(data) { // событие до отправки

        		        },
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

        $modal.style.cssText = " opacity: 1; z-index: 5;"

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
