@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="https://api.adorable.io/avatars/285/{{ Auth::user()->email }}.png" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="profile-usertitle-job">
                        {{ Auth::user()->role }}
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">

                    <button type="button" class="btn btn-danger btn-sm">Update profile</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="{{ 'tabs.index' === Route::currentRouteName() ? 'active' : '' }}">
                            <a href="{{ route('tabs.index') }}">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>

                        <li class="{{ 'tabs.courses' === Route::currentRouteName() ? 'active' : '' }}">
                            <a href="{{ route('tabs.courses') }}">
                                <i class="glyphicon glyphicon-list"></i>
                                Courses </a>
                        </li>

                        <li class="{{ 'tabs.exams' === Route::currentRouteName() ? 'active' : '' }}">
                            <a href="{{ route('tabs.exams') }}">
                                <i class="glyphicon glyphicon-pencil"></i>
                                Exams </a>
                        </li>

                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="">
                @include( Route::currentRouteName())
            </div>
        </div>
    </div>
</div>
@endsection
