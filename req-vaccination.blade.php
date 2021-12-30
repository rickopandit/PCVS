@extends('layouts.patientmaster')

@section ('title')
Vaccination | Appointment
@endsection


@section ('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Vaccination Appointment</h5>
      </div>
      <form action="/save-appointment" method="POST">
        {{csrf_field() }}
        <div class="modal-body">
           <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Batch No.:</label>
                <input type="text" name="batchNo" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Vaccination Date:</label>
                <input type="text" name="vaccinationDate" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Status:</label>
                <input type="text" name="status" class="form-control" id="recipient-name" value="Waiting Confirmation" disable>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Vaccination
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>    
                </h4>  
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Batch No</th>
                      <th>Vaccination Date</th>
                      <th>Status</th>
                    </thead>
                    <tbody>
                    @foreach ($vaccination as $data)
                      <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->batchNo}}</td>
                        <td>{{$data->vaccinationDate}}</td>
                        <td>{{$data->status}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection

@section ('script')
@endsection
