<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="deleteModalTitle">Potrditev brisanja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$body}} <span class="font-weight-bold">{{$name}}</span>
      </div>
      <div class="modal-footer" >
          <form method="POST" action="/{{$route}}/{{$id}}">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zapri</button>
              <button type="submit" class="btn btn-danger">Odstrani</button>
          </form>
      </div>
    </div>
  </div>
</div>