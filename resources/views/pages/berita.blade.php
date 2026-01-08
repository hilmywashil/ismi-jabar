@extends ('layouts.app')

@section('title', 'Berita - ASITA Jawa Barat')


@section('content')
    <section class="page-banners">

        <div class="page-banner">
            <span class="label">Kegiatan</span>
            <h1>Berita Terkini</h1>
            <p>Berita & Kegiatan seputar ISMI JABAR</p>
        </div>
    </section>

    <section class="beritas">
        <div class="berita">
            <div class="berita-left">
                {{-- Berita Utama --}}
                @if(isset($beritaUtama) && $beritaUtama)
                    <div class="berita-item">
                        <a href="{{ route('berita-detail', $beritaUtama->slug) }}" class="berita-item-image">
                            <img src="{{ $beritaUtama->gambar_url }}" alt="{{ $beritaUtama->judul }}">
                        </a>
                        <div class="berita-item-content">
                            <div>
                                <h3>{{ $beritaUtama->judul }}</h3>
                                <p class="berita-home-date">{{ $beritaUtama->tanggal_format }}</p>
                                <p>{{ Str::limit(strip_tags($beritaUtama->konten), 150, '...') }}</p>
                            </div>
                            <a href="{{ route('berita-detail', $beritaUtama->slug) }}" class="berita-home-others-btn-more">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @endif

                {{-- Berita Lainnya --}}
                @forelse($beritas as $berita)
                    <div class="berita-item">
                        <a href="{{ route('berita-detail', $berita->slug) }}" class="berita-item-image">
                            <img src="{{ $berita->gambar_url }}" alt="{{ $berita->judul }}">
                        </a>
                        <div class="berita-item-content">
                            <div>
                                <h3>{{ $berita->judul }}</h3>
                                <p class="berita-home-date">{{ $berita->tanggal_format }}</p>
                                <p>{{ Str::limit(strip_tags($berita->konten), 150, '...') }}</p>
                            </div>
                            <a href="{{ route('berita-detail', $berita->slug) }}" class="berita-home-others-btn-more">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @empty
                    @if(!isset($beritaUtama) || !$beritaUtama)
                        <div style="text-align: center; padding: 3rem; color: #9ca3af;">
                            <p style="font-size: 1.125rem; margin-bottom: 0.5rem;">Belum Ada Berita</p>
                            <p>Berita akan segera ditampilkan di sini</p>
                        </div>
                    @endif
                @endforelse

                {{-- Pagination --}}
                @if($beritas->hasPages())
                    <div style="margin-top: 2rem;">
                        {{ $beritas->links() }}
                    </div>
                @endif
            </div>

            <div class="berita-right">
                {{-- Berita Populer --}}
                <h1 class="berita-badge">Berita Populer</h1>
                @forelse($beritaPopuler as $populer)
                    <div class="berita-right-item">
                        <a href="{{ route('berita-detail', $populer->slug) }}" class="berita-right-item-image">
                            <img src="{{ $populer->gambar_url }}" alt="{{ $populer->judul }}">
                        </a>
                        <div class="berita-right-item-content">
                            <div>
                                <h3>{{ $populer->judul }}</h3>
                                <p class="berita-home-date">{{ $populer->tanggal_format }}</p>
                                <p>{{ Str::limit(strip_tags($populer->konten), 100, '...') }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="color: #9ca3af; font-size: 0.875rem; padding: 1rem 0;">Belum ada berita populer</p>
                @endforelse

                {{-- Berita Terbaru --}}
                <h1 class="berita-badge">Berita Terbaru</h1>
                @forelse($beritaTerbaru as $terbaru)
                    <div class="berita-right-item">
                        <a href="{{ route('berita-detail', $terbaru->slug) }}" class="berita-right-item-image">
                            <img src="{{ $terbaru->gambar_url }}" alt="{{ $terbaru->judul }}">
                        </a>
                        <div class="berita-right-item-content">
                            <div>
                                <h3>{{ $terbaru->judul }}</h3>
                                <p class="berita-home-date">{{ $terbaru->tanggal_format }}</p>
                                <p>{{ Str::limit(strip_tags($terbaru->konten), 100, '...') }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="color: #9ca3af; font-size: 0.875rem; padding: 1rem 0;">Belum ada berita terbaru</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection