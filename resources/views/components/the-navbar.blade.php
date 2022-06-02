<nav class="navbar navbar-expand-md bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand p-0" href="{{route("home")}}">
      <img src="{{asset('images/logo.svg')}}" alt="biologica disinfestazioni logo" height="54">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto text-uppercase">
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : null }}" aria-current="page"
             href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{str_starts_with(Route::currentRouteName(), "services") ? 'active' : null }}"
             id="navbarDropdown" role="button"
             data-bs-toggle="dropdown"
             aria-expanded="false">
            Servizi
          </a>
          <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
            @foreach($menuEntries as $entry)
              <li>
                <a class="dropdown-item {{ key_exists("service", Route::current()->parameters) && Route::current()->parameters["service"] === $entry->slug ? 'active': null }}"
                   href="{{route('services.details', $entry->slug)}}">{{$entry->title}}</a>
              </li>
            @endforeach
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{route('services.index')}}">Tutti i servizi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName() === 'contacts.index' ? 'active' : null }}"
             href="{{route('contacts.index')}}">Contatti</a>
        </li>

        @auth
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-bs-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>

            <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item {{Route::currentRouteName() === 'admin' ? 'active' : null }}"
                   href="{{route('admin.home')}}">Home</a>
              </li>
              {{-- Servizi --}}
              <li>
                <a class="dropdown-item {{Route::currentRouteName() === 'admin.services.index' ? 'active' : null }}"
                   href="{{route('admin.services.index')}}">Gestione Servizi</a>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <form action="{{ route('logout') }}" method="POST" class="">
                  @csrf
                  <button class="dropdown-item text-uppercase">
                    Logout
                  </button>
                </form>
              </li>


            </ul>
          </li>
        @endauth
      </ul>

    </div>
  </div>
</nav>
