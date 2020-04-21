@component('mail::message')
# Spoštovani/a {{$question->firstName}}  {{$question->lastName}}

@component('mail::subcopy')
{{$question->body}}
@endcomponent

@component('mail::panel')
{{$question->answer}}
@endcomponent
Ksenija Lovrenčič
@endcomponent
