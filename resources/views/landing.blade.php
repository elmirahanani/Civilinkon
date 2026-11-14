
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilinkon - Better Society Together</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-white font-['Poppins'] text-neutral-900">
    

    
    <!-- NAVBAR --> 
    <header class="sticky top-0 z-50 border-b border-neutral-100 bg-white/95 backdrop-blur">
        <nav class="navbar-container mx-auto flex h-[65px] max-w-7xl items-center justify-between px-5 md:px-8 lg:px-10">

            <!-- LOGO -->
            <a href="#home" class="shrink-0">
                <img src="{{ asset('assets/Logo.png') }}"
                    alt="Civilinkon"
                    class="h-8 w-auto">
            </a>

            <!-- DESKTOP MENU -->
            <div class="desktop-menu items-center gap-8 font-sans text-sm">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#features">Features</a>
                <a href="#testimonial">Testimonial</a>
                <a href="#faq">FAQ</a>
            </div>

            <!-- DESKTOP BUTTONS -->
            <div class="desktop-auth items-center gap-3">
                <a href="#login"
                class="rounded-full border border-orange-200 px-5 py-2 text-sm font-medium text-orange-600 hover:bg-orange-50">
                {{ route('/login', ['id'=>1]) }}
                    Login
                </a>

                <a href="#register"
                class="rounded-full bg-orange-600 px-5 py-2 text-sm font-medium text-white hover:bg-orange-700">
                    Sign Up
                </a>
            </div>

            <!-- MOBILE HAMBURGER -->
            <details class="mobile-menu relative">
                <summary class="cursor-pointer list-none p-2">
                    <svg class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                </summary>

                <div class="absolute right-0 top-12 z-50 w-56 rounded-xl border border-neutral-100 bg-white p-5 shadow-xl">
                    <div class="flex flex-col gap-4 text-sm">
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#features">Features</a>
                        <a href="#testimonial">Testimonial</a>
                        <a href="#faq">FAQ</a>

                        <hr>

                        <a href="#login" class="rounded-full border border-orange-200 px-4 py-2 text-center text-orange-600">Login</a>
                        <a href="#register" class="rounded-full bg-orange-600 px-4 py-2 text-center text-white">Sign Up</a>
                    </div>
                </div>
            </details>

        </nav>
    </header>

   
    {{-- <!-- hero --> --}}
    <section id="home"
            class="relative isolate overflow-hidden bg-white px-6 py-24 text-center sm:py-28">

            <!-- BACKGROUND GRID -->
            <div
                class="pointer-events-none absolute inset-0 -z-10 opacity-70"
                style="
                    background-image:
                        linear-gradient(rgba(180,180,180,0.22) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(180,180,180,0.22) 1px, transparent 1px);
                    background-size: 44px 44px;
                    mask-image: linear-gradient(to bottom, black 65%, transparent 100%);
                    -webkit-mask-image: linear-gradient(to bottom, black 65%, transparent 100%);
                ">
            </div>

            <!-- ORANGE GLOW -->
            <div class="pointer-events-none absolute left-1/2 top-1/3 -z-10
                h-[500px] w-[500px] -translate-x-1/2 rounded-full
                bg-orange-300/30 blur-[120px]">
            </div>

            <!-- SECONDARY GLOW -->
            <div class="pointer-events-none absolute left-[20%] top-[45%] -z-10
                h-80 w-80 rounded-full bg-amber-200/30 blur-[100px]">
            </div>

            <div class="relative mx-auto max-w-5xl">

                <!-- BADGE -->
                <span class="inline-block rounded-full
                    bg-gradient-to-r from-orange-900 to-orange-950
                    px-6 py-2 text-xs font-semibold tracking-wider text-white
                    shadow-lg shadow-orange-900/20">
                    NEXT GEN DIGITAL INNOVATION
                </span>

                <!-- HEADING WRAPPER -->
                <div class="relative">

                    <h1 class="mt-8 text-4xl font-extrabold leading-[1.35]
                        tracking-tight sm:text-5xl lg:text-6xl">

                        Report

                        <img
                            src="https://images.unsplash.com/photo-1519608487953-e999c86e7455?w=200"
                            alt="Community"
                            class="mx-1 inline-block h-10 w-16 rounded-full
                            object-cover align-middle shadow-md sm:h-14 sm:w-24">

                        <span class="text-orange-600">Community</span>

                        <br>

                        <span class="text-orange-600">Issues</span>

                        <span class="text-transparent [-webkit-text-stroke:1px_#171717]">
                            for a
                        </span>

                        <img
                            src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?w=200"
                            alt="City"
                            class="mx-1 inline-block h-10 w-16 rounded-full
                            object-cover align-middle shadow-md sm:h-14 sm:w-24">

                        <span>Better</span>

                        <br>

                        <img
                            src="https://images.unsplash.com/photo-1519501025264-65ba15a82390?w=200"
                            alt="Society"
                            class="mx-1 inline-block h-10 w-16 rounded-full
                            object-cover align-middle shadow-md sm:h-14 sm:w-24">

                        Society

                    </h1>

                    <!-- FLOATING DEPLOY NOTIFICATION -->
                    <div class="pointer-events-none absolute right-[-5%] top-[70%] z-20 hidden lg:block xl:right-[-10%]">
                        <!-- CURSOR POINTER -->
                        <svg
                            class="absolute -left-4 -top-8 z-30 h-9 w-9
                            rotate-[-12deg] drop-shadow-md"
                            viewBox="0 0 32 32"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">

                            <path
                                d="M5 3L26 19L16.5 20.5L12 29L5 3Z"
                                fill="#FF5A0A"
                                stroke="white"
                                stroke-width="2"
                                stroke-linejoin="round"/>
                        </svg>

                        <!-- NOTIFICATION -->
                        <div class="flex items-center gap-3 rounded-full
                            border border-white/80
                            bg-orange-600 px-5 py-3
                            shadow-[0_12px_35px_rgba(255,90,10,0.30)]
                            ring-1 ring-orange-400/20
                            transition duration-300 hover:-translate-y-2">

                            <!-- LOGO ICON -->
                            <div class="flex h-12 w-12 shrink-0
                                items-center justify-center rounded-full
                                bg-white text-orange-600">

                                <svg
                                    class="h-8 w-8"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">

                                    <path d="M7 7a5 5 0 0 1 10 0v10a5 5 0 0 1-10 0"/>
                                    <path d="m9 10 3-3 3 3"/>
                                    <path d="m15 14-3 3-3-3"/>

                                </svg>

                            </div>

                            <!-- TEXT -->
                            <div class="whitespace-nowrap text-left text-white">
                                <p class="text-base font-medium leading-tight">
                                    Bismillah Deploy
                                </p>

                                <p class="mt-1 text-sm font-semibold leading-tight">
                                    Creative Minds, Meaningful Impact!
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- DESCRIPTION -->
                <p class="mx-auto mt-7 max-w-2xl text-sm
                    leading-8 text-neutral-500 sm:text-base">

                    Civilinkon connects citizens, communities and local authorities.
                    Report damaged roads, broken streetlights and waste piles,
                    then watch them get fixed, step by step.

                </p>

                <!-- BUTTONS -->
                <div class="mt-8 flex flex-wrap justify-center gap-3">

                    <a href="#"
                        class="rounded-full bg-gradient-to-r
                        from-orange-500 to-orange-600
                        px-7 py-3 text-sm font-semibold text-white
                        shadow-lg shadow-orange-200
                        transition duration-300 hover:-translate-y-1
                        hover:shadow-orange-300">

                        Report an Issue

                    </a>

                    <a href="#features"
                        class="rounded-full border border-orange-200
                        bg-white/80 px-7 py-3 text-sm font-semibold
                        text-orange-600 backdrop-blur-sm
                        transition duration-300 hover:-translate-y-1
                        hover:bg-orange-50">

                        Explore Features

                    </a>

                </div>

            </div>
    </section>

    {{-- <!-- about  --> --}}
    <section id="about" class="relative overflow-hidden px-6 py-24">

        <div class="pointer-events-none absolute -bottom-40 -right-32 h-96 w-96 rounded-full bg-orange-100/70 blur-3xl"></div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-2">

            <!-- About Content -->
            <div>

                <span class="inline-block rounded-full bg-gradient-to-r from-orange-900 to-orange-950 px-5 py-2 text-xs font-medium tracking-wider text-white">
                    ABOUT CIVILINKON
                </span>

                <h2 class="mt-6 text-3xl font-bold leading-tight tracking-tight sm:text-4xl">
                    From <span class="text-orange-600">Report</span> to
                    <span class="text-orange-600">Action</span>
                </h2>

                <p class="mt-5 text-sm leading-8 text-neutral-500">
                    Many complaint platforms stop at “report”, leaving citizens
                    wondering what happens next. Civilinkon closes the loop
                    between residents, volunteers and the teams who handle
                    the problem, with full transparency at every step.
                </p>

                <p class="mt-4 text-sm leading-8 text-neutral-500">
                    Our mission is to use technology to improve public services
                    and make neighborhoods safer, cleaner and more connected.
                </p>

                <div class="my-7 border-t border-neutral-200"></div>

                <div class="flex flex-wrap gap-3">
                    <span class="rounded-full border border-orange-200 px-4 py-2 text-xs text-orange-600">Discover →</span>
                    <span class="rounded-full border border-orange-200 px-4 py-2 text-xs text-orange-600">Report →</span>
                    <span class="rounded-full border border-orange-200 px-4 py-2 text-xs text-orange-600">Verify →</span>
                    <span class="rounded-full border border-orange-200 px-4 py-2 text-xs text-orange-600">Handle →</span>
                    <span class="rounded-full border border-orange-200 px-4 py-2 text-xs text-orange-600">Monitor →</span>
                    <span class="rounded-full border border-orange-200 px-4 py-2 text-xs text-orange-600">Resolve →</span>
                    <span class="rounded-full border border-orange-200 px-4 py-2 text-xs text-orange-600">Feedback</span>
                </div>

            </div>


            <!-- Feature Cards -->
            <div id="features" class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                <div class="flex min-h-44 flex-col justify-between rounded-2xl border border-neutral-100 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl">
                    <div>
                        <h3 class="text-lg font-bold">TRANSPARENT</h3>
                        <p class="mt-2 text-xs leading-6 text-neutral-500">
                            Every report has a visible status.
                        </p>
                    </div>
                    <a href="#" class="mt-5 flex items-center gap-2 text-xs font-semibold">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-black text-white">↗</span>
                        LEARN MORE
                    </a>
                </div>

                <div class="flex min-h-44 flex-col justify-between rounded-2xl bg-gradient-to-br from-orange-400 to-orange-600 p-6 text-white shadow-lg shadow-orange-100 transition hover:-translate-y-2">
                    <div>
                        <h3 class="text-lg font-bold">IMPACTFUL</h3>
                        <p class="mt-2 text-xs leading-6 text-orange-50">
                            Measured by problems actually solved.
                        </p>
                    </div>
                    <a href="#" class="mt-5 flex items-center gap-2 text-xs font-semibold">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-white text-orange-600">↗</span>
                        LEARN MORE
                    </a>
                </div>

                <div class="flex min-h-44 flex-col justify-between rounded-2xl bg-gradient-to-br from-neutral-700 to-neutral-950 p-6 text-white shadow-lg transition hover:-translate-y-2">
                    <div>
                        <h3 class="text-lg font-bold">TOGETHER</h3>
                        <p class="mt-2 text-xs leading-6 text-neutral-300">
                            Citizens and communities act as one.
                        </p>
                    </div>
                    <a href="#" class="mt-5 flex items-center gap-2 text-xs font-semibold">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-white text-black">↗</span>
                        LEARN MORE
                    </a>
                </div>

                <div class="flex min-h-44 flex-col justify-between rounded-2xl border border-neutral-100 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl">
                    <div>
                        <h3 class="text-lg font-bold">CREATIVE</h3>
                        <p class="mt-2 text-xs leading-6 text-neutral-500">
                            Simple tools built for real needs.
                        </p>
                    </div>
                    <a href="#" class="mt-5 flex items-center gap-2 text-xs font-semibold">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-black text-white">↗</span>
                        LEARN MORE
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- <!-- service area --> --}}
    <section id="service-area" class="bg-white px-6 py-20 sm:px-10 lg:px-16">
        <div class="mx-auto max-w-7xl">

            <!-- SECTION BADGE -->
            <span class="inline-flex items-center rounded-full bg-gradient-to-r from-[#78300D] to-[#702600] px-5 py-1.5 text-[10px] font-semibold uppercase tracking-wide text-white shadow-md">
                OUR SERVICE AREA
            </span>

            <!-- SECTION HEADING -->
            <h2 class="mt-4 text-3xl font-bold leading-tight tracking-tight text-[#111111] sm:text-4xl">
                Currently Serving
                <span class="text-[#FF572D]">Jabodetabek</span>
            </h2>

            <!-- DESCRIPTION -->
            <p class="mt-4 text-sm leading-relaxed text-[#858585] sm:text-base">
                We currently operate across Jabodetabek, connecting communities to report waste problems and take local action.
            </p>

            <!-- REGIONAL COVERAGE -->
            <div class="mt-11">
                <h3 class="text-lg font-bold text-[#111111]">
                    Regional Coverage
                </h3>

                <p class="mt-3 text-3xl font-normal leading-tight text-[#FF572D] sm:text-[30px]">
                    Jabodetabek
                </p>

                <p class="mt-3 text-sm text-[#858585]">
                    Currect operational area
                </p>
            </div>

            <!-- AREA MANAGEMENT -->
            <div class="mt-11">
                <h3 class="mb-7 text-lg font-bold text-[#111111]">
                    Area Management
                </h3>

                <div class="space-y-3">

                    <!-- JAKARTA -->
                    <div class="flex min-h-[69px] items-center justify-between rounded-xl bg-[#F3F3F3] px-[18px] py-3.5">
                        <div>
                            <h4 class="text-base font-bold leading-6 text-[#111111]">
                                Jakarta
                            </h4>
                            <p class="mt-0.5 text-xs leading-5 text-[#858585]">
                                DKI Jakarta
                            </p>
                        </div>

                        <svg class="h-5 w-5 shrink-0 text-[#FF572D]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                    </div>

                    <!-- BOGOR -->
                    <div class="flex min-h-[69px] items-center justify-between rounded-xl bg-[#F3F3F3] px-[18px] py-3.5">
                        <div>
                            <h4 class="text-base font-bold leading-6 text-[#111111]">
                                Bogor
                            </h4>
                            <p class="mt-0.5 text-xs leading-5 text-[#858585]">
                                Kota &amp; Kabupaten Bogor
                            </p>
                        </div>

                        <svg class="h-5 w-5 shrink-0 text-[#FF572D]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                    </div>

                    <!-- DEPOK -->
                    <div class="flex min-h-[69px] items-center justify-between rounded-xl bg-[#F3F3F3] px-[18px] py-3.5">
                        <div>
                            <h4 class="text-base font-bold leading-6 text-[#111111]">
                                Depok
                            </h4>
                            <p class="mt-0.5 text-xs leading-5 text-[#858585]">
                                Kota Depok
                            </p>
                        </div>

                        <svg class="h-5 w-5 shrink-0 text-[#FF572D]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                    </div>

                    <!-- TANGERANG -->
                    <div class="flex min-h-[69px] items-center justify-between rounded-xl bg-[#F3F3F3] px-[18px] py-3.5">
                        <div>
                            <h4 class="text-base font-bold leading-6 text-[#111111]">
                                Tangerang
                            </h4>
                            <p class="mt-0.5 text-xs leading-5 text-[#858585]">
                                Kota &amp; Kabupaten Tangerang, Tangerang Selatan
                            </p>
                        </div>

                        <svg class="h-5 w-5 shrink-0 text-[#FF572D]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                    </div>

                    <!-- BEKASI -->
                    <div class="flex min-h-[69px] items-center justify-between rounded-xl bg-[#F3F3F3] px-[18px] py-3.5">
                        <div>
                            <h4 class="text-base font-bold leading-6 text-[#111111]">
                                Bekasi
                            </h4>
                            <p class="mt-0.5 text-xs leading-5 text-[#858585]">
                                Kota &amp; Kabupaten Bekasi
                            </p>
                        </div>

                        <svg class="h-5 w-5 shrink-0 text-[#FF572D]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                    </div>

                </div>
            </div>

        </div>
    </section>

    {{-- <!-- feature --> --}}
    <section
        id="features"
        class="relative isolate overflow-hidden bg-gradient-to-br from-[#FF7845] via-[#FFA16F] to-[#FF713D] px-6 py-20 sm:px-10 lg:px-16">

        <!-- BACKGROUND GLOW TOP -->
        <div class="pointer-events-none absolute -top-40 left-1/2 -z-10 h-[450px] w-[700px] -translate-x-1/2 rounded-full bg-[#FFD2B0]/70 blur-[100px]"></div>

        <!-- BACKGROUND GLOW BOTTOM -->
        <div
            class="pointer-events-none absolute -bottom-48 left-1/2 -z-10 h-[400px] w-[800px] -translate-x-1/2 rounded-full bg-[#FF572D]/70 blur-[110px]"
        ></div>

        <!-- BACKGROUND SIDE GLOW -->
        <div
            class="pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_left,rgba(255,220,190,0.45),transparent_45%),radial-gradient(ellipse_at_right,rgba(255,115,60,0.35),transparent_45%)]"
        ></div>


        <!-- BACKGROUND WATERMARK -->
        <div
            aria-hidden="true"
            class="pointer-events-none absolute -bottom-8 left-1/2 z-0 -translate-x-1/2 select-none whitespace-nowrap text-[17vw] font-extrabold leading-none tracking-[-0.07em] text-[#C94F27]/20"
        >
            CIVILINKON
        </div>


        <!-- MAIN CONTENT -->
        <div class="relative z-10 mx-auto max-w-7xl">

            <!-- SECTION HEADER -->
            <div class="mb-12">

                <!-- Badge -->
                <span
                    class="inline-flex items-center rounded-full bg-gradient-to-r from-[#A84313] to-[#702600] px-5 py-2 text-xs font-semibold uppercase tracking-wide text-white shadow-lg shadow-orange-950/20"
                >
                    FEATURES
                </span>

                <!-- Heading -->
                <h2
                    class="mt-6 text-3xl font-bold leading-tight tracking-tight text-white sm:text-4xl lg:text-[40px]"
                >
                    Everything You Need to Make a Difference
                </h2>

                <!-- Description -->
                <p
                    class="mt-4 max-w-2xl text-base leading-relaxed text-white/85 sm:text-lg"
                >
                    Three core features that turn everyday reports into visible community results.
                </p>

            </div>


            <!-- FEATURE CARDS -->
            <div class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-3">
            
                
                <!-- CARD 1: LIVE ISSUE MAP -->
                <article class="group w-full min-w-0 overflow-hidden rounded-[24px] bg-white p-[14px] shadow-[0_8px_25px_rgba(130,49,16,0.08)] transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_20px_45px_rgba(131,48,14,0.20)]">

                    <!-- IMAGE -->
                    <div class="relative w-full aspect-[1.37/1] overflow-hidden rounded-[14px]">

                        <img
                            src="{{ asset('assets/live-issue.png') }}"
                            alt="Live Issue Map"
                            class="absolute inset-0 h-full w-full max-w-none object-cover scale-[1.40] translate-x-[20px] transition-transform duration-500 group-hover:scale-[1.32]"                        >

                    </div>

                    <!-- CONTENT -->
                    <div class="px-4 pb-3 pt-7">

                        <h3 class="text-[28px] font-bold leading-tight text-[#111111]">
                            Live Issue Map
                        </h3>

                        <p class="mt-4 text-[21px] leading-[1.5] text-[#222222]">
                            See open issues around you in real time,
                            filtered by category and status.
                        </p>

                    </div>

                </article>

                <!-- CARD 2: Smart Report -->
                <article class="group w-full min-w-0 overflow-hidden rounded-[24px] bg-white p-[14px] shadow-[0_8px_25px_rgba(130,49,16,0.08)] transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_20px_45px_rgba(131,48,14,0.20)]">

                    <!-- IMAGE -->
                    <div class="relative w-full aspect-[1.37/1] overflow-hidden rounded-[14px]">

                        <img
                            src="{{ asset('assets/smart-report.png') }}"
                            alt="Live Issue Map"
                            class="absolute inset-0 h-full w-full max-w-none object-cover scale-[1.20] translate-x-[20px] transition-transform duration-500 group-hover:scale-[1.32]"                        >

                    </div>

                    <!-- CONTENT -->
                    <div class="px-4 pb-3 pt-7">

                        <h3 class="text-[28px] font-bold leading-tight text-[#111111]">
                            Smart Report
                        </h3>

                        <p class="mt-4 text-[21px] leading-[1.5] text-[#222222]">
                            Submit a photo, category and location in under a minute.
                        </p>

                    </div>

                </article>

                <!-- CARD 3: Impact Dashboard -->
                <article class="group w-full min-w-0 overflow-hidden rounded-[24px] bg-white p-[14px] shadow-[0_8px_25px_rgba(130,49,16,0.08)] transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_20px_45px_rgba(131,48,14,0.20)]">

                    <!-- IMAGE -->
                    <div class="relative w-full aspect-[1.37/1] overflow-hidden rounded-[14px]">

                        <img
                            src="{{ asset('assets/impact-dashboard.png') }}"
                            alt="Live Issue Map"
                            class="absolute inset-0 h-full w-full max-w-none object-cover scale-[1.40] translate-x-[20px] transition-transform duration-500 group-hover:scale-[1.32]"                        >

                    </div>

                    <!-- CONTENT -->
                    <div class="px-4 pb-3 pt-7">

                        <h3 class="text-[28px] font-bold leading-tight text-[#111111]">
                            Impact Dashboard
                        </h3>

                        <p class="mt-4 text-[21px] leading-[1.5] text-[#222222]">
                            Open data on how many issues were solved, how fast, and where.
                        </p>

                    </div>

                </article>

            </div>
        </div>

    </section>

    {{-- how it works --}}
    <section id="how-it-works" class="bg-white px-6 py-20 sm:px-10 lg:px-16">

        <div class="mx-auto max-w-7xl">

            <!-- HEADER -->
            <div class="mb-9">

                <span class="inline-flex rounded-full bg-gradient-to-r from-[#78300D] to-[#A84616] px-4 py-1.5 text-[10px] font-bold uppercase tracking-wider text-white">
                    HOW IT WORKS
                </span>

                <h2 class="mt-4 text-2xl font-bold leading-tight tracking-tight text-[#171717] sm:text-3xl lg:text-[36px]">
                    Four Simple
                    <span class="text-[#FF572D]">Steps</span>
                    to Real
                    <span class="text-[#FF572D]">Change</span>
                </h2>

                <p class="mt-3 text-sm leading-relaxed text-[#888888] sm:text-base">
                    Choose how you want to help, then swipe through the steps.
                </p>

            </div>


            <!-- ACTION SWITCH -->
            <div class="mb-8 inline-flex items-center gap-1 rounded-full bg-black p-1">

                <a href="#report"
                    class="rounded-full bg-gradient-to-r from-[#FF7845] to-[#FF9A61] px-5 py-2 text-[11px] font-semibold text-white shadow-md transition hover:brightness-105">
                    Report an Issue
                </a>

                <a href="#volunteer"
                    class="rounded-full px-5 py-2 text-[11px] font-medium text-white transition hover:bg-white/10">
                    Become a Volunteer
                </a>

            </div>


            <!-- STEPS GRID -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">


                <!-- STEP 01 -->
                <article class="group flex min-h-[190px] flex-col rounded-xl bg-[#F3F3F3] p-5 transition-all duration-300 hover:-translate-y-1 hover:bg-[#FFF0E9] hover:shadow-[0_12px_30px_rgba(255,100,50,0.10)]">

                    <span class="text-[30px] font-semibold leading-none text-[#FF572D]">
                        01
                    </span>

                    <div class="mt-auto pt-8">

                        <h3 class="text-sm font-bold text-[#171717]">
                            Report
                        </h3>

                        <p class="mt-2 text-xs leading-relaxed text-[#858585]">
                            Spot a problem, take a photo, choose a category and pin the location. It takes under a minute.
                        </p>

                    </div>

                </article>


                <!-- STEP 02 -->
                <article class="group flex min-h-[190px] flex-col rounded-xl bg-[#F3F3F3] p-5 transition-all duration-300 hover:-translate-y-1 hover:bg-[#FFF0E9] hover:shadow-[0_12px_30px_rgba(255,100,50,0.10)]">

                    <span class="text-[30px] font-semibold leading-none text-[#FF572D]">
                        02
                    </span>

                    <div class="mt-auto pt-8">

                        <h3 class="text-sm font-bold text-[#171717]">
                            Verify
                        </h3>

                        <p class="mt-2 text-xs leading-relaxed text-[#858585]">
                            Moderators check your report and forward it to the right team or authority for action.
                        </p>

                    </div>

                </article>


                <!-- STEP 03 -->
                <article class="group flex min-h-[190px] flex-col rounded-xl bg-[#F3F3F3] p-5 transition-all duration-300 hover:-translate-y-1 hover:bg-[#FFF0E9] hover:shadow-[0_12px_30px_rgba(255,100,50,0.10)]">

                    <span class="text-[30px] font-semibold leading-none text-[#FF572D]">
                        03
                    </span>

                    <div class="mt-auto pt-8">

                        <h3 class="text-sm font-bold text-[#171717]">
                            Track & Act
                        </h3>

                        <p class="mt-2 text-xs leading-relaxed text-[#858585]">
                            Follow the progress with your report ID, and join neighbors who want to help on the ground.
                        </p>

                    </div>

                </article>


                <!-- STEP 04 -->
                <article class="group flex min-h-[190px] flex-col rounded-xl bg-[#F3F3F3] p-5 transition-all duration-300 hover:-translate-y-1 hover:bg-[#FFF0E9] hover:shadow-[0_12px_30px_rgba(255,100,50,0.10)]">

                    <span class="text-[30px] font-semibold leading-none text-[#FF572D]">
                        04
                    </span>

                    <div class="mt-auto pt-8">

                        <h3 class="text-sm font-bold text-[#171717]">
                            Resolve & Feedback
                        </h3>

                        <p class="mt-2 text-xs leading-relaxed text-[#858585]">
                            Once the problem is fixed, rate the result and share your feedback so we can keep improving.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>

    {{-- testimoni section --}}
    <section id="testimonials" class="bg-white px-6 pb-24 pt-16 sm:px-10 lg:px-16">

        <div class="mx-auto max-w-7xl">

            <!-- HEADER -->
            <div class="mb-9">

                <span class="inline-flex rounded-full bg-gradient-to-r from-[#78300D] to-[#A84616] px-4 py-1.5 text-[10px] font-bold uppercase tracking-wider text-white">
                    TESTIMONIALS
                </span>

                <h2 class="mt-4 text-2xl font-bold leading-tight tracking-tight text-[#171717] sm:text-3xl lg:text-[36px]">
                    <span class="text-[#FF572D]">Voices</span>
                    from the
                    <span class="text-[#FF572D]">Community</span>
                </h2>

                <p class="mt-3 text-sm leading-relaxed text-[#888888] sm:text-base">
                    Sample stories showing the kind of change Civilinkon is built to create.
                </p>

            </div>


            <!-- TESTIMONIAL CARDS -->
            <div class="grid grid-cols-1 items-stretch gap-5 md:grid-cols-[1fr_1.65fr_1fr]">


                <!-- TESTIMONIAL 01 -->
                <article class="relative flex min-h-[230px] flex-col rounded-xl bg-[#F3F3F3] p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <span class="text-[9px] font-medium uppercase tracking-wider text-[#999999]">
                        TRUSTED USER
                    </span>

                    <p class="mt-3 text-sm font-medium leading-relaxed text-[#171717]">
                        My report was handled quickly, and the streetlight is working again.
                    </p>

                    <!-- QUOTE ICON -->
                    <div class="mt-auto flex justify-end">
                        <span class="font-serif text-4xl font-black leading-none text-black">
                            ”
                        </span>
                    </div>

                    <!-- USER PROFILE -->
                    <div class="mt-3 flex items-center gap-3">

                        <img
                            src="{{ asset('images/testimonials/user-1.jpg') }}"
                            alt="Royal Budiman"
                            class="h-10 w-10 rounded-full object-cover"
                        >

                        <div>
                            <h4 class="text-[10px] font-bold text-[#171717]">
                                Royal Budiman
                            </h4>

                            <p class="mt-0.5 text-[9px] text-[#999999]">
                                Local Issue Reporter
                            </p>
                        </div>

                    </div>

                </article>



                <!-- TESTIMONIAL 02 - FEATURED -->
                <article class="relative flex min-h-[230px] flex-col overflow-hidden rounded-xl bg-gradient-to-br from-[#F4F4F4] via-[#FFF7F1] to-[#FFE1CD] p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(255,112,60,0.15)]">

                    <span class="text-[9px] font-medium uppercase tracking-wider text-[#999999]">
                        TRUSTED USER
                    </span>

                    <p class="mt-4 text-base font-semibold leading-relaxed text-[#171717] sm:text-lg">
                        Reporting local issues has never been this easy. Worth to try!
                    </p>

                    <!-- RATING -->
                    <div class="mt-3 flex items-center gap-2">

                        <div class="flex gap-0.5 text-[#FF6B35]">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </div>

                        <span class="text-[10px] font-medium text-[#444444]">
                            5.0
                        </span>

                    </div>

                    <!-- QUOTE ICON -->
                    <div class="mt-auto flex justify-end">
                        <span class="font-serif text-4xl font-black leading-none text-black">
                            ”
                        </span>
                    </div>

                    <!-- USER PROFILE -->
                    <div class="mt-3 flex items-center gap-3">

                        <img
                            src="{{ asset('images/testimonials/user-2.jpg') }}"
                            alt="Mutiara Aisyah"
                            class="h-10 w-10 rounded-full object-cover"
                        >

                        <div>
                            <h4 class="text-[10px] font-bold text-[#171717]">
                                Mutiara Aisyah
                            </h4>

                            <p class="mt-0.5 text-[9px] text-[#999999]">
                                Local Issue Reporter
                            </p>
                        </div>

                    </div>

                </article>



                <!-- TESTIMONIAL 03 -->
                <article class="relative flex min-h-[230px] flex-col rounded-xl bg-[#F3F3F3] p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <span class="text-[9px] font-medium uppercase tracking-wider text-[#999999]">
                        TRUSTED USER
                    </span>

                    <p class="mt-3 text-sm font-medium leading-relaxed text-[#171717]">
                        I can track my report and see the progress. This web is really helpful.
                    </p>

                    <!-- QUOTE ICON -->
                    <div class="mt-auto flex justify-end">
                        <span class="font-serif text-4xl font-black leading-none text-black">
                            ”
                        </span>
                    </div>

                    <!-- USER PROFILE -->
                    <div class="mt-3 flex items-center gap-3">

                        <img
                            src="{{ asset('images/testimonials/user-3.jpg') }}"
                            alt="Caleb Aduturo"
                            class="h-10 w-10 rounded-full object-cover"
                        >

                        <div>
                            <h4 class="text-[10px] font-bold text-[#171717]">
                                Caleb Aduturo
                            </h4>

                            <p class="mt-0.5 text-[9px] text-[#999999]">
                                Local Issue Reporter
                            </p>
                        </div>

                    </div>

                </article>


            </div>

        </div>

    </section>

    {{-- FAQ --}}
    <section id="faq" class="relative isolate overflow-hidden bg-white px-6 pb-20 pt-16 sm:px-10 lg:px-16">

        <!-- BACKGROUND GLOW -->
        <div class="pointer-events-none absolute -right-32 top-20 -z-10 h-[350px] w-[350px] rounded-full bg-[#FF8A50]/15 blur-[100px]"></div>

        <div class="pointer-events-none absolute -left-40 bottom-0 -z-10 h-[250px] w-[350px] rounded-full bg-[#FFD2B0]/20 blur-[100px]"></div>


        <div class="mx-auto max-w-7xl">

            <!-- FAQ HEADER -->
            <div class="mb-7 text-center">

                <span class="inline-flex rounded-full bg-gradient-to-r from-[#78300D] to-[#A84616] px-4 py-1 text-[9px] font-bold uppercase tracking-wider text-white">
                    FAQ
                </span>

                <h2 class="mt-3 text-2xl font-bold tracking-tight text-[#111111] sm:text-3xl">
                    Frequently Asked
                    <span class="text-[#FF572D]">Questions</span>
                </h2>

            </div>


            <!-- FAQ ACCORDION -->
            <div class="mx-auto w-full max-w-[850px] space-y-3">


                <!-- FAQ 01 -->
                <details class="group overflow-hidden rounded-xl bg-gradient-to-r from-[#FF4D0D] to-[#FF783F] shadow-[0_4px_12px_rgba(255,87,45,0.10)]">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-3.5 [&::-webkit-details-marker]:hidden">

                        <span class="text-xs font-semibold text-white sm:text-sm">
                            What can I report on Civilinkon?
                        </span>

                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-base font-medium text-[#FF572D] transition-transform duration-300 group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-5 pb-4 text-xs leading-relaxed text-white/90 sm:text-sm">
                        You can report public issues such as damaged roads, broken streetlights, waste problems, drainage issues, and other community concerns.
                    </div>

                </details>


                <!-- FAQ 02 -->
                <details class="group overflow-hidden rounded-xl bg-gradient-to-r from-[#FF4D0D] to-[#FF783F] shadow-[0_4px_12px_rgba(255,87,45,0.10)]">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-3.5 [&::-webkit-details-marker]:hidden">

                        <span class="text-xs font-semibold text-white sm:text-sm">
                            How do I know my report is being handled?
                        </span>

                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-base font-medium text-[#FF572D] transition-transform duration-300 group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-5 pb-4 text-xs leading-relaxed text-white/90 sm:text-sm">
                        You can track your report through its unique report ID and check its latest status directly on Civilinkon.
                    </div>

                </details>


                <!-- FAQ 03 -->
                <details class="group overflow-hidden rounded-xl bg-gradient-to-r from-[#FF4D0D] to-[#FF783F] shadow-[0_4px_12px_rgba(255,87,45,0.10)]">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-3.5 [&::-webkit-details-marker]:hidden">

                        <span class="text-xs font-semibold text-white sm:text-sm">
                            Is Civilinkon free to use?
                        </span>

                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-base font-medium text-[#FF572D] transition-transform duration-300 group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-5 pb-4 text-xs leading-relaxed text-white/90 sm:text-sm">
                        Yes! Civilinkon is designed to make community reporting accessible and easy for everyone.
                    </div>

                </details>


                <!-- FAQ 04 -->
                <details class="group overflow-hidden rounded-xl bg-gradient-to-r from-[#FF4D0D] to-[#FF783F] shadow-[0_4px_12px_rgba(255,87,45,0.10)]">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-3.5 [&::-webkit-details-marker]:hidden">

                        <span class="text-xs font-semibold text-white sm:text-sm">
                            Can I volunteer without reporting an issue?
                        </span>

                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-base font-medium text-[#FF572D] transition-transform duration-300 group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-5 pb-4 text-xs leading-relaxed text-white/90 sm:text-sm">
                        Absolutely! You can participate as a volunteer and support community initiatives even without submitting a report.
                    </div>

                </details>


                <!-- FAQ 05 -->
                <details class="group overflow-hidden rounded-xl bg-gradient-to-r from-[#FF4D0D] to-[#FF783F] shadow-[0_4px_12px_rgba(255,87,45,0.10)]">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-5 py-3.5 [&::-webkit-details-marker]:hidden">

                        <span class="text-xs font-semibold text-white sm:text-sm">
                            How is my data protected?
                        </span>

                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-base font-medium text-[#FF572D] transition-transform duration-300 group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-5 pb-4 text-xs leading-relaxed text-white/90 sm:text-sm">
                        We aim to protect user information and only use submitted data to support community reporting and issue management.
                    </div>

                </details>


            </div>


            <!-- TOP BADGE IMAGE -->
            <img
                src="{{ asset('assets/CTA.png') }}"
                alt="Nextgen Digital Innovation"
               class="mx-auto py-40 block h-auto w-full max-w-[420px] object-contain sm:max-w-[600px] lg:max-w-[750px] xl:max-w-[900px]"
                >

        </div>

    </section>


    <!-- FOOTER CIVILINKON -->
    <footer class="relative mx-1 mt-16 overflow-hidden rounded-t-2xl bg-gradient-to-b from-[#C95F30] via-[#642000] via-[35%] to-black text-white sm:mt-16">

        <div class="relative mx-auto flex min-h-[630px] max-w-[1440px] flex-col px-6 pb-7 pt-10 sm:px-10 sm:pt-14 lg:min-h-[605px] lg:px-[7.5%] lg:pb-14 lg:pt-[88px]">

            <!-- TOP FOOTER -->
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-[1.15fr_1fr] lg:gap-16">

                <!-- BRAND & EMAIL -->
                <div class="min-w-0">

                    <!-- LOGO -->
                    <a href="#home" class="inline-flex items-center gap-2.5" aria-label="Civilinkon Home">

                    

                        <!-- LOGO -->
                        <a href="" class="shrink-0">
                            <img src="{{ asset('assets/logo-footer.png') }}"
                                alt="Civilinkon"
                                class="h-8 w-auto">
                        </a>
                    </a>

                    <!-- EMAIL FORM -->
                    <form action="#" method="GET" onsubmit="return false" class="mt-8 flex h-[58px] w-full max-w-[515px] overflow-hidden rounded-full bg-white sm:mt-11 lg:mt-11">

                        <label for="footer-email" class="sr-only">Your email address</label>

                        <input
                            id="footer-email"
                            type="email"
                            placeholder="Your email..."
                            class="min-w-0 flex-1 border-0 bg-white px-6 text-sm text-neutral-800 outline-none placeholder:text-[#858585] focus:ring-0 sm:px-7"
                        >

                        <button
                            type="submit"
                            class="shrink-0 bg-[#FF570B] px-5 text-sm font-medium text-white transition-colors hover:bg-[#E94B00] sm:px-7"
                        >
                            Send Email
                        </button>

                    </form>
                </div>

                <!-- FOOTER LINKS -->
                <div class="grid grid-cols-3 gap-x-3 sm:gap-x-6 lg:gap-x-8">

                    <!-- NAVIGATION -->
                    <div>
                        <h3 class="text-sm font-bold text-white sm:text-base">
                            Navigation
                        </h3>

                        <ul class="mt-6 space-y-6 text-[13px] text-[#BDBDBD] sm:text-base">
                            <li>
                                <a href="#home" class="transition-colors hover:text-white">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="transition-colors hover:text-white">About</a>
                            </li>
                            <li>
                                <a href="#features" class="transition-colors hover:text-white">Features</a>
                            </li>
                            <li>
                                <a href="#testimonials" class="transition-colors hover:text-white">Testimonial</a>
                            </li>
                            <li>
                                <a href="#faq" class="transition-colors hover:text-white">FAQ</a>
                            </li>
                        </ul>
                    </div>

                    <!-- RESOURCES -->
                    <div>
                        <h3 class="text-sm font-bold text-white sm:text-base">
                            Resources
                        </h3>

                        <ul class="mt-6 space-y-6 text-[13px] text-[#BDBDBD] sm:text-base">
                            <li>
                                <a href="#report" class="transition-colors hover:text-white">Report</a>
                            </li>
                            <li>
                                <a href="#report" class="transition-colors hover:text-white">Camera</a>
                            </li>
                            <li>
                                <a href="#testimonials" class="transition-colors hover:text-white">Testimonial</a>
                            </li>
                            <li>
                                <a href="#faq" class="transition-colors hover:text-white">FAQ</a>
                            </li>
                        </ul>
                    </div>

                    <!-- SOCIAL MEDIA -->
                    <div>
                        <h3 class="text-sm font-bold text-white sm:text-base">
                            Follow Us
                        </h3>

                        <ul class="mt-6 space-y-6 text-[13px] text-[#BDBDBD] sm:text-base">

                            <li>
                                <a href="#" class="inline-flex items-center gap-2 transition-colors hover:text-white" aria-label="Instagram">
                                    <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                                        <circle cx="12" cy="12" r="4"/>
                                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                                    </svg>
                                    <span>Instagram</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="inline-flex items-center gap-2 transition-colors hover:text-white" aria-label="TikTok">
                                    <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M19.6 7.1a6.7 6.7 0 0 1-4.1-1.4v8.1a6.8 6.8 0 1 1-6.8-6.8c.4 0 .8 0 1.2.1v3.8a3.2 3.2 0 1 0 2.2 3V2h3.6c.3 2.4 1.8 4.2 4.1 4.7v.4l-.2 0Z"/>
                                    </svg>
                                    <span>Tiktok</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="inline-flex items-center gap-2 transition-colors hover:text-white" aria-label="YouTube">
                                    <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23 7a3 3 0 0 0-2.1-2.1C19 4.4 12 4.4 12 4.4s-7 0-8.9.5A3 3 0 0 0 1 7 31 31 0 0 0 .5 12 31 31 0 0 0 1 17a3 3 0 0 0 2.1 2.1c1.9.5 8.9.5 8.9.5s7 0 8.9-.5A3 3 0 0 0 23 17a31 31 0 0 0 .5-5 31 31 0 0 0-.5-5ZM9.5 15.5v-7l6 3.5-6 3.5Z"/>
                                    </svg>
                                    <span>Youtube</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="inline-flex items-center gap-2 transition-colors hover:text-white" aria-label="Facebook">
                                    <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M24 12a12 12 0 1 0-13.9 11.9v-8.4H7.1V12h3V9.3c0-3 1.8-4.7 4.5-4.7 1.3 0 2.7.2 2.7.2v3h-1.5c-1.5 0-2 .9-2 1.9V12h3.4l-.5 3.5h-2.9v8.4A12 12 0 0 0 24 12Z"/>
                                    </svg>
                                    <span>Facebook</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

            <!-- BOTTOM FOOTER -->
            <div class="mt-auto flex flex-col gap-5 pt-16 text-[#BDBDBD] sm:flex-row sm:items-center sm:justify-between lg:pt-12">

                <p class="text-[10px] sm:text-sm">
                    © 2026 Civilinkon. All rights reserved
                </p>

                <div class="flex items-center gap-4 text-[10px] sm:gap-8 sm:text-sm">
                    <a href="#" class="whitespace-nowrap underline underline-offset-4 transition-colors hover:text-white">
                        Terms of Service
                    </a>

                    <a href="#" class="whitespace-nowrap underline underline-offset-4 transition-colors hover:text-white">
                        Privacy Policy
                    </a>
                </div>

            </div>

        </div>
    </footer>
    <!-- END FOOTER -->


</body>
</html>
