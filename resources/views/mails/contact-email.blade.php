@component('mail::message')
<h1>Dear steps Company,</h1>
<p>First name: {{$data['fn']}}</p>
<p>Last name: {{$data['ln']}}</p>
<p>Email: {{$data['email']}}</p>
<p>Phone Number: {{$data['phone']}}</p>
<p>code: {{$data['code']}}</p>
{{-- <p>Inquiry Type: {{$data['inquiry']}}</p>
<p>Additional Info: {{$data['description']}}</p> --}}

Regards,<br>
{{ config('app.name') }}
@endcomponent