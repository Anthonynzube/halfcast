@component('mail::message')
# Hello There

Thank you for signing up and welcome to the family.

@component('mail::button', ['url' => 'http://www.halfcastcosmetics.com'])
Visit Us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
