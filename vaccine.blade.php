@extends('layouts.master')

@section ('title')
   PCVS | Manage Vaccine
@endsection


@section ('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Vaccine</h5>
      </div>
      <form action="/save-vaccine" method="POST">
        {{csrf_field() }}
        <div class="modal-body">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Manufacturer:</label>
                <input type="text" name="manufacturer" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Vaccine Name:</label>
                <input type="text" name="vaccineName" class="form-control" id="recipient-name">
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
                <h4 class="card-title">Vaccine List
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>    
                </h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Vaccine ID</th>
                      <th>Manufacturer</th>
                      <th>Vacinne Name</th>
                      <th></th>
                    </thead>
                    <tbody>
                        @foreach ($vaccine as $data)
                      <tr>
                        <td>{{$data->vaccineId}}</td>
                        <td>{{$data->manufacturer}}</td>
                        <td>{{$data->vaccineName}}</td>
                       <!--<td>    
                            <form action="{{ url('vaccine-delete/'.$data->vaccineName) }}" method="POST">
                                {{csrf_field() }}
                                {{method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>-->
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
