<!-- Navbar -->
<nav class="navbar">
    <a href="/" class="logo-container" style="text-decoration: none; color: inherit;">
        <img src="{{ asset('assets/img/Logo.svg') }}" alt="Aivra Logo" width="40" height="40" style="object-fit: contain;">
        <span class="logo-text">Aivra</span>
    </a>

    <div class="nav-center">
        <div class="nav-links">
            @if(isset($navLinks))
            @foreach($navLinks as $link)
            <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
            @endforeach
            @else
            <a href="/#solucoes">Soluções</a>
            <a href="/#sobre">Sobre</a>
            <a href="/#faq">FAQ</a>
            @endif
        </div>
    </div>

    <div class="nav-right">
        <div class="social-wrapper">
            <button class="mobile-contacts-toggle" aria-label="Contatos">
                Contatos <i class="ph ph-caret-down"></i>
            </button>
            <div class="social-icons-nav">
                <a href="https://linkedin.com" target="_blank" class="social-icon-nav" aria-label="LinkedIn"><i
                        class="ph ph-linkedin-logo"></i></a>
                <a href="https://instagram.com" target="_blank" class="social-icon-nav" aria-label="Instagram"><i
                        class="ph ph-instagram-logo"></i></a>
                <a href="https://wa.me/5511999999999" target="_blank" class="social-icon-nav" aria-label="WhatsApp"><i
                        class="ph ph-whatsapp-logo"></i></a>
            </div>
        </div>
        @if(isset($ctaButton))
        {!! $ctaButton !!}
        @else
        <a href="/contato" class="btn-primary small">Contatar</a>
        @endif
    </div>
</nav>