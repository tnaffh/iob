<div class="panel panel-default">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#exams" data-toggle="tab">Exams</a></li>
            <li><a href="#scores" data-toggle="tab">Scores</a></li>


        </ul>
    </div>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="exams">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create exam
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/exam/store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Exam type</label>

                                <div class="col-md-6">
                                    <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required
                                           autofocus>

                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                                <label for="module_id" class="col-md-4 control-label">Course</label>

                                <div class="col-md-6">
                                    <select id="module_id" class="form-control" name="course_id"
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
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">Exams</div>
                    <div class="panel-body">

                            <table class="table table-striped table-responsive table-hover ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Time</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Examination::all() as $e)
                                    <tr>
                                        <td>{{ $e->id }}</td>
                                        <td>{{ $e->type }}</td>
                                        <td>{{ $e->course->name }}</td>
                                        <td>{{ $e->time }}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="scores">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Record exam score
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/score/store') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                                <label for="examination_id" class="col-md-4 control-label">Student</label>

                                <div class="col-md-6">
                                    <select id="user_id" class="form-control" name="user_id"
                                            value="{{ old('user_id') }}" required>
                                        <option>Select a student</option>
                                        @foreach(\App\User::all()->where('role','student') as $s)
                                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('user_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('examination_id') ? ' has-error' : '' }}">
                                <label for="examination_id" class="col-md-4 control-label">Examination</label>

                                <div class="col-md-6">
                                    <select id="examination_id" class="form-control" name="examination_id"
                                            value="{{ old('examination_id') }}" required>
                                        <option>Select a examination</option>
                                        @foreach(\App\Examination::all() as $s)
                                            <option value="{{ $s->id }}">{{ $s->course->name.' - '.$s->type }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('examination_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('examination_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('score') ? ' has-error' : '' }}">
                                <label for="score" class="col-md-4 control-label">Exam score</label>

                                <div class="col-md-6">
                                    <input id="score" type="number" class="form-control" name="score" value="{{ old('score') }}" required>

                                    @if ($errors->has('score'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('score') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        Record
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">Exams scores</div>
                    <div class="panel-body">

                            <table class="table table-striped table-responsive table-hover ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student</th>
                                    <th>Course</th>
                                    <th>Exam</th>
                                    <th>Score %</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Score::all() as $s)
                                    <tr>
                                        <td>{{ $s->id }}</td>
                                        {{--<td>{{ $s->student->name }}</td>
                                        <td>{{ $s->exam->course->name }}</td>--}}
                                        {{--<td>{{ $s->exam->type }}</td>--}}
                                        <td>{{ $s->score }}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                    </div>
                </div>
            </div>


        </div>

    </div>


</div>
