window.jQuery = require('jquery');
var $ = require('jquery');
var jQuery = require('jquery');

function decimalAdjust(type, value, exp) {
    // Если степень не определена, либо равна нулю...
    if (typeof exp === 'undefined' || +exp === 0) {
        return Math[type](value);
    }
    value = +value;
    exp = +exp;
    // Если значение не является числом, либо степень не является целым числом...
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
        return NaN;
    }
    // Сдвиг разрядов
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    // Обратный сдвиг
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
}

// Десятичное округление к ближайшему
if (!Math.round10) {
    Math.round10 = function(value, exp) {
        return decimalAdjust('round', value, exp);
    };
}
// Десятичное округление вниз
if (!Math.floor10) {
    Math.floor10 = function(value, exp) {
        return decimalAdjust('floor', value, exp);
    };
}
// Десятичное округление вверх
if (!Math.ceil10) {
    Math.ceil10 = function(value, exp) {
        return decimalAdjust('ceil', value, exp);
    };
}

(function($){
        $('.pickup-point').focus(function(e) {
            e.preventDefault();

            var $input = $(this);
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                var url = 'https://nominatim.openstreetmap.org/reverse?lat='
                    + geolocation.lat
                    + '&lon='
                    + geolocation.lng
                    + '&osm_type=N';

                $.ajax(url, {
                    method: 'GET',
                    success: function(res) {
                        var oSerializer = new XMLSerializer();
                        var sXML = oSerializer.serializeToString(res);
                        var domparser = new DOMParser();
                        var doc = domparser.parseFromString(sXML, "application/xml");
                        var building = doc.getElementsByTagName('addressparts')[0].getElementsByTagName('house_number')[0].innerHTML;
                        var street = doc.getElementsByTagName('addressparts')[0].getElementsByTagName('road')[0].innerHTML;
                        $($input[0]).val(street + ' ' + building);
                    }
                });
                }, function(positionError) {
                console.log(positionError);
            }, {
                enableHighAccuracy: true
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

                var $modal = document.querySelector('.modal');

                $modal.style.cssText = " opacity: 1; z-index: 5;"

                setTimeout(function() {
                    $modal.style.cssText = " opacity: 0; z-index: -1;"
                }, 1500)
            }
        });

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

        var body = {};
        var $form = $(this);

        $form.serializeArray().forEach(function(input) {
            body[input.name] = input.value;
        });


        $.ajax('https://taxi0780.herokuapp.com/api/work-mail', {
            type:     "POST",
            data: body,
            success: function() {
                $form[0].reset();

                var $modal = document.querySelector('.modal');

                $modal.style.cssText = " opacity: 1; z-index: 5;"

                setTimeout(function() {
                    $modal.style.cssText = " opacity: 0; z-index: -1;"
                }, 1500)
            }
        });
    });





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
