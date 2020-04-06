@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    @include('ControlPanel.Components.formQuestion')
    <p class="mx-5">{{$question->answer}}</p>
    <hr class="mt-5">
    @include('ControlPanel.Components.deleteModal',['name'=>$question->name,'id'=>$question->id])
</div>
@endsection
