@extends ('layouts.app')

@section('title', 'Berita - ASITA Jawa Barat')


@section('content')
    <section class="hero-howtojoins">
        <div class="hero-howtojoin" data-aos="fade-up">
            <h1>Article ASITA JABAR</h1>
            <p>Articles About ASITA JABAR</p>
        </div>
    </section>
    <section class="beritas">

        <div class="berita-content" data-aos="fade-up">
            @foreach($beritas as $b)
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


            <!-- {{-- Pagination --}}
            @if($beritas->hasPages())
                <div style="margin-top: 2rem;">
                    {{ $beritas->links() }}
                </div>
            @endif -->
        </div>
    </section>
@endsection