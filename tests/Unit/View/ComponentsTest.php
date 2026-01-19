<?php

declare(strict_types=1);

uses(Modules\Cms\Tests\TestCase::class);

use Modules\Cms\View\Components\Page;
use Modules\Cms\View\Components\PageContent;
use Modules\Cms\View\Components\Section;

test('Section component can be instantiated', function () {
    $component = new Section();

    expect($component)->toBeInstanceOf(Section::class);
});

test('Page component can be instantiated', function () {
    $component = new Page();

    expect($component)->toBeInstanceOf(Page::class);
});

test('PageContent component can be instantiated', function () {
    $component = new PageContent();

    expect($component)->toBeInstanceOf(PageContent::class);
});
