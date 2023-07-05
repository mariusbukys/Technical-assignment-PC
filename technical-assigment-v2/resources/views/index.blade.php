<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
          background-image: url('https://cdn.filestackcontent.com/PI92goJdRe16ZV0Dal0w');
          background-size: cover;
          background-position: center;
          height:100vh;
          background-blend-mode:overlay; 
        }
      </style>
</head>
<body class="bg-secondary">
    <div class="d-flex justify-content-center bg-secondary">
      <a class=" text-danger fst-italic fw-bold p-4 me-3 display-1 " href="{{route('products')}}">Make Your Own Pizza</a>
    </div>
    @yield('content')
    @guest
    <div class="d-flex justify-content-center">  
     <a class="btn btn-lg text-decoration-none text-white rounded-pill mt-5 me-3 bg-success" href="{{route('register')}}">Register</a>
     <a class="btn btn-lg text-decoration-none text-white rounded-pill mt-5 bg-success" href="{{route('login')}}">Log in</a>
    </div>
    @endguest
</body>
</html>