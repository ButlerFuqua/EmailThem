@component('mail::message')
# WELCOME!!

email: {{ $signup->email }}

Welcome to the <strong>Anime Dating</strong> List!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
