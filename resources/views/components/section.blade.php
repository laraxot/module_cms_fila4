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
@props([
    'section' => null,
    'name' => null,
    'blocks' => [],
    'class' => '',
    'id' => null
])

<section {{ $attributes->merge([
    'class' => 'section '.($section?->slug ?? '').' '.$class,
    'id' => $id ?? ($section?->slug ?? '')
]) }}>
    @if($name)
        <h2 class="section-title">{{ $name }}</h2>
    @endif

    @if($blocks)
        <div class="section-blocks">
            @foreach($blocks as $block)
                @if(isset($block->view, $block->data))
                    @include($block->view, $block->data)
                @elseif(isset($block['type'], $block['data']))
                    <x-dynamic-component
                        :component="'cms::blocks.'.$block['type']"
                        :data="$block['data']"
                    />
                @endif
            @endforeach
        </div>
    @endif
</section>
