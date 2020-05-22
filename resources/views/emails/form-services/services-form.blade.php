@component('mail::message')
# Mail Received

Thank you <strong>{{ $data['name'] }}</strong> for your time.<br>

<b>You wrote us for :</b> {{ $data['subject'] }}

<b>Your message was:</b><br><br>{{ $data['bodymessage'] }}<br><br>

We will get to you as soon as possible.In the meantime<br>
<b><i>You can see further services we offer by logging into our website.</i></b>

@component('mail::button', ['url' => route('landing-page'), 'color' => 'green'])
    Go to Website
@endcomponent

Thank you again for choosing us.

Regards,<br>
{{ config('app.name') }}
@endcomponent