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

    <div class="h-100 w-100">
        <nav class="navbar navbar-light navbar-collapse navbar-expand-lg position-sticky top-0 py-3 bg-info">
            <div class='container'>
                <div class="navbar-brand">MAL</div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggler" aria-expanded="false" aria-label="toggle area" aria-controls="toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="toggler">
                <ul class="navbar-nav ms-auto mb-lg-0 mb-sm-2">
                    <li class="nav-item">
                        You Are Super User and Name is {{request()->user()->name}}
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <div class="position-fixed start-0 w-25 h-100 overflow-auto">

            <ul class="nav flex-column h-100 bg-secondary h-100">
                <li class="nav-item p-3 m-2 rounded">
                    <a href="{{route('admin.home')}}" class='nav-link text-white'>Dashboard</a>
                </li>
                <li class="nav-item p-3 m-2 rounded">
                    <a href="{{route('admin.list_user')}}" class='nav-link text-white'>Account</a>
                </li>
                <li class="nav-item p-3 m-2 rounded">
                    <a href="{{route('admin.book.list')}}" class='nav-link text-white'>Book</a>
                </li>
                <li class="nav-item p-3 m-2 rounded">
                    <a href="{{route('admin.publisher.list')}}" class='nav-link text-white'>Publisher</a>
                </li>
                <li class="nav-item p-3 m-2 rounded" >
                    <a href="{{route('admin.category.list')}}" class='nav-link text-white'>Category</a>
                </li>
                <li class="nav-item p-3 m-2 rounded">
                    <a href="{{route('auth.logout')}}" class='nav-link text-white'>logout</a>
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