<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/js/app.js'])
    <!-- fontawesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <div class="logo_laravel">
                    BoolPetCare
                </div>
                {{-- config('app.name', 'Laravel') --}}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('admin') }}">{{ __('Dashboard') }}</a>
                                <a class="dropdown-item" href="{{ route('admin.animals.index') }}">Animali</a>
                                <a class="dropdown-item" href="{{ route('admin.vaccines.index') }}">Vaccini</a>
                                <a class="dropdown-item" href="{{ route('admin.breeds.index') }}">Specie</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1 px-0">
                        <div class="sidebar background-color">
                            <!-- Sidebar -->
                            <nav id="sidebarMenu" class="side-bar">
                                <div class="pt-4 ms-3">
                                    <h5>Clinica Veterinaria</h5>
                                </div>
                                <div class="mt-5">
                                    <a href="{{ route('admin.animals.index') }}"
                                        class="list-group-item py-2 ripple {{ Route::currentRouteName() === 'admin.animals.index' ? 'list-group-item-action list-group-item-danger' : '' }}">
                                        <div class="text-container d-flex align-items-center">
                                            <i class="fa-solid fa-paw ms-3"></i>
                                            <h5 class="ms-3"> Animali</h5>   
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.breeds.index') }}"
                                        class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() === 'admin.breeds.index' ? 'list-group-item-action list-group-item-danger' : '' }}">
                                        <div class="text-container d-flex align-items-center">
                                            <i class="fa-solid fa-paw ms-3"></i>
                                            <h5 class="ms-3">Specie</h5>
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.vaccines.index') }}"
                                        class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() === 'admin.vaccines.index' ? 'list-group-item-action list-group-item-danger' : '' }}">
                                        <div class="text-container d-flex align-items-center">
                                            <i class="fa-solid fa-syringe ms-3"></i>
                                            <h5 class="ms-3">Vaccini</h5>
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.contacts.index') }}"
                                        class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() === 'admin.contacts.index' ? 'list-group-item-action list-group-item-danger' : '' }}">
                                        <div class="text-container d-flex align-items-center">
                                            <i class="fa-solid fa-envelope ms-3"></i>
                                            <h5 class="ms-3">Messaggi</h5>
                                        </div>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-11">
                        <div class="padding_main">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </main>
</body>

</html>
