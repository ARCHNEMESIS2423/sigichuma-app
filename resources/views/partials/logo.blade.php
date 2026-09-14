
<a href="/" class="flex items-center gap-2.5 shrink-0" aria-label="Home">
    {{-- Simple inline SVG mark – no external icon library --}}
    <img src="{{ asset('favicon.svg') }}" alt="welcome" width="40px"/>
    <span class="text-lg font-semibold tracking-tight text-white">
        {{$website_title}}<span class="text-amber-500">.</span>
    </span>
</a>
