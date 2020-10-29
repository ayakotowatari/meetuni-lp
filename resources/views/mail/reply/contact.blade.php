@component('mail::message')
# Thank you for your message

Dear {{ $user->name }}

Thank you so much for contacting us. We have received the enquiry below. We will get in touch with you as soon as we can.

Content: 

{{ $user->content }}

Kind Regards,<br>
Ayako Towatari

{{ config('app.name') }}
@endcomponent