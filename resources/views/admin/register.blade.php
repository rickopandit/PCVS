@extends('layouts.master')

@section ('title')
   PCVS | HC Admin
@endsection


@section ('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">User Registered</h4>
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
                      <th>ID</th>
                      <th>Username</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th></th>
                      <th></th>
                    </thead>
                    <tbody>
                      @foreach ($users as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{ $row->username}}</td>
                        <td>{{ $row->fullname}}</td>
                        <td>{{ $row->email}}</td>
                        <td>{{ $row->usertype}}</td>

                        <td>
                            <a href="/status-edit/{{$row->id}}" class="btn btn-success">UPDATE</a>
                        </td>
                        <td>
                            <form action="/status-delete/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
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
</div>
@endsection

@section ('script')
@endsection
