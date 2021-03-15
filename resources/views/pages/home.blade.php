<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- MY CSS -->
    <link rel="stylesheet" href="{{ URL::to('/frontend/style.css') }}">
    <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body id="home">
    <!-- ///////////////////// NAVBAR ///////////////////////-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ url('/#home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- ///////////////////// NAVBAR ///////////////////////-->

    <!-- //////////////////// HEADER //////////////////// -->
    <header class="header ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" p-5 rounded-lg m-3">
                        <h1 class="display-1 text-primary">{{ config('app.name') }}!</h1>
                        <p class="lead">Game, Web Programming, Tips and Trick and many more</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </header>
    <!-- //////////////////// HEADER //////////////////// -->

    <!-- /////////////////// POST ////////////////////// -->
    <section id="post">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="fs-5">FOR YOU</h2>
                </div>
            </div>

            <div class="row mb-3">

                @forelse ($posts as $item)
                <div class="col-md-4 post mb-3">
                    <div class="py-3 card shadow-sm px-2">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('/storage', $item->image) }}" 
                                    class="rounded" alt="{{ config('app.name' ) }}">
                            </div>
                            <div class="col-md-6">
                                <div class="card-title h-75">
                                    <h3 class="fs-5">{{ $item->title }}</h3>
                                </div>
                                <div class="footer">
                                    <b>Berita</b> |
                                    <small>Admin</small> <br>
                                    <small>{{ $item->created_at->diffForhumans() }}</small>
                                </div>
                                <div class="posted-by">
                                </div>
                                <div class="date-post text-muted">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col text-center">
                    <h5>TIDAK POSTINGAN</h5>
                </div>
                @endforelse

                <div class="col-md-4 post mb-3">
                    <div class="py-3 card shadow-sm px-2">
                        <div class="row">
                            <div class="col-6">
                                <img src="https://source.unsplash.com/200x200/?bromo" 
                                    class="rounded" style="object-fit:contain;" width="200" height="200"  alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-title h-50">
                                    <h3 class="fs-5">Lorem ipsum dolor sit amet.</h3>
                                </div>
                                <div class="category">
                                    <small>Berita</small>
                                </div>
                                <div class="posted-by">
                                    <p>By: Ridwan</p>
                                </div>
                                <div class="date-post text-muted">
                                    <small>12 Jan 2021</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post mb-3">
                    <div class="py-3 card shadow-sm px-2">
                        <div class="row">
                            <div class="col-6">
                                <img src="https://source.unsplash.com/200x200/?bekasi" 
                                    class="rounded" style="object-fit:contain;" width="200" height="200"  alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-title h-50">
                                    <h3 class="fs-5">Lorem ipsum dolor sit amet.</h3>
                                </div>
                                <div class="category">
                                    <small>Berita</small>
                                </div>
                                <div class="posted-by">
                                    <p>By: Ridwan</p>
                                </div>
                                <div class="date-post text-muted">
                                    <small>12 Jan 2021</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post mb-3">
                    <div class="py-3 card shadow-sm px-2">
                        <div class="row">
                            <div class="col-6">
                                <img src="https://source.unsplash.com/200x200/?jakarta" 
                                    class="rounded" style="object-fit:contain;" width="200" height="200"  alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-title h-50">
                                    <h3 class="fs-5">Lorem ipsum dolor sit amet.</h3>
                                </div>
                                <div class="category">
                                    <small>Berita</small>
                                </div>
                                <div class="posted-by">
                                    <p>By: Ridwan</p>
                                </div>
                                <div class="date-post text-muted">
                                    <small>12 Jan 2021</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post mb-3">
                    <div class="py-3 card shadow-sm px-2">
                        <div class="row">
                            <div class="col-6">
                                <img src="https://source.unsplash.com/200x200/?bromo" 
                                    class="rounded" style="object-fit:contain;" width="200" height="200"  alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-title h-50">
                                    <h3 class="fs-5">Lorem ipsum dolor sit amet.</h3>
                                </div>
                                <div class="category">
                                    <small>Berita</small>
                                </div>
                                <div class="posted-by">
                                    <p>By: Ridwan</p>
                                </div>
                                <div class="date-post text-muted">
                                    <small>12 Jan 2021</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 post mb-3">
                    <div class="py-3 card shadow-sm px-2">
                        <div class="row">
                            <div class="col-6">
                                <img src="https://source.unsplash.com/200x200/?bekasi" 
                                    class="rounded" style="object-fit:contain;" width="200" height="200"  alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-title h-50">
                                    <h3 class="fs-5">Lorem ipsum dolor sit amet.</h3>
                                </div>
                                <div class="category">
                                    <small>Berita</small>
                                </div>
                                <div class="posted-by">
                                    <p>By: Ridwan</p>
                                </div>
                                <div class="date-post text-muted">
                                    <small>12 Jan 2021</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col">
                    <a href="" class="btn btn-lg w-25 btn-primary">More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /////////////////// POST ////////////////////// -->

    <!-- /////////////////// ABOUT ////////////////////// -->
    <section id="about" class="bg-primary text-white">
        <div class="container">
            <div class="row text-center justify-content-center mb-5">
                <div class="col">
                    <h2 class="fs-5">ABOUT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 text-justify">
                    <p class="w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae inventore debitis, aliquam beatae repellendus molestiae id sit nulla, culpa, ratione exercitationem voluptas magnam! Perferendis, consequatur?</p>
                </div>
                <div class="col-md-4 text-justify">
                    <p class="w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae inventore debitis, aliquam beatae repellendus molestiae id sit nulla, culpa, ratione exercitationem voluptas magnam! Perferendis, consequatur?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /////////////////// ABOUT ////////////////////// -->

    <!-- /////////////////// CONTACT ////////////////////// -->
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="fs-5 text-center">
                        CONTACT
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card-body">
                        <form action="">
                            @csrf 

                            <div class="mb-3">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="name">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="name">Pesan</label>
                                <textarea name="pesan" id="" cols="15" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-large btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /////////////////// CONTACT ////////////////////// -->

    <footer class="bg-primary text-center p-5 text-white">
        <div class="row">
            <div class="col">
                <p>{{ config('app.name')}} &copy {{ date('Y') }}</p>
                <p>Created by <a href="https://instagram.com/bangbre.haha"><b class=" text-white">TYAGA</b></a></p>
            </div>
        </div>
    </footer>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>