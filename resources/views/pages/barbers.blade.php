@extends('layouts.app')

@section('title', 'barbers')

@section('content')

<div class="barbers">
    <h1 class="barbers__title">Барберы</h1>
</div>

<section class="container mt-5">
    <div class="row row-cols-md-2 row-cols-1 g-4">
        <div class="col">
            <div class="card mx-auto" style="width: 70%">
                <img src="/public/img/barber_man_1.jpg" alt="barber man 1">
                <div class="card-body">
                    <h5 class="card-title">Слава Стачук</h5>
                    <p class="card-text">Опытный барбер с более чем 10-летним стажем. Его тонкий вкус и внимание к деталям делают его превосходным в создании классических и современных мужских причесок. Клиенты ценят его профессионализм и дружелюбный подход.</p>
                    <div class="text-center mt-4 mb-4">
                        <a href="{{ route('form.main') }}" class="btn__black">
                            <div class="btn__black_text">записаться</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card mx-auto" style="width: 70%">
                <img src="/public/img/barber_man_2.jpg" alt="barber man 1">
                <div class="card-body">
                    <h5 class="card-title">Александр Иванов</h5>
                    <p class="card-text">Творческий барбер с страстью к модным трендам. Он способен создать уникальные образы, которые подчеркивают индивидуальность каждого клиента. Его талант и энтузиазм делают его популярным среди ценителей стильных причесок.</p>
                    <div class="text-center mt-4 mb-4">
                        <a href="{{ route('form.main') }}" class="btn__black">
                            <div class="btn__black_text">записаться</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mx-auto" style="width: 70%">
                <img src="/public/img/barber_man_3.jpg" alt="barber man 1">
                <div class="card-body">
                    <h5 class="card-title">Дмитрий Петров</h5>
                    <p class="card-text">Мастер своего дела, способный создать идеальное бритье и ухоженную бороду. Его внимание к деталям и точные движения делают процесс бритья настоящим ритуалом для его клиентов.</p>
                    <div class="text-center mt-4 mb-4">
                        <a href="{{ route('form.main') }}" class="btn__black">
                            <div class="btn__black_text">записаться</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mx-auto" style="width: 70%">
                <img src="/public/img/barber_man_4.jpg" alt="barber man 1">
                <div class="card-body">
                    <h5 class="card-title">Максим Смирнов</h5>
                    <p class="card-text">Эксперт в классических стрижках и ухаживающих процедурах для волос и кожи головы. Его терпеливость и внимание к желаниям клиентов делают его незаменимым барбером для многих посетителей.</p>
                    <div class="text-center mt-4 mb-4">
                        <a href="{{ route('form.main') }}" class="btn__black">
                            <div class="btn__black_text">записаться</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mx-auto" style="width: 70%">
                <img src="/public/img/barber_man_5.jpg" alt="barber man 1">
                <div class="card-body">
                    <h5 class="card-title">Иван Васильев</h5>
                    <p class="card-text">Молодой и талантливый барбер, который следит за последними тенденциями и техниками в мужских стрижках. Его энергия и стремление к совершенству делают его привлекательным выбором для тех, кто ищет современный и стильный образ.</p>
                    <div class="text-center mt-4 mb-4">
                        <a href="{{ route('form.main') }}" class="btn__black">
                            <div class="btn__black_text">записаться</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mx-auto" style="width: 70%">
                <img src="/public/img/barber_man_6.jpg" alt="barber man 1">
                <div class="card-body">
                    <h5 class="card-title">Сергей Кузнецов</h5>
                    <p class="card-text">Барбер-стилист с особым вниманием к деталям. Его творческий подход и умение создавать индивидуальные образы делают его популярным среди ценителей стиля. Он способен превратить любую стрижку или бритье в уникальное и запоминающееся переживание для каждого клиента.</p>
                    <div class="text-center mt-4 mb-4">
                        <a href="{{ route('form.main') }}" class="btn__black">
                            <div class="btn__black_text">записаться</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection