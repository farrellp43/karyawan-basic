@component('mail::message')
# {{ $details['title'] }}

Hi, {{ $details['name'] }}!
 
Selamat datang di Aplikasi Karyawan.
 
Terimakasih,<br>
{{ config('app.name') }}
@endcomponent