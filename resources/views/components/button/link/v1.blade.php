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
@if (isset($attrs['onclick']))
    <button {{ $attributes->merge($attrs) }} {{-- data-bs-toggle="offcanvas" --}}>
        {{-- <i class="{{ $link->icon }}"></i> --}}
        {!! $icon !!}
    </button>
@else
    <a {{ $attributes->merge($attrs) }} {{-- data-bs-toggle="offcanvas" --}}>
        {{-- <i class="{{ $link->icon }}"></i> --}}
        {!! $icon !!}
    </a>
@endif
