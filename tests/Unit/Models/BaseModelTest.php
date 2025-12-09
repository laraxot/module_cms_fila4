<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Unit\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Cms\Models\BaseModel;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Cms\Models\BaseModel;
=======
use Modules\Cms\Models\BaseModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Cms\Models\BaseModel;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Cms\Models\BaseModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function (): void {
    $this->baseModel = new class extends BaseModel
    {
        protected $table = 'test_cms_table';
    };
});

test('base model extends eloquent model', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel->getTable())->toBe('test_cms_table');
});

test('base model can be instantiated', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
});

test('base model has proper inheritance chain', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has timestamps enabled', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->baseModel->usesTimestamps())->toBeTrue();
});
