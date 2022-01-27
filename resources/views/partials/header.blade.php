<header class="container">
  <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link @if (Route::currentRouteName() === 'home') 'active' @endif" aria-current="page" href="{{ route('home') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (Route::currentRouteName() === 'fumettis.index') 'active' @endif" href="{{ route('fumettis.index') }}">Lista Fumetti</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
</ul>
</header>