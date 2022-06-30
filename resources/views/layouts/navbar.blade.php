<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
      <a class="navbar-brand" href="/">Laravel 9</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @foreach ($navbar as $item => $url)
              <li class="nav-item">
                <a class="nav-link" href="{{ $url }}">{{ $item }}</a>
              </li>
            @endforeach
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            @foreach ($navbar as $item => $url)
              <li class="nav-item">
                <a class="nav-link" href="{{ $url }}">{{ $item }}</a>
              </li>
            @endforeach
        </ul>
      </div>
    </div>
  </nav>

{{-- <ul class="navbar">
    @foreach ($navbar as $item => $url)
        <li><a href="{{ $url }}">{{ $item }}</a></li>
    @endforeach
</ul> --}}

    {{-- <li><a href="/">Home</a></li>
    <li><a href="/profile">Profile</a></li>
    <li><a href="/store">Store</a></li>
    <li><a href="/posts/first-post">Blog</a></li> --}}