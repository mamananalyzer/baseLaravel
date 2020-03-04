@component('mail::message')
# Introduction
<p> {{ $pesan  }} </p>
The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
