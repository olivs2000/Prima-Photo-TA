@component('mail::message')

<h1> {{ $details['title'] }} </h1>
<h1> {{ $details['body'] }} </h1>

@component('mail::button', ['url' => ''])
    
@endcomponent

Thanks, <br>
{{ config('app.name') }}

@endcomponent


