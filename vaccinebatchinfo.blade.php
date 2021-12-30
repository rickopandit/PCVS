@extends('layouts.master')

@section ('title')
   PCVS | Vaccination Batch Info
@endsection


@section ('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Vaccine Batch Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>Name</th>
                      <th>Batch No</th>
                      <th>Vaccination Date</th>
                      <th>Status</th>
                      <th> </th>
                    </thead>
                    <tbody>
                      @foreach ($vaccination as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->batchNo}}</td>
                        <td>{{$data->vaccinationDate}}</td>
                        <td>{{$data->status}}</td>
                        <td>
                            <a href="/vbatch-edit/{{$data->id}}" class="btn btn-success">EDIT</a>
                        </td>   
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
