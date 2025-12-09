<?php

declare(strict_types=1);

use Modules\Cms\Filament\Resources\MenuResource;
<<<<<<< HEAD
use Modules\Cms\Filament\Resources\PageContentResource;
use Modules\Cms\Filament\Resources\PageResource;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Filament\Resources\PageContentResource;
use Modules\Cms\Filament\Resources\PageResource;
=======
use Modules\Cms\Filament\Resources\PageResource;
use Modules\Cms\Filament\Resources\PageContentResource;
>>>>>>> a12f125f4a (.)
=======
use Modules\Cms\Filament\Resources\PageContentResource;
use Modules\Cms\Filament\Resources\PageResource;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Cms\Filament\Resources\PageResource;
use Modules\Cms\Filament\Resources\PageContentResource;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Xot\Filament\Resources\XotBaseResource;

test('cms resources extend proper base resources', function () {
    // Multilingual resources should extend LangBaseResource
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
    expect(PageResource::class)->toBeSubclassOf(LangBaseResource::class);

    expect(PageContentResource::class)->toBeSubclassOf(LangBaseResource::class);

    expect(SectionResource::class)->toBeSubclassOf(LangBaseResource::class);

<<<<<<< HEAD
    // Non-multilingual resources should extend XotBaseResource
    expect(MenuResource::class)->toBeSubclassOf(XotBaseResource::class);
=======
<<<<<<< HEAD
    // Non-multilingual resources should extend XotBaseResource
    expect(MenuResource::class)->toBeSubclassOf(XotBaseResource::class);
=======
=======
>>>>>>> origin/develop
    expect(PageResource::class)
        ->toBeSubclassOf(LangBaseResource::class);
    
    expect(PageContentResource::class)
        ->toBeSubclassOf(LangBaseResource::class);
    
    expect(SectionResource::class)
        ->toBeSubclassOf(LangBaseResource::class);
    
    // Non-multilingual resources should extend XotBaseResource
    expect(MenuResource::class)
        ->toBeSubclassOf(XotBaseResource::class);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    // Non-multilingual resources should extend XotBaseResource
    expect(MenuResource::class)->toBeSubclassOf(XotBaseResource::class);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('cms resources do not implement unnecessary methods', function () {
    $resources = [
        PageResource::class,
        PageContentResource::class,
        SectionResource::class,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        MenuResource::class,
    ];

    foreach ($resources as $resourceClass) {
        $reflection = new ReflectionClass($resourceClass);

        expect($reflection->hasMethod('getPages'))
            ->toBeFalse()
            ->with("{$resourceClass} should not implement getPages()")
            ->and($reflection->hasMethod('getRelations'))
            ->toBeFalse()
            ->with("{$resourceClass} should not implement getRelations()")
            ->and($reflection->hasMethod('form'))
            ->toBeFalse()
            ->with("{$resourceClass} should not implement form()")
            ->and($reflection->hasMethod('table'))
            ->toBeFalse()
<<<<<<< HEAD
=======
=======
        MenuResource::class
=======
        MenuResource::class,
>>>>>>> b93ef594b4 (.)
    ];

    foreach ($resources as $resourceClass) {
        $reflection = new ReflectionClass($resourceClass);

        expect($reflection->hasMethod('getPages'))
            ->toBeFalse()
            ->with("{$resourceClass} should not implement getPages()")
            ->and($reflection->hasMethod('getRelations'))
            ->toBeFalse()
            ->with("{$resourceClass} should not implement getRelations()")
            ->and($reflection->hasMethod('form'))
            ->toBeFalse()
            ->with("{$resourceClass} should not implement form()")
<<<<<<< HEAD
            ->and($reflection->hasMethod('table'))->toBeFalse()
>>>>>>> a12f125f4a (.)
=======
            ->and($reflection->hasMethod('table'))
            ->toBeFalse()
>>>>>>> b93ef594b4 (.)
=======
        MenuResource::class
    ];
    
    foreach ($resources as $resourceClass) {
        $reflection = new ReflectionClass($resourceClass);
        
        expect($reflection->hasMethod('getPages'))->toBeFalse()
            ->with("{$resourceClass} should not implement getPages()")
            ->and($reflection->hasMethod('getRelations'))->toBeFalse()
            ->with("{$resourceClass} should not implement getRelations()")
            ->and($reflection->hasMethod('form'))->toBeFalse()
            ->with("{$resourceClass} should not implement form()")
            ->and($reflection->hasMethod('table'))->toBeFalse()
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
            ->with("{$resourceClass} should not implement table()");
    }
});

test('cms resources implement required getFormSchema method', function () {
    $resources = [
        PageResource::class,
        PageContentResource::class,
        SectionResource::class,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        MenuResource::class,
    ];

    foreach ($resources as $resourceClass) {
        $reflection = new ReflectionClass($resourceClass);

        expect($reflection->hasMethod('getFormSchema'))
            ->toBeTrue()
            ->with("{$resourceClass} must implement getFormSchema()");

        $method = $reflection->getMethod('getFormSchema');
        expect($method->isPublic())
            ->toBeTrue()
            ->with("{$resourceClass}::getFormSchema() must be public")
            ->and($method->isStatic())
            ->toBeTrue()
            ->with("{$resourceClass}::getFormSchema() must be static")
            ->and($method->getReturnType()?->getName())
            ->toBe('array')
<<<<<<< HEAD
=======
=======
        MenuResource::class
=======
        MenuResource::class,
>>>>>>> b93ef594b4 (.)
    ];

    foreach ($resources as $resourceClass) {
        $reflection = new ReflectionClass($resourceClass);

        expect($reflection->hasMethod('getFormSchema'))
            ->toBeTrue()
            ->with("{$resourceClass} must implement getFormSchema()");

        $method = $reflection->getMethod('getFormSchema');
        expect($method->isPublic())
            ->toBeTrue()
            ->with("{$resourceClass}::getFormSchema() must be public")
            ->and($method->isStatic())
            ->toBeTrue()
            ->with("{$resourceClass}::getFormSchema() must be static")
<<<<<<< HEAD
            ->and($method->getReturnType()?->getName())->toBe('array')
>>>>>>> a12f125f4a (.)
=======
            ->and($method->getReturnType()?->getName())
            ->toBe('array')
>>>>>>> b93ef594b4 (.)
=======
        MenuResource::class
    ];
    
    foreach ($resources as $resourceClass) {
        $reflection = new ReflectionClass($resourceClass);
        
        expect($reflection->hasMethod('getFormSchema'))->toBeTrue()
            ->with("{$resourceClass} must implement getFormSchema()");
        
        $method = $reflection->getMethod('getFormSchema');
        expect($method->isPublic())->toBeTrue()
            ->with("{$resourceClass}::getFormSchema() must be public")
            ->and($method->isStatic())->toBeTrue()
            ->with("{$resourceClass}::getFormSchema() must be static")
            ->and($method->getReturnType()?->getName())->toBe('array')
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
            ->with("{$resourceClass}::getFormSchema() must return array");
    }
});

test('cms resources have correct model configuration', function () {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
    expect(PageResource::getModel())->toBe('Modules\\Cms\\Models\\Page');

    expect(PageContentResource::getModel())->toBe('Modules\\Cms\\Models\\PageContent');

    expect(SectionResource::getModel())->toBe('Modules\\Cms\\Models\\Section');

    expect(MenuResource::getModel())->toBe('Modules\\Cms\\Models\\Menu');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    expect(PageResource::getModel())
        ->toBe('Modules\\Cms\\Models\\Page');
    
    expect(PageContentResource::getModel())
        ->toBe('Modules\\Cms\\Models\\PageContent');
    
    expect(SectionResource::getModel())
        ->toBe('Modules\\Cms\\Models\\Section');
    
    expect(MenuResource::getModel())
        ->toBe('Modules\\Cms\\Models\\Menu');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('multilingual resources provide translatable locales', function () {
    $multilingualResources = [
        PageResource::class,
        PageContentResource::class,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        SectionResource::class,
    ];

    foreach ($multilingualResources as $resourceClass) {
        $locales = $resourceClass::getTranslatableLocales();

        expect($locales)
            ->toBeArray()
            ->not->toBeEmpty()->with("{$resourceClass} must provide translatable locales")->and($locales)->toContain(
                'it',
                'en',
            )->with("{$resourceClass} must support Italian and English locales");
<<<<<<< HEAD
=======
=======
        SectionResource::class
=======
        SectionResource::class,
>>>>>>> b93ef594b4 (.)
    ];

    foreach ($multilingualResources as $resourceClass) {
        $locales = $resourceClass::getTranslatableLocales();
<<<<<<< HEAD
=======
        SectionResource::class
    ];
    
    foreach ($multilingualResources as $resourceClass) {
        $locales = $resourceClass::getTranslatableLocales();
>>>>>>> origin/develop
        
        expect($locales)->toBeArray()->not->toBeEmpty()
            ->with("{$resourceClass} must provide translatable locales")
            ->and($locales)->toContain('it', 'en')
            ->with("{$resourceClass} must support Italian and English locales");
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        expect($locales)
            ->toBeArray()
            ->not->toBeEmpty()->with("{$resourceClass} must provide translatable locales")->and($locales)->toContain(
                'it',
                'en',
            )->with("{$resourceClass} must support Italian and English locales");
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    }
});

test('cms resource form schemas return valid arrays', function () {
    $resources = [
        PageResource::class,
        PageContentResource::class,
        SectionResource::class,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        MenuResource::class,
    ];

    foreach ($resources as $resourceClass) {
        $schema = $resourceClass::getFormSchema();

        expect($schema)
            ->toBeArray()
            ->not->toBeEmpty()->with("{$resourceClass}::getFormSchema() must return non-empty array");
<<<<<<< HEAD
=======
=======
        MenuResource::class
=======
        MenuResource::class,
>>>>>>> b93ef594b4 (.)
    ];

    foreach ($resources as $resourceClass) {
        $schema = $resourceClass::getFormSchema();
<<<<<<< HEAD
        
        expect($schema)->toBeArray()->not->toBeEmpty()
            ->with("{$resourceClass}::getFormSchema() must return non-empty array");
>>>>>>> a12f125f4a (.)
=======

        expect($schema)
            ->toBeArray()
            ->not->toBeEmpty()->with("{$resourceClass}::getFormSchema() must return non-empty array");
>>>>>>> b93ef594b4 (.)
=======
        MenuResource::class
    ];
    
    foreach ($resources as $resourceClass) {
        $schema = $resourceClass::getFormSchema();
        
        expect($schema)->toBeArray()->not->toBeEmpty()
            ->with("{$resourceClass}::getFormSchema() must return non-empty array");
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    }
});

test('page resource form schema contains expected fields', function () {
    $schema = PageResource::getFormSchema();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    expect($schema)->toBeArray()->not->toBeEmpty();

    // Check for basic field structure
    $hasTitleField = collect($schema)
        ->contains(
            fn ($field) => is_object($field) && method_exists($field, 'getName') && 'title' === $field->getName(),
        );

    $hasSlugField = collect($schema)
        ->contains(fn ($field) => is_object($field) && method_exists($field, 'getName') && 'slug' === $field->getName());

<<<<<<< HEAD
=======
=======
    
=======

>>>>>>> b93ef594b4 (.)
    expect($schema)->toBeArray()->not->toBeEmpty();

    // Check for basic field structure
<<<<<<< HEAD
=======
    
    expect($schema)->toBeArray()->not->toBeEmpty();
    
    // Check for basic field structure
>>>>>>> origin/develop
    $hasTitleField = collect($schema)->contains(fn($field) => 
        is_object($field) && method_exists($field, 'getName') && $field->getName() === 'title'
    );
    
    $hasSlugField = collect($schema)->contains(fn($field) =>
        is_object($field) && method_exists($field, 'getName') && $field->getName() === 'slug'
    );
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    $hasTitleField = collect($schema)
        ->contains(
            fn($field) => is_object($field) && method_exists($field, 'getName') && $field->getName() === 'title',
        );

    $hasSlugField = collect($schema)
        ->contains(fn($field) => is_object($field) && method_exists($field, 'getName') && $field->getName() === 'slug');

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    expect($hasTitleField)->toBeTrue('PageResource should have title field');
    expect($hasSlugField)->toBeTrue('PageResource should have slug field');
});

test('menu resource form schema contains expected fields', function () {
    $schema = MenuResource::getFormSchema();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    expect($schema)->toBeArray()->not->toBeEmpty();

    // Check for basic field structure
    $hasTitleField = collect($schema)
        ->contains(
            fn ($field) => is_object($field) && method_exists($field, 'getName') && 'title' === $field->getName(),
        );

    $hasItemsField = collect($schema)
        ->contains(
            fn ($field) => is_object($field) && method_exists($field, 'getName') && 'items' === $field->getName(),
        );

<<<<<<< HEAD
=======
=======
    
=======

>>>>>>> b93ef594b4 (.)
    expect($schema)->toBeArray()->not->toBeEmpty();

    // Check for basic field structure
<<<<<<< HEAD
=======
    
    expect($schema)->toBeArray()->not->toBeEmpty();
    
    // Check for basic field structure
>>>>>>> origin/develop
    $hasTitleField = collect($schema)->contains(fn($field) => 
        is_object($field) && method_exists($field, 'getName') && $field->getName() === 'title'
    );
    
    $hasItemsField = collect($schema)->contains(fn($field) =>
        is_object($field) && method_exists($field, 'getName') && $field->getName() === 'items'
    );
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    $hasTitleField = collect($schema)
        ->contains(
            fn($field) => is_object($field) && method_exists($field, 'getName') && $field->getName() === 'title',
        );

    $hasItemsField = collect($schema)
        ->contains(
            fn($field) => is_object($field) && method_exists($field, 'getName') && $field->getName() === 'items',
        );

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    expect($hasTitleField)->toBeTrue('MenuResource should have title field');
    expect($hasItemsField)->toBeTrue('MenuResource should have items field');
});

test('resources use proper base resource functionality', function () {
    $resources = [
        PageResource::class,
        PageContentResource::class,
        SectionResource::class,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        MenuResource::class,
    ];

    foreach ($resources as $resourceClass) {
        $pages = $resourceClass::getPages();
        $relations = $resourceClass::getRelations();

        expect($pages)
            ->toBeArray()
            ->toHaveKeys(['index', 'create', 'edit'])
            ->with("{$resourceClass} should have standard pages");

        expect($relations)->toBeArray()->with("{$resourceClass} should return relations array");
<<<<<<< HEAD
=======
=======
        MenuResource::class
=======
        MenuResource::class,
>>>>>>> b93ef594b4 (.)
    ];

    foreach ($resources as $resourceClass) {
        $pages = $resourceClass::getPages();
        $relations = $resourceClass::getRelations();

        expect($pages)
            ->toBeArray()
            ->toHaveKeys(['index', 'create', 'edit'])
            ->with("{$resourceClass} should have standard pages");
<<<<<<< HEAD
        
        expect($relations)->toBeArray()
            ->with("{$resourceClass} should return relations array");
>>>>>>> a12f125f4a (.)
=======

        expect($relations)->toBeArray()->with("{$resourceClass} should return relations array");
>>>>>>> b93ef594b4 (.)
=======
        MenuResource::class
    ];
    
    foreach ($resources as $resourceClass) {
        $pages = $resourceClass::getPages();
        $relations = $resourceClass::getRelations();
        
        expect($pages)->toBeArray()->toHaveKeys(['index', 'create', 'edit'])
            ->with("{$resourceClass} should have standard pages");
        
        expect($relations)->toBeArray()
            ->with("{$resourceClass} should return relations array");
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    }
});

test('resources follow naming conventions', function () {
    expect(class_basename(PageResource::class))->toBe('PageResource');
    expect(class_basename(PageContentResource::class))->toBe('PageContentResource');
    expect(class_basename(SectionResource::class))->toBe('SectionResource');
    expect(class_basename(MenuResource::class))->toBe('MenuResource');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    // Test that model names are correctly derived
    expect(PageResource::getModel())->toBe('Modules\\Cms\\Models\\Page');
    expect(PageContentResource::getModel())->toBe('Modules\\Cms\\Models\\PageContent');
    expect(SectionResource::getModel())->toBe('Modules\\Cms\\Models\\Section');
    expect(MenuResource::getModel())->toBe('Modules\\Cms\\Models\\Menu');
});

test('lang base resource provides multilingual features', function () {
    $multilingualResources = [
        PageResource::class,
        PageContentResource::class,
<<<<<<< HEAD
        SectionResource::class,
    ];

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        SectionResource::class,
    ];

=======
        SectionResource::class
    ];
    
>>>>>>> a12f125f4a (.)
=======
        SectionResource::class,
    ];

>>>>>>> b93ef594b4 (.)
=======
        SectionResource::class
    ];
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    foreach ($multilingualResources as $resourceClass) {
        // Test that multilingual methods are available
        expect(method_exists($resourceClass, 'getTranslatableLocales'))->toBeTrue();
        expect(method_exists($resourceClass, 'getDefaultTranslatableLocale'))->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $locales = $resourceClass::getTranslatableLocales();
        $defaultLocale = $resourceClass::getDefaultTranslatableLocale();

        expect($locales)->toBeArray()->not->toBeEmpty();
        expect($defaultLocale)->toBeString()->not->toBeEmpty();
    }
});
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $locales = $resourceClass::getTranslatableLocales();
        $defaultLocale = $resourceClass::getDefaultTranslatableLocale();

        expect($locales)->toBeArray()->not->toBeEmpty();
        expect($defaultLocale)->toBeString()->not->toBeEmpty();
    }
});
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        $locales = $resourceClass::getTranslatableLocales();
        $defaultLocale = $resourceClass::getDefaultTranslatableLocale();
        
        expect($locales)->toBeArray()->not->toBeEmpty();
        expect($defaultLocale)->toBeString()->not->toBeEmpty();
    }
});
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
