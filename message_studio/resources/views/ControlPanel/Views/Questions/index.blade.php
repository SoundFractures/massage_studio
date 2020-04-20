@extends('ControlPanel.Layouts.admin')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        @if(count($new))
        @foreach($new as $item)
        
            <div class="card w-100 p-1 m-2 border-left-danger shadow-sm">
                <div class="m-1">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/questions/{{$item->id}}/edit">
                                <h5 class="m-0">{{$item->firstName}} {{$item->lastName}}<span class="badge badge-danger mx-3">Novo</span> </h5>
                                <p class="text-truncate">{{$item->body}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
        @endforeach
        @else
        
        @endif
        
        @if(count($questions))
        @foreach($questions as $item)
        <div class="card w-100 p-1 m-2 border-left-primary">
            <div class="m-1">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/questions/{{$item->id}}/edit">
                            <h5 class="m-0">{{$item->firstName}} {{$item->lastName}}   </h5>
                            <p class="text-truncate">{{$item->body}}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        
        @endif
        <div class="my-4 w-100">
            <hr data-content="Zaključeno" class="hr-text " >
        </div>
        @if(count($answered))
        @foreach($answered as $item)
        <div class="card w-100 p-1 m-2 text-muted">
            <div class="m-1" >
                <div class="row">
                    <div class="col-12">
                        <a href="/questions/{{$item->id}}">
                            <h5 class="m-0">{{$item->firstName}} {{$item->lastName}} </h5>
                            <p class="text-truncate"><b>Odgovor:</b> {{$item->answer}} </p>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach
        @else
        <h2>NI ODGOVORJENIH</h2>
        @endif

        
    </div>
</div>

@endsection
