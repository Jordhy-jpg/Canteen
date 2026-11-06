<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <div class="m-4">
        <div class="card text-center mb-4">
            <div class="card-body">
                <h1 class="m-0"><strong>BCanteen</strong></h1>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fs-5">
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                @forelse ($categories as $category)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('category.show', $category) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @empty
                                    <li><a class="dropdown-item" href="#">No categories found</a></li>
                                @endforelse
                            </ul>
                        </li>
                        {{-- TODO: Create Contact Us route --}}
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="m-4">
        @yield('body')
    </div>
</body>

</html>
