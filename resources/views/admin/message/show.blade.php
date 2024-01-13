
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="DonationModalLabel">Message View</h5>
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
                      <div class="flex-grow-1 ms-3 pl-3">
                        <h4 class="mb-1"><b>Name</b> - {{ $message->name }}</h4>
                            <h5><b>Mobile</b> - {{ $message->phone }}</h5>
                            <h5><b>Email</b> - <a href="mailto:{{ $message->email }}">{{ $message->email }}</a></h5>
                            <h5><b>Subject</b> - {{ $message->subject }}</h5>
                            <h5><b>Message</b> - {{ $message->message }}</h5>
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
