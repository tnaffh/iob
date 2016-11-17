<div class="panel panel-default">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Modules</a></li>
            <li><a href="#create" data-toggle="tab">Add Module</a></li>
            <li><a href="#update" data-toggle="tab">Update</a></li>


        </ul>
    </div>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="home">

                @foreach(\App\Course::all() as $c)
                    <h4>{{ $c->name }} <span class="label label-info">{{ $c->semester->name }}</span></h4>

                    <table class="table table-striped table-responsive table-hover ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($c->modules as $m)
                            <tr>
                                <td>{{ $m->id }}</td>
                                <td>{{ $m->name }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <br>
                @endforeach
            </div>
            <div class="tab-pane fade" id="create">
                <br>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/module/store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                                   autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                        <label for="course_id" class="col-md-4 control-label">Course</label>

                        <div class="col-md-6">
                            <select id="course_id" type="text" class="form-control" name="course_id"
                                    value="{{ old('course_id') }}" required>
                                <option>Select a course</option>
                                @foreach(\App\Course::all() as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('course_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('course_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary pull-right">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="update">
                <h1>{{ Auth::user()->email }}</h1>
            </div>

        </div>

    </div>


</div>
