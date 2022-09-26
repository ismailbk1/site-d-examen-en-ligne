
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/styleprofil.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
</head>
<body>
    <div class="container mt-5">
    
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    
                    <div class="text-center">
                        <img src="{{asset('style/image/avatar')}}" width="100" class="rounded-circle">
                    </div>
                    
                    <div class="text-center mt-3">
                       
                 
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
                                    
                                    <a href="/retour">Go Back</a>
                                    
                                    </div></button>
                        </div>
                  
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
 
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <nav class="menu">
      <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
      <label class="menu-open-button" for="menu-open">
        <span class="hamburger hamburger-1"></span>
        <span class="hamburger hamburger-2"></span>
        <span class="hamburger hamburger-3"></span>
      </label>
    
      <a href="#" class="menu-item"> <i class="bi bi-linkedin"></i> </a>
      <a href="#" class="menu-item"> <i class="bi bi-facebook"></i> </a>
      <a href="#" class="menu-item"> <i class="bi bi-instagram"></i> </a>
      <a href="#" class="menu-item"> <i class="fa fa-envelope"></i> </a>
      
      
    </nav>
    
    
    <!-- filters -->
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
          <filter id="shadowed-goo">
              
              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
              <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
              <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
              <feOffset in="shadow" dx="1" dy="1" result="shadow" />
              <feComposite in2="shadow" in="goo" result="goo" />
              <feComposite in2="goo" in="SourceGraphic" result="mix" />
          </filter>
          <filter id="goo">
              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
              <feComposite in2="goo" in="SourceGraphic" result="mix" />
          </filter>
        </defs>
    </svg>

</body>
<script src="{{asset('style/js/profil.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>