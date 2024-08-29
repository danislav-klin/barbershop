@extends('layouts.app')

@section('title', 'prices')

@section('content')

<h1 class="text-center mt-5 mb-5">Все услуги</h1>

<section class="container">
    <div class="row row-cols-md-2 row-cols-1 g-3">
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
                    <div class="text-center">
                        <a href="{{ route('form.main') }}" class="btn__black">
                            <div class="btn__black_text">записаться</div>
                        </a>
                    </div>
                    

                </div>
                
            </div>
        </div>
            
        @endforeach
    </div>
</section>

@endsection