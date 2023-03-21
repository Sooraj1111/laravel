<section class="pet-header">
        <img src="{{ asset('assets/images/ic_toppaw1.png')}}" class="img-fluid left-paw">
         <img src="{{ asset('assets/images/ic_toppaw2.png')}}" class="img-fluid right-paw">
        <div class="container">
            <nav class="navbar navbar-expand-md nav-header">
                <!-- Brand -->
                <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/ic_logo.png')}}" class="img-fluid logo-w"></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav ml-auto nav-header-list">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Marketplace</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Adoption</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pet Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vet</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('users')}}">Users</a>
                      </li>
                  </ul>
                </div>
            </nav>

        <!-- text-section start -->
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-text">
                    <h1>Pet Supplies For Your</h1>
                    <h1> <span class="image-border">Trusted   <img src="{{ asset('assets/images/Vector 1.png')}}" class="img-fluid ">	</span>Companion</h1>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised.</p>

                    <ul class="nav btn-gogle">
                        <li> <a href="#"><img src="{{ asset('assets/images/image 7.png')}}"  class="img-fluid "></a></li>
                        <li> <a href="#"><img src="{{ asset('assets/images/image 7.png')}}"  class="img-fluid "></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/pp-large.png')}}" class="img-fluid mx-auto">
            </div>
        </div>
        <!-- text-section end -->
        </div>
	</section>
