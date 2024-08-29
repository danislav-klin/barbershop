@extends('layouts.app')

@section('title', 'about us')

@section('content')

<section class="about-us">
    <h1 class="about-us__title">Кто мы</h1>
</section>

<section>
    <nav >
        <div class="nav justify-content-center bg-dark" id="nav-tab" role="tablist">
          <button class="nav-link link-light m-3 active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">наши ценности</button>
          <button class="nav-link link-light m-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">история создания</button>
          <button class="nav-link link-light m-3" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">достижения</button>
          
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="about-us__slides">
                @include('componetnts.panel_1')
            </div>

        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            @include('componetnts.panel_2')

        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="container text-center">
                <div class="row mt-5 mb-5">
                    <div class="col">КОЛИЧЕСТВО БАРБЕРОВ СЕТИ КОНТОРА</div>
                    <div class="col">27</div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">КЛИЕНТОВ СТАНОВЯТСЯ ПОСТОЯННЫМИ</div>
                    <div class="col">79%</div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">ДОВЕРЯЮТ НАМ СВОИХ МАЛЫШЕЙ</div>
                    <div class="col">53%</div>
                </div>
                <div class="row">
                    <div class="col">ПРИХОДЯТ ПО РЕКОМЕНДАЦИИ ДРУГА</div>
                    <div class="col">37%</div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">ВОЗРАСТ САМОГО МАЛЕНЬКОГО КЛИЕНТА</div>
                    <div class="col">8 месяцев</div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">СРЕДНИЙ ЧЕК</div>
                    <div class="col">1000 ₽</div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">КОЛИЧЕСТВО ТОЧЕК СЕТИ</div>
                    <div class="col">1</div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">КОЛИЧЕСТВО ГОРОДОВ ПРИСУТСТВИЯ</div>
                    <div class="col">1</div>
                </div>
            </div>
            

        </div>
        
      </div>
      

</section>

@endsection