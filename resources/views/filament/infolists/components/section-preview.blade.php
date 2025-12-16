<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
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
</div>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</div>
=======
</div> 
>>>>>>> a12f125f4a (.)
=======
</div>
>>>>>>> b93ef594b4 (.)
=======
</div> 
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
