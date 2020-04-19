@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <button href="#deleteModal" class="btn btn-danger btn-icon-split p-0 mx-1 my-2 float-left modal-trigger" data-toggle="modal" data-target="#deleteModal">
                <span class="icon text-white">
                <i class="fas fa-trash"></i>
                </span>
                <span class ="text">Odstrani</span>
            </button>
            @include('ControlPanel.Components.deleteModal',['name'=>$blog->title,'id'=>$blog->id, 'body'=>"Izbran blog bo izbrisan:  ",'route'=>"blogs"])

            <a href="/blogs/{{$blog->id}}/edit" class="btn btn-primary btn-icon-split p-0 mx-1 my-2 float-right">
                <span class="icon text-white">
                <i class="fas fa-pen"></i>
                </span>
                <span class="text">Uredi</span>
            </a>
        </div>
        
    </div>
    @include('ControlPanel.Components.formBlog',['blog'=>$blog,'show'=>true])
</div>
@endsection
