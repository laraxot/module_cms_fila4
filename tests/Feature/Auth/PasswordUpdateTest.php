<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Volt\Volt;
use Modules\Xot\Tests\TestCase;

uses(TestCase::class);

test('password can be updated', function (): void {
    /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create([
        'password' => Hash::make('password'),
    ]);

    /** @phpstan-ignore-next-line property.notFound */
    $this->actingAs($user);

    $response = Volt::test('settings.password')
        ->set('current_password', 'password')
        ->set('password', 'new-password')
        ->set('password_confirmation', 'new-password')
        ->call('updatePassword');

    /** @phpstan-ignore-next-line method.nonObject */
    $response->assertHasNoErrors();

    expect(Hash::check('new-password', $user->refresh()->password))->toBeTrue();
});

test('correct password must be provided to update password', function (): void {
    /** @var \Illuminate\Database\Eloquent\Collection */
        $user = User/** @phpstan-ignore-line */ ::factory()->create([
        'password' => Hash::make('password'),
    ]);

    /** @phpstan-ignore-next-line property.notFound */
    $this->actingAs($user);

    $response = Volt::test('settings.password')
        ->set('current_password', 'wrong-password')
        ->set('password', 'new-password')
        ->set('password_confirmation', 'new-password')
        ->call('updatePassword');

    /** @phpstan-ignore-next-line method.nonObject */
    $response->assertHasErrors(['current_password']);
});
