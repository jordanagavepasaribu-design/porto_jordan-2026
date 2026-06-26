<!DOCTYPE html>

<html class="dark" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jordan McKenzie | Portfolio</title>
<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-container": "#0a0a0a",
                    "on-secondary-fixed-variant": "#5b4300",
                    "primary-container": "#0a0a0a",
                    "surface-container-highest": "#343535",
                    "on-secondary": "#3f2e00",
                    "error-container": "#93000a",
                    "on-primary": "#313030",
                    "outline": "#8e9192",
                    "surface-container": "#1e2020",
                    "on-error": "#690005",
                    "surface-tint": "#c9c6c5",
                    "on-tertiary-fixed-variant": "#474746",
                    "on-surface": "#e3e2e2",
                    "on-tertiary": "#313030",
                    "surface-variant": "#343535",
                    "primary-fixed": "#e5e2e1",
                    "secondary-fixed-dim": "#edc15a",
                    "on-tertiary-fixed": "#1c1b1b",
                    "secondary-fixed": "#ffdf9c",
                    "surface-dim": "#121414",
                    "surface": "#121414",
                    "on-primary-fixed": "#1c1b1b",
                    "inverse-surface": "#e3e2e2",
                    "on-primary-container": "#7b7979",
                    "secondary-container": "#8a6800",
                    "on-background": "#e3e2e2",
                    "inverse-on-surface": "#2f3131",
                    "surface-container-high": "#292a2a",
                    "tertiary-fixed-dim": "#c8c6c5",
                    "on-tertiary-container": "#7a7979",
                    "surface-container-low": "#1a1c1c",
                    "error": "#ffb4ab",
                    "surface-bright": "#38393a",
                    "on-error-container": "#ffdad6",
                    "outline-variant": "#444748",
                    "surface-container-lowest": "#0d0e0f",
                    "tertiary": "#c8c6c5",
                    "primary": "#c9c6c5",
                    "primary-fixed-dim": "#c9c6c5",
                    "on-secondary-fixed": "#251a00",
                    "on-secondary-container": "#ffeed1",
                    "inverse-primary": "#5f5e5e",
                    "on-surface-variant": "#c4c7c7",
                    "background": "#121414",
                    "on-primary-fixed-variant": "#474646",
                    "tertiary-fixed": "#e5e2e1",
                    "secondary": "#edc15a"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "container-max": "1440px",
                    "margin-desktop": "64px",
                    "base": "8px",
                    "gutter-desktop": "32px",
                    "section-gap": "128px",
                    "margin-mobile": "24px"
            },
            "fontFamily": {
                    "body-lg": ["Inter"],
                    "headline-lg": ["Inter"],
                    "display-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "display-lg-mobile": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-xl": ["Inter"]
            },
            "fontSize": {
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "display-lg": ["84px", {"lineHeight": "92px", "letterSpacing": "-0.04em", "fontWeight": "800"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.1em", "fontWeight": "600"}],
                    "display-lg-mobile": ["48px", {"lineHeight": "52px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #0A0A0A;
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
        }
        .noise-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            pointer-events: none;
            opacity: 0.03;
            background-image: url("https://www.transparenttextures.com/patterns/stardust.png");
        }
        .golden-glow:hover {
            box-shadow: 0 0 20px 2px rgba(201, 160, 61, 0.4);
        }
        .glass-header {
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .project-card:hover img {
            transform: scale(1.05);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="text-on-surface selection:bg-secondary selection:text-surface">
<div class="noise-overlay"></div>
<!-- TopNavBar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop py-base max-w-container-max mx-auto glass-header">
<div class="text-body-lg font-headline-lg tracking-tighter text-on-surface">JORDAN MCKENZIE</div>
<div class="hidden md:flex gap-gutter-desktop items-center">
<a class="text-label-md font-label-md text-secondary relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-secondary transition-all duration-300" href="#hero">Beranda</a>
<a class="text-label-md font-label-md text-on-surface/70 hover:text-secondary transition-colors duration-300" href="#about">Tentang</a>
<a class="text-label-md font-label-md text-on-surface/70 hover:text-secondary transition-colors duration-300" href="#skills">Keahlian</a>
<a class="text-label-md font-label-md text-on-surface/70 hover:text-secondary transition-colors duration-300" href="#portfolio">Portofolio</a>
<a class="text-label-md font-label-md text-on-surface/70 hover:text-secondary transition-colors duration-300" href="#contact">Kontak</a>
</div>
<button class="md:hidden text-secondary">
<span class="material-symbols-outlined">menu</span>
</button>
</nav>
<!-- Hero Section -->
<header class="min-h-screen flex flex-col justify-center px-margin-mobile md:px-margin-desktop relative overflow-hidden" id="hero">
<div class="absolute inset-0 z-0 opacity-20">
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-secondary/10 rounded-full blur-[120px]"></div>
</div>
<div class="relative z-10 max-w-4xl">
<span class="text-label-md font-label-md text-secondary tracking-widest uppercase mb-4 block animate-fade-in">Computer Science &amp; Visual Storytelling</span>
<h1 class="text-display-lg-mobile md:text-display-lg font-display-lg text-on-surface mb-6">JORDAN MCKENZIE</h1>
<p class="text-headline-lg font-headline-lg text-on-surface/80 mb-4">Mahasiswa Ilmu Komputer | Fotografer &amp; Videografer</p>
<p class="text-body-lg font-body-lg text-on-surface/60 max-w-2xl mb-10">Menggabungkan logika teknologi dengan seni visual untuk menciptakan karya yang tidak hanya fungsional, tetapi juga emosional.</p>
<div class="flex flex-col sm:flex-row gap-6">
<a class="bg-secondary text-surface px-10 py-4 font-label-md text-label-md rounded shadow-xl golden-glow transition-all duration-300 active:scale-95 flex items-center justify-center gap-2" href="#portfolio">
                    Lihat Karya
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
<a class="border border-secondary text-secondary px-10 py-4 font-label-md text-label-md rounded hover:bg-secondary/10 transition-all duration-300 flex items-center justify-center" href="#contact">
                    Hubungi Saya
                </a>
</div>
</div>
</header>
<!-- About Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-lowest" id="about">
<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter-desktop items-center">
<div class="relative group">
<div class="absolute -inset-4 border border-secondary/20 group-hover:border-secondary/40 transition-all duration-500 rounded"></div>
<img alt="Jordan McKenzie" class="w-full grayscale hover:grayscale-0 transition-all duration-700 rounded object-cover aspect-[4/5] shadow-2xl" data-alt="A cinematic portrait of a creative professional in a dark studio setting. He is holding a high-end mirrorless camera, illuminated by a sharp golden key light from the side that creates deep dramatic shadows. The background is a minimalist dark space with a faint hint of computer monitors displaying lines of code in a dim amber glow. The atmosphere is professional, technical, and artistic, emphasizing the fusion of computer science and photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlC2WyVDTgeX1JUQLLOZYaUeQfWtqLemubjtJgLrSSiRugv69eIZkACQsSEWrHwEk4MNWj9QmMKmUMsjqNoM6DuQMvF47lvkh0exD0_yRQqI1QbmQ2nJEzbnbOsLdyi5dr7HLuGVFL4Pq819ylJNj3E4K-02DsEjJ7abMWExNS1sEeQbP9uW2gk-6x02d3FP70gnfzwBzrQOYGwEOyscjUS-ybteLvOM_YQYAbTp_or7ggGItH-lnT3HT0LuL8rpCUl1B6_REIUPbE"/>
</div>
<div class="md:pl-12">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary/10 border border-secondary/20 mb-6">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="text-label-md font-label-md text-secondary">Tersedia untuk kolaborasi</span>
</div>
<h2 class="text-headline-xl font-headline-xl mb-8">Dua Dunia, Satu Visi.</h2>
<p class="text-body-lg font-body-lg text-on-surface/70 leading-relaxed mb-6">
                    Saya adalah mahasiswa Ilmu Komputer di MNC University. Meskipun keseharian saya bergelut dengan kode dan algoritma, saya menemukan keseimbangan kreatif melalui fotografi dan videografi.
                </p>
<p class="text-body-lg font-body-lg text-on-surface/70 leading-relaxed">
                    Pendekatan teknis dari dunia pemrograman membantu saya mengatur komposisi, pencahayaan, dan alur cerita visual dengan lebih presisi. Bagi saya, memecahkan bug sama seninya dengan mencari framing yang sempurna.
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
<!-- Skill 1 -->
<div class="p-base bg-surface-container border border-white/5 hover:border-secondary/30 transition-all duration-300">
<div class="mb-6 text-secondary">
<span class="material-symbols-outlined text-[48px]">photo_camera</span>
</div>
<h3 class="text-headline-lg font-headline-lg mb-4">Fotografi</h3>
<ul class="space-y-2 text-on-surface/60 font-body-md text-body-md">
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Potret</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Produk</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Landscape</li>
</ul>
</div>
<!-- Skill 2 -->
<div class="p-base bg-surface-container border border-white/5 hover:border-secondary/30 transition-all duration-300">
<div class="mb-6 text-secondary">
<span class="material-symbols-outlined text-[48px]">videocam</span>
</div>
<h3 class="text-headline-lg font-headline-lg mb-4">Videografi</h3>
<ul class="space-y-2 text-on-surface/60 font-body-md text-body-md">
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Cinematic</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Video Pendek</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Branding</li>
</ul>
</div>
<!-- Skill 3 -->
<div class="p-base bg-surface-container border border-white/5 hover:border-secondary/30 transition-all duration-300">
<div class="mb-6 text-secondary">
<span class="material-symbols-outlined text-[48px]">auto_fix_high</span>
</div>
<h3 class="text-headline-lg font-headline-lg mb-4">Editing</h3>
<ul class="space-y-2 text-on-surface/60 font-body-md text-body-md">
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Lightroom</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> DaVinci Resolve</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Color Grading</li>
</ul>
</div>
<!-- Skill 4 -->
<div class="p-base bg-surface-container border border-white/5 hover:border-secondary/30 transition-all duration-300">
<div class="mb-6 text-secondary">
<span class="material-symbols-outlined text-[48px]">code</span>
</div>
<h3 class="text-headline-lg font-headline-lg mb-4">Pemrograman</h3>
<ul class="space-y-2 text-on-surface/60 font-body-md text-body-md">
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Web Development</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Creative Coding</li>
<li class="flex items-center gap-2"><span class="w-1 h-1 bg-secondary rounded-full"></span> Visual Penunjang</li>
</ul>
</div>
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
<!-- Portfolio Item 1 -->
<div class="project-card relative overflow-hidden group border border-white/5 cursor-pointer">
<img class="w-full aspect-square object-cover transition-transform duration-700" data-alt="A moody architectural photograph of a modern brutalist concrete building at dusk. The lighting is cold and blue, with sharp geometric patterns of light spilling from a few windows. The composition is extremely minimalist, focusing on the texture of the raw concrete and the stark contrast between light and deep shadows. The overall mood is quiet, sophisticated, and technically precise." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0jeXfKiN7r-6Q9xT28t9hkvWtVo4g97yuxSkbbmpQJamzUS5XZ11GXp1iMPTeNDueFgDeCQ5CfBj2M6JOYqKVshC1omeKhnipVhwgTmpMACeGREmOghNYYrxJF_-893i7MNXTkASeoMTJLDE6m4lnedaCHeZfmxde-I2yjOQDurzDYt7aKiogoaf9kh88Wz7E57NLSp4A8LoJOlwRFXbXzCp7mBBLCj5BPWOIbItxYiyS2sW1p0tge_uGbC3fN4fSeUw8RzwUEHml"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-gutter-desktop">
<span class="text-label-md font-label-md text-secondary mb-2">Photography</span>
<h4 class="text-headline-lg font-headline-lg text-on-surface">Urban Geometry</h4>
</div>
</div>
<!-- Portfolio Item 2 -->
<div class="project-card relative overflow-hidden group border border-white/5 cursor-pointer">
<img class="w-full aspect-square object-cover transition-transform duration-700" data-alt="A cinematic scene from a branding film showing a professional barista preparing a specialty coffee. The lighting is warm and rich, focused on the golden liquid being poured and the steam rising in the light. The background is a dark, upscale café with high-contrast shadows. The visual style is premium, mimicking the look of high-end cinematic film with a subtle film grain texture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWacFZzRVwJfMWiT1AKLja5sZCZUulxLceI1wdf-vIX-mrZ5AgBjvS1raW_dKaCOq4Bw_AmA9-BpEwzaeJU8tAINqGgmQWauNjKpDQZ8B5D0H3_3SYWRbdijF_6v5ZnImSG8z-CeDOzJlNglO9jtqJ1zcSZhBqC8ta0oBYrOIzYwmXN9uS_VGPnLdtYZ3kBsXmwZxm6ncX9PpCXtBjn8C2pgapxDmw36J07FeWYXtgUNKTU-C46DLlN7lj090t5qkqFlaobXrgcwZ3"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-gutter-desktop">
<span class="text-label-md font-label-md text-secondary mb-2">Videography</span>
<h4 class="text-headline-lg font-headline-lg text-on-surface">The Craft</h4>
</div>
</div>
<!-- Portfolio Item 3 -->
<div class="project-card relative overflow-hidden group border border-white/5 cursor-pointer">
<img class="w-full aspect-square object-cover transition-transform duration-700" data-alt="A dramatic landscape photograph of a rugged mountain range under a starlit sky. The scene is shot in low light with a cool, deep blue color palette. The peaks are illuminated by faint moonlight, creating a majestic and serene atmosphere. The editing is crisp, showcasing the technical skill in long-exposure photography and color grading for a premium cinematic feel." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnyW1hHNd-AtP2pJuOOqFacCISRWDZqm8RF6_UG9bsX0fcAmMWxtrwHUlVUAxWsteajukB6f20WMa5gmVqhElcB29ycZBLqk7U_knSvj57Ir2VMDsgIbCz3x4VOIdTKaoh8FVm9o2b8PYj2UdNSkLpGUzs4zIZhx96_tjOMbfWlrqlyUDbdy618zl3TFcpmyNYKBChQWxPr0z46VBJyYhCD0Gjx7-3FhFQYKfuZHPiHKsyWUA9I9afo6LoikwnJzoSCJ765ztP72K5"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-gutter-desktop">
<span class="text-label-md font-label-md text-secondary mb-2">Photography</span>
<h4 class="text-headline-lg font-headline-lg text-on-surface">Nocturnal Peaks</h4>
</div>
</div>
<!-- Portfolio Item 4 -->
<div class="project-card relative overflow-hidden group border border-white/5 cursor-pointer">
<img class="w-full aspect-square object-cover transition-transform duration-700" data-alt="A creative close-up shot of an old analog camera lens next to a modern mechanical keyboard with glowing amber RGB lights. The lighting is low and moody, focusing on the intricate glass details of the lens and the sharp edges of the keyboard keys. This image perfectly represents the fusion of old-school optical art and modern technical programming culture in a dark-mode minimalist style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8uQM1XL8jPYo9HyABv7rA29zc5mX8tCGqkZSziEUcZnTp5Urbb0_ORSBFyHZ8W110xLAOHsS5mbP95W4wV7X3uZ1ucTZi8FzKD87cCRvYv1bXuyYdes3ZnQoJMqxuEbrrvwsm6-H8LtcQ4BOdrHEsxCH67OmDMo4YrfF1HnaUNW-XHsWH2Er1eoHJdf4siCOwfodV8y9EDZX9AgbjHcyZ485QYYsHApxrQSANlzJ11UXF8IoACmk7IazPJj1kSA6CJyWYOPmqjjcn"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-gutter-desktop">
<span class="text-label-md font-label-md text-secondary mb-2">Creative Coding</span>
<h4 class="text-headline-lg font-headline-lg text-on-surface">Analog Digital</h4>
</div>
</div>
<!-- Portfolio Item 5 -->
<div class="project-card relative overflow-hidden group border border-white/5 cursor-pointer">
<img class="w-full aspect-square object-cover transition-transform duration-700" data-alt="A professional product shot of a high-end watch resting on a piece of dark obsidian rock. The lighting is very controlled, using soft reflections to highlight the brushed metal textures and the glass face of the watch. The background is a deep, pure black, creating a luxurious and high-contrast composition that emphasizes precision and detail." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHgkH6rTSgygQPMIg5A76-J0pd56qq4YAh0DCqgQOQBI7Sa_WNvanI4fiXLA0_KliIw0pXwq1BXnVvGg_fE4m2ABLSWOqbL_E1zhPN-XdOT9ElsUWb5A-BzZ1ZzjtJHI5SB7X4kBmJd3mk2UzTPBk7AIxajJlgSDBVBa7ugEw51qKZKKQnVvBdf8BZum5Fr6pZDmiK69ifalcMmYHgdNtMGua759MCOhLog3o7XseKigEqJ683LkHG6MOWA_o0Ps-KRYJJqKWqYhlL"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-gutter-desktop">
<span class="text-label-md font-label-md text-secondary mb-2">Photography</span>
<h4 class="text-headline-lg font-headline-lg text-on-surface">Precision Time</h4>
</div>
</div>
<!-- Portfolio Item 6 -->
<div class="project-card relative overflow-hidden group border border-white/5 cursor-pointer">
<img class="w-full aspect-square object-cover transition-transform duration-700" data-alt="A wide cinematic shot of a person standing alone in a futuristic neon-lit city street at night. The lighting is dominated by glowing golden and cyan signs reflecting on wet pavement. The person is a dark silhouette, adding mystery and a narrative feel. The visual style is heavily inspired by cyberpunk cinematography, with deep shadows and vibrant light accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUzqnTI5epTCJWGqd6RIEK_JpxgD1TefY_qAYqMTzujh5EFmApjEv7bKgaIMg3zZbTD62RN44ecqoI-I2aAVoQxGyzlBff8spmmDIUdTbzJ35hsreXeO7QQtZvk0uULq5_suUNlFmyN0DNc-sX-veOzHDQwGtYnOhkVeD0LOEM99uWC7eT5Lm7swANiyPPu6Klfnd0MnX3l7ILNDk9-4i68q-KogpWdl_RTv8NODYhcdlOc5LCYP3xJcmfJ4NJmqxFqTIYJGyAsx7-"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-gutter-desktop">
<span class="text-label-md font-label-md text-secondary mb-2">Videography</span>
<h4 class="text-headline-lg font-headline-lg text-on-surface">Neon Echoes</h4>
</div>
</div>
</div>
</div>
</section>
<!-- Contact Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop" id="contact">
<div class="max-w-4xl mx-auto text-center">
<h2 class="text-display-lg-mobile md:text-headline-xl font-headline-xl mb-8">Tertarik bekerja sama? <br/><span class="text-secondary">Kirim pesan langsung.</span></h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter-desktop mb-16">
<a class="p-gutter-desktop bg-surface-container border border-white/5 hover:border-secondary transition-all group" href="mailto:jordan.mckenzie@email.com">
<span class="material-symbols-outlined text-secondary text-[32px] mb-4 group-hover:scale-110 transition-transform">mail</span>
<p class="text-label-md font-label-md text-on-surface/50 uppercase mb-2">Email</p>
<p class="text-body-md font-body-md text-on-surface">jordan.mckenzie@email.com</p>
</a>
<a class="p-gutter-desktop bg-surface-container border border-white/5 hover:border-secondary transition-all group" href="#">
<span class="material-symbols-outlined text-secondary text-[32px] mb-4 group-hover:scale-110 transition-transform">camera</span>
<p class="text-label-md font-label-md text-on-surface/50 uppercase mb-2">Instagram</p>
<p class="text-body-md font-body-md text-on-surface">@jordan_visuals</p>
</a>
<a class="p-gutter-desktop bg-surface-container border border-white/5 hover:border-secondary transition-all group" href="#">
<span class="material-symbols-outlined text-secondary text-[32px] mb-4 group-hover:scale-110 transition-transform">work</span>
<p class="text-label-md font-label-md text-on-surface/50 uppercase mb-2">LinkedIn</p>
<p class="text-body-md font-body-md text-on-surface">Jordan McKenzie</p>
</a>
</div>
<div class="inline-block relative">
<div class="absolute -inset-1 bg-secondary blur opacity-30"></div>
<button class="relative bg-secondary text-surface px-12 py-5 font-headline-lg text-label-md rounded uppercase tracking-widest hover:scale-105 transition-all">Mulai Proyek Baru</button>
</div>
</div>
</section>
<!-- Footer -->
<footer class="w-full py-gutter-desktop px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-base border-t border-white/5 bg-surface">
<div class="text-label-md font-headline-lg text-secondary">JORDAN MCKENZIE</div>
<div class="text-body-md font-body-md text-on-surface/50">
            © 2026 Jordan McKenzie | Dibuat dengan kode dan kamera
        </div>
<div class="flex gap-6">
<a class="text-on-surface/50 hover:text-secondary transition-all duration-300 hover:translate-y-[-2px]" href="#">Email</a>
<a class="text-on-surface/50 hover:text-secondary transition-all duration-300 hover:translate-y-[-2px]" href="#">Instagram</a>
<a class="text-on-surface/50 hover:text-secondary transition-all duration-300 hover:translate-y-[-2px]" href="#">LinkedIn</a>
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
</body></html>