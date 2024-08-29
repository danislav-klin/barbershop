@extends('layouts.app')

@section('title', 'contacts')

@section('content')

<h1 class="text-center mt-5 mb-5">Контакты</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="contacts-vidget" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/54/yekaterinburg/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Екатеринбург</a><a href="https://yandex.ru/maps/54/yekaterinburg/house/ulitsa_mamina_sibiryaka_102/YkkYcAZpSkYHQFtsfXRydXVnYA==/?ll=60.622353%2C56.832603&utm_medium=mapframe&utm_source=maps&z=14.13" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Мамина-Сибиряка, 102 — Яндекс Карты</a><iframe class="vidget" src="https://yandex.ru/map-widget/v1/?ll=60.622353%2C56.832603&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjA4NjA2NxJ-0KDQvtGB0YHQuNGPLCDQodCy0LXRgNC00LvQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCV0LrQsNGC0LXRgNC40L3QsdGD0YDQsywg0YPQu9C40YbQsCDQnNCw0LzQuNC90LAt0KHQuNCx0LjRgNGP0LrQsCwgMTAyIgoNM3pyQhX7VmNC&z=14.13"  frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>

        <div class="col">
            <h3 class="text-center">Хотите связаться с нами?</h3>
            @if (session()->has('success'))
                <div class="alert alert-success w-50 mx-auto" role="alert">
                    {{ session('success') }}
                </div>
            
            @endif
            <form action="{{ route('form.contacts') }}" method="POST" class="form__contacts">
                @csrf
                @error('name')
                <div class="alert alert-danger mt-4">{{ $message }}</div>
                @enderror
                <div class="form-floating mb-3 mt-3">
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Имя</label>
                </div>
                @error('email')
                <div class="alert alert-danger mt-4">{{ $message }}</div>
                @enderror
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                @error('phone')
                <div class="alert alert-danger mt-4">{{ $message }}</div>
                @enderror
                <div class="form-floating mb-3">
                    <input name="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Номер</label>
                </div>
                @error('message')
                <div class="alert alert-danger mt-4">{{ $message }}</div>
                @enderror
                <div class="form-floating">
                    <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Сообщение</label>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-dark">отправить</button>
                </div>
                
                  
            </form>
            
        </div>
    </div>
    
</div>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-sm-2 ">
        <div class="col align-self-center ">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
            </svg> +7 000 000 00-00</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
            </svg> +7 000 000 00-00</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
            </svg> barber-classic@mail.ru</p>
            <p>620075, Екатеринбург, Мамина-Сибиряка 102</p>
        </div>
        <div class="col">
            <h5 class="text-center">Рабочее время:</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">понедельник 8:00 до 20:00</li>
                <li class="list-group-item">вторник 8:00 до 20:00</li>
                <li class="list-group-item">среда 8:00 до 20:00</li>
                <li class="list-group-item">четверг 8:00 до 20:00</li>
                <li class="list-group-item">пятница 8:00 до 20:00</li>
                <li class="list-group-item">суббота 10:00 до 18:00</li>
                <li class="list-group-item">воскресенье 10:00 до 18:00</li>
              </ul>
            
        </div>
         
    </div>
    

</div>



@endsection