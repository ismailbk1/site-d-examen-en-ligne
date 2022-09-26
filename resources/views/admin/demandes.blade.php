<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard Admin</title>
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




                           

                                {{-- tableau des demandes --}}

                                <div id="tableExample"
                                    data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <h3>Listes des demandes :</h3>
                                        <hr>
                                        <hr>

                                        <table class="table table-bordered table-striped fs--1 mb-0">
                                            <thead class="bg-200 text-900">
                                                <tr>
                                                    <th class="sort" data-sort="name">#</th>
                                                    <th class="sort" data-sort="email">nom condidat</th>
                                                    <th class="sort" data-sort="email">email</th>
                                                    <th class="sort" data-sort="age">post</th>
                                                    <th class="sort" data-sort="age">date de postulation</th>
                                                    
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">

                                                @foreach ($demandes as $index => $d)
                                                    <tr>
                                                        <td class="name">{{ $index + 1 }}</td>
                                                        <td class="email">{{ $d->condidat }}</td>
                                                        <td class="age">{{ $d->email }}</td>
                                                        <td class="age">{{ $d->post_name }}</td>
                                                        <td class="age">{{ $d->created_at }}</td>
                                                        
                                                        <td>
                                                            <a style="    width: 200px "  type="button" data-bs-toggle="modal"
                                                                data-bs-target="#categomodif{{ $d->id }}"
                                                                class="btn btn-outline-success">download CV</a>
                                                            <a style="    width: 200px" type="button"
                                                                onclick="return confirm('Are you sure you want to delete?')"
                                                                class="btn btn-outline-danger"
                                                                href="/admin/post/destory/{{ $d->id }}">Supprimer</a>

                                            
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





                                    {{-- fin tableu des tech --}}

                                </div>

                            </div>
                        </div>
                    </div>
              
                </div>
            </div>
    </main>
  




  
</body>

<script src="{{ asset('dashboradasset/js/phoenix.js') }}"></script>
<script src="{{ asset('dashboradasset/js/ecommerce-dashboard.js') }}"></script>

</html>
<!--
  <script src="{{ asset('dashboradasset/js/phoenix.js') }}"></script>
  <script src="{{ asset('dashboradasset/js/ecommerce-dashboard.js') }}"></script>
  <link href="{{ asset('dashboradasset/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ asset('dashboradasset/css/user.min.css') }}" rel="stylesheet" id="user-style-default"> -->



