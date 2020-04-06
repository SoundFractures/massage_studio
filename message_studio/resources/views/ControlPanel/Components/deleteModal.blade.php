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
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalTitle">Brisanje povpraševanja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Potrdi brisanje povpraševanja osebe: <span class="font-weight-bold">{{$name}}</span>
      </div>
      <div class="modal-footer" >
          <form method="POST" action="/questions/{{$id}}">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zapri</button>
              <button type="submit" class="btn btn-danger">Odstrani</button>
          </form>
      </div>
    </div>
  </div>
</div>