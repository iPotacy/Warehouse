
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h3 class="ms-2 mt-5">Check Record Out</h3>

        <div class="d-flex justify-content-end mt-3">
          <a href="{{url('/admin')}}" class="btn btn-sm btn-danger active text-uppercase fw-semibold mx-2 p-2">Back</a>
        </div>

        <div class="table-responsive my-3">
          <table class="table table-bordered table-responsive table-hover table-striped table-sm table-md table-lg">
            <thead class="bg-warning">
              <tr>
                @foreach($ar_judul as $jdl)
                  <th class="text-center" style="white-space: nowrap;">{{$jdl}}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>