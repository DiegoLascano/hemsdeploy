@component('mail::message')
# Hola

Un nuevo cronograma ha sido generado.

{{ $newSchedule }}

@component('mail::button', ['url' => ''])
Home Energy Management System
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
