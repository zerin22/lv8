<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nav-bar text-center">
                    <a href="{{ route('homepage') }}">Home</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('contact') }}">Contact</a>

                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}">Login</a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Sign Up</a>
                        @endif
                    @else
                        <a href="{{ route('post.index') }}">Posts</a>
                        <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>
