@extends('layouts.home')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">

        <!-- modals -->
        <!-- Large modal -->
        <a href="{{url('accounting/invoice/add')}}"  class="btn btn-primary">
            <span class="fa fa-plus-circle"> Create Invoice</span>
        </a>
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
