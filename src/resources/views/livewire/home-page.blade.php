<div>
<div class="noise-overlay"></div>
<!-- TopNavBar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop py-base max-w-container-max mx-auto glass-header">

    <div class="text-body-lg font-headline-lg tracking-tighter text-on-surface">
        {{ $profile?->name }}
    </div>

    <div class="hidden md:flex gap-gutter-desktop items-center">

        <a href="#hero" class="nav-link">Beranda</a>
        <a href="#about" class="nav-link">Tentang</a>
        <a href="#skills" class="nav-link">Keahlian</a>
        <a href="#portfolio" class="nav-link">Portofolio</a>
        <a href="#contact" class="nav-link">Kontak</a>

    </div>

</nav>
<!-- Hero Section -->
<header
    id="hero"
    class="min-h-screen flex items-center px-margin-mobile md:px-margin-desktop relative overflow-hidden"
>
    <!-- Glow Background -->
    <div class="absolute inset-0 opacity-20">
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
            w-[900px] h-[900px] bg-secondary/10 rounded-full blur-[180px]">
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-5xl">

        <span class="text-secondary uppercase tracking-[5px] text-sm font-semibold mb-6 block">
    Computer Science & Visual Storytelling
</span>

<h1 class="text-[90px] md:text-[110px] font-extrabold leading-none tracking-tight text-white mb-8">
    {{ $profile?->name }}
</h1>

<h2 class="text-3xl md:text-4xl font-bold text-white/90 mb-8">
    {{ $profile?->headline }}
</h2>

<p class="text-xl text-white/50 max-w-3xl leading-relaxed mb-14">
    {{ $profile?->about }}
</p>

        <!-- Button -->
        <div class="flex flex-col sm:flex-row gap-8 mt-10">

    <a
        href="#portfolio"
        class="px-10 py-5 rounded-2xl bg-black text-white font-semibold flex items-center justify-center gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(237,193,90,0.35)]"
    >
        Lihat Karya
        <span class="material-symbols-outlined">
            arrow_forward
        </span>
    </a>

    <a
        href="#contact"
        class="px-10 py-5 rounded-2xl bg-black text-white font-semibold flex items-center justify-center gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(237,193,90,0.35)]"
    >
        Hubungi Saya
        <span class="material-symbols-outlined">
            call_made
        </span>
    </a>

</div>

    </div>
</header>
<!-- About Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-lowest" id="about">
<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter-desktop items-center">
<div class="relative group">
<div class="absolute -inset-4 border border-secondary/20 group-hover:border-secondary/40 transition-all duration-500 rounded"></div>
<img
    src="{{ $profile?->photo ? asset('storage/' . $profile->photo) : 'https://placehold.co/600x800' }}"
    alt="{{ $profile?->name }}"
    class="w-full grayscale hover:grayscale-0 transition-all duration-700 rounded object-cover aspect-[4/5] shadow-2xl">
</div>
<div class="md:pl-12">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary/10 border border-secondary/20 mb-6">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="text-label-md font-label-md text-secondary">Tersedia untuk kolaborasi</span>
</div>
<h2 class="text-headline-xl font-headline-xl mb-8">Dua Dunia, Satu Visi.</h2>
<p class="text-body-lg font-body-lg text-on-surface/70 leading-relaxed mb-6">
                   {{ $profile?->headline }}
                </p>
<p class="text-body-lg font-body-lg text-on-surface/70 leading-relaxed">
                    {{ $profile?->headline }}
                </p>
</div>
</div>
</section>
<!-- Skills Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop" id="skills">
<div class="max-w-container-max mx-auto">
<div class="mb-16">
<h2 class="text-headline-xl font-headline-xl mb-4">Keahlian</h2>
<div class="w-20 h-1 bg-secondary"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter-desktop">

    @foreach ($skills as $skill)

        <div class="p-base bg-surface-container border border-white/5 hover:border-secondary/30 transition-all duration-300">

            @if($skill->icon)
                <div class="mb-6 text-secondary">
                    <span class="material-symbols-outlined text-[48px]">
                        {{ $skill->icon }}
                    </span>
                </div>
            @endif

            <h3 class="text-headline-lg font-headline-lg mb-4">
                {{ $skill->title }}
            </h3>

            <p class="text-on-surface/60 font-body-md text-body-md">
                {{ $skill->description }}
            </p>

        </div>

    @endforeach

</div>
</div>
</section>
<!-- Portfolio Gallery -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-lowest" id="portfolio">
<div class="max-w-container-max mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-base">
<div>
<h2 class="text-headline-xl font-headline-xl mb-4">Portofolio</h2>
<p class="text-body-md font-body-md text-on-surface/50 max-w-lg">Koleksi proyek terpilih yang menunjukkan eksplorasi visual dan teknis saya.</p>
</div>
<div class="flex gap-4">
<button class="text-label-md font-label-md text-secondary border-b-2 border-secondary pb-1">Semua</button>
<button class="text-label-md font-label-md text-on-surface/40 hover:text-on-surface transition-colors pb-1">Foto</button>
<button class="text-label-md font-label-md text-on-surface/40 hover:text-on-surface transition-colors pb-1">Video</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter-desktop">

    @foreach ($portfolios as $portfolio)

<div class="project-card relative overflow-hidden group border border-white/5 cursor-pointer">

    <img
        src="{{ asset('storage/' . $portfolio->image) }}"
        alt="{{ $portfolio->title }}"
        class="w-full aspect-square object-cover transition-transform duration-700">

    <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-gutter-desktop">

        <span class="text-label-md font-label-md text-secondary mb-2">
            {{ ucfirst($portfolio->category) }}
        </span>

        <h4 class="text-headline-lg font-headline-lg text-on-surface">
            {{ $portfolio->title }}
        </h4>

    </div>

</div>

@endforeach
</div>
</div>
</section>
<!-- Contact Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop" id="contact">
<div class="max-w-4xl mx-auto text-center">
<h2 class="text-display-lg-mobile md:text-headline-xl font-headline-xl mb-8">Tertarik bekerja sama? <br/><span class="text-secondary">Kirim pesan langsung.</span></h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter-desktop mb-16">
<a
    class="p-gutter-desktop bg-surface-container border border-white/5 hover:border-secondary transition-all group text-center flex flex-col items-center justify-center"
    href="mailto:jordanagavepasaribu@gmail.com"
>
    <span class="material-symbols-outlined text-secondary text-[32px] mb-4 group-hover:scale-110 transition-transform">
        mail
    </span>

    <p class="text-label-md font-label-md text-on-surface/50 uppercase mb-3">
        Email
    </p>

    <p class="text-body-md font-body-md text-on-surface break-all">
        jordanagavepasaribu@gmail.com
    </p>
</a>
<a
    class="p-gutter-desktop bg-surface-container border border-white/5 hover:border-secondary transition-all group"
    href="https://instagram.com/jordanagaave"
    target="_blank"
>
    <span class="material-symbols-outlined text-secondary text-[32px] mb-4 group-hover:scale-110 transition-transform">
        camera
    </span>

    <p class="text-label-md font-label-md text-on-surface/50 uppercase mb-2">
        Instagram
    </p>

    <p class="text-body-md font-body-md text-on-surface">
        @jordanagaave
    </p>
</a>
<a
    class="p-gutter-desktop bg-surface-container border border-white/5 hover:border-secondary transition-all group"
    href="https://www.facebook.com/jordan.a.pasaribu.3"
    target="_blank"
>
    <span class="material-symbols-outlined text-secondary text-[32px] mb-4 group-hover:scale-110 transition-transform">
        public
    </span>

    <p class="text-label-md font-label-md text-on-surface/50 uppercase mb-2">
        Facebook
    </p>

    <p class="text-body-md font-body-md text-on-surface">
        Jordan Agave Pasaribu
    </p>
</a>
</div>
<div class="inline-block relative">
<div class="absolute -inset-1 bg-secondary blur opacity-30"></div>
<button class="relative bg-secondary text-surface px-12 py-5 font-headline-lg text-label-md rounded uppercase tracking-widest hover:scale-105 transition-all">Mulai Proyek Baru</button>
</div>
</div>
</section>
<!-- Footer -->
<footer class="w-full py-gutter-desktop px-margin-mobile md:px-margin-desktop border-t border-white/5 bg-surface">

    <div class="flex flex-col md:flex-row justify-between items-center gap-4">

        <div class="text-body-md text-on-surface/50">
            © 2026 Jordan McKenzie | Dibuat dengan kesederhanaan
        </div>

        <div class="text-on-surface/40 italic text-center md:text-right">
            "Imagine all the people living life in peace."
        </div>

    </div>

</footer>
<script>
        // Simple micro-interaction for scroll reveals
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section, .project-card').forEach(el => {
            el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
            observer.observe(el);
        });

        // Smooth scroll adjustment for fixed header
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</div>