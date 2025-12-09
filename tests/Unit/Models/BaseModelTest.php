<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Cms\Models\BaseModel;
=======
use Modules\Cms\Models\BaseModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 3401a6b (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Cms\Models\BaseModel;
>>>>>>> 1377a46 (.)
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
