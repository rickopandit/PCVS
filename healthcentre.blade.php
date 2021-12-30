@extends('layouts.master')

@section ('title')
   PCVS | HC Centre
@endsection


@section ('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Health Care Centre</h5>
      </div>
      <form action="/save-centre" method="POST">
        {{csrf_field() }}
        <div class="modal-body">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Centre Name:</label>
                <input type="text" name="centreName" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Address:</label>
                <input type="text" name="address" class="form-control" id="recipient-name">
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
                <h4 class="card-title">Centre List
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>    
                </h4>  
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Centre Name</th>
                      <th>Address</th>
                    </thead>
                    <tbody>
                    @foreach ($h_centre as $data)
                      <tr>
                        <td>{{$data->centreName}}</td>
                        <td>{{$data->address}}</td>
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
