@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">New User</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/users/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="parent_id" class="col-md-4 control-label">Parent User</label>

                            <div class="col-md-6">
                                <select id="parent_id" required class="form-control" name="parent_id" >
                                    <option value="0">Parent User</option>
                                    @foreach($d as $de)
                                    <option value="{{$de['id']}}">{{$de['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="department_id" required class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <select id="department_id"  class="form-control" name="department_id" >
                                    @foreach($dep as $depp)
                                    <option value="{{$depp['id']}}">{{$depp['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required name="name" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" required name="email" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="class" class="col-md-4 control-label">Class</label>

                            <div class="col-md-6">
                                <input id="class" type="text" class="form-control" name="class" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    <i class="fa fa-btn fa-pin"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
