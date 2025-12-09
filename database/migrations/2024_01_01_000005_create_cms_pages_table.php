<?php

declare(strict_types=1);

use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Modules\Cms\Models\Page;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateCmsPagesTable.
 */
return new class extends XotBaseMigration {
<<<<<<< HEAD
    protected null|string $model_class = Page::class;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $model_class = Page::class;
=======
    protected ?string $model_class = Page::class;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $model_class = Page::class;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $model_class = Page::class;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

    /**
     * db up.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        $this->tableCreate(static function (Blueprint $table): void {
            $table->id();

            $table->string('slug')->unique()->index();
            $table->string('title');
            $table->text('content')->nullable();
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if ($this->hasColumn('content')) {
                $table->text('content')->nullable()->change();
            }

            if (!$this->hasColumn('content_blocks')) {
                $table->json('content_blocks')->nullable();

                // $table->json('content_blocks')->default(new Expression('(JSON_ARRAY())'));
            }

            if (!$this->hasColumn('sidebar_blocks')) {
                $table->json('sidebar_blocks')->nullable();

                // $table->json('sidebar_blocks')->default(new Expression('(JSON_ARRAY())'));
            }
            if (!$this->hasColumn('footer_blocks')) {
                $table->json('footer_blocks')->nullable();

                // $table->json('footer_blocks')->default(new Expression('(JSON_ARRAY())'));
            }
            if (!$this->hasColumn('slug')) {
                $table->string('slug')->index();
            }

            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
=======
=======
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
=======
        $this->tableCreate(static function (Blueprint $table): void {
            $table->id();
>>>>>>> b93ef594b4 (.)

            $table->string('slug')->unique()->index();
            $table->string('title');
            $table->text('content')->nullable();
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if ($this->hasColumn('content')) {
                $table->text('content')->nullable()->change();
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======

            if (!$this->hasColumn('content_blocks')) {
                $table->json('content_blocks')->nullable();

                // $table->json('content_blocks')->default(new Expression('(JSON_ARRAY())'));
            }

            if (!$this->hasColumn('sidebar_blocks')) {
                $table->json('sidebar_blocks')->nullable();

                // $table->json('sidebar_blocks')->default(new Expression('(JSON_ARRAY())'));
            }
            if (!$this->hasColumn('footer_blocks')) {
                $table->json('footer_blocks')->nullable();

                // $table->json('footer_blocks')->default(new Expression('(JSON_ARRAY())'));
            }
            if (!$this->hasColumn('slug')) {
                $table->string('slug')->index();
            }

            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
>>>>>>> b93ef594b4 (.)
=======
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();

                $table->string('slug')->unique()->index();
                $table->string('title');
                $table->text('content')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if ($this->hasColumn('content')) {
                    $table->text('content')->nullable()->change();
                }

                if (! $this->hasColumn('content_blocks')) {
                    $table->json('content_blocks')->nullable();
                    // $table->json('content_blocks')->default(new Expression('(JSON_ARRAY())'));
                }

                if (! $this->hasColumn('sidebar_blocks')) {
                    $table->json('sidebar_blocks')->nullable();
                    // $table->json('sidebar_blocks')->default(new Expression('(JSON_ARRAY())'));
                }
                if (! $this->hasColumn('footer_blocks')) {
                    $table->json('footer_blocks')->nullable();
                    // $table->json('footer_blocks')->default(new Expression('(JSON_ARRAY())'));
                }
                if (! $this->hasColumn('slug')) {
                    $table->string('slug')->index();
                }

                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    }
};
