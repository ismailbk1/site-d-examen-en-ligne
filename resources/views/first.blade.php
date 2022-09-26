<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    body {
	height: 100vh;
	overflow: hidden;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #2b1331;
	/* background-image: linear-gradient(315deg, #2b1331 0%, #b9abcf 74%); */
	background-image: url(" {{asset('style/image/qcm4.jpg')}}");
	background-size: cover;
}

/* style button
 */
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #0c0c0c;
} */

a {
  position: relative;
  padding: 20px 50px;
  display: block;
  text-decoration: none;
  text-transform: uppercase;
  width: 200px;
  overflow: hidden;
  border-radius: 40px;
}

a span {
  position: relative;
  color: #fff;
  fot-size: 20px;
  font-family: Arial;
  letter-spacing: 8px;
  z-index: 1;
}

a .liquid {
  position: absolute;
  top: -80px;
  left: 0;
  width: 200px;
  height: 200px;
  /* background: #4973ff; */
  background: #c2649a;
  box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
  transition: .5s;
}

a .liquid::after,
a .liquid::before {
  content: '';
  width: 200%;
  height: 200%;
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -75%);
  background: #000;
}

a .liquid::before {
  
  border-radius: 45%;
  background: rgba(20, 20, 20, 1);
  animation: animate 5s linear infinite;
}

a .liquid::after {
  
  border-radius: 40%;
  background: rgba(20, 20, 20, .5);
  animation: animate 10s linear infinite;
}

a:hover .liquid{
  top: -120px;
}

@keyframes animate {
  0% {
    transform: translate(-50%, -75%) rotate(0deg);
  }
  100% {
    transform: translate(-50%, -75%) rotate(360deg);
  }
}

</style>
<body>

    <div class="card" style="     background-color: #ddbab5; width: 28rem; height:30%">
        <div class="card-body">
        <form action="/submitans" method="post">
            @csrf
            <h5 class="card-title">{{Session::get("next")}}<span>#</span> {{$q->qst}} </h5>
          <div class="form-check">
            <input value="a" class="form-check-input" type="radio" name="ans" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
              {{$q->a}}
            </label>
          </div>
          <div class="form-check">
            <input value="b" class="form-check-input" type="radio" name="ans" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
              {{$q->b}}
            </label>
          </div>
          <div class="form-check">
            <input value="c" class="form-check-input" type="radio" name="ans" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              {{$q->c}}
            </label>
          </div>
          <input type="hidden" value="{{$id}}" name='id'>
          <div class="form-check">
            <input value="d" class="form-check-input" type="radio" name="ans" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
              <input value="{{$q->ans}}" class="form-check-input" type="hidden" name="ansdb" id="flexRadioDefault2" checked>
              <input value="{{$q->id}}" class="form-check-input" type="hidden" name="id_qst" id="flexRadioDefault2" checked>

             {{$q->d}}
            </label>
          </div>
        </div>
      </div>
      <a href="">
       <button type="submit">
        <span>Next</span>
        <div class="liquid"></div>
    </button>
      </a>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>