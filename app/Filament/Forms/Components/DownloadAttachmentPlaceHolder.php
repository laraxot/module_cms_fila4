<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Cms\Filament\Forms\Components;

use Filament\Forms\Components\Placeholder;
use Illuminate\Support\HtmlString;
use Modules\Cms\Models\Attachment;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Webmozart\Assert\Assert;

class DownloadAttachmentPlaceHolder extends Placeholder
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->label('')->content($this->generateContent(...))->columnSpanFull();
=======
namespace Modules\Cms\Filament\Forms\Components;

use Illuminate\Support\HtmlString;
use Modules\Cms\Models\Attachment;
use Filament\Forms\Components\Placeholder;

class DownloadAttachmentPlaceHolder extends Placeholder
{
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->label('')
         ->content(fn() => $this->generateContent())
         ->columnSpanFull();
>>>>>>> 3401a6b (.)
    }

    protected function generateContent(): HtmlString
    {
<<<<<<< HEAD
        $name = $this->getName();
        $attachment = Attachment::firstWhere('slug', $name);
        Assert::isInstanceOf($attachment, Attachment::class);

        $title = SafeStringCastAction::cast($attachment->title);
        $description = SafeStringCastAction::cast($attachment->description);
        /* @phpstan-ignore-next-line method.notFound */
        $asset = SafeStringCastAction::cast($attachment->asset());

        $html = sprintf(
            '<a href="%s" class="underline" target="_blank" rel="noopener noreferrer">%s</a>%s',
            htmlspecialchars($asset, ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($title, ENT_QUOTES, 'UTF-8'),
            '' !== $description
                ? '<div class="text-sm text-gray-600">'.htmlspecialchars($description, ENT_QUOTES, 'UTF-8').'</div>'
                : ''
        );

        return new HtmlString($html);
    }
=======
        $name=$this->getName();
        $attachment = Attachment::firstWhere('slug', $name);   
        $data=[
            'title'=>$attachment->title,
            'description'=>$attachment->description,
            'asset'=>$attachment->asset(),
        ];
        $view='pub_theme::filament.forms.components.download-attachment-place-holder';
        $out=view($view,$data);
        
        return new HtmlString($out->render());
    }

    
>>>>>>> 3401a6b (.)
}
