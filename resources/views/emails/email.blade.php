@component('mail::message')
# Pemesanan Anda Sedang di Proses

The body of your message.

@component('mail::button', ['url' => ''])
Tampil
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
