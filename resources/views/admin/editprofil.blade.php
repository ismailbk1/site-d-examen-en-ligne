<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('dashboradasset/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashboradasset/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <style>
        body {
            opacity: 0;
        }
    </style>
</head>

<body>

    <main class="main" id="top">
        <div class="container-fluid px-0">
            @include('admin.ncl.sidebar')
            @include('admin.ncl.nav')

            <div class="content">
                <div class="pb-5">
                    <div class="row g-5">
                        <div class="col-12 col-xxl-6">
                            <div class="row align-items-center g-4">
                                <div class="col-12 col-md-auto">



                                </div>




                            </div>
                        

                                <form action="/update" method="POST">
                                    @csrf
                                    {{-- @if(session("messaage")) --}}
                                    @include('admin.ncl.message')
                                    
                                    <label class="col-sm-2 col-form-label mb-3"
                                  >Nom</label>
                               
                                    <input name="nom" class="form-control mb-3" id="inputPassword"
                                        type="text" value="{{Auth::user()->name}}">

                                  <label class="col-sm-2 col-form-label mb-3"
                                            for="staticEmail">Email</label>
                                       
                                            <input name="email" class="form-control mb-3" id="inputPassword"
                                                type="email" value="{{Auth::user()->email}}">
                                 <label class="col-sm-2 col-form-label" for="inputPassword">Password</label>
                                    <input class="form-control mb-3" id="inputPassword"
                                         name="password" placeholder="tappper le niveau mot de passe"   type="password">
                                         <button class="btn btn-primary" type="submit">Save</button>                          
                                     
                                        </form> 
                       

                    </div>
                   
                </div>
            </div>
    </main>
    <script src="{{ asset('dashboradasset/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashboradasset/js/ecommerce-dashboard.js') }}"></script>
</body>

</html>
<!--
  <script src="{{ asset('dashboradasset/js/phoenix.js') }}"></script>
  <script src="{{ asset('dashboradasset/js/ecommerce-dashboard.js') }}"></script>
  <link href="{{ asset('dashboradasset/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ asset('dashboradasset/css/user.min.css') }}" rel="stylesheet" id="user-style-default"> -->
