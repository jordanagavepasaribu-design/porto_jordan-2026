<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Jordan</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    <style>
        body{
            background-color:#0A0A0A;
            scroll-behavior:smooth;
            -webkit-font-smoothing:antialiased;
            color:#e3e2e2;
        }

        .noise-overlay{
            position:fixed;
            inset:0;
            z-index:9999;
            pointer-events:none;
            opacity:.03;
            background-image:url("https://www.transparenttextures.com/patterns/stardust.png");
        }

        /* ======================
            Navbar Glass Effect
        ======================= */
        .glass-header{
            background:rgba(0,0,0,.55);
            backdrop-filter:blur(20px);
            -webkit-backdrop-filter:blur(20px);
            border-bottom:1px solid rgba(255,255,255,.05);
        }

        /* ======================
            Golden Button Effect
        ======================= */
        .golden-glow{
            transition:all .4s ease;
        }

        .golden-glow:hover{
            transform:translateY(-3px);
            box-shadow:
                0 0 25px rgba(237,193,90,.4),
                0 0 60px rgba(237,193,90,.15);
        }

        /* ======================
            Skill Card
        ======================= */
        .skill-card{
            transition:all .4s ease;
        }

        .skill-card:hover{
            transform:translateY(-10px);
            border-color:#edc15a;
        }

        /* ======================
            Portfolio Card
        ======================= */
        .project-card{
            overflow:hidden;
        }

        .project-card img{
            transition:.7s;
        }

        .project-card:hover img{
            transform:scale(1.08);
        }

        .project-card::before{
            content:'';
            position:absolute;
            inset:0;
            background:linear-gradient(
                transparent,
                rgba(0,0,0,.8)
            );
            opacity:0;
            transition:.5s;
        }

        .project-card:hover::before{
            opacity:1;
        }

        /* ======================
            Material Icons
        ======================= */
        .material-symbols-outlined{
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24;
        }

        /* ======================
            Scroll Animation
        ======================= */
        .reveal{
            opacity:0;
            transform:translateY(40px);
            transition:all 1s ease;
        }

        .reveal.show{
            opacity:1;
            transform:translateY(0);
        }
        /* ======================
            Navbar Menu
         ====================== */

         .nav-link{
            position: relative;
            color: rgba(255,255,255,.65);
            font-weight: 600;
            text-decoration: none;
            transition: all .3s ease;
        }

        .nav-link:hover{
            color: #edc15a;
        }

        .nav-link::after{
            content: "";
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 0;
            height: 2px;
            background: #edc15a;
            transition: width .3s ease;
        }

            .nav-link:hover::after{
                width: 100%;
            }

            .nav-link.active{
                color: #edc15a;
            }

            .nav-link.active::after{
                width: 100%;
            }

    </style>

</head>

<body class="text-on-surface selection:bg-secondary selection:text-surface">

    {{ $slot }}

    @livewireScripts

    <script>
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    entry.target.classList.add('show');
                }
            });
        });

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });
    </script>
    <script>
document.addEventListener('DOMContentLoaded', () => {

    const sections = document.querySelectorAll('header[id], section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function activeMenu() {

        let current = '';

        sections.forEach(section => {

            const top = section.offsetTop - 120;
            const height = section.offsetHeight;

            if (window.scrollY >= top && window.scrollY < top + height) {
                current = section.getAttribute('id');
            }

        });

        navLinks.forEach(link => {

            link.classList.remove('active');

            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }

        });

    }

    activeMenu();

    window.addEventListener('scroll', activeMenu);

});
</script>

</body>
</html>