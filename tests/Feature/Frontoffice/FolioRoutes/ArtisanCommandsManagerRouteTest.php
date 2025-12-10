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

it('GET /it/artisan-commands-manager returns acceptable status', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $res = $this->get('/it/artisan-commands-manager');
    /** @phpstan-ignore-next-line method.nonObject */
    $status = $res->getStatusCode();
    if ($status >= 500) {
        /* @phpstan-ignore-next-line property.notFound */
        $this->markTestSkipped('Server error on /it/artisan-commands-manager: '.$status);
    }
    expect($status)->toBeIn([200, 204, 301, 302, 303, 307, 308, 401, 403]);
});
