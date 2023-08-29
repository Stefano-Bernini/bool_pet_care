<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/js/app.js'])
</head>

<body>
    <main>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1 px-0">
                        <div class="sidebar background-color">
                            <!-- Sidebar -->
                            <nav id="sidebarMenu" class="side-bar">
                                <div class="pt-4 ms-3">
                                    <h3>Michele seleziona un titolo</h3>
                                </div>
                                <div class="mt-5">
                                    <a href="{{ route('admin.animals.index') }}"
                                        class="list-group-item py-2 ripple {{ Route::currentRouteName() === 'admin.animals.index' ? 'list-group-item-action list-group-item-danger' : '' }}">
                                        <div class="text-container d-flex align-items-center">
                                            <i class="fas fa-chart-area fa-fw ms-3"></i>
                                            <h4 class="ms-3">Bau Bau Muu Muu</h4>
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.vaccines.index') }}"
                                        class="list-group-item list-group-item-action py-2 ripple {{ Route::currentRouteName() === 'admin.vaccines.index' ? 'list-group-item-action list-group-item-danger' : '' }}">
                                        <div class="text-container d-flex align-items-center">
                                            <i class="fa-solid fa-code ms-3"></i>
                                            <h4 class="ms-3">Vaccines</h4>
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
