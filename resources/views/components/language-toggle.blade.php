@php
    $currentLocale = app()->getLocale();
@endphp

<div {{ $attributes->merge(['class' => 'inline-flex items-center rounded-sm border border-zinc-700 p-0.5']) }} role="group" aria-label="{{ __('Language') }}">
    @foreach (config('app.available_locales') as $locale)
        <form method="POST" action="{{ route('locale.update') }}">
            @csrf
            <input type="hidden" name="locale" value="{{ $locale }}">
            <button type="submit"
                    @disabled($currentLocale === $locale)
                    class="px-2.5 py-1 text-xs font-semibold uppercase tracking-wide {{ $currentLocale === $locale ? 'rounded-sm bg-amber-500 text-zinc-950' : 'text-zinc-400 hover:text-white' }}"
                    @if ($currentLocale === $locale) aria-current="true" @endif>
                {{ $locale === 'sw' ? 'SW' : 'EN' }}
            </button>
        </form>
    @endforeach
</div>
