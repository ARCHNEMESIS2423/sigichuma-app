@php
    // ---- Placeholder data – replace with DB/controller later ----
    $products = $products ?? [
        [
            'name'        => 'Modern Metal Gate',
            'description' => 'Clean lines, heavy-gauge steel, powder-coated finish. Built for security and style.',
            'price'       => 'From $1,200',
            'image'       => '/images/products/metal-gate.jpg',
            'alt'         => 'Modern metal gate with horizontal slats',
        ],
        [
            'name'        => 'Security Door',
            'description' => 'Reinforced frame, tamper-proof hinges, custom sizing. Peace of mind that lasts.',
            'price'       => 'From $850',
            'image'       => '/images/products/security-door.jpg',
            'alt'         => 'Heavy-duty steel security door',
        ],
        [
            'name'        => 'Window Grilles',
            'description' => 'Architectural grilles that protect without blocking light. Made to measure.',
            'price'       => 'From $180',
            'image'       => '/images/products/window-grille.jpg',
            'alt'         => 'Decorative steel window grille',
        ],
        [
            'name'        => 'Metal Bed Frame',
            'description' => 'Solid steel frame, no squeaks, no flex. Minimalist industrial design.',
            'price'       => 'From $650',
            'image'       => '/images/products/bed-frame.jpg',
            'alt'         => 'Industrial metal bed frame',
        ],
        [
            'name'        => 'Stair Railing',
            'description' => 'Custom fabricated railings for interior and exterior stairs. Code-compliant.',
            'price'       => 'From $95/linear ft',
            'image'       => '/images/products/stair-railing.jpg',
            'alt'         => 'Modern steel stair railing',
        ],
        [
            'name'        => 'Custom Steel Table',
            'description' => 'Hand-welded steel base with your choice of top. One-of-a-kind furniture.',
            'price'       => 'From $1,500',
            'image'       => '/images/products/steel-table.jpg',
            'alt'         => 'Custom welded steel table',
        ],
    ];

    $categories = $categories ?? [
        [
            'name'  => 'Gates & Fences',
            'image' => '/images/categories/gates.jpg',
            'alt'   => 'Metal gates and fencing',
        ],
        [
            'name'  => 'Doors',
            'image' => '/images/categories/doors.jpg',
            'alt'   => 'Steel security doors',
        ],
        [
            'name'  => 'Security Grilles',
            'image' => '/images/categories/grilles.jpg',
            'alt'   => 'Window security grilles',
        ],
        [
            'name'  => 'Furniture',
            'image' => '/images/categories/furniture.jpg',
            'alt'   => 'Metal furniture',
        ],
        [
            'name'  => 'Railings',
            'image' => '/images/categories/railings.jpg',
            'alt'   => 'Stair and balcony railings',
        ],
        [
            'name'  => 'Custom Fabrication',
            'image' => '/images/categories/custom.jpg',
            'alt'   => 'Custom metal fabrication',
        ],
    ];

    $processSteps = [
        ['num' => '01', 'title' => 'Tell us what you need', 'desc' => 'Share your idea, rough dimensions, or a reference photo.'],
        ['num' => '02', 'title' => 'We discuss measurements & design', 'desc' => 'We refine the details, suggest materials, and provide a clear quote.'],
        ['num' => '03', 'title' => 'We fabricate it', 'desc' => 'Your product is cut, welded, ground, and finished in our shop.'],
        ['num' => '04', 'title' => 'We deliver & install', 'desc' => 'We bring it to your site, install it properly, and clean up.'],
    ];

    $whyUs = [
        ['title' => 'Strong Materials',   'desc' => 'We use heavy-gauge steel and quality hardware. Nothing flimsy.'],
        ['title' => 'Precise Fabrication','desc' => 'Tight welds, square frames, clean grinds. Every time.'],
        ['title' => 'Custom Designs',     'desc' => 'Every product is built to your measurements and style.'],
        ['title' => 'Reliable Finishing', 'desc' => 'Powder coating, galvanizing, or paint — durable and even.'],
    ];
@endphp
 {{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Custom welded metal products — gates, doors, grilles, furniture, railings. Built to last.">
    <title>{{ config('app.name', 'IronForge Metalworks') }} — Custom Metal Fabrication</title> 
    {{-- ---------------------------- --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 text-zinc-100 antialiased font-sans">

    {{-- ============================================================
         NAVBAR
    ============================================================ --}}
    <header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 bg-zinc-950/90 backdrop-blur border-b border-zinc-800/80">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Main navigation">
            <div class="flex h-16 items-center justify-between">

                {{-- Logo / Business name placeholder --}}
                <a href="/" class="flex items-center gap-2.5 shrink-0" aria-label="Home">
                    {{-- Simple inline SVG mark – no external icon library --}}
                    <svg class="h-7 w-7 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 3 4 14h6l-1 7 9-11h-6l1-7Z"/>
                    </svg>
                    <span class="text-lg font-semibold tracking-tight text-white">
                        IronForge<span class="text-amber-500">.</span>
                    </span>
                </a>

                {{-- Desktop nav --}}
                <div class="hidden md:flex md:items-center md:gap-8">
                    <a href="#products"   class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">Products</a>
                    <a href="#about"      class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">About</a>
                    <a href="#custom"     class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">Custom Fabrication</a>
                    <a href="#contact"    class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">Contact</a>
                </div>

                {{-- Desktop CTA --}}
                <div class="hidden md:block">
                    <a href="#quote"
                       class="inline-flex items-center gap-2 rounded-sm bg-amber-500 px-5 py-2.5 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                        Request a Quote
                    </a>
                </div>

                {{-- Mobile hamburger --}}
                <button type="button"
                        @click="mobileOpen = !mobileOpen"
                        :aria-expanded="mobileOpen"
                        aria-controls="mobile-menu"
                        class="md:hidden inline-flex items-center justify-center rounded-sm p-2 text-zinc-300 hover:text-white hover:bg-zinc-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-amber-500"
                        aria-label="Toggle navigation menu">
                    <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Mobile menu --}}
            <div x-show="mobileOpen" x-cloak x-transition.opacity.duration.150ms id="mobile-menu" class="md:hidden border-t border-zinc-800/80 pb-4 pt-2">
                <div class="flex flex-col gap-1">
                    <a href="#products" @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">Products</a>
                    <a href="#about"    @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">About</a>
                    <a href="#custom"   @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">Custom Fabrication</a>
                    <a href="#contact"  @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">Contact</a>
                    <a href="#quote"    @click="mobileOpen = false"
                       class="mt-2 inline-flex items-center justify-center rounded-sm bg-amber-500 px-5 py-3 text-sm font-semibold text-zinc-950 hover:bg-amber-400">
                        Request a Quote
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main>

        {{-- ============================================================
             HERO — product-forward, NOT company-forward
        ============================================================ --}}
        <section class="relative overflow-hidden border-b border-zinc-800/80">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-10 py-16 lg:grid-cols-2 lg:gap-16 lg:py-24">

                    {{-- Copy --}}
                    <div class="max-w-xl">
                        <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-amber-500">
                            Welded &amp; Fabricated In-House
                        </p>
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                            Built to Last.<br>
                            <span class="text-zinc-400">Made for Your Space.</span>
                        </h1>
                        <p class="mt-6 text-lg leading-relaxed text-zinc-400">
                            We fabricate strong, practical metal products — gates, doors, grilles,
                            furniture, and railings — for homes, businesses, and custom projects.
                            Every piece is welded, finished, and fitted by hand.
                        </p>

                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="#products"
                               class="inline-flex items-center justify-center rounded-sm bg-amber-500 px-6 py-3.5 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                                Browse Products
                            </a>
                            <a href="#quote"
                               class="inline-flex items-center justify-center rounded-sm border border-zinc-700 bg-transparent px-6 py-3.5 text-sm font-semibold text-zinc-200 hover:border-zinc-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                                Request a Quote
                            </a>
                        </div>

                        {{-- Small trust strip --}}
                        <dl class="mt-10 grid grid-cols-3 gap-4 border-t border-zinc-800 pt-6">
                            <div>
                                <dt class="text-xs uppercase tracking-wider text-zinc-500">Experience</dt>
                                <dd class="mt-1 text-lg font-semibold text-white">15+ yrs</dd>
                            </div>
                            <div>
                                <dt class="text-xs uppercase tracking-wider text-zinc-500">Projects</dt>
                                <dd class="mt-1 text-lg font-semibold text-white">500+</dd>
                            </div>
                            <div>
                                <dt class="text-xs uppercase tracking-wider text-zinc-500">Custom Work</dt>
                                <dd class="mt-1 text-lg font-semibold text-white">100%</dd>
                            </div>
                        </dl>
                    </div>

                    {{-- Hero image area – replace with a real product photo --}}
                    <div class="relative">
                        {{-- Decorative accent --}}
                        <div class="absolute -inset-1 -z-10 rounded-sm bg-gradient-to-tr from-amber-500/20 to-transparent blur-2xl" aria-hidden="true"></div>

                        <div class="aspect-[4/5] w-full overflow-hidden rounded-sm border border-zinc-800 bg-zinc-900 sm:aspect-[5/5] lg:aspect-[4/5]">
                            {{-- Replace src with your hero product image, e.g. /images/hero/gate-hero.jpg --}}
                            <img src="/images/hero/hero-product.jpg"
                                 alt="Featured welded metal product — modern steel gate"
                                 class="h-full w-full object-cover"
                                 loading="eager"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            {{-- Fallback if image is missing --}}
                            <div class="hidden h-full w-full flex-col items-center justify-center gap-3 bg-zinc-900 text-center">
                                <svg class="h-12 w-12 text-zinc-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0022.5 18.75V5.25A2.25 2.25 0 0020.25 3H3.75A2.25 2.25 0 001.5 5.25v13.5A2.25 2.25 0 003.75 21z"/>
                                </svg>
                                <p class="text-sm text-zinc-500">Hero product image<br><span class="text-xs text-zinc-600">/images/hero/hero-product.jpg</span></p>
                            </div>
                        </div>

                        {{-- Floating product badge --}}
                        <div class="absolute bottom-4 left-4 rounded-sm border border-zinc-700/80 bg-zinc-950/90 px-4 py-3 backdrop-blur">
                            <p class="text-xs font-medium uppercase tracking-wider text-amber-500">Featured</p>
                            <p class="text-sm font-semibold text-white">Modern Metal Gate</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ============================================================
             FEATURED PRODUCTS — the core of the page
        ============================================================ --}}
        <section id="products" class="border-b border-zinc-800/80 bg-zinc-950 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            Our Products
                        </h2>
                        <p class="mt-3 text-base leading-relaxed text-zinc-400">
                            Every product is fabricated in our shop. Sizes, finishes, and
                            designs can be customized to fit your space.
                        </p>
                    </div>
                    <a href="#quote" class="shrink-0 text-sm font-semibold text-amber-500 hover:text-amber-400">
                        Need something else? &rarr;
                    </a>
                </div>

                {{-- Product grid --}}
                <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
                    @foreach ($products as $product)
                        <article class="group flex flex-col overflow-hidden rounded-sm border border-zinc-800 bg-zinc-900/40 transition-colors hover:border-zinc-700">

                            {{-- Product image --}}
                            <div class="relative aspect-[4/3] w-full overflow-hidden bg-zinc-900">
                                <img src="{{ $product['image'] }}"
                                     alt="{{ $product['alt'] }}"
                                     class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]"
                                     loading="lazy"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                {{-- Fallback --}}
                                <div class="hidden h-full w-full flex-col items-center justify-center gap-2 bg-zinc-900 text-center">
                                    <svg class="h-10 w-10 text-zinc-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0022.5 18.75V5.25A2.25 2.25 0 0020.25 3H3.75A2.25 2.25 0 001.5 5.25v13.5A2.25 2.25 0 003.75 21z"/>
                                    </svg>
                                    <p class="text-xs text-zinc-600">{{ $product['image'] }}</p>
                                </div>
                            </div>

                            {{-- Product body --}}
                            <div class="flex flex-1 flex-col p-5">
                                <div class="flex items-start justify-between gap-3">
                                    <h3 class="text-lg font-semibold text-white">{{ $product['name'] }}</h3>
                                    @if (!empty($product['price']))
                                        <span class="shrink-0 text-sm font-medium text-amber-500">{{ $product['price'] }}</span>
                                    @endif
                                </div>
                                <p class="mt-2 flex-1 text-sm leading-relaxed text-zinc-400">
                                    {{ $product['description'] }}
                                </p>

                                <div class="mt-5 flex items-center gap-3 border-t border-zinc-800 pt-4">
                                    <a href="#"
                                       class="inline-flex flex-1 items-center justify-center rounded-sm bg-zinc-800 px-4 py-2.5 text-sm font-semibold text-zinc-100 hover:bg-zinc-700 transition-colors">
                                        View Product
                                    </a>
                                    <a href="#quote"
                                       class="inline-flex items-center justify-center rounded-sm border border-zinc-700 px-4 py-2.5 text-sm font-semibold text-amber-500 hover:border-amber-500/60 hover:text-amber-400 transition-colors"
                                       aria-label="Request a quote for {{ $product['name'] }}">
                                        Quote
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============================================================
             PRODUCT CATEGORIES
        ============================================================ --}}
        <section id="categories" class="border-b border-zinc-800/80 bg-zinc-900/30 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Shop by Category
                </h2>
                <p class="mt-3 max-w-2xl text-base leading-relaxed text-zinc-400">
                    Browse our main product lines. Don't see what you need? We build custom.
                </p>

                <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6 lg:gap-4">
                    @foreach ($categories as $cat)
                        <a href="#" class="group relative block overflow-hidden rounded-sm border border-zinc-800 bg-zinc-900">
                            <div class="aspect-square w-full overflow-hidden bg-zinc-800">
                                <img src="{{ $cat['image'] }}"
                                     alt="{{ $cat['alt'] }}"
                                     class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                     loading="lazy"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                {{-- Fallback --}}
                                <div class="hidden h-full w-full items-center justify-center bg-zinc-800 text-center">
                                    <span class="px-2 text-[10px] text-zinc-600">{{ $cat['image'] }}</span>
                                </div>
                            </div>
                            {{-- Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/90 via-zinc-950/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-3">
                                <span class="text-sm font-semibold text-white group-hover:text-amber-400 transition-colors">
                                    {{ $cat['name'] }}
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============================================================
             CUSTOM FABRICATION
        ============================================================ --}}
        <section id="custom" class="border-b border-zinc-800/80 bg-zinc-950 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16">

                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            Need something not in the catalog?
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-zinc-400">
                            We build custom metal products every day — from one-off furniture
                            pieces to complete architectural railings. Tell us what you need
                            and we'll fabricate it to your exact measurements and finish.
                        </p>

                        <a href="#quote"
                           class="mt-8 inline-flex items-center justify-center rounded-sm bg-amber-500 px-6 py-3.5 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                            Request Custom Work
                        </a>
                    </div>

                    {{-- Process steps --}}
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        @foreach ($processSteps as $step)
                            <div class="rounded-sm border border-zinc-800 bg-zinc-900/40 p-5">
                                <span class="text-xs font-semibold tracking-widest text-amber-500">{{ $step['num'] }}</span>
                                <h3 class="mt-2 text-base font-semibold text-white">{{ $step['title'] }}</h3>
                                <p class="mt-1.5 text-sm leading-relaxed text-zinc-400">{{ $step['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>

        {{-- ============================================================
             WHY CHOOSE US
        ============================================================ --}}
        <section class="border-b border-zinc-800/80 bg-zinc-900/30 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Why our products hold up
                </h2>

                <div class="mt-12 grid grid-cols-1 gap-px overflow-hidden rounded-sm border border-zinc-800 bg-zinc-800 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($whyUs as $item)
                        <div class="bg-zinc-950 p-6 lg:p-8">
                            <h3 class="text-base font-semibold text-white">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-zinc-400">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============================================================
             WORK SHOWCASE — masonry-style gallery
        ============================================================ --}}
        <section class="border-b border-zinc-800/80 bg-zinc-950 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            Recent Work
                        </h2>
                        <p class="mt-3 text-base text-zinc-400">
                            A selection of fabricated products from our shop.
                        </p>
                    </div>
                    <a href="#" class="shrink-0 text-sm font-semibold text-amber-500 hover:text-amber-400">
                        View full gallery &rarr;
                    </a>
                </div>

                {{-- Masonry grid using CSS columns --}}
                <div class="mt-12 columns-1 gap-4 sm:columns-2 lg:columns-3 [&>*]:mb-4">

                    {{-- Each block: replace src + alt --}}
                    @php
                        $galleryItems = [
                            ['src' => '/images/gallery/work-1.jpg',  'alt' => 'Fabricated steel gate',        'ratio' => 'aspect-[4/5]'],
                            ['src' => '/images/gallery/work-2.jpg',  'alt' => 'Welded metal railing',         'ratio' => 'aspect-[4/3]'],
                            ['src' => '/images/gallery/work-3.jpg',  'alt' => 'Custom steel table',           'ratio' => 'aspect-square'],
                            ['src' => '/images/gallery/work-4.jpg',  'alt' => 'Security door detail',         'ratio' => 'aspect-[4/3]'],
                            ['src' => '/images/gallery/work-5.jpg',  'alt' => 'Window grille installation',   'ratio' => 'aspect-[4/5]'],
                            ['src' => '/images/gallery/work-6.jpg',  'alt' => 'Industrial bed frame',         'ratio' => 'aspect-[3/4]'],
                        ];
                    @endphp

                    @foreach ($galleryItems as $item)
                        <div class="break-inside-avoid overflow-hidden rounded-sm border border-zinc-800 bg-zinc-900">
                            <div class="{{ $item['ratio'] }} w-full overflow-hidden bg-zinc-800">
                                <img src="{{ $item['src'] }}"
                                     alt="{{ $item['alt'] }}"
                                     class="h-full w-full object-cover transition-transform duration-500 hover:scale-[1.03]"
                                     loading="lazy"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="hidden h-full w-full items-center justify-center bg-zinc-800">
                                    <span class="px-2 text-center text-[10px] text-zinc-600">{{ $item['src'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        {{-- ============================================================
             ABOUT THE BUSINESS
        ============================================================ --}}
        <section id="about" class="border-b border-zinc-800/80 bg-zinc-900/30 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-16">

                    <div class="lg:col-span-2">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            About the shop
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-zinc-400">
                            We're a small fabrication shop that builds metal products the
                            old-fashioned way — measured twice, welded once, and finished
                            properly. Over the years we've made gates, railings, furniture,
                            and custom pieces for homes and businesses across the region.
                        </p>
                        <p class="mt-4 text-base leading-relaxed text-zinc-400">
                            Every product leaving our shop is something we'd put in our own
                            home. That's the standard.
                        </p>

                        <a href="#" class="mt-8 inline-flex items-center justify-center rounded-sm border border-zinc-700 px-6 py-3.5 text-sm font-semibold text-zinc-200 hover:border-zinc-500 hover:text-white transition-colors">
                            Learn More
                        </a>
                    </div>

                    {{-- Quick facts --}}
                    <div class="space-y-5">
                        <div class="rounded-sm border border-zinc-800 bg-zinc-950 p-5">
                            <dt class="text-xs uppercase tracking-wider text-zinc-500">Experience</dt>
                            <dd class="mt-1 text-lg font-semibold text-white">15+ years fabricating</dd>
                        </div>
                        <div class="rounded-sm border border-zinc-800 bg-zinc-950 p-5">
                            <dt class="text-xs uppercase tracking-wider text-zinc-500">Location</dt>
                            <dd class="mt-1 text-lg font-semibold text-white">[Your City, State]</dd>
                        </div>
                        <div class="rounded-sm border border-zinc-800 bg-zinc-950 p-5">
                            <dt class="text-xs uppercase tracking-wider text-zinc-500">Specialty</dt>
                            <dd class="mt-1 text-lg font-semibold text-white">Custom welded products</dd>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ============================================================
             FINAL CTA
        ============================================================ --}}
        <section id="quote" class="border-b border-zinc-800/80 bg-zinc-950 py-20 lg:py-28">
            <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">
                    Have a project in mind?
                </h2>
                <p class="mx-auto mt-5 max-w-2xl text-lg leading-relaxed text-zinc-400">
                    Tell us what you need and we'll help turn the idea into a finished product.
                </p>

                <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="#contact"
                       class="inline-flex w-full items-center justify-center rounded-sm bg-amber-500 px-8 py-4 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors sm:w-auto">
                        Request a Quote
                    </a>
                    <a href="#contact"
                       class="inline-flex w-full items-center justify-center rounded-sm border border-zinc-700 px-8 py-4 text-sm font-semibold text-zinc-200 hover:border-zinc-500 hover:text-white transition-colors sm:w-auto">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>

    </main>

    {{-- ============================================================
         FOOTER
    ============================================================ --}}
    <footer id="contact" class="bg-zinc-950 pt-16 pb-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">

                {{-- Brand --}}
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2.5">
                        <svg class="h-6 w-6 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 3 4 14h6l-1 7 9-11h-6l1-7Z"/>
                        </svg>
                        <span class="text-base font-semibold text-white">IronForge<span class="text-amber-500">.</span></span>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-zinc-400">
                        Custom welded metal products — gates, doors, grilles, furniture,
                        railings, and one-off fabrication.
                    </p>
                </div>

                {{-- Products --}}
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Products</h3>
                    <ul class="mt-4 space-y-2.5">
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Gates &amp; Fences</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Doors</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Security Grilles</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Furniture</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Railings</a></li>
                        <li><a href="#custom"   class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Custom Fabrication</a></li>
                    </ul>
                </div>

                {{-- Company --}}
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Company</h3>
                    <ul class="mt-4 space-y-2.5">
                        <li><a href="#about"   class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">About</a></li>
                        <li><a href="#"        class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Gallery</a></li>
                        <li><a href="#quote"   class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Request a Quote</a></li>
                        <li><a href="#contact" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">Contact</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Contact</h3>
                    <ul class="mt-4 space-y-2.5 text-sm text-zinc-400">
                        <li>
                            <a href="tel:+15551234567" class="hover:text-amber-500 transition-colors">
                                +1 (555) 123-4567
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/15551234567" target="_blank" rel="noopener noreferrer" class="hover:text-amber-500 transition-colors">
                                WhatsApp: +1 (555) 123-4567
                            </a>
                        </li>
                        <li>
                            <a href="mailto:hello@ironforge.example" class="hover:text-amber-500 transition-colors">
                                hello@ironforge.example
                            </a>
                        </li>
                        <li class="pt-1 text-zinc-500">
                            [Street Address]<br>
                            [City, State ZIP]
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 border-t border-zinc-800 pt-6">
                <p class="text-xs text-zinc-500">
                    &copy; {{ date('Y') }} IronForge Metalworks. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    {{-- Alpine.js – used only for the mobile menu toggle.
         If your app.js already includes Alpine, remove this script block.
         No other JS frameworks are used. --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
  