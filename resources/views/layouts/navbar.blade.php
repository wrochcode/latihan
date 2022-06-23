<ul class="navbar">
    @foreach ($navbar as $item => $url)
        <li><a href="{{ $url }}">{{ $item }}</a></li>
    @endforeach

    {{-- <li><a href="/">Home</a></li>
    <li><a href="/profile">Profile</a></li>
    <li><a href="/store">Store</a></li>
    <li><a href="/posts/first-post">Blog</a></li> --}}
</ul>