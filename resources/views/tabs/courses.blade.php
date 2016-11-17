<div class="panel panel-default">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Courses</a></li>
            @if(Auth::user()->role === 'admin')
                <li><a href="#create" data-toggle="tab">Add course</a></li>
            @endif

        </ul>
    </div>


    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home">
            <br>
            <table class="table table-striped table-responsive table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Semester</th>

                </tr>
                </thead>
                <tbody>
                @foreach(\App\Course::all() as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->semester->name }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        @if(Auth::user()->role === 'admin')
            <div class="tab-pane fade" id="create">
                <br>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/course/store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   required
                                   autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('semester_id') ? ' has-error' : '' }}">
                        <label for="semester_id" class="col-md-4 control-label">Semester</label>

                        <div class="col-md-6">
                            <select id="semester_id" type="text" class="form-control" name="semester_id"
                                    value="{{ old('semester_id') }}" required>
                                <option>Select a semester</option>
                                @foreach(\App\Semester::all() as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('semester_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('semester_id') }}</strong>
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
        @endif

    </div>

</div>
