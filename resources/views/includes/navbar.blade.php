<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <a href="{{route ('home')}}" class="navbar-brand">
        <img src="{{url('frontend/images/logo_nomads@2x.png')}}" alt="Logo NOMAD" />
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
            <a href="#" class="nav-link active">Home</a>
        </li>
        <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Paket Travel</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">LINK</a>
            <a class="dropdown-item" href="#">LINK</a>
            <a class="dropdown-item" href="#">LINK</a>
            </div>
        </li>
        <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Testimonial</a>
        </li>
        </ul>
        <!-- Mobile Button -->
        <form class="form-inline d-md-none d-sm-block">
        <button class="btn btn-login my-2 my-sm-0">Masuk</button>
        </form>
        <!-- Desktop Button -->
        <form class="form-inline my-2 d-none d-md-block my-lg-0">
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">Masuk</button>
        </form>
    </div>
    </nav>
</div>