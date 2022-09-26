




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/stylecorrection.css')}}">

    <title>Correction</title>
</head>
<body style='background-color:#c2c8c5;'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<h1 style="display: inline-block;
 
    margin-left: 26%;
    background-color: #fa9284;
    font-size: xxx-large;">Correction de test {{$test_correction[0]->name}}
    </h1>
<div class="container" >
	<div class="row">
	<div class="holder" style="    background-color:#21aba5; margin-top:-0px; ">
@foreach ($test_correction as $index=> $r )
<hr size="4" color="blue">
<table width="100%">

<h2><span>{{$index+1}} #</span> {{$r->qst}}</h2>

    
    <tr>
        <td>{{$r->a}}</td>
        @if($r->ans=="a")
        <td>
            <div>
                
                <input onclick="return false;"  type="checkbox"  checked=""  />
                <span></span>
            </div>
        </td>
    @endif
    @if($r->ans!="a")
    <td>
        <div>
            
            <input onclick="return false;"  type="checkbox" />
            <span></span>
        </div>
    </td>
@endif
    </tr>
   
    <tr>
        <td>{{$r->b}}</td>
@if ($r->ans=="b")
<td>
    <div>
        <input onclick="return false;"  type="checkbox"  checked="" />
        <span></span>
    </div>
</td> 
@endif
@if ($r->ans!="b")
<td>
    <div>
        <input onclick="return false;"  type="checkbox" />
        <span></span>
    </div>
</td> 
@endif
    </tr>
    <tr>
        <td>{{$r->c}}</td>
        @if ($r->ans=="c")
        <td>
            <div>
                <input onclick="return false;"  type="checkbox" checked="" />
                <span></span>
            </div>
        </td>
        @endif
        @if ($r->ans!="c")
        <td>
            <div>
                <input onclick="return false;"  type="checkbox" />
                <span></span>
            </div>
        </td>
        @endif
    </tr>
    <tr>
       
        <td>{{$r->d}}</td>
        @if ($r->ans=="d")
        <td>
            
            <div>
                <input onclick="return false;" type="checkbox" checked="" />
                <span></span>
            </div>
        </td>
        @endif
         @if ($r->ans!="d")
         <td>
            
            <div>
                <input onclick="return false;" type="checkbox"  />
                <span></span>
            </div>
        </td>
         @endif
       
    </tr>


    
    <tr>
        @if ($r->etat=="vrai")
        <td colspan="2">
            <input type="submit" value="BRavo !!" >
        </td>  
        @endif
        @if ($r->etat=="faux")
        <td colspan="2">
            <input class="btn btn-danger" style="background-color: rgb(175, 33, 33)" type="submit" value="faux" >
        </td>  
        @endif
    </tr>
 


</table>   
<hr size="4" color="blue">
@endforeach			
<td><a class="btn btn-sm btn-primary" href="/retour" style="margin-left: 37%;
    height: 50px;
    text-align: center;
    background-color: #fa9284;width: 250px;"><span style="    font-size: x-large;     font-weight: bold;
    color: black;" ><<<<< Retour</span></a></td>
		</div>


	</div>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

