@extends('layouts.master')

@section ('title')
   PCVS | Edit User
@endsection


@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit User Account</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="/user-register-update/{{ $users->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="{{$users->username}}" class="form-control">
                            </div>
                            <div class="form-group" class="form-control">
                                <label>Account Status</label>
                                <select name="usertype" class="form-control">
                                    <option value="admin">HealthCare Administrator</option>
                                    <option value="patient">Patient</option>
                                </select>

                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/user-register" class="btn btn-danger">Cancel</a>
                        </form>



                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



@section ('script')

@endsection