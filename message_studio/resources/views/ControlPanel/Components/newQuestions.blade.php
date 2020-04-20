<!-- Nav Item - Messages -->
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <span style="font-size:1.5em" class="text-light">
          <i class="fas fa-envelope fa-fw"></i>
      </span>
      
      <!-- Counter - Messages -->
    <span class="badge badge-danger badge-counter">{{($newQuestionsCount)? $newQuestionsCount:""}}</span>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
      aria-labelledby="messagesDropdown">

      <h6 class="dropdown-header bg-dark border-dark">
          Nova Povpraševanja
      </h6>

      @if(count($lastNewQuestions))
        @foreach($lastNewQuestions as $item)
            <a class="dropdown-item d-flex align-items-left" href="/questions/{{$item->id}}/edit">
                <div class="dropdown-list-image mr-3">
                  <i class="fas fa-fw fa-comment fa-2x"></i>
                  </div>
                <div class="font-weight-bold">
                  <div class="text-truncate w-100">{{$item->body}}</div>
                  <div class="small text-gray-500"><b>{{$item->firstName}} {{$item->lastName}}</b> · {{$item->created_at}}</div>
                </div>
              </a>
        @endforeach
    @else
    <div class="dropdown-item d-flex align-items-left">  
        <div class="font-weight-lighter text-muted small-text">
          <div class="text-truncate w-100">Ni novih Povpraševanj :)</div>
        </div>
    </div>
    @endif
    <a class="dropdown-item text-center small text-gray-500" href="/questions">Pregled Povpraševanj</a>
    </div>
  </li>

 