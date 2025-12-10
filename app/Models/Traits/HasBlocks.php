<?php

declare(strict_types=1);

namespace Modules\Cms\Models\Traits;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;
use Modules\Cms\Datas\BlockData;
use Modules\Xot\Datas\XotData;

trait HasBlocks
{
    /**
     * @return array<int, BlockData>
     */
    public function getBlocks(): array
    {
        $blocks = $this->blocks;

        if (! is_array($blocks)) {
            $primary_lang = XotData::make()->primary_lang;
            $blocks = $this->getTranslation('blocks', $primary_lang);
        }

        if (! is_array($blocks)) {
            $blocks = [];
        }

        $blocks = $this->compile($blocks);

        /** @var \Illuminate\Support\Collection<int, BlockData> $collection */
        $collection = BlockData::collect($blocks);

        /** @var array<int, BlockData> $result */
        $result = $collection->all();

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function compile(array $blocks): array
    {
        $result = [];
        
        foreach ($blocks as $key => $value) {
            if (! is_string($key)) {
                $key = (string) $key;
            }
            
            if (is_string($value) && Str::containsAll($value, ['{{', '}}'])) {
                $result[$key] = Blade::render($value);
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    public static function getBlocksBySlug(string $slug): array
    {
        $model = static::class;
        $record = $model::firstWhere('slug', $slug);
        if (! $record) {
            return [];
        }

        /* @phpstan-ignore-next-line method.notFound, return.type */
        return $record->getBlocks();
    }
}
