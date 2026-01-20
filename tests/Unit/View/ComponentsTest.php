<?php

declare(strict_types=1);

uses(Modules\Cms\Tests\TestCase::class);

use Modules\Cms\View\Components\Page;
use Modules\Cms\View\Components\PageContent;
use Modules\Cms\View\Components\Section;

test('Section component can be instantiated', function () {
<<<<<<< Updated upstream
    $component = new Section();

=======
    $component = new Section('test-slug');
    
>>>>>>> Stashed changes
    expect($component)->toBeInstanceOf(Section::class);
});

test('Page component can be instantiated', function () {
<<<<<<< Updated upstream
    $component = new Page();

=======
    // Page component requires both 'side' and 'slug' parameters
    $component = new Page('content', 'test-slug');
    
>>>>>>> Stashed changes
    expect($component)->toBeInstanceOf(Page::class);
});

test('PageContent component can be instantiated', function () {
<<<<<<< Updated upstream
    $component = new PageContent();

=======
    $component = new PageContent('test-slug');
    
>>>>>>> Stashed changes
    expect($component)->toBeInstanceOf(PageContent::class);
});
