{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
        </li>

        <li class="nav-item">
            <a class="nav-link bg-danger" href="{{route('dashboard')}}">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">Avatars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">Images</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">Gallerie</a>
          </li>
      </ul>
    </div>
  </nav> --}}

  <div class="container-fluid w-25 m-0">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark w-100">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <img src="{{asset('img/' . Auth::user()->avatar->name)}}" alt="">
                <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none" href="">{{ Auth::user()->name }}<br>{{ Auth::user()->prenom }}</a>
                <form action="{{ route("logout") }}" method="POST">
                    @csrf

                    <button class="btn btn-danger" type="submit">Logout</button>

                </form>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route("home") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("dashboard") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        @admin
                        <a href="{{ route("users.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                        </a>
                        @endadmin
                    </li>
                    <li class="nav-item">
                        @admin()
                        <a href="{{ route("avatar.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Avatars</span>
                        </a>
                        @endadmin
                    </li>
                    <li class="nav-item">
                        @admin()
                        <a href="{{ route("image.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Images</span>
                        </a>
                        @endadmin
                    </li>
                    <li class="nav-item">
                        @admin()
                        <a href="{{ route("categorie.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Categories</span>
                        </a>
                        @endadmin
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("gallerie.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Gallerie</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("blog.index") }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Blog</span>
                        </a>
                    </li>
             </ul>

            </div>
        </div>

    </div>
</div>

