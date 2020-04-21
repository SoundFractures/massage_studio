@component('mail::message')
# Pozdravljena {{$question->firstName}}  {{$question->lastName}}

@component('mail::subcopy')
{{$question->body}}
@endcomponent

@component('mail::panel')
{{$question->answer}}
@endcomponent
Ksenja nevemkaksepise
@endcomponent
