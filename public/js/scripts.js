$(document).ready(function () {
    // $('.our-barbers__slide').slick({
    //     infinite: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg></button>',
    //     nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg></button>'
    // });
    var slider = $('.our-barbers__slide');

    function setSlidesToShow() {
        var slides = $(window).width() < 1000 ? 1 : 3;

        slider.slick('slickUnfilter');
        slider.slick('slickSetOption', 'slidesToShow', slides, true);
        slider.slick('refresh');
    }

    slider.slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg></button>'
    });

    setSlidesToShow(); // Установить slidesToShow при загрузке страницы

    $(window).resize(function() {
        setSlidesToShow(); // Обновить slidesToShow при изменении размера окна
    });
    $('.review__slides').slick({
        
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        prevArrow: '<button class="slick-prev1" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg></button>',
        nextArrow: '<button class="slick-next1" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg></button>'
    });
    $('.about-us__slides').slick({
        infinite: true,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev2" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg></button>',
        nextArrow: '<button class="slick-next2" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg></button>'

    });
    
    $('.input__time').checkboxradio({
        icon: false
    });

    $('#date__picker').datepicker({
        minDate: 0,
        maxDate: "+20D",
    });  

    $('#date__picker').on('change',  function() {

        $('.times_radio').empty();
        
        var dateBlock = `
        <div>
        <p>УТРО</p>
        <label class="label__time" for="radio-1">9:00</label>
        <input value="9:00" class="input__time" type="radio" name="radio-1" id="radio-1">
        <label class="label__time" for="radio-2">9:30</label>
        <input value="9:30" class="input__time" type="radio" name="radio-1" id="radio-2">
        <label class="label__time" for="radio-3">10:00</label>
        <input value="10:00" class="input__time" type="radio" name="radio-1" id="radio-3">
        <label class="label__time" for="radio-4">10:30</label>
        <input value="10:30" class="input__time" type="radio" name="radio-1" id="radio-4">
        <label class="label__time" for="radio-5">11:00</label>
        <input value="11:00" class="input__time" type="radio" name="radio-1" id="radio-5">
        <label class="label__time" for="radio-6">11:30</label>
        <input value="11:30" class="input__time" type="radio" name="radio-1" id="radio-6">
        <label class="label__time" for="radio-7">12:00</label>
        <input value="12:00" class="input__time" type="radio" name="radio-1" id="radio-7">
    </div>
    <div>
        <p>ДЕНЬ</p>
        <label class="label__time" for="radio-8">12:30</label>
        <input value="12:30" class="input__time" type="radio" name="radio-1" id="radio-8">
        <label class="label__time" for="radio-9">13:00</label>
        <input value="13:00" class="input__time" type="radio" name="radio-1" id="radio-9">
        <label class="label__time" for="radio-10">13:30</label>
        <input value="13:30" class="input__time" type="radio" name="radio-1" id="radio-10">
        <label class="label__time" for="radio-11">14:00</label>
        <input value="14:00" class="input__time" type="radio" name="radio-1" id="radio-11">
        <label class="label__time" for="radio-12">14:30</label>
        <input value="14:30" class="input__time" type="radio" name="radio-1" id="radio-12">
        <label class="label__time" for="radio-13">15:00</label>
        <input value="15:00" class="input__time" type="radio" name="radio-1" id="radio-13">
        <label class="label__time" for="radio-14">15:30</label>
        <input value="15:30" class="input__time" type="radio" name="radio-1" id="radio-14">
        <label class="label__time" for="radio-15">16:00</label>
        <input value="16:00" class="input__time" type="radio" name="radio-1" id="radio-15">
    </div>
    <div>
        <p>ВЕЧЕР</p>
        <label class="label__time" for="radio-16">16:30</label>
        <input value="16:30" class="input__time" type="radio" name="radio-1" id="radio-16">
        <label class="label__time" for="radio-17">17:00</label>
        <input value="17:00" class="input__time" type="radio" name="radio-1" id="radio-17">
        <label class="label__time" for="radio-18">17:30</label>
        <input value="17:30" class="input__time" type="radio" name="radio-1" id="radio-18">
        <label class="label__time" for="radio-19">18:00</label>
        <input value="18:00" class="input__time" type="radio" name="radio-1" id="radio-19">
    </div>
        `;

        
        $('.times_radio').append(dateBlock);

        $('.times_radio').find('.input__time').checkboxradio({ icon: false });
     });

     $('select[name="service"]').change(function() {
        var selectedOption = $(this).children("option:selected").val();

        // Установка соответствующей цены в зависимости от выбранной опции
        switch (selectedOption) {
            case 'КАМУФЛЯЖ ВОЛОС':
                $('input[name="total_price"]').val('1 200 ₽');
                break;
            case 'МУЖСКИЕ СТРИЖКИ':
                $('input[name="total_price"]').val('1 200 ₽');
                break;
            case 'ДЕТСКИЕ СТРИЖКИ 5-10 ЛЕТ':
                $('input[name="total_price"]').val('1 300 ₽');
                break;
            case 'СТРИЖКА МАШИНКОЙ':
                $('input[name="total_price"]').val('1 400 ₽');
                break;
            case 'КОРРЕКЦИЯ СТРИЖКИ':
                $('input[name="total_price"]').val('1 300 ₽');
                break;
            case 'ОФОРМЛЕНИЕ БОРОДЫ И УСОВ':
                $('input[name="total_price"]').val('1 400 ₽');
                break;
            case 'БРИТЬЕ ГОЛОВЫ':
                $('input[name="total_price"]').val('1 300 ₽');
                break;
            case 'КАМУФЛЯЖ БОРОДЫ':
                $('input[name="total_price"]').val('1 350 ₽');
                break;
            
            default:
                $('input[name="total_price"]').val('');
        }
    });

});

