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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><b>Parents Records</b></h2>
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
                                @foreach ($parents as $parent)
                                    <tr>
                                        <td>{{$parent->student_id}}</td>
                                        <td>{{$parent->p_fname }}</td>
                                        <td>{{$parent->p_lname}}</td>
                                        <td>{{$parent->p_email}}</td>
                                        <td>{{$parent->id_no}}</td>
                                        <td>
                                            <a href="{{route('parents.show', $parent['id'])}}" type="button" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('parents.edit', $parent['id'])}}" type="button" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button hidden>
                                                <form method="post" action="{{route('parents.destroy',$parent['id'])}}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record"><i class="fa fa-trash"></i></button>
                                                </form>
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
