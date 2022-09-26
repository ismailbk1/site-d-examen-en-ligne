<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Fin de qcm</p>
    <p>faux</p><p>{{ $wrongans}}</p>
 <p>vrai</p>   <p>{{ $correctans}}</p>
     <div class="px-3">
        <a  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
            class="btn btn-phoenix-secondary d-flex flex-center w-100"
            href="#!"><span class="me-2"
                data-feather="log-out"></span>Sign out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            
            
            
            </div>
</body>
</html>