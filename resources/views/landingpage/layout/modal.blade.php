<div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Pilih Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <a href="{{url('user/login')}}" class="btn btn-outline-primary" style="width: 100%">Siswa</a>
                </div>
                <div class="col-12 mt-2">
                    <a href="{{url('user/login/guru')}}" class="btn btn-outline-primary" style="width: 100%">Guru</a>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
