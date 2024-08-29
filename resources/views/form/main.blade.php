@extends('layouts.app')

@section('title', 'form')

@section('content')

<h1 class="text-center mt-5 mb-5">Форма онлайн-     записи</h1>

<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success w-50 mx-auto" role="alert">
            {{ session('success') }}
        </div>
            
    @endif

    <form action="{{ route('form.record') }}" method="POST" class="form-online">
        @csrf
        @error('date')
            <div class="alert alert-danger mt-4">{{ $message }}</div>
        @enderror
        <div class="form-floating mt-4">
            <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" id="date__picker" placeholder="name@example.com">
            <label for="date__picker">Дата</label>
        </div>
        
        <div class="mt-4 text-center times_radio">

        </div>
        @error('master')
            <div class="alert alert-danger mt-4">{{ $message }}</div>
        @enderror
        <select name="master" class="form-select mt-4 form-select-lg" aria-label="Default select example">
            <option selected>Выберите мастера</option>
            <option value="Слава Стачук">Слава Стачук</option>
            <option value="Александр Иванов">Александр Иванов</option>
            <option value="Дмитрий Петров">Дмитрий Петров</option>
            <option value="Максим Смирнов">Максим Смирнов</option>
            <option value="Иван Васильев">Иван Васильев</option>
            <option value="Сергей Кузнецов">Сергей Кузнецов</option>
        </select>
        @error('service')
            <div class="alert alert-danger mt-4">{{ $message }}</div>
        @enderror
        <select name="service" class="form-select mt-4 form-select-lg" aria-label="Default select example">
            <option selected>выберите услугу</option>
            <option value="КАМУФЛЯЖ ВОЛОС">КАМУФЛЯЖ ВОЛОС</option>
            <option value="МУЖСКИЕ СТРИЖКИ">МУЖСКИЕ СТРИЖКИ</option>
            <option value="ДЕТСКИЕ СТРИЖКИ 5-10 ЛЕТ">ДЕТСКИЕ СТРИЖКИ 5-10 ЛЕТ</option>
            <option value="СТРИЖКА МАШИНКОЙ">СТРИЖКА МАШИНКОЙ</option>
            <option value="КОРРЕКЦИЯ СТРИЖКИ">КОРРЕКЦИЯ СТРИЖКИ</option>
            <option value="ОФОРМЛЕНИЕ БОРОДЫ И УСОВ">ОФОРМЛЕНИЕ БОРОДЫ И УСОВ</option>
            <option value="БРИТЬЕ ГОЛОВЫ">БРИТЬЕ ГОЛОВЫ</option>
            <option value="КАМУФЛЯЖ БОРОДЫ">КАМУФЛЯЖ БОРОДЫ</option>
        </select>
        @error('name')
            <div class="alert alert-danger mt-4">{{ $message }}</div>
        @enderror
        <div class="form-floating mt-4">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Имя</label>
        </div>
        @error('phone')
            <div class="alert alert-danger mt-4">{{ $message }}</div>
        @enderror
        <div class="form-floating mt-4">
            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">телефон</label>
        </div>
        @error('email')
            <div class="alert alert-danger mt-4">{{ $message }}</div>
        @enderror
        <div class="form-floating mt-4">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        @error('comment')
            <div class="alert alert-danger mt-4">{{ $message }}</div>
        @enderror
        <div class="form-floating mt-4">
            <textarea class="form-control @error('comment') is-invalid @enderror" name="comment" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Комментарий</label>
        </div>
        <div class="form-floating mt-4">
            <input type="hidden" name="total_price">
            <input type="text" name="total_price" class="form-control" id="floatingInput" placeholder="name@example.com" disabled>
            <label for="floatingInput">цена</label>
        </div>
        <div class="text-center my-4">
            <button type="submit" class="btn btn-dark">отправить</button>
        </div>
        

    </form> 
</div>

    


@endsection