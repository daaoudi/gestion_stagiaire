<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">EPG</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="/">Acceuil</a></li>
          <li><a href="#">A propos </a></li>
          <li><a href="#">Cours</a></li>
          <li><a href="/stagiaires">Stagiaires</a></li>
          <li><a href="#">Evenements</a></li>
          <li><a href="#">Prix</a></li>

          <li class="dropdown"><a href="#"><span>Formulaire</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#"><span>Creation</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/stagiaires/create">Stagiaires</a></li>
                  
                </ul>
              </li>
              
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="col-lg-auto mx-3">
        @if(auth()->check())
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('profile.show')}}">{{auth()->user()->name}}</a>
        </li>
        @else
        <a href="/register" title="inscription" class="btn btn-outline-warning">
          <span class="material-symbols-outlined">
            subscriptions
            </span>
        </a>
          <a href="/login" title="connection" class="btn btn-outline-success"><span class="material-symbols-outlined">
            account_circle
            </span></a>
          @endif
      </div>

    </div>
  </header>