@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    <form action="/blogs/{{$blog->id}}" method="POST" type="hidden" name="_token" class="form-group mx-3"  enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="row">
            <div class="col">
                <h4 class="float-left p-0 mx-1 mt-3 ">Uredi Blog</h4>
                <button type="submit" class="btn btn-primary btn-icon-split p-0 mx-1 my-2 float-right">
                    <span class="icon text-white">
                    <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Posodobi </span>
                </button>
            </div>
        </div>
        @include('ControlPanel.Components.formBlog',['blog'=>$blog])
    </form>
</div>
@endsection

