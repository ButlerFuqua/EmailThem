@component('mail::message')
# Introduction {{ $email->subject }}

{!! $email->body !!}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
