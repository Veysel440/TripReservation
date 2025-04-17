<!-- Navbar & Hero Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link">Anasayfa</a>
                <a href="{{ route('About') }}" class="nav-item nav-link">Hakkımızda</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Servisler</a>
                <a href="{{route('package')}}" class="nav-item nav-link">Paketler</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sayfalar</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('destination')}}" class="dropdown-item">Gidelecek Konum</a>
                        <a href="{{route('booking')}}" class="dropdown-item">Rezervasyon</a>
                        <a href="{{route('team.index')}}" class="dropdown-item">Seyahat Rehberleri</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">Referans</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">İletişim</a>
            </div>
            <a href="{{route('admin')}}" class="btn btn-primary rounded-pill py-2 px-4">Giriş Yap</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et eos erat ipsum lorem sit</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
