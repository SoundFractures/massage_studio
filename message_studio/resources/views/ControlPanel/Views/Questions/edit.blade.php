@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    
    @include('ControlPanel.Components.formQuestion')
    <form action="/questions/{{$question->id}}" method="POST" type="hidden" name="_token" class="form-group mx-5"  enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
          <label for="emailInput">E-Mail naslov:</label>
          <input type="email" disabled class="form-control" id="emailInput" placeholder="{{$question->email}}">
        </div>
        <div class="form-group">
          <label for="textInput">Odgovor: </label>
          <textarea class="form-control" name="answer" id="answer" rows="3"></textarea>
        </div>
      
        <hr class="mt-5">
        <button type="submit" class="btn btn-primary btn-icon-split p-0 mx-1 float-right">
            <span class="icon text-white">
            <i class="fas fa-check"></i>
            </span>
            <span class="text">Odgovori</span>
        </button>
    </form>
</div>
@endsection
