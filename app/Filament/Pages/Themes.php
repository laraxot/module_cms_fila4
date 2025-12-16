<?php

declare(strict_types=1);

/**
 * @see https://github.com/3x1io/filament-themes/blob/main/src/Pages/Themes.php
 */

namespace Modules\Cms\Filament\Pages;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\File;
use Modules\Cms\Datas\ThemeData;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD

use function Safe\json_decode;

use Webmozart\Assert\Assert;

=======
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\json_decode;

>>>>>>> 555d679 (.)
class Themes extends XotBasePage
{
    /** @var array<int, array<string, mixed>> */
    public array $themes = [];

    protected string $view = 'cms::filament.pages.themes';

=======
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-paint-brush';
=======
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paint-brush';
>>>>>>> 026fd7e (.)

    protected string $view = 'cms::filament.pages.themes';

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

>>>>>>> 54dbeef (.)
    public function changePubTheme(string $name): void
    {
        $data = [];
        $data['pub_theme'] = $name;
        TenantService::saveConfig('xra', $data);
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        $themes = File::directories(base_path().str('/Themes')->replace('/', \DIRECTORY_SEPARATOR));
        $data = [];
        if ($themes) {
            foreach ($themes as $key => $item) {
                Assert::string($item, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                $filename = $item.DIRECTORY_SEPARATOR.'theme.json';
                if (! File::exists($filename)) {
                    $theme_data = ThemeData::from(['name' => basename((string) $item)]);
                    File::put($filename, $theme_data->toJson());
                }
                $info = json_decode(File::get($filename), true);
                $info = ThemeData::from($info)->toArray();
                // $info->image = '#';

                $data[] = [
                    'id' => $key + 1,
                    'path' => $item,
                    'info' => $info,
                ];
            }
        }
        $this->themes = $data;

        return ['data' => $data];
    }

    /*
     * protected static function shouldRegisterNavigation(): bool
     * {
     * return auth()->user()->can('page_Themes');
     * }
     *
     *
     * public function mount(): void
     * {
     * abort_unless(auth()->user()->can('page_Themes'), 403);
     * }
     */
}
