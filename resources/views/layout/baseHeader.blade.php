<h3>Boutique</h3>
  <ul id='menu'>
    <li><a href="/shirts">Liste des tee-shirts</a></li>
    @if (Auth::user())
      <li><a href="/add/shirt">Enregistrement tee-shirts</a></li>
    @endif
  </ul>
  @if (Auth::guest())
    <div id="login">
      <li><a href="{{ route('login') }}">Login</a></li>
    @else
      <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </div>
  @endif
