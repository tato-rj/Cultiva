<div id="menu" class="">
  <nav class="navbar navbar-expand-lg p-0 navbar-light px-5 py-4">
    <a class="navbar-brand" href="{{route('principal')}}">
        <img class="d-none d-sm-block logo-lg" src="{{asset('images/brand/logo-horizontal-light.svg')}}" style="width: 240px">
        <img class="d-sm-none logo-sm" src="{{asset('images/brand/logo-sm-light.svg')}}" style="width: 62px">
    </a>

    @include('layouts.components.hamburger')

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item px-2">
          <a class="nav-link" href="{{route('principal')}}">Principal</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="">No que acreditamos</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="#o-que-fazemos">O que fazemos</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="#servicos">Serviços</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link btn btn-secondary px-3" href="#contato">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
</div>