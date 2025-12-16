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
{{-- Page Component --}}
@props([
    'blocks' => [],
    'side' => 'content',
    'slug' => '',
    'page' => null
])

@if(!empty($blocks))
    <div class="page-{{ $side }}-content" data-slug="{{ $slug }}" data-side="{{ $side }}">
        @foreach($blocks as $block)
            {{-- BlockData ha già gestito tutto: vista, dati, fallback --}}
            @include($block->view, $block->data)
        @endforeach
    </div>
@endif
