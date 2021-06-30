<header>
  <nav class="navbar navbar-dark bg-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
          Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('/contact') ? 'active' : '' }}" href="{{ route('contact') }}">
          Contact
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('comics.index') ? 'active' : '' }}" href="{{ route('comics.index') }}">
          Comics
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('comics.create') ? 'active' : '' }}" href="{{ route('comics.create') }}">
          New comic
        </a>
      </li>
    </ul>

  </nav>
</header>