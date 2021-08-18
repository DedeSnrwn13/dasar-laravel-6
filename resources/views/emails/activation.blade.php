@component('mail::message')
Selamat datang di {{ config('app.name') }}

Silahkan aktifasi akun Anda.

@component('mail::button', ['url' => ''])
Aktifasi
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
