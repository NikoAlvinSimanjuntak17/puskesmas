<section id="testimonials" class="testimonials section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                <h3>Testimonials</h3>
                <p>See what our clients are saying about us.</p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": { "delay": 5000 },
                      "slidesPerView": "auto",
                      "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true }
                    }
                    </script>

                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset($testimonial->image) }}" class="testimonial-img flex-shrink-0" alt="{{ $testimonial->name }}">
                                        <div>
                                            <h3>{{ $testimonial->name }}</h3>
                                            <h4>{{ $testimonial->title }}</h4>
                                            <div class="stars">
                                                @for($i = 0; $i < $testimonial->rating; $i++)
                                                    <i class="bi bi-star-fill"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ $testimonial->message }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
