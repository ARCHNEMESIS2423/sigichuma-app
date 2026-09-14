@php
    // ---- Placeholder data – replace with DB/controller later ----
    $products = $products ?? [
        [
            'name'        => __('Modern Metal Gate'),
            'description' => __('Clean lines, heavy-gauge steel, powder-coated finish. Built for security and style.'),
            'price'       => __('From $1,200'),
            'image'       => '/images/products/metal-gate.jpg',
            'alt'         => __('Modern metal gate with horizontal slats'),
        ],
        [
            'name'        => __('Security Door'),
            'description' => __('Reinforced frame, tamper-proof hinges, custom sizing. Peace of mind that lasts.'),
            'price'       => __('From $850'),
            'image'       => '/images/products/security-door.jpg',
            'alt'         => __('Heavy-duty steel security door'),
        ],
        [
            'name'        => __('Window Grilles'),
            'description' => __('Architectural grilles that protect without blocking light. Made to measure.'),
            'price'       => __('From $180'),
            'image'       => '/images/products/window-grille.jpg',
            'alt'         => __('Decorative steel window grille'),
        ],
        [
            'name'        => __('Metal Bed Frame'),
            'description' => __('Solid steel frame, no squeaks, no flex. Minimalist industrial design.'),
            'price'       => __('From $650'),
            'image'       => '/images/products/bed-frame.jpg',
            'alt'         => __('Industrial metal bed frame'),
        ],
        [
            'name'        => __('Stair Railing'),
            'description' => __('Custom fabricated railings for interior and exterior stairs. Code-compliant.'),
            'price'       => __('From $95/linear ft'),
            'image'       => '/images/products/stair-railing.jpg',
            'alt'         => __('Modern steel stair railing'),
        ],
        [
            'name'        => __('Custom Steel Table'),
            'description' => __('Hand-welded steel base with your choice of top. One-of-a-kind furniture.'),
            'price'       => __('From $1,500'),
            'image'       => '/images/products/steel-table.jpg',
            'alt'         => __('Custom welded steel table'),
        ],
    ];

    $categories = $categories ?? [
        [
            'name'  => __('Gates & Fences'),
            'image' => '/images/categories/gates.jpg',
            'alt'   => __('Metal gates and fencing'),
        ],
        [
            'name'  => __('Doors'),
            'image' => '/images/categories/doors.jpg',
            'alt'   => __('Steel security doors'),
        ],
        [
            'name'  => __('Security Grilles'),
            'image' => '/images/categories/grilles.jpg',
            'alt'   => __('Window security grilles'),
        ],
        [
            'name'  => __('Furniture'),
            'image' => '/images/categories/furniture.jpg',
            'alt'   => __('Metal furniture'),
        ],
        [
            'name'  => __('Railings'),
            'image' => '/images/categories/railings.jpg',
            'alt'   => __('Stair and balcony railings'),
        ],
        [
            'name'  => __('Custom Fabrication'),
            'image' => '/images/categories/custom.jpg',
            'alt'   => __('Custom metal fabrication'),
        ],
    ];

    $processSteps = [
        ['num' => '01', 'title' => __('Tell us what you need'), 'desc' => __('Share your idea, rough dimensions, or a reference photo.')],
        ['num' => '02', 'title' => __('We discuss measurements & design'), 'desc' => __('We refine the details, suggest materials, and provide a clear quote.')],
        ['num' => '03', 'title' => __('We fabricate it'), 'desc' => __('Your product is cut, welded, ground, and finished in our shop.')],
        ['num' => '04', 'title' => __('We deliver & install'), 'desc' => __('We bring it to your site, install it properly, and clean up.')],
    ];

    $whyUs = [
        ['title' => __('Strong Materials'),   'desc' => __('We use heavy-gauge steel and quality hardware. Nothing flimsy.')],
        ['title' => __('Precise Fabrication'),'desc' => __('Tight welds, square frames, clean grinds. Every time.')],
        ['title' => __('Custom Designs'),     'desc' => __('Every product is built to your measurements and style.')],
        ['title' => __('Reliable Finishing'), 'desc' => __('Powder coating, galvanizing, or paint — durable and even.')],
    ];
    $website_title = config('app.name', 'Sigchuma work shop 🏭️');
@endphp
 {{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ __('Custom welded metal products — gates, doors, grilles, furniture, railings. Built to last.') }}">
    <title>{{ config('app.name', 'Sigchuma work shop 🏭️') }} — {{ __('Custom Metal Fabrication') }}</title> 
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
                @include("partials.logo")
                {{-- Desktop nav --}}
                <div class="hidden md:flex md:items-center md:gap-8">
                    <a href="#products"   class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">{{ __('Products') }}</a>
                    <a href="#about"      class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">{{ __('About') }}</a>
                    <a href="#custom"     class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">{{ __('Custom Fabrication') }}</a>
                    <a href="#contact"    class="text-sm font-medium text-zinc-300 hover:text-white transition-colors">{{ __('Contact') }}</a>
                </div>

                {{-- Desktop CTA --}}
                <div class="hidden md:flex md:items-center md:gap-3">
                    <x-language-toggle />
                    <a href="#quote"
                       class="inline-flex items-center gap-2 rounded-sm bg-amber-500 px-5 py-2.5 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                        {{ __('Request a Quote') }}
                    </a>
                </div>

                {{-- Mobile language + hamburger --}}
                <div class="flex items-center gap-2 md:hidden">
                    <x-language-toggle />
                    <button type="button"
                        @click="mobileOpen = !mobileOpen"
                        :aria-expanded="mobileOpen"
                        aria-controls="mobile-menu"
                        class="md:hidden inline-flex items-center justify-center rounded-sm p-2 text-zinc-300 hover:text-white hover:bg-zinc-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-amber-500"
                        aria-label="{{ __('Toggle navigation menu') }}">
                    <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </button>
                </div>
            </div>

            {{-- Mobile menu --}}
            <div x-show="mobileOpen" x-cloak x-transition.opacity.duration.150ms id="mobile-menu" class="md:hidden border-t border-zinc-800/80 pb-4 pt-2">
                <div class="flex flex-col gap-1">
                    <a href="#products" @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">{{ __('Products') }}</a>
                    <a href="#about"    @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">{{ __('About') }}</a>
                    <a href="#custom"   @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">{{ __('Custom Fabrication') }}</a>
                    <a href="#contact"  @click="mobileOpen = false" class="rounded-sm px-3 py-2.5 text-base font-medium text-zinc-200 hover:bg-zinc-800 hover:text-white">{{ __('Contact') }}</a>
                    <a href="#quote"    @click="mobileOpen = false"
                       class="mt-2 inline-flex items-center justify-center rounded-sm bg-amber-500 px-5 py-3 text-sm font-semibold text-zinc-950 hover:bg-amber-400">
                        {{ __('Request a Quote') }}
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
                            {{ __('Welded & Fabricated In-House') }}
                        </p>
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                            {{ __('Built to Last.') }}<br>
                            <span class="text-zinc-400">{{ __('Made for Your Space.') }}</span>
                        </h1>
                        <p class="mt-6 text-lg leading-relaxed text-zinc-400">
                            {{ __('We fabricate strong, practical metal products — gates, doors, grilles, furniture, and railings — for homes, businesses, and custom projects. Every piece is welded, finished, and fitted by hand.') }}
                        </p>

                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="#products"
                               class="inline-flex items-center justify-center rounded-sm bg-amber-500 px-6 py-3.5 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                                {{ __('Browse Products') }}
                            </a>
                            <a href="#quote"
                               class="inline-flex items-center justify-center rounded-sm border border-zinc-700 bg-transparent px-6 py-3.5 text-sm font-semibold text-zinc-200 hover:border-zinc-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                                {{ __('Request a Quote') }}
                            </a>
                        </div>

                        {{-- Small trust strip --}}
                        <dl class="mt-10 grid grid-cols-3 gap-4 border-t border-zinc-800 pt-6">
                            <div>
                                <dt class="text-xs uppercase tracking-wider text-zinc-500">{{ __('Experience') }}</dt>
                                <dd class="mt-1 text-lg font-semibold text-white">{{ __('15+ yrs') }}</dd>
                            </div>
                            <div>
                                <dt class="text-xs uppercase tracking-wider text-zinc-500">{{ __('Projects') }}</dt>
                                <dd class="mt-1 text-lg font-semibold text-white">500+</dd>
                            </div>
                            <div>
                                <dt class="text-xs uppercase tracking-wider text-zinc-500">{{ __('Custom Work') }}</dt>
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
                                 alt="{{ __('Featured welded metal product — modern steel gate') }}"
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
                            <p class="text-xs font-medium uppercase tracking-wider text-amber-500">{{ __('Featured') }}</p>
                            <p class="text-sm font-semibold text-white">{{ __('Modern Metal Gate') }}</p>
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
                            {{ __('Our Products') }}
                        </h2>
                        <p class="mt-3 text-base leading-relaxed text-zinc-400">
                            {{ __('Every product is fabricated in our shop. Sizes, finishes, and designs can be customized to fit your space.') }}
                        </p>
                    </div>
                    <a href="#quote" class="shrink-0 text-sm font-semibold text-amber-500 hover:text-amber-400">
                        {{ __('Need something else?') }} &rarr;
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
                                        {{ __('View Product') }}
                                    </a>
                                    <a href="#quote"
                                       class="inline-flex items-center justify-center rounded-sm border border-zinc-700 px-4 py-2.5 text-sm font-semibold text-amber-500 hover:border-amber-500/60 hover:text-amber-400 transition-colors"
                                       aria-label="{{ __('Request a quote for :name', ['name' => $product['name']]) }}">
                                        {{ __('Quote') }}
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
                    {{ __('Shop by Category') }}
                </h2>
                <p class="mt-3 max-w-2xl text-base leading-relaxed text-zinc-400">
                    {{ __('Browse our main product lines. Don\'t see what you need? We build custom.') }}
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
                            {{ __('Need something not in the catalog?') }}
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-zinc-400">
                            {{ __('We build custom metal products every day — from one-off furniture pieces to complete architectural railings. Tell us what you need and we\'ll fabricate it to your exact measurements and finish.') }}
                        </p>

                        <a href="#quote"
                           class="mt-8 inline-flex items-center justify-center rounded-sm bg-amber-500 px-6 py-3.5 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors">
                            {{ __('Request Custom Work') }}
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
                    {{ __('Why our products hold up') }}
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
                            {{ __('Recent Work') }}
                        </h2>
                        <p class="mt-3 text-base text-zinc-400">
                            {{ __('A selection of fabricated products from our shop.') }}
                        </p>
                    </div>
                    <a href="#" class="shrink-0 text-sm font-semibold text-amber-500 hover:text-amber-400">
                        {{ __('View full gallery') }} &rarr;
                    </a>
                </div>

                {{-- Masonry grid using CSS columns --}}
                <div class="mt-12 columns-1 gap-4 sm:columns-2 lg:columns-3 [&>*]:mb-4">

                    {{-- Each block: replace src + alt --}}
                    @php
                        $galleryItems = [
                            ['src' => '/images/gallery/work-1.jpg',  'alt' => __('Fabricated steel gate'),        'ratio' => 'aspect-[4/5]'],
                            ['src' => '/images/gallery/work-2.jpg',  'alt' => __('Welded metal railing'),         'ratio' => 'aspect-[4/3]'],
                            ['src' => '/images/gallery/work-3.jpg',  'alt' => __('Custom steel table'),           'ratio' => 'aspect-square'],
                            ['src' => '/images/gallery/work-4.jpg',  'alt' => __('Security door detail'),         'ratio' => 'aspect-[4/3]'],
                            ['src' => '/images/gallery/work-5.jpg',  'alt' => __('Window grille installation'),   'ratio' => 'aspect-[4/5]'],
                            ['src' => '/images/gallery/work-6.jpg',  'alt' => __('Industrial bed frame'),         'ratio' => 'aspect-[3/4]'],
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
                            {{ __('About the shop') }}
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-zinc-400">
                            {{ __('We\'re a small fabrication shop that builds metal products the old-fashioned way — measured twice, welded once, and finished properly. Over the years we\'ve made gates, railings, furniture, and custom pieces for homes and businesses across the region.') }}
                        </p>
                        <p class="mt-4 text-base leading-relaxed text-zinc-400">
                            {{ __('Every product leaving our shop is something we\'d put in our own home. That\'s the standard.') }}
                        </p>

                        <a href="#" class="mt-8 inline-flex items-center justify-center rounded-sm border border-zinc-700 px-6 py-3.5 text-sm font-semibold text-zinc-200 hover:border-zinc-500 hover:text-white transition-colors">
                            {{ __('Learn More') }}
                        </a>
                    </div>

                    {{-- Quick facts --}}
                    <div class="space-y-5">
                        <div class="rounded-sm border border-zinc-800 bg-zinc-950 p-5">
                            <dt class="text-xs uppercase tracking-wider text-zinc-500">{{ __('Experience') }}</dt>
                            <dd class="mt-1 text-lg font-semibold text-white">{{ __('15+ years fabricating') }}</dd>
                        </div>
                        <div class="rounded-sm border border-zinc-800 bg-zinc-950 p-5">
                            <dt class="text-xs uppercase tracking-wider text-zinc-500">{{ __('Location') }}</dt>
                            <dd class="mt-1 text-lg font-semibold text-white">[Your City, State]</dd>
                        </div>
                        <div class="rounded-sm border border-zinc-800 bg-zinc-950 p-5">
                            <dt class="text-xs uppercase tracking-wider text-zinc-500">{{ __('Specialty') }}</dt>
                            <dd class="mt-1 text-lg font-semibold text-white">{{ __('Custom welded products') }}</dd>
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
                    {{ __('Have a project in mind?') }}
                </h2>
                <p class="mx-auto mt-5 max-w-2xl text-lg leading-relaxed text-zinc-400">
                    {{ __('Tell us what you need and we\'ll help turn the idea into a finished product.') }}
                </p>

                <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="#contact"
                       class="inline-flex w-full items-center justify-center rounded-sm bg-amber-500 px-8 py-4 text-sm font-semibold text-zinc-950 hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 transition-colors sm:w-auto">
                        {{ __('Request a Quote') }}
                    </a>
                    <a href="#contact"
                       class="inline-flex w-full items-center justify-center rounded-sm border border-zinc-700 px-8 py-4 text-sm font-semibold text-zinc-200 hover:border-zinc-500 hover:text-white transition-colors sm:w-auto">
                        {{ __('Contact Us') }}
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
                    @include("partials.logo")
                    <p class="mt-4 text-sm leading-relaxed text-zinc-400">
                        {{ __('Custom welded metal products — gates, doors, grilles, furniture, railings, and one-off fabrication.') }}
                    </p>
                </div>

                {{-- Products --}}
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">{{ __('Products') }}</h3>
                    <ul class="mt-4 space-y-2.5">
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Gates & Fences') }}</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Doors') }}</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Security Grilles') }}</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Furniture') }}</a></li>
                        <li><a href="#products" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Railings') }}</a></li>
                        <li><a href="#custom"   class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Custom Fabrication') }}</a></li>
                    </ul>
                </div>

                {{-- Company --}}
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">{{ __('Company') }}</h3>
                    <ul class="mt-4 space-y-2.5">
                        <li><a href="#about"   class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('About') }}</a></li>
                        <li><a href="#"        class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Gallery') }}</a></li>
                        <li><a href="#quote"   class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Request a Quote') }}</a></li>
                        <li><a href="#contact" class="text-sm text-zinc-400 hover:text-amber-500 transition-colors">{{ __('Contact') }}</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">{{ __('Contact') }}</h3>
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
                            <a href="mailto:hello{{ '@'.config('app.name', 'Sigchuma')}}.example" class="hover:text-amber-500 transition-colors">
                                hello{{ '@'.config('app.name', 'Sigchuma')}}.example
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
                    &copy; {{ date('Y') }} {{ config('app.name', 'Sigchuma')}} Metalworks. {{ __('All rights reserved.') }}
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
  