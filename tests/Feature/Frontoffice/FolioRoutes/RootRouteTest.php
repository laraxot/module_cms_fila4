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

it('GET / redirects to /{locale}', function (): void {
    $locale = app()->getLocale();
    /** @phpstan-ignore-next-line property.notFound */
    $this->get('/')->assertRedirect('/'.$locale);
});
