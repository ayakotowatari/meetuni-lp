@component('mail::message')
# Thank you for your message

Dear {{ $user->name }}

Thank you so much for contacting us. We have received the enquiry below. We will get in touch with you as soon as we can.

Content: 

{{ $user->content }}

Kind Regards,<br>
Ayako Towatari<br>

meetUni<br>
4-2-13-705 Aobadai, Meguro-Ku, Tokyo,153-0042, Japan<br>
mobile: +81 80 6571 5106<br>
email: ayako.towatari@meetuniglobal.com<br>
URL: https://invitation.meetuniglobal.com<br>

@endcomponent