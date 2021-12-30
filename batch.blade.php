@extends('layouts.master')

@section ('title')
   PCVS | Manage Batch
@endsection


@section ('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Vaccine Batch</h5>
      </div>
      <form action="/save-batch" method="POST">
        {{csrf_field() }}
        <div class="modal-body">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Batch No:</label>
                <input type="text" name="batchNo" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Expiry Date:</label>
                <input type="text" name="expiryDate" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Qty. Available:</label>
                <input type="text" name="quantityAvailable" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Qty. Administered:</label>
                <input type="text" name="quantityAdministered" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label>Vaccine Name:</label>
                <select name="vaccineName" class="form-control">
                    <option value="Sinovac">Sinovac</option>
                    <option value="AstraZeneca">AstraZeneca</option>
                </select>       
            </div>        
            <div class="mb-3">
                <label>Centre Name:</label>
                <select name="centreName" class="form-control">
                    <option value="sanglah">RSUD Sanglah</option>
                    <option value="balimed">RS Balimed</option>
                </select>       
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
                <h4 class="card-title">Vaccine Batch
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>    
                </h4>  
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Batch No.</th>
                      <th>Expiry Date</th>
                      <th>Qty. Available</th>
                      <th>Qty. Administered</th>
                      <th>Vaccine</th>
                      <th>Centre Name</th>
                    </thead>
                    <tbody>
                    @foreach ($batch as $data)
                      <tr>
                        <td>{{$data->batchNo}}</td>
                        <td>{{$data->expiryDate}}</td>
                        <td>{{$data->quantityAvailable}}</td>
                        <td>{{$data->quantityAdministered}}</td>
                        <td>{{$data->vaccineName}}</td>
                        <td>{{$data->centreName}}</td>
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
