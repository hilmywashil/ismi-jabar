<!DOCTYPE html>
<html lang="en">

<body>
    <header>
        <nav>
            <div class="logo">
                <img class="logo1" src="{{ asset('images/asita-logo.png') }}" alt="Logo 1">
            </div>

            <div class="menu-toggle" id="menu-toggle">
                <i class="fa fa-bars"></i>
            </div>

            <div class="menu" id="menu">
                <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
                <div class="dropdown">
                    <a href="javascript:void(0)"
                        class="nav-link dropdown-toggle {{ Request::routeIs('about', 'vision-mission') ? 'active' : '' }}">
                        About ASITA <i class="fa fa-caret-down"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">
                            ASITA Profile
                        </a>
                        <a href="{{ route('vision-mission') }}"
                            class="{{ Request::routeIs('vision-mission') ? 'active' : '' }}">
                            Vision & Mission
                        </a>
                    </div>
                </div>
                <a href="{{ route('how-to-join') }}"
                    class="nav-link {{ Request::routeIs('how-to-join') ? 'active' : '' }}">
                    How to Join
                </a>
                <div class="dropdown">
                    <a href="javascript:void(0)"
                        class="nav-link dropdown-toggle {{ Request::routeIs('e-katalog', 'active-member') ? 'active' : '' }}">
                        Membership <i class="fa fa-caret-down"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a href="{{ route('e-katalog') }}" class="{{ Request::routeIs('e-katalog') ? 'active' : '' }}">
                            Showcase    
                        </a>
                        <a href="{{ route('active-member') }}"
                            class="{{ Request::routeIs('active-member') ? 'active' : '' }}">
                            Active Member
                        </a>
                        <a href="{{ route('vision-mission') }}"
                            class="{{ Request::routeIs('vision-mission') ? 'active' : '' }}">
                            Company Listing 
                        </a>
                    </div>
                </div> <a href="{{ route('berita') }}"
                    class="nav-link {{ Request::routeIs('berita') ? 'active' : '' }}">
                    Article
                </a>
                <a href="{{ route('contact') }}" class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
                <div class="buttons-mobile">
                    @auth('admin')
                        {{-- Jika login sebagai Admin --}}
                        <a href="{{ route('admin.dashboard') }}" class="btn">Dashboard Admin</a>
                    @else
                        @auth('anggota')
                            {{-- Jika login sebagai Anggota --}}
                            <a href="{{ route('profile-anggota') }}" class="btn-transparent">Profile Anggota</a>
                        @else
                            {{-- Jika belum login (Guest) --}}
                            <a href="{{ route('admin.login') }}" class="btn">Login</a>
                            <a href="{{ route('join-us') }}" class="btn-transparent">Join Us</a>
                        @endauth
                    @endauth
                </div>
            </div>

            <div class="buttons">
                @auth('admin')
                    {{-- Jika login sebagai Admin --}}
                    <a href="{{ route('admin.dashboard') }}" class="btn">Dashboard Admin</a>
                @else
                    @auth('anggota')
                        {{-- Jika login sebagai Anggota --}}
                        <a href="{{ route('profile-anggota') }}" class="btn-transparent">Profile Anggota</a>
                    @else
                        {{-- Jika belum login (Guest) --}}
                        <a href="{{ route('admin.login') }}" class="btn">Login</a>
                        <a href="{{ route('join-us') }}" class="btn-transparent">Join Us</a>
                    @endauth
                @endauth
            </div>
        </nav>
    </header>
</body>

</html>