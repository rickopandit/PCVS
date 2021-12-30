@extends('layouts.master')

@section ('title')
   PCVS | Edit User Type
@endsection


@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                        <h5>Edit User Type</h5>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                </div>  
                <div class="card-body">
                    <form action="/user-regist-update/{{$users->id}}" method="POST">
                        {{csrf_field() }}
                        {{method_field('PUT') }}

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="fullname" value="{{$users->fullname}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select name="usertype" class="form-control">
                                <option value="admin">Administrator</option>
                                <option value="patient">Patient</option> 
                            </select>                       
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="/user-regist" class="btn btn-danger">Cancel</a>
                    </form>
                </div>  
            </div>
        </div>
    </div>

</div>

@endsection

@section ('script')
@endsection
