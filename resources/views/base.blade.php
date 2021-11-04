<!DOCTYPE html>
<html lang="en" class='h-100'>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@section('title') @show</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class='h-100'>
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-light navbar-collapse navbar-expand-lg py-3 bg-info">
            <div class='container'>
            <div class="navbar-brand">MAL</div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggler" aria-expanded="false" aria-label="toggle area" aria-controls="toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggler">
                <ul class="navbar-nav ms-auto mb-lg-0 mb-sm-2">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link {{Route::currentRouteName()!='home' ?: 'active'}}" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('list')}}" class="nav-link {{Route::currentRouteName()!='list' ?: 'active'}}">List</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('borrow-list')}}" class="nav-link {{Route::currentRouteName()!='borrow-list' ?: 'active'}}">Check</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown" class='navbarDropdown'>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{request()->user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="{{route('auth.logout')}}">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{route('auth.login')}}" class="nav-link {{Route::currentRouteName()!='home' ?: 'active'}}">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
            </div>
        </nav>
        @yield('body')
        <footer class='container-fluid p-0 mt-auto'>
            <div class='p-3 d-lg-flex justify-content-between'>
                <div>
                    <p class='h6'>Created By kyaw zin htet; </p>
                    <p class='text-warp w-50'>Address: <br>
                        No 69,mindama road,Hlaing Township yangon
                    </p>
                </div>
                <div>
                    <p> Powered By Laravel 8.0</p>
                    <p class='text-warp'>
                        Blah Blah Blah
                    </p>
                </div>
            </div>
        </footer>
    </div>
    </div>
</body>

</html>