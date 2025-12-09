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

it('SKIP dynamic /it/pages/{slug}', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $this->markTestSkipped('Dynamic pages slug requires fixture.');
});
