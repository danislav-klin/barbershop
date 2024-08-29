@extends('layouts.app')

@section('title', 'home')

@section('content')

    <section class="barbershop">
        <div class="barbershop__text-block">
            <h1 class="text-light">Barbershop Classic</h1>
            <p class="text-light mb-5">запишись на прием</p>
            <a href="{{ route('form.main') }}" class="btn__white1">
                <div class="btn__white1_text">записаться</div>
            </a>
        </div>
    </section>

    <section class="container text-center mt-5 mb-5">
        <h2 class="mt-3 mb-3">В чем наши преимущества</h2>
        <p class="mb-5 text-start ">Барбершоп Classic - это место, где традиции сочетаются с
            современным уходом за внешностью. Наш барбершоп предлагает
            классическую и изысканную атмосферу, где клиенты могут расслабиться
            и насладиться высококачественными услугами по уходу за собой.
            От традиционных стрижек до бритья опасной бритвой, наши опытные
            барберы обеспечивают профессиональный уход с особым вниманием к
            деталям. С фокусом на создание уютной атмосферы, барбершоп Classic
            стремится обеспечить исключительный опыт ухода за собой для каждого клиента.</p>

            <a href="{{ route('form.main') }}" class="btn__black">
                <div class="btn__black_text">записаться</div>
            </a>
    </section>

    <section class="container">
        <hr>
        <h2 class="text-center mb-5">Наши услуги</h2>
        <div class="row row-cols-lg-4 row-cols-md-2 g-3">
            @foreach ($services as $service)
            <div class="col">
                <div class="card" >
                    <img src="/public/img/{{ $service->name_file_image }}" alt="service">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->name_service }}</h5>
                        <p class="card-text">{{ $service->description }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">топ мастера {{ $service->price_of_top_master }} ₽</li>
                            <li class="list-group-item">мастер {{ $service->price_of_master }} ₽</li>
                            <li class="list-group-item">стажер {{ $service->price_of_junior }} ₽</li>
                        </ul>

                    </div>
                    
                </div>
            </div>
                
            @endforeach
        </div>
        


    </section>

    <section class="container-fluid our-barbers pt-5 mt-3">
        <h2 class="text-center mb-5">Наши барберы</h2>
        <div class="our-barbers__slide text-center position-relative">
            <div>
                <div class="card mx-auto" style="width: 70%;">
                    <img src="/public/img/barber_man_1.jpg" alt="barber man 1">
                    <div class="card-body">
                        <h5 class="card-title">Слава Стачук</h5>
                        <p class="card-text">Опытный барбер с более чем 10-летним стажем. Его тонкий вкус и внимание к деталям делают его превосходным в создании классических и современных мужских причесок. Клиенты ценят его профессионализм и дружелюбный подход.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card mx-auto" style="width: 70%;">
                    <img src="/public/img/barber_man_2.jpg" alt="barber man 1">
                    <div class="card-body">
                        <h5 class="card-title">Александр Иванов</h5>
                        <p class="card-text">Творческий барбер с страстью к модным трендам. Он способен создать уникальные образы, которые подчеркивают индивидуальность каждого клиента. Его талант и энтузиазм делают его популярным среди ценителей стильных причесок.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card mx-auto" style="width: 70%;">
                    <img src="/public/img/barber_man_3.jpg" alt="barber man 1">
                    <div class="card-body">
                        <h5 class="card-title">Дмитрий Петров</h5>
                        <p class="card-text">Мастер своего дела, способный создать идеальное бритье и ухоженную бороду. Его внимание к деталям и точные движения делают процесс бритья настоящим ритуалом для его клиентов.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card mx-auto" style="width: 70%;">
                    <img src="/public/img/barber_man_4.jpg" alt="barber man 1">
                    <div class="card-body">
                        <h5 class="card-title">Максим Смирнов</h5>
                        <p class="card-text">Эксперт в классических стрижках и ухаживающих процедурах для волос и кожи головы. Его терпеливость и внимание к желаниям клиентов делают его незаменимым барбером для многих посетителей.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card mx-auto" style="width: 70%;">
                    <img src="/public/img/barber_man_5.jpg" alt="barber man 1">
                    <div class="card-body">
                        <h5 class="card-title">Иван Васильев</h5>
                        <p class="card-text">Молодой и талантливый барбер, который следит за последними тенденциями и техниками в мужских стрижках. Его энергия и стремление к совершенству делают его привлекательным выбором для тех, кто ищет современный и стильный образ.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card mx-auto" style="width: 70%;">
                    <img src="/public/img/barber_man_6.jpg" alt="barber man 1">
                    <div class="card-body">
                        <h5 class="card-title">Сергей Кузнецов</h5>
                        <p class="card-text">Барбер-стилист с особым вниманием к деталям. Его творческий подход и умение создавать индивидуальные образы делают его популярным среди ценителей стиля. Он способен превратить любую стрижку или бритье в уникальное и запоминающееся переживание для каждого клиента.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container">
        <h2 class="text-center mt-5 mb-5">Наши партнеры</h2>
        <div class="row text-center">
            <div class="col">
                <img src="/public/img/apple.png" alt="partner 1">
            </div>
            <div class="col">
                <img src="/public/img/clear.png" alt="partner 1">
            </div>
            <div class="col">
                <img src="/public/img/cibo.png" alt="partner 1">
            </div>
            <div class="col">
                <img src="/public/img/bolshoy.png" alt="partner 1">
            </div>
        </div>
    </section>

    <section class="container reviews">
        <h2 class="text-center mb-5 mt-5">Отзывы</h2>
        <div class="review__slides position-relative">
            <div>
                <div class="review__block">
                    <img class="review__image" src="/public/img/avatar1.jpg" alt="avatar1" width="150px">
                    <h5 class="text-center">Дмитрий Федоров</h5>
                    <p>Я недавно посетил этот барбершоп и остался приятно 
                        удивлен качеством обслуживания. Уютная атмосфера, 
                        профессиональные мастера и внимательный персонал создали отличное впечатление.</p>
                </div>
            </div>
            <div>
                <div class="review__block">
                    <img class="review__image" src="/public/img/avatar2.jpg" alt="avatar1" width="150px">
                    <h5 class="text-center">Александр Козлов</h5>
                    <p>Я с удовольствием поделюсь впечатлениями о посещении барбершопа. Могу с 
                        уверенностью сказать, что это место, где 
                        каждый мужчина может получить идеальный уход за своим образом.</p>
                </div>
            </div>
            <div>
                <div class="review__block">
                    <img class="review__image" src="/public/img/avatar3.jpg" alt="avatar1" width="150px">
                    <h5 class="text-center">Сергей Николаев</h5>
                    <p>Я остался доволен своим посещением и обязательно вернусь снова. 
                        Рекомендую это заведение всем мужчинам, кто хочет выглядеть стильно и ухоженно.</p>
                </div>
            </div>
            <div>
                <div class="review__block">
                    <img class="review__image" src="/public/img/avatar2.jpg" alt="avatar1" width="150px">
                    <h5 class="text-center">Сергей Николаев</h5>
                    <p>Я остался доволен своим посещением и обязательно вернусь снова. 
                        Рекомендую это заведение всем мужчинам, кто хочет выглядеть стильно и ухоженно.</p>
                </div>
            </div>
            

        </div>

    </section>

@endsection
