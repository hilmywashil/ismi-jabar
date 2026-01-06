@extends('layouts.app')

@section('title', 'ASITA JABAR - Association Of The Indonesian Tours & Travel Agencies')

@section('content')

    <section class="hero">
        <div class="hero-1" data-aos="fade-up">
            <h1>Welcome to ASITA JABAR</h1>
            <p>Association Of The Indonesian
                Tours & Travel Agencies</p>
            <div class="hero-buttons">
                <a href="{{ route('about') }}" class="btn">About Us</a>
            </div>
        </div>
    </section>

    <section class="main-info">
        <div class="info-cards">
            <div class="info-card" data-aos="fade-up">
                <img src="{{ asset('images/icons/handshake.png') }}" alt="Anggota" class="icon">
                <h3>Mitra Handal</h3>
                <p>Standart operasional
                    prosedur selalu di terapkan
                    dalam tiap system kegiatan
                    dan kerjasama</p>
            </div>
            <div class="info-card" data-aos="fade-up">
                <img src="{{ asset('images/icons/achievement.png') }}" alt="Perusahaan" class="icon">
                <h3>Berpengalaman</h3>
                <p>Sumber daya terlatih,
                    menjadikan ASITA sebagai
                    mitra yang tepat pariwisata
                    di Indonesia</p>

            </div>
            <div class="info-card" data-aos="fade-up">
                <img src="{{ asset('images/icons/globe.png') }}" alt="Klasifikasi Usaha" class="icon">
                <h3>Relasi Luas</h3>
                <p>Terbukti ASITA membawa
                    devisa besar untuk negara
                    Indonesia dalam tingkat
                    nasional</p>

            </div>
        </div>
    </section>

    <section class="about">
        <div class="abouts" data-aos="fade-up">
            <div class="about-image">
                <img src="{{ asset('images/10-des.jpg') }}" alt="about Image">
            </div>

            <div class="about-content">
                <div class="about-heading">
                    <h2>About ASITA JABAR</h2>
                </div>
                <div class="about-items">
                    <a href="{{ route('outline') }}" style="text-decoration: none;">
                        <div class="about-item">
                            <img src="{{ asset('images/icons/building.png') }}">
                            <h3>Outline of ASITA</h3>
                        </div>
                    </a>
                    <a href="" style="text-decoration: none;">
                        <div class="about-item">
                            <img src="{{ asset('images/icons/access.png') }}">
                            <h3>Activities</h3>
                        </div>
                    </a>
                    <a href="" style="text-decoration: none;">
                        <div class="about-item">
                            <img src="{{ asset('images/icons/world-map.png') }}">
                            <h3>Regional Board - JABAR</h3>
                        </div>
                    </a>
                    <a href="{{ route('about') }}" style="text-decoration: none;">
                        <div class="about-item">
                            <img src="{{ asset('images/icons/user.png') }}">
                            <h3>ASITA Profile</h3>
                        </div>
                    </a>
                    <a href="" style="text-decoration: none;">
                        <div class="about-item">
                            <img src="{{ asset('images/icons/graph.png') }}">
                            <h3>Tourism Statistic</h3>
                        </div>
                    </a>
                    <a href="{{ route('contact') }}" style="text-decoration: none;">
                        <div class="about-item">
                            <img src="{{ asset('images/icons/phone-call.png') }}">
                            <h3>Contact Us</h3>
                        </div>
                    </a>
                    <a href="{{ route('vision-mission') }}" style="text-decoration: none;">
                        <div class="about-item">
                            <img src="{{ asset('images/icons/target.png') }}">
                            <h3>Vision & Mission</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="buku-informasi-home">
        <h2 data-aos="fade-up">ASITA News Update</h2>
        <div class="buku-informasi-home-content" data-aos="fade-up">
            <div class="owl-carousel anggota-carousel">

                @foreach($dokumentasiBerita->take(6) as $b)
                    <a href="{{ route('berita-detail', $b->slug) }}">
                        <div class="buku-card">
                            <img src="{{ $b->gambar_url }}" alt="Usaha Anggota 1" loading="lazy">
                            <div class="container">
                                <p>{{ $b->tanggal_format }}</p>
                                <h4>{{ Str::limit($b->judul, limit: 60) }}</h4>
                                <p>Read More</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            @if ($dokumentasiBerita->isEmpty())
                <div style="text-align: center; padding: 0px 0px 50px 0px;">
                    <p>Belum ada Artikel yang tersedia.</p>
                </div>
            @endif

            <div style="text-align:center; margin-top:25px;">
                <a href="#" class="btn">See More</a>
            </div>
        </div>
    </section>

    <section class="join-us">
        <div class="join-us-container">
            <div class="join-us-children" data-aos="fade-up">
                <h2>Join Us</h2>
                <a href="{{ route('how-to-join') }}" style="text-decoration: none;">
                    <div class="about-item">
                        <img src="{{ asset('images/icons/join.png') }}">
                        <h3>How to join ASITA?</h3>
                    </div>
                </a>
                <a href="" style="text-decoration: none;">
                    <div class="about-item">
                        <img src="{{ asset('images/icons/help.png') }}">
                        <h3>FAQ</h3>
                    </div>
                </a>
            </div>
            <div class="join-us-children" data-aos="fade-up">
                <h2>Roaster</h2>
                <a href="{{ route('active-member') }}" style="text-decoration: none;">
                    <div class="about-item">
                        <img src="{{ asset('images/icons/check.png') }}">
                        <h3>Active member search alphabetically</h3>
                    </div>
                </a>
                <a href="" style="text-decoration: none;">
                    <div class="about-item">
                        <img src="{{ asset('images/icons/group-users.png') }}">
                        <h3>Associated Member</h3>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section class="ekatalog-home">
        <div class="ekatalog-homes" data-aos="fade-up">
            <h2>Showcase</h2>
            <div class="owl-carousel showcase-carousel">

                @foreach($katalogs->take(6) as $katalog)
                    <a href="{{ route('e-katalog.detail', $katalog->id) }}">
                        <div class="katalog-card">
                            <img src="{{ $katalog->logo_url }}" alt="{{ $katalog->company_name }}">
                            <div class="container">
                                <h4><b>{{ Str::limit($katalog->company_name, 20, '...') }}</b></h4>
                                <p>{{ Str::limit($katalog->business_field, 25, '...') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            @if ($katalogs->isEmpty())
                <a href="{{ route('e-katalog') }}">
                    <div class="katalog-card">
                        <img src="{{ asset('images/asita-logo.png') }}">
                        <div class="container">
                            <h4><b>Belum Ada Data</b></h4>
                            <p>Klik untuk lihat katalog</p>
                        </div>
                    </div>
                </a>
            @endif

            <div style="margin-top: 50px;">
                <a href="{{ route('e-katalog') }}" class="btn">Lihat Lebih Banyak</a>
            </div>
        </div>
    </section>
    <section class="bottom-homes">
        <div class="bottom-home" data-aos="fade-up">
            <div class="bottom-home-1">
                <div class="bottom-home-1-card">
                    <img src="{{ asset('images/icons/enter.png') }}" alt="">
                    <h1>Member Login</h1>
                </div>
                <div class="bottom-home-1-card">
                    <img src="{{ asset('images/icons/calendar.png') }}" alt="">
                    <h1>Calendar Events</h1>
                </div>
                <div class="bottom-home-1-card">
                    <img src="{{ asset('images/icons/web.png') }}" alt="">
                    <h1>Wholesale Tour Operator</h1>
                </div>
            </div>
            <div class="bottom-home-2">

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.counter');

            const animateCounter = (counter) => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000; // 2 detik
                const increment = target / (duration / 16); // 60fps
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                updateCounter();
            };

            // Intersection Observer untuk animasi saat scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
@endpush