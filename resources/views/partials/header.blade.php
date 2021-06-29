<header>
  <nav>
    <ul>
      <li>
        <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
          Home
        </a>
      </li>
      <li>
        <a class="{{ request()->is('/contact') ? 'active' : '' }}" href="{{ route('contact') }}">
          Contact
        </a>
      </li>
      <li>
        <a class="{{ request()->is('comics.index') ? 'active' : '' }}" href="{{ route('comics.index') }}">
          Comics
        </a>
      </li>
    </ul>

  </nav>
</header>