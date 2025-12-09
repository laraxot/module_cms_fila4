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

it('SKIP dynamic /it/auth/{type}/register', function (): void {
    /* @phpstan-ignore-next-line property.notFound */
    $this->markTestSkipped('Dynamic type route requires fixture.');
});
