<?php

declare(strict_types=1);

use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateCmsPagesTable.
 */
return new class extends XotBaseMigration {
    /**
     * db up.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
        $this->tableCreate(static function (Blueprint $table): void {
            $table->id();

            $table->string('slug')->unique()->index();
            $table->string('name');
            $table->json('blocks')->nullable();

            // $table->json('blocks')->default(new Expression('(JSON_ARRAY())'));
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
=======
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
=======
        $this->tableCreate(static function (Blueprint $table): void {
            $table->id();
>>>>>>> b93ef594b4 (.)

            $table->string('slug')->unique()->index();
            $table->string('name');
            $table->json('blocks')->nullable();

            // $table->json('blocks')->default(new Expression('(JSON_ARRAY())'));
        });
        // -- UPDATE --
<<<<<<< HEAD
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> a12f125f4a (.)
=======
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
>>>>>>> b93ef594b4 (.)
    }
};
