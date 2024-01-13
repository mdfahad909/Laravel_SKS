<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="UserModalLabel">Profile View</h5>
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
                    <img src="{{ asset('assets/img/default.png') }}" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                  </div>
                  <div class="flex-grow-1 ms-3 pl-3">
                    <h4 class="mb-1">
                      User Name - {{ $user->name }}
                    </h4>
                    <p class="mb-2 pb-1 h5" style="color: #2b2a2a;"> 
                      User Email - {{ $user->email }}
                    </p>
                      <div class="form-group h5">
                        <strong>Roles:</strong>
                         @if(!empty($user->getRoleNames())) 
                          @foreach($user->getRoleNames() as $v) 
                            <span class="badge rounded-pill bg-dark">{{ $v }}</span> 
                          @endforeach 
                         @endif
                      </div>
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