<!-- Booking Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Rezervasyon</h6>
                    <h1 class="text-white mb-4">Online Rezervasyon</h1>
                    <p class="mb-4">Konforlu ve kolay bir şekilde online rezervasyon yaparak seyahatinizi planlayın. Sadece birkaç tıklama ile en uygun fırsatları yakalayın.</p>
                    <p class="mb-4">Seyahat etmek hiç bu kadar kolay olmamıştı. Online sistemimizle sadece birkaç adımda tatilinizi planlayabilir, unutulmaz anılar biriktirebilirsiniz.</p>
                    <p class="mb-4">Farklı destinasyonlar, eşsiz deneyimler ve unutulmaz anılar için bizimle yolculuğa çıkın. Sizin için en uygun turları hemen keşfedin.</p>
                    <p class="mb-4">Sizlere en özel turlarımızla hizmet veriyoruz. Macera arayanlardan, rahat bir tatil isteyenlere kadar herkes için uygun seçenekler sunuyoruz. Hemen tur rezervasyonunuzu yapın ve unutulmaz bir deneyime adım atın.</p>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Tur Rezervasyonu Yapın</h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.reservation.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="datetime" name="date_time" placeholder="Date & Time" required>
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="destination" name="destination" placeholder="Enter Destination" required>
                                    <label for="destination">Destination</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" name="message" style="height: 100px" required></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->
