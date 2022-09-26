<nav class="navbar navbar-light navbar-top navbar-expand">
    <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
            aria-controls="navbarVerticalCollapse" aria-expanded="false"
            aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3"
            href="/admin/dashborad">
            <div class="d-flex align-items-center">
                <div href='/admin/dashborad' class="d-flex align-items-center">
                        

                    <p class="logo-text ms-2 d-none d-sm-block" > <span class="text-warning"> <a style="text-decoration=none;" href="/debut">Admin </a> </span>
                    </p>

                </div>

            </div>
        </a></div>
    <div class="collapse navbar-collapse">
        <div class="search-box d-none d-lg-block" style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                    class="form-control form-control-sm search-input search min-h-auto" type="search"
                    placeholder="Search..." aria-label="Search"> <span
                    class="fas fa-search search-box-icon"></span></form>
        </div>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
            <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNotification"
                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><span class="text-700" data-feather="bell"
                        style="height:20px;width:20px;"></span></a></li>
            <li class="nav-item dropdown"><a
                    class="nav-link notification-indicator notification-indicator-primary"
                    id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="text-700"
                        data-feather="settings" style="height:20px;width:20px;"></span></a></li>
            <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNindeDots"
                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                        <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                        <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                        <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                        <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                        <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                        <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                        <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                        <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                    </svg></a>
              
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser"
                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="{{asset('style/image/avatar1.png')}}"
                            alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card bg-white position-relative border-0">
                        <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                            <div class="text-center pt-4 pb-3">
                               
                            </div>
                            <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                    id="statusUpdateInput" placeholder="Update your status"></div>
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3" href="/editprofil"><span
                                            class="me-2 text-900" data-feather="user"></span>Edit Profile</a>
                                </li>
                           
                               
                                
                                
                             
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top">
                        
                            <hr>
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
                       
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>