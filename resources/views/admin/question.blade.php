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
        .form-label {
    padding-left: 1.5rem;
    line-height: 2.49;
    font-size: inherit;
    text-transform: uppercase;
}
.col-form-label, .form-label {
    font-weight: 700;
    color: #3b3b41d7;
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




                                <div>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Ajouter question</button>
                                </div>

                                {{-- tableau des categories --}}

                                <div id="tableExample"
                                    data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <h3>Listes des questions :</h3>
                                        <hr>
                                        <hr>

                                        <table class="table table-bordered table-striped fs--1 mb-0">
                                            <thead class="bg-200 text-900">
                                                <tr>
                                                    <th class="sort" data-sort="name">#</th>
                                                    <th class="sort" data-sort="email">Question</th>
                                                    <th class="sort" data-sort="age">Reponse</th>  
                                                    <th class="sort" data-sort="age">technologie appartient</th>  
                                                     <th>Action</th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody class="list">

                                                @foreach ($qsts as $index => $q)
                                                    <tr>
                                                        <td class="name">{{ $index + 1 }}</td>
                                                        <td class="email">{{ $q->qst }}</td>
                                                        <td class="age">{{ $q->ans }}</td>
                                                        <td class="age">{{ $q->name }}</td>
                                                        
                                                        <td>
                                                            <a type="button" data-bs-toggle="modal"
                                                                data-bs-target="#categomodif{{ $q->id }}"
                                                                class="btn btn-outline-success">Modifier</a>
                                                            <a type="button"
                                                                onclick="return confirm('Are you sure you want to delete?')"
                                                                class="btn btn-outline-danger"
                                                                href="/admin/question/destory/{{ $q->id }}">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row align-items-center mt-3">
                                        <div class="pagination d-none"></div>
                                        <div class="col">
                                            <p class="mb-0 fs--1">
                                                <span class="d-none d-sm-inline-block" data-list-info></span>
                                                <span class="d-none d-sm-inline-block"> &mdash; </span>
                                                <a class="fw-semi-bold" href="#!" data-list-view="*">
                                                    View all
                                                    <span class="fas fa-angle-right ms-1"
                                                        data-fa-transform="down-1"></span>
                                                </a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">
                                                    View Less
                                                    <span class="fas fa-angle-right ms-1"
                                                        data-fa-transform="down-1"></span>
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-auto d-flex">
                                            <button class="btn btn-sm btn-primary" type="button"
                                                data-list-pagination="prev"><span>Previous</span></button>
                                            <button class="btn btn-sm btn-primary px-4 ms-2" type="button"
                                                data-list-pagination="next"><span>Next</span></button>
                                        </div>
                                    </div>





                                    {{-- fin tableu des categories --}}

                                </div>

                            </div>
                        </div>
                    </div>
              
                </div>
            </div>
    </main>
    {{-- modal d'ajout --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un question </h5><button class="btn p-1"
                        type="button" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fas fa-times fs--1"></span></button>

                </div>











                <form class="row g-3 "  action="/admin/question/store" method="POST">
                    @csrf  
                    <div class="modal-body">

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">question 
                            </label>
                            <input name="question" class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="tapper le nom de categorie...">
                        </div>
                        @error('questtion')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                      
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">A</label>
                        <input name="a" type="text" class="form-control" id="validationCustom01" required>
                  
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">B</label>
                        <input name="b" type="text" class="form-control" id="validationCustom02" required>
                     
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">C</label>
                        <input name="c" type="text" class="form-control" id="validationCustom01" required>
                  
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">D</label>
                        <input name="d" type="text" class="form-control" id="validationCustom02" required>
                     
                      </div>
                      <label for="validationCustom02" class="form-label">Reponse :</label>
                      <div>  <select class="form-select" name="ans"  aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                      </select>
                     </div>
                      <label for="validationCustom02" class="form-label">Technologie :</label>
                      <div>  <select class="form-select" name="tech"  aria-label="Default select example">
                        <option selected>Open this select menu</option>
                       @foreach ($techs as $t )
                        <option value="{{$t->id}}">{{$t->name}}</option>
                           
                       @endforeach
                        
                      </select>
                     </div>
                    
                    <div class="modal-footer"><button class="btn btn-primary" type="submit">Ajouter</button>
                        <button class="btn btn-outline-primary" type="button"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- fin modal --}}




    {{-- debut modal du modification --}}
    @foreach ($qsts as $index => $q)
        <div class="modal fade" id="categomodif{{ $q->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier question : <span
                                class="text-primary">{{ $q->qst }}</span></h5><button class="btn p-1"
                            type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                class="fas fa-times fs--1"></span></button>

                    </div>
                    
                <form class="row g-3 "  action="/admin/question/update" method="POST">
                    @csrf  
                    <div class="modal-body">

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">question :
                            </label>
                            <input name="question" value="{{ $q->qst }}" class="form-control" id="exampleFormControlInput1" type="text"
                               >
                        </div>
                        @error('questtion')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                      
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Choix A :</label>
                        <input name="a" value="{{$q->a}}" type="text" class="form-control" id="validationCustom01" required>
                  
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Choix B :</label>
                        <input name="b" value="{{$q->b}}" type="text" class="form-control" id="validationCustom02" required>
                     
                      </div>
                      <div class="col-md-4">
                        <label style="font-weight: 700" for="validationCustom01" class="form-label">C</label>
                        <input value="{{$q->c}}" name="c" type="text" class="form-control" id="validationCustom01" required>
                  
                      </div>
                      <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Choix D :</label>
                        <input value="{{$q->d}}" name="d" type="text" class="form-control" id="validationCustom02" required>
                     <input  type="hidden" name="id" value="{{$q->id}}">
                      </div>
                      <label for="validationCustom02" class="form-label">Reponse :</label>
                      <div>  <select class="form-select" name="ans"  aria-label="Default select example">
                        <option selected>{{$q->ans}}</option>
                        <option style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                      </select>
                     </div>
                     <label for="validationCustom02" class="form-label">Technologie :</label>
                      <div>  <select class="form-select" name="tech"  aria-label="Default select example">
                        <option selected>Open this select menu</option>
                       @foreach ($techs as $t )
                        <option value="{{$t->id}}">{{$t->name}}</option>
                           
                       @endforeach
                        
                      </select>
                     </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="submit">Modifier</button>
                        <button class="btn btn-outline-primary" type="button"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- fin modal du modificatin --}}
</body>

<script src="{{ asset('dashboradasset/js/phoenix.js') }}"></script>
<script src="{{ asset('dashboradasset/js/ecommerce-dashboard.js') }}"></script>

</html>
<!--
  <script src="{{ asset('dashboradasset/js/phoenix.js') }}"></script>
  <script src="{{ asset('dashboradasset/js/ecommerce-dashboard.js') }}"></script>
  <link href="{{ asset('dashboradasset/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ asset('dashboradasset/css/user.min.css') }}" rel="stylesheet" id="user-style-default"> -->
