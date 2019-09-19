@extends('layouts.home')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">

          <!-- modals -->
                  <!-- Large modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                      <span class="fa fa-plus-circle"> Add Student</span>
                  </button>
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                        @endif
                    @endforeach
                </div>
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Student</h4>
                        </div>
                        <div class="modal-body">
                        <form class="form-horizontal form-label-left input_mask" method="POST" action="{{route('students.store')}}">
                                @csrf
                                <h4>Student Details</h4>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="fname" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="lname" class="form-control" id="inputSuccess3" placeholder="Last Name">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Admission Date</label>
                                        </div>
                                        <div class="col-md-6">
                                                <input type="date" id="adm_date" class="form-control " name="adm_date" id="inputSuccess3" placeholder="Registration No.">
                                                <span class="fa fa-date form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control" name="reg_name" id="inputSuccess3" placeholder="Registration No.">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">

                                    <select id="heard" class="form-control" name="class" required>
                                        <option value="" selected>Stream/Class</option>
                                        <option value="press">Press</option>
                                        <option value="net">Internet</option>
                                        <option value="mouth">Word of mouth</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <select id="heard" class="form-control" name="gender" required>
                                        <option value="" selected>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </select>
                                </div>


                               ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                                <h4>Parent Details</h4>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="p_fname" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="p_lname" class="form-control" id="inputSuccess3" placeholder="Last Name">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="p_email" class="form-control has-feedback-left" id="inputSuccess4" name="email" placeholder="Email">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" name="p_phone" class="form-control" id="inputSuccess5" name="phone" placeholder="Phone">
                                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="number" name="id_no" class="form-control has-feedback-left" id="inputSuccess4" placeholder="ID Number/Passport">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                      </div>
                    </div>
                  </div>

        <div class="">


          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><b>Student Records</b></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Reg No.</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Current Class</th>
                        <th>Admission date</th>
                        <th>Action</th>
                      </tr>
                    </thead>


                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                            <td>{{$student->reg_name}}</td>
                                <td>{{$student->fname ." ".$student->lname }}</td>
                                <td>{{$student->gender}}</td>
                                <td>{{$student->class}}</td>
                                <td>{{$student->adm_date}}</td>
                                <td>
                                  <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="fa fa-edit"></i>
                                  </button>
                                </td>
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
      <!-- /page content -->
@endsection
