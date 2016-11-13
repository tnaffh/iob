@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>IOB - Portal</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p><a class="btn btn-primary btn-lg">Learn more</a></p>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="list-group table-of-contents">
                <a class="list-group-item" href="#navbar">Profile</a>
                <a class="list-group-item" href="#buttons">Courses</a>
                <a class="list-group-item" href="#typography">Accademic Records</a>
                <a class="list-group-item" href="#tables">Attendance</a>
                <a class="list-group-item" href="#tables">
                    <hr></a>
                <a class="list-group-item" href="#forms">Admin Panel</a>
                <a class="list-group-item" href="#navs">Stuffs Panel</a>

            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
