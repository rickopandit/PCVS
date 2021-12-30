@extends('layouts.master')

@section ('title')
   PCVS | User List
@endsection


@section ('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Username</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                      <th> </th>
                    </thead>
                    <tbody>
                        @foreach ($users as $row)
                      <tr>
                        <td>{{$row->username}}</td>
                        <td>{{$row->fullname}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->usertype}}</td>
                        <td>
                            <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                        </td>   
                        <td> 
                            <form action="role-delete/{{$row->id}}" method="post">
                              {{csrf_field() }}
                              {{method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger">REMOVE</button>
                            </form>
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
