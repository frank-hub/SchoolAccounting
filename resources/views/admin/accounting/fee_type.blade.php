@extends('layouts.home')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">

        <!-- modals -->
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
            <span class="fa fa-plus-circle"> Add Fee Type</span>
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
                        <h4 class="modal-title" id="myModalLabel">Add Fee Type</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-label-left input_mask" method="POST" action="{{route('students.store')}}">
                            @csrf
                            <h4>Fee Type</h4>
                            <div class="row">
                                <div class="col-md-6 form-group has-feedback">
                                    <label for="fee_type">Fee Type</label>
                                    <input type="text" name="fee_type" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Fee Type">
                                    <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="termly">Termly</label>
                                    <input type="checkbox" id="termly" class="form-control " name="termly">
                                </div>

                            </div>
                            <div class="col-md-6  form-group has-feedback">
                                <label for="note">Note/ Description</label>
                                <textarea name="note" id="" class="form-control" cols="20" rows="10" ></textarea>
                            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <div class="">


            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><b>Fee Type Records</b></h2>
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
                                    <th>#</th>
                                    <th>Fee Type</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


{{--                                <tbody>--}}
{{--                                @foreach ($students as $student)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$student->reg_name}}</td>--}}
{{--                                        <td>{{$student->fname ." ".$student->lname }}</td>--}}
{{--                                        <td>{{$student->gender}}</td>--}}
{{--                                        <td>{{$student->class}}</td>--}}
{{--                                        <td>{{$student->adm_date}}</td>--}}
{{--                                        <td>--}}
{{--                                            <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">--}}
{{--                                                <i class="fa fa-edit"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}

{{--                                </tbody>--}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
