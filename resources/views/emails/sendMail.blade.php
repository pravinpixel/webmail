@component('mail::message')

Site {{ $maildata['app'] }}
<br>
Message {{ $maildata['message'] }}
<br>

name {{ $maildata['name'] }}
<br>

Location {{ $maildata['location'] }}
<br>

Mobile {{ $maildata['mobile'] }}
<br>

Thanks,<br>
{{ $maildata['app'] }}
@endcomponent
