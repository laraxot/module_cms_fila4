<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
@php
    $section = $getRecord();
    $content = $section->content;
@endphp

<div class="p-4 bg-white rounded-lg shadow">
    <div class="prose max-w-none">
        @if($content)
            {!! $content !!}
        @else
            <div class="text-gray-500">
                {{ __('cms::sections.preview.empty') }}
            </div>
        @endif
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
</div>
=======
</div> 
>>>>>>> 3401a6b (.)
=======
</div>
>>>>>>> 1377a46 (.)
