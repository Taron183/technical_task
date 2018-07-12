@component('mail::message')
@component('mail::button', ['url' =>url('/reset-link/'.$token)])
    Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
