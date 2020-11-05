@component('mail::message')
# Booking for Preview of meetUni

Dear {{ $user->first_name }} {{ $user->last_name }},

Thank you so much for registering your interest in a preview of meetUni, a web platform for universities to reach out to internatinoal students for online marketing events. 

We are working hard to get ready for the launch of the preview, and we will get in touch with you as soon as we are ready to do so.

Meanwhile, please do not hesitate to let us know if you have any questions. We very much look forward to working with you soon.

Kind Regards,<br>
Ayako Towatari<br>

meetUni<br>
4-2-13-705 Aobadai, Meguro-Ku, Tokyo,153-0042, Japan<br>
mobile: +81 80 6571 5106<br>
email: ayako.towatari@meetuniglobal.com<br>
URL: https://invitation.meetuniglobal.com<br>

@endcomponent
