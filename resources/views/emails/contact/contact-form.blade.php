@component('mail::message')
{{-- # Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }} --}}

# Thank you for your messsage

<strong>Name:</strong> {{$data['name']}}
<strong>Email:</strong> {{$data['email']}}

<strong>Message:</strong> 

{{$data['message']}}

@endcomponent
