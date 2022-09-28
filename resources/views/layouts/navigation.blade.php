<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav  mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }} <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('permission.index') }}">{{ __('Permissions') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('role.index') }}">{{ __('Roles') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">{{ __('Users') }}</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);">{{ Auth::user()->email }}</a>
                    <a class="dropdown-item" href="{{ route('admin.account.info') }}">{{ __('My Account') }}</a>


                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>Çıkış yap
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>



                    {{--<form method="post" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Log Out') }}</a>
                    </form>--}}

                </div>
            </li>
        </ul>
    </div>
</nav>
