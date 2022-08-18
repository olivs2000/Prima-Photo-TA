@component('mail::message')
# Prima Photo

Detail Pemesanan Anda

@component('mail::button', ['url' => ''])
Tampilkan
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
