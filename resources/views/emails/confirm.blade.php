@component('mail::message')
<div>
     {{  $userInfo->name  }} مرحـباً
</div>

تم تأكيد تسجيلك
نتمنى لك وقت سعيـد


شكراً<br>
{{ config('app.name') }}

@endcomponent

