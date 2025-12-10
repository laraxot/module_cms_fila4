<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
declare(strict_types=1);

namespace Modules\Cms\Filament\Forms\Components;

use Filament\Forms\Components\Placeholder;
use Illuminate\Support\HtmlString;
use Modules\Cms\Models\Attachment;
use Webmozart\Assert\Assert;

class DownloadAttachmentPlaceHolder extends Placeholder
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->label('')->content($this->generateContent(...))->columnSpanFull();
<<<<<<< HEAD
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
=======
>>>>>>> 1377a46 (.)
    }

    protected function generateContent(): HtmlString
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
        $name = $this->getName();
        $attachment = Attachment::firstWhere('slug', $name);
        Assert::isInstanceOf($attachment, Attachment::class);
        $data = [
            'title' => $attachment->title,
            'description' => $attachment->description,
            'asset' => $attachment->asset(),
        ];

        /** @var view-string $view */
        $view = 'pub_theme::filament.forms.components.download-attachment-place-holder';
        if (! view()->exists($view)) {
            throw new \Exception('View '.$view.' not found');
        }
        $out = view($view, $data);

        return new HtmlString($out->render());
    }
<<<<<<< HEAD
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
=======
>>>>>>> 1377a46 (.)
}
