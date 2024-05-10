<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="container">
        <div class="row text-center">
        <div class="col-md-5 col-lg-5 colxl-5 mx-auto">
            <x-jet-application-logo />
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 mt-2 ">
            @if (Route::has('login'))
            <div>
                @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-danger">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-danger">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-danger">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
        </div>
    </div>
</div>
