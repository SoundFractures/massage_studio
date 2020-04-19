@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('ControlPanel.Components.indexBlog',[
                'title'=>'Ustvari blog',
                'url'=> 'create',
                'background'=>'background-image: url(tukaj pride neki ustvari blog slika);',
                ])
            
    </div>
    <div class="w-100" style="margin-bottom:3rem;margin-top:1rem;">
        <hr data-content="Blogi" class="hr-text " >
    </div>
    <div class="row justify-content-left">
        @if(count($blogs))
            @foreach($blogs as $item)
            @include('ControlPanel.Components.indexBlog',[
                'title'=>$item->title,
                'url'=> $item->id,
                'background'=>$item->file,
                ])
            
            @endforeach
            @else
            
            
        @endif
    </div>
</div>

@endsection

