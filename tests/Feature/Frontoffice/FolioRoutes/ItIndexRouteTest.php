<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Cms\Tests\TestCase;

uses(TestCase::class);
=======
<<<<<<< HEAD
use Modules\Cms\Tests\TestCase;

uses(TestCase::class);
=======
uses(\Modules\Cms\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

it('GET /{locale} returns 200 and has lang attribute', function (): void {
    $locale = app()->getLocale();
    /** @phpstan-ignore-next-line property.notFound */
    $response = $this->get('/'.$locale);
    /* @phpstan-ignore-next-line method.nonObject */
    $response->assertStatus(200);
    /* @phpstan-ignore-next-line method.nonObject */
    $response->assertSee('<html', false);
    /* @phpstan-ignore-next-line method.nonObject */
    $response->assertSee(' lang="'.$locale.'"', false);
});
