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

<body class="h-100">
<nav class="navbar navbar-light navbar-collapse navbar-expand-lg position-sticky top-0 py-3 bg-info">
            <div class='container'>
            <div class="navbar-brand">MAL</div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggler" aria-expanded="false" aria-label="toggle area" aria-controls="toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggler">
                <ul class="navbar-nav ms-auto mb-lg-0 mb-sm-2">
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
                    @endif
                </ul>
            </div>
            </div>
        </nav>
    <div class="h-100 w-100">
        <div class="position-fixed start-0 w-25 h-100">

            <ul class="nav flex-column h-100 bg-secondary h-100">
                <li class="nav-item">
                    Dashboard
                </li>
                <li class="nav-item">
                    Account
                </li>
                <li class="nav-item">
                    Book
                </li>
                <li class="nav-item">
                    Publisher
                </li>
                <li class="nav-item mb-auto">
                    Category
                </li>
                <li class="nav-item">
                    logout
                </li>
            </ul>
            </li>
            </ul>
        </div>

        <div class="col position-fixed w-75 end-0 overflow-auto h-100">
            @yield("body")
        </div>
    </div>
</body>

</html>