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

{{--        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">--}}
{{--            <div class="well profile_view">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <h4 class="brief"><i>Digital Strategist</i></h4>--}}
{{--                    <div class="left col-xs-7">--}}
{{--                        <h2>Nicole Pearson</h2>--}}
{{--                        <p><strong>About: </strong> Web Designer / UI. </p>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><i class="fa fa-building"></i> Address: </li>--}}
{{--                            <li><i class="fa fa-phone"></i> Phone #: </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="right col-xs-5 text-center">--}}
{{--                        <img src="images/user.png" alt="" class="img-circle img-responsive">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 bottom text-center">--}}
{{--                    <div class="col-xs-12 col-sm-6 emphasis">--}}
{{--                        <p class="ratings">--}}
{{--                            <a>4.0</a>--}}
{{--                            <a href="#"><span class="fa fa-star"></span></a>--}}
{{--                            <a href="#"><span class="fa fa-star"></span></a>--}}
{{--                            <a href="#"><span class="fa fa-star"></span></a>--}}
{{--                            <a href="#"><span class="fa fa-star"></span></a>--}}
{{--                            <a href="#"><span class="fa fa-star-o"></span></a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-sm-6 emphasis">--}}
{{--                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">--}}
{{--                            </i> <i class="fa fa-comments-o"></i> </button>--}}
{{--                        <button type="button" class="btn btn-primary btn-xs">--}}
{{--                            <i class="fa fa-user"> </i> View Profile--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        /////////--}}
        <form method="post" action="">
            @csrf
            <div class="row">
                <div class="col-md-5 widget">
                    <div class="x_panel " style="">
                        <div class="x_title">
                            <h2><i class="fa fa-file-text-o"></i> Invoice</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <label class="control-label">Class <span class="text-danger">*</span></label>
                                    <select class="form-control">
                                        <option>Select Class</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Student <span class="text-danger">*</span></label>
                                <select class="form-control">
                                    <option>Select Student</option>
                                    <option>John</option>
                                    <option>Mike</option>
                                    <option>Andrew</option>
                                </select>
                            </div>
                            <div class="control-group">
                                <label for="date">Date <span class="text-danger">*</span></label>
                                <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Payment Status <span class="text-danger">*</span></label>
                                <select class="form-control">
                                    <option>Select Payment Status</option>
                                    <option>Not Paid</option>
                                    <option>Partially Paid</option>
                                    <option>Fully Paid</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Payment Method <span class="text-danger">*</span></label>
                                <select class="form-control">
                                    <option>Select Payment Method</option>
                                    <option>Cash</option>
                                    <option>Mpesa</option>
                                    <option>Bank Deposit</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Add Invoice</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Table design <small>Custom design</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Fee Type</p>
                                <select id="fee_type" class="form-control" name="fee_type" required>
                                    <option value="" selected disabled="true">Select A Fee Type</option>
                                    <option value="123">123</option>
                                    <option value="456">Guy123</option>
                                </select>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                        <tr class="headings selected">
                                            <th class="column-title" >Fee Type</th>
                                            <th class="column-title">Amount</th>
                                            <th class="column-title">Paid Amount</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="even pointer selected">
                                            <td class=" ">Tution Fee</td>
                                            <td class=" ">
                                            <input type="number" class="form-control"/>
                                            </td>
                                            <td class=" ">
                                                <input type="number" class="form-control"/>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script>

    </script>
    <!-- /page content -->
@endsection

