<div class="my-5 w-100">
    <hr data-content={{$question->name}} class="hr-text " >
</div>
<div class="mx-5">
    <p class="">{{$question->body}} </p>
    <p class="text-muted">{{$question->email}} <span class="float-right">{{$question->created_at}}</span></p>
</div>

<div class="my-5 w-100">
    <hr data-content="Odgovor" class="hr-text"  >
</div>