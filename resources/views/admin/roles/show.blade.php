<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="RoleModalLabel">Profile View</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <section class="vh-50">
      <div class="container py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col col-md-12 col-lg-12 col-xl-12">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-4">
                <div class="d-flex text-black">
                  <div class="flex-shrink-0">
                    <img src="{{ asset('assets/man.png') }}" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                  </div>
                  <div class="flex-grow-1 ms-3 pl-3">
                    <h3 class="mb-1">Permission Name : <p class="badge rounded-pill bg-dark">{{ $role->name }}</p></h3>

                    <strong>Permissions List :- </strong>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $v)
                            <b>{{ $v->name }} // </b>
                            
                        @endforeach
                    @endif

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>





