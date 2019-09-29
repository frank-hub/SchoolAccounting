@extends('layouts.home')
@section('main')
    <div class="right_col" role="main">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                @endif
            @endforeach
        </div>
        <form class="form-horizontal form-label-left input_mask" method="POST" action="{{url('edit_students',$students['id'])}}">
            @csrf
            <h4>Student Details</h4>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" name="fname" class="form-control has-feedback-left" id="inputSuccess2" value="{{$students->fname}}" >
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" name="lname" class="form-control" id="inputSuccess3" value="{{$students->lname}}">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <div class="row">
                    <div class="col-md-6">
                        {{--                        <input type="date" id="adm_date" class="form-control " name="adm_date" id="inputSuccess3" value="{{$students->adm_date}}">--}}
                        {{--                        <span class="fa fa-date form-control-feedback right" aria-hidden="true"></span>--}}

                        <div class="control-group">
                            <label for="date">Admission Date</label>
                            <div class="controls">
                                <div class="xdisplay_inputx form-group has-feedback">
                                    <input  type="text" value="{{$students->adm_date}}" class="form-control has-feedback-left" name="adm_date"  id="single_cal1" aria-describedby="inputSuccess2Status">
                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="gender">Gender</label>
                        <select id="heard" class="form-control" name="gender" required>
                            <option value="{{$students->gender}}" selected>Current - {{$students->gender}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control" value="{{$students->reg_name}}" name="reg_name" id="inputSuccess3" placeholder="Registration No.">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">

                <select id="heard" class="form-control" name="class" required>
                    <option value="{{$students->class}}" selected>Current-Class {{$students->class}}</option>
                    <optgroup label="Pre-Unit/Nursery">
                        <option value="Baby">Baby Class</option>
                        <option value="Middle">Middle Class</option>
                        <option value="Top">Top Class</option>
                    </optgroup>
                    <optgroup label="Lower Primary">
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                    </optgroup>
                    <optgroup label="Upper Primary">
                        <option value="Four">Four</option>
                        <option value="Five">Five</option>
                        <option value="Six">Six</option>
                        <option value="Seven">Seven</option>
                        <option value="Eight">Eight</option>
                    </optgroup>

                </select>
            </div>


            ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

            <h4>Parent Details</h4>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" name="p_fname" value="{{$students->p_fname}}" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" name="p_lname" value="{{$students->p_lname}}" class="form-control" id="inputSuccess3" placeholder="Last Name">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" name="p_email" value="{{$students->p_email}}" class="form-control has-feedback-left" id="inputSuccess4" name="email" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" name="p_phone" value="{{$students->p_phone}}" class="form-control" id="inputSuccess5" name="phone" placeholder="Phone">
                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="number" name="id_no" value="{{$students->id_no}}" class="form-control has-feedback-left" id="inputSuccess4" placeholder="ID Number/Passport">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="modal-footer">
                <a href="{{url('students/view')}}" type="button" class="btn btn-default" data-dismiss="modal">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
