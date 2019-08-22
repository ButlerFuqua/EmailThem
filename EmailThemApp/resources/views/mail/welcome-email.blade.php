@component('mail::message')
# WELCOME!!

email: {{ $signup->email }}

{!! $email->body !!}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
