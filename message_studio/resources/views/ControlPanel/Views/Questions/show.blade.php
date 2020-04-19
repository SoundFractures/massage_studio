@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    @include('ControlPanel.Components.formQuestion')
    <p class="mx-5">{{$question->answer}}</p>
    <hr class="mt-5">
    <div class="row d-flex flex-grow justify-content-end">
        <div class="col-12 ">
            <button href="#deleteModal" class="btn btn-danger btn-icon-split p-0 mx-1 float-right modal-trigger" data-toggle="modal" data-target="#deleteModal" >
                <span class="icon text-white">
                  <i class="fas fa-trash"></i>
                </span>
                <span class="text">Odstrani</span>
            </button>
        </div>
      </div>
    @include('ControlPanel.Components.deleteModal',['name'=>$question->name,'id'=>$question->id, 'body'=>"Izbrano povpraševanje bo izbrisano:  ",'route'=>"questions"])
</div>
@endsection
