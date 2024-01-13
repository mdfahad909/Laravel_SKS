
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="MemberModalShow">Profile View</h5>
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
                        <img width="350px" height="350px" src="{{ asset('assets/img/member/'.$member->image) }}" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                      </div>
                      <div class="flex-grow-1 ms-3 pl-3">
                        <h3 class="mb-1">Name - {{ $member->name }}</h3>
                        <h5 class="mb-2 pb-1" style="color: #2b2a2a;">Mobile Number -  {{ $member->phone }}</h5>
                        <h5 class="mb-2 pb-1" style="color: #2b2a2a;">Occupation -  {{ $member->position }}</h5>
                        <h5 class="mb-2 pb-1" style="color: #2b2a2a;">District -  {{ $member->district }}</h5>
                        <h5 class="mb-2 pb-1" style="color: #2b2a2a;">Address -  {{ $member->address }}</h5>
                        <div class="d-flex justify-content-start rounded-3 p-2 mb-2"></div>
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