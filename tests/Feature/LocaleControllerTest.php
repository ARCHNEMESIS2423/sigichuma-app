<?php

test('stores the chosen locale in the session', function () {
    $response = $this->from(route('home'))->post(route('locale.update'), [
        'locale' => 'sw',
    ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect(route('home'))
        ->assertSessionHas('locale', 'sw');
});

test('renders the home page in Swahili when the session locale is Swahili', function () {
    $response = $this->withSession(['locale' => 'sw'])->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('Bidhaa', false)
        ->assertSee('Omba Bei', false)
        ->assertDontSee('Request a Quote', false);
});

test('renders the home page in English by default', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('Request a Quote', false)
        ->assertDontSee('Omba Bei', false);
});

test('rejects a locale that is not supported', function () {
    $response = $this->from(route('home'))->post(route('locale.update'), [
        'locale' => 'fr',
    ]);

    $response
        ->assertRedirect(route('home'))
        ->assertSessionHasErrors([
            'locale' => 'The selected locale is invalid.',
        ])
        ->assertSessionMissing('locale');
});

test('rejects a missing locale', function () {
    $response = $this->from(route('home'))->post(route('locale.update'));

    $response
        ->assertRedirect(route('home'))
        ->assertSessionHasErrors([
            'locale' => 'The locale field is required.',
        ])
        ->assertSessionMissing('locale');
});

test('falls back to English when the session locale is not supported', function () {
    $response = $this->withSession(['locale' => 'fr'])->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('Request a Quote', false)
        ->assertDontSee('Omba Bei', false);
});
