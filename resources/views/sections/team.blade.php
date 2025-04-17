<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Rehberlerimiz</h6>
            <h1 class="mb-5">Rehber Kadromuzla Tanışın</h1>
        </div>
        <div class="row g-4">
            @foreach($guides as $guide)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('storage/' . $guide->photo) }}" alt="{{ $guide->name }}">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="{{ $guide->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="{{ $guide->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="{{ $guide->instagram }}"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{ $guide->name }}</h5>
                            <small>{{ $guide->description }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
