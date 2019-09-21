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
        <form method="post" action="{{route('invoices.store')}}">
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
                                    <select class="form-control" name="class" required>
                                        <option value="">Select Class</option>
                                        <option value="one">One</option>
                                        <option value="two">Two</option>
                                        <option value="Three">Three</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Student Name<span class="text-danger">*</span></label>
                                <select class="form-control" name="student_name" required>
                                    <option value="">Select Student</option>
                                    <option value="John Wick">John</option>
                                    <option value="Mike Richard">Mike</option>
                                    <option value="Andrew Kibe">Andrew</option>
                                </select>
                            </div>
                            <div class="control-group">
                                <label for="date">Date <span class="text-danger">*</span></label>
                                <div class="controls">
                                    <div class="xdisplay_inputx form-group has-feedback">
                                        <input  type="text" class="form-control has-feedback-left" name="date_invoice"  id="single_cal1" aria-describedby="inputSuccess2Status">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="control-label">Payment Status <span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_status" required>
                                    <option value="">Select Payment Status</option>
                                    <option value="Not Paid">Not Paid</option>
                                    <option value="Partially Paid">Partially Paid</option>
                                    <option value="Fully Paid">Fully Paid</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Payment Method <span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_method">
                                    <option>Select Payment Method</option>
                                    <option value="cash">Cash</option>
                                    <option value="mpesa">Mpesa</option>
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
                                <h2>Fee Type</h2>
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
                                    <option value="Tution Fee">Tution Fee</option>
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
                                            <td class=" ">
                                                <input type="text" class="form-control"  readonly="true" value="Tution Fee"/>
                                            </td>
                                            <td class=" ">
                                            <input type="number" name="fee_amount" min="0" class="form-control"/>
                                            </td>
                                            <td class=" ">
                                                <input type="number" name="paid_amount" min="0" class="form-control"/>
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

