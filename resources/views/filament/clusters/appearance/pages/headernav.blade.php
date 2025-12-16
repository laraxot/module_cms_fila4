<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
<?php

declare(strict_types=1);

?>
<x-filament-panels::page>

    <x-filament-schemas::form wire:submit="updateData">
        {{ $this->form }}

        <x-filament::actions
            :actions="$this->getUpdateFormActions()"
        />

    </x-filament-schemas::form>
<<<<<<< HEAD
=======
<x-filament-panels::page>

    <x-filament-panels::form wire:submit="updateData">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getUpdateFormActions()"
        />

    </x-filament-panels::form>
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)

</x-filament-panels::page>
