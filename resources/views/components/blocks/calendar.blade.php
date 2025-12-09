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
{{-- Generic Calendar Component for CMS --}}
@props([
    'type' => 'patient', // patient|doctor|admin
    'widgetNamespace' => null, // Should be injected by the implementing project
])

@php
    // Use dynamic widget namespace from config or props
    $namespace = $widgetNamespace ?? config('cms.calendar_widget_namespace', 'App\\Filament\\Widgets');
    
    $widgetClass = match($type) {
        'patient' => $namespace . '\\PatientCalendarWidget',
        'doctor' => $namespace . '\\DoctorCalendarWidget', 
        'admin' => $namespace . '\\AdminCalendarWidget',
        default => $namespace . '\\PatientCalendarWidget',
    };
@endphp

<div class="calendar-container">
    @livewire($widgetClass)
</div>

{{-- Stili CSS --}}
<style>
    .calendar-container {
        min-height: 600px;
        padding: 1rem;
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
    }
</style>
