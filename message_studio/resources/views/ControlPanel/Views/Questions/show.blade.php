@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    @include('ControlPanel.Components.formQuestion')
    <p class="mx-5">{{$question->answer}}</p>
    <hr class="mt-5">
    <a href="#" class="btn btn-danger btn-icon-split p-0 mx-1 float-right">
        <span class="icon text-white">
          <i class="fas fa-trash"></i>
        </span>
        <span class="text">Odstrani</span>
      </a>
</div>
@endsection
