
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('Dashboard') }}">ProductApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('Dashboard') }}">Dashboard</a>
          </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('product') }}">Product</a>
        </li>

      </ul>
      @if (Auth::user())
      <form method="POST" action="{{ route('logout') }}" class="d-flex" x-data>
        @csrf
        <x-jet-dropdown-link href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-jet-dropdown-link>
    </form>
      @endif



    </div>
</div>
  </nav>
