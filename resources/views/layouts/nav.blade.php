<nav class="navbar navbar-expand-md bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="/public/img/logobarber-white.png" alt="logo" width="60px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a class="nav-link link-light" href="{{ route('index') }}">главная</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link link-light" href="{{ route('about') }}">о нас</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link link-light" href="{{ route('prices') }}">услуги</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link link-light" href="{{ route('barbers') }}">наши барберы</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link link-light" href="{{ route('blog') }}">блог</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link link-light" href="{{ route('contacts') }}">контакты</a>
          </li>
          
          
        </ul>
        
      </div>
    </div>
  </nav>