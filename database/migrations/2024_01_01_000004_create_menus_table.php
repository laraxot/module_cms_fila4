<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class .
 */
return new class extends XotBaseMigration {
    /**
     * Run the migrations.
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

            $table->string('name');
            $table->text('items')->nullable();
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('items')) {
                $table->text('items')->nullable();
            }

            if (!$this->hasColumn('parent_id')) {
                $table->unsignedBigInteger('parent_id')->nullable();
            }
            if ($this->hasColumn('name')) {
                $table->renameColumn('name', 'title');
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

            $table->string('name');
            $table->text('items')->nullable();
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('items')) {
                $table->text('items')->nullable();
            }

            if (!$this->hasColumn('parent_id')) {
                $table->unsignedBigInteger('parent_id')->nullable();
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======
            if ($this->hasColumn('name')) {
                $table->renameColumn('name', 'title');
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

                $table->string('name');
                $table->text('items')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('items')) {
                    $table->text('items')->nullable();
                }

                if (! $this->hasColumn('parent_id')) {
                    $table->unsignedBigInteger('parent_id')->nullable();
                }
                if ($this->hasColumn('name')) {
                    $table->renameColumn('name', 'title');
                }

                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    }
};
