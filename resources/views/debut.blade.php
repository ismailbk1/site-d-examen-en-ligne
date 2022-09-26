
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edulogy</title>
    
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href=" {{asset('template/css/bootstrap.min.css')}}   ">
    <link rel="stylesheet" href="{{asset('template/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('template/style.css')}}">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.6/sweetalert2.css"
      rel="stylesheet"
     
    />
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <!-- <div id="preloader">
        <img class="preloader" src="{{asset('template/images/loader.gif')}}" alt="">
    </div>end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> 2500251445&nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">Itech_concept@itech.com</a>
                            </p>
                 
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                        <a style="    margin-top: 20px;
    font-size: x-large;
    font-weight: bold;
    font-family: 'Droid Serif';
   
   
" href="/profilvisiteur">Votre Profil</a>
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

         
        </header>
 
        <section class="section gb" style="margin-top: 50px">
          <div class="container">
              <div class="section-title text-center">
                  <h3>Test technique </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repellendus nemo ducimus facere. Sit dolore provident quibusdam minus placeat sint fugiat magni sequi. Eum eligendi laborum aliquid omnis inventore! Itaque.</p>
              </div><!-- end title -->

              <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                @foreach ($tech as $t )
                <div class="caro-item">
                    <div class="course-box">
                        <div class="image-wrap entry">
                            <img src="upload/course_01.jpg" alt="" class="img-responsive">
                            <div class="magnifier">
                                 <a href="#" title=""><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->
                        <div class="course-details">
                            <h4>
                                <small>{{$t->name}}</small>
                                <a href="#" title="">Modern methode de test technique</a>
                            </h4>
                            <p>{{$t->description}}</p>
                        </div><!-- end details -->
                        <div class="course-footer clearfix">
                            <div class="pull-left">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> {{$t->temp}} Min.</a></li>
                                </ul>
                            </div><!-- end left -->

                            <div class="pull-right">
                                <ul class="list-inline">
                                </ul>
                            </div><!-- end left -->
                            <div  class="section-button text-center">
          @if($arraytechpasser["$t->name"]==1)
          <a disabled  style="margin-top: 15px ;     background-color: #fb0404;" href="#" class="btn btn-primary">test passer deja </a>


       
                   @else
                   <a  style="margin-top: 18px; width: 200px;  " href="/start/{{ $t->id }}" class="btn btn-primary">Start test  </a>
@endif
                            </div>
                        </div><!-- end footer -->
                    </div><!-- end box -->
                </div><!-- end col -->
                @endforeach


              <hr class="invis">

             
          </div><!-- end container -->
      </section>
    
      <section class="section db">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="stat-count">
                        <h4 class="stat-timer">150</h4>
                        <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i>Condidats</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolores dignissimos minus cupiditate, quasi in iusto, consequatur officiis fuga illo harum suscipit facere magnam veniam sapiente ipsum iste illum expedita? </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4">
                    <div class="stat-count">
                        <h4 class="stat-timer">951</h4>
                        <h3><i class="flaticon-online-course"></i> projet complet</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolores dignissimos minus cupiditate, quasi in iusto, consequatur officiis fuga illo harum suscipit facere magnam veniam sapiente ipsum iste illum expedita? </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4">
                    <div class="stat-count">
                        <h4 class="stat-timer">1101</h4>
                        <h3><i class="flaticon-online-course"></i>Employes</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisic doloribus quos earum   sunt , maiores molestiae aperiam cum? </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>


    <section class="section gb">
      <div class="container">
          <div class="section-title text-center">
              <h3>Recent Post</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptatum inventore quae provident, ipsum voluptates ducimus tenetur et nihil aliquid officia at aliquam cupiditate laborum similique minima magnam vitae architecto!</p>
          </div><!-- end title -->

          <div class="row">
            @foreach($post as $p)
              <div class="col-lg-4 col-md-12" style="margin-bottom :    30px;">
                  <div class="blog-box">
                      <div class="image-wrap entry">
                          <img src="upload/blog_01.jpeg" alt="" class="img-responsive">
                          <div class="magnifier">
                               <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                          </div>
                      </div><!-- end image-wrap -->

                      <div class="blog-desc">
                          <h4><a href="blog-single.html">{{$p->name}}</a></h4>
                          <p>{{$p->description}}</p>
                      </div><!-- end blog-desc -->

                      <div class="post-meta">
                          <ul class="list-inline">
                              <li><a href="#">{{$p->created_at }}</a></li>
                            
                              <li><a href="#">{{$p->nbr_place}} place(s) disponible</a></li>
                          </ul>
                          @if($p->dispo=="oui")
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$p->id}}">
  Postuler 
</button>
                          @else
                          <a href="#" disabled class="btn btn-primary" style='   background-color: #fb0404;'>Cette offre n'est plus disponible </a>
                          @endif
                      </div><!-- end post-meta -->
                      
                  </div><!-- end blog -->
        

              </div>
@endforeach

              <!-- end col -->

             
              <!-- end col -->

              
              <!-- end col -->
          </div><!-- end row -->
      </div><!-- end container -->
      
  </section>
 @foreach($post as $p)
 <!-- Modal -->
<div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$p->name}}</h5>




        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$p->name}}
      </div>
      <form action="/postuler" method="post" enctype="multipart/form-data">
         @csrf
         <input  name="cv" class="form-control" id="exampleFormControlInput1" type="file" 
            >
            <input type="hidden" name="id" value="{{$p->id}}">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-primary">postuler</button>
</form>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
@endforeach
    <footer class="section footer noover">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4">
                  <div class="widget clearfix">
                      <h3 class="widget-title">Subscribe Our Newsletter</h3>
                      <div class="newsletter-widget">
                          <p>You can opt out of our newsletters at any time.<br> See our <a href="#">privacy policy</a>.</p>
                          <form class="form-inline" role="search">
                              <div class="form-1">
                                  <input type="text" class="form-control" placeholder="Enter email here..">
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                              </div>
                          </form>
                          <img src="images/payments.png" alt="" class="img-responsive">
                      </div><!-- end newsletter -->
                  </div><!-- end widget -->
              </div><!-- end col -->

              <div class="col-lg-3 col-md-3">
                  <div class="widget clearfix">
                      <h3 class="widget-title">Join us today</h3>
                      <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                      <a href="#" class="readmore">joining our team</a>
                  </div><!-- end widget -->
              </div><!-- end col -->

              <div class="col-lg-3 col-md-3">
                  <div class="widget clearfix">
                      <h3 class="widget-title">Popular Tags</h3>
                      <div class="tags-widget">   
                          <ul class="list-inline">
                             
                              <li><a href="#">web design</a></li>
                              <li><a href="#">development</a></li>
                              <li><a href="#">language</a></li>
                              <li><a href="#">Somfony</a></li>
                              <li><a href="#">Css</a></li>
                              <li><a href="#">material</a></li>
                              <li><a href="#">css3</a></li>
                              <li><a href="#">Laravel</a></li>
                             
                          </ul>
                      </div><!-- end list-widget -->
                  </div><!-- end widget -->
              </div><!-- end col -->

              <div class="col-lg-2 col-md-2">
                  <div class="widget clearfix">
                      <h3 class="widget-title">Support</h3>
                      <div class="list-widget">   
                          <ul>
                              <li><a href="#">Itech Concept</a></li>
                              
                            
                          </ul>
                      </div><!-- end list-widget -->
                  </div><!-- end widget -->
              </div><!-- end col -->
          </div><!-- end row -->
      </div><!-- end container -->
  </footer><!-- end footer -->

  <div class="copyrights">
      <div class="container">
          <div class="clearfix">
              <div class="pull-left">
                  <div class="cop-logo">
                      <a href="#"><img src="images/logo.png" alt=""></a>
                  </div>
              </div>

              <div class="pull-right">
                  <div class="footer-links">
                      <ul class="list-inline">
                          <li>copyright</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div><!-- end container -->
  </div><!-- end copy -->
</div><!-- end wrapper -->

</body>
<!-- jQuery Files -->
<script src="{{asset('template/js/jquery.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/js/carousel.js')}}"></script>
<script src="{{asset('template/js/animate.js')}}"></script>
<script src="{{asset('template/js/custom.js')}}"></script>
<!-- VIDEO BG PLUGINS -->
<script src="{{asset('template/js/videobg.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('sweetalert::alert')

</html>
