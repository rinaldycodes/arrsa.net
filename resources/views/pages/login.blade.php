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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,224L26.7,213.3C53.3,203,107,181,160,170.7C213.3,160,267,160,320,149.3C373.3,139,427,117,480,117.3C533.3,117,587,139,640,160C693.3,181,747,203,800,181.3C853.3,160,907,96,960,85.3C1013.3,75,1067,117,1120,117.3C1173.3,117,1227,75,1280,85.3C1333.3,96,1387,160,1413,192L1440,224L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>

    <div id="login">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col"><h1 class="fs-2">Login</h1></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form action="{{ url('/login/auth')}}" method="POST">
                        @csrf 
        
                        <div class="mb-3">
                            <label for="name">Email</label>
                            <input type="email" name="email" class="form-control" autofocus required>
                        </div>

                        <div class="mb-3">
                            <label for="name">Email</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-large btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
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