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
                                <h5 class="m-0">{{$item->name}}<span class="badge badge-danger mx-3">Novo</span> </h5>
                                <p class="text-truncate">{{$item->body}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
        @endforeach
        @else
        <h2>NI NOVIH</h2>
        @endif
        
        @if(count($questions))
        @foreach($questions as $item)
        <div class="card w-100 p-1 m-2 border-left-primary">
            <div class="m-1">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/questions/{{$item->id}}/edit">
                            <h5 class="m-0">{{$item->name}}  </h5>
                            <p class="text-truncate">{{$item->body}}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h2>NI SPOROČIL</h2>
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
                            <h5 class="m-0">{{$item->name}} </h5>
                            <p class="text-truncate"><b>Odgovor:</b> {{$item->answer}} </p>
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="row d-flex flex-grow justify-content-end">
                <div class="col-12 ">
                    <a href="#deleteModal" class="btn btn-danger btn-icon-split p-0 mx-1 float-right modal-trigger" >
                        <span class="icon text-white">
                          <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Odstrani</span>
                      </a>
                </div>
              </div>
        </div>
        @endforeach
        @else
        <h2>NI ODGOVORJENIH</h2>
        @endif

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
