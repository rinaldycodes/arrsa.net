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
<body>
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
                  <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
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
    
    @if( session('msg') )
        <div class="alert alert-info text-center">
            {{ session('msg') }}
        </div>
    @endif 
    <!-- ///////////////////// NAVBAR ///////////////////////-->

    <!-- /////////////////// FORM ////////////////////// -->
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="fs-5 text-center">
                        CREATE POST
                    </h2>
                </div>
    

            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf 

                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" required autofocus>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">-== PILIH ==-</option>
                                    @foreach ( $categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="title">Image Thumbnail</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required autofocus>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                
                            </div>

                            <div class="mb-3">
                                <label for="body">Content / Body </label>
                                <textarea name="body" id="body1" cols="30" rows="10"></textarea>
                                
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
    
    <!-- CK EDITOR -->
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'body1' );
    </script>
    <!-- CK EDITOR -->

</body>
</html>