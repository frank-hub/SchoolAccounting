@extends('layouts.home')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                @endif
            @endforeach
        </div>

        <div class="">


            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-3 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">

                            <img class="img-responsive avatar-view" src="{{asset('images/logo.jpeg')}}" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>
                    <h3>{{$parent->p_fname." ".$parent->p_lname}}</h3>
                    <ul class="list-unstyled user_data">
                        <li><i class="fa fa-phone-square user-profile-icon"></i>   {{$parent->p_phone}}
                        </li>
                        <li>
                            <i class="fa fa-briefcase user-profile-icon"></i> {{$parent->p_occupation}}
                        </li>
                        <li class="m-top-xs">
                            <i class="fa fa-inbox user-profile-icon"></i>
                            {{$parent->p_email}}
                        </li>
                    </ul>
                    <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>

                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-bars"></i> Parents Details <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Children</a>
                                    </li>

                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Guardian One(1)</h3>
                                                <p>Guardian Full Name : <span>{{$parent->p_fname." ".$parent->p_lname}}</span></p>
                                                <p>Guardian Email : <span>{{$parent->p_email}}</span></p>
                                                <p>Guardian ID No. : <span>{{$parent->id_no}}</span></p>
                                                <p>Guardian Phone : <span>{{$parent->p_phone}}</span></p>
                                                <p>Guardian Occupation : <span>{{$parent->p_occupation}}</span></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Guardian Two(2)</h3>
                                                {{--                                               --}}
                                                {{--                                                'p1_fname','p1_lname','p1_email','p1_phone','id1_no',''--}}
                                                <p>Guardian Full Name : <span>{{$parent->p1_fname." ".$parent->p1_lname}}</span></p>
                                                <p>Guardian Email : <span>{{$parent->p1_email}}</span></p>
                                                <p>Guardian ID No. : <span>{{$parent->id1_no}}</span></p>
                                                <p>Guardian Phone : <span>{{$parent->p1_phone}}</span></p>
                                                <p>Guardian Occupation : <span>{{$parent->p1_occupation}}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                        <div class="col-xs-12">
                                            <div class="x_panel">

                                                <div class="x_content" style="display: block;">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Full Name</th>
                                                            <th>Adm Date</th>
                                                            <th>Class</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($students as $student)
                                                            <tr>
                                                                <th scope="row">{{$student->reg_name}}</th>
                                                                <td>{{$student->fname." ".$student->lname}}</td>
                                                                <td>{{$student->adm_date}}</td>
                                                                <td>{{$student->class}}</td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
