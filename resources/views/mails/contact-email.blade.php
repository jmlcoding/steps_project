@component('mail::message')
<h1>Dear steps Company,</h1>
<p>First name: {{$data['firstname']}}</p>
<p>Last name: {{$data['lastname']}}</p>
<p>Email: {{$data['email']}}</p>
<p>Phone Number: {{$data['phone']}}</p>
<p>Inquiry Type: {{$data['inquiry']}}</p>
@if($data['description'])
<p>Additional Info: {{$data['description']}}</p>
@endif

Regards,<br>
{{ config('app.name') }}
@endcomponent