@extends('layouts.home')
@section('main')
    <!-- page content -->
    <div class="right_col" role="main">

        <!-- modals -->
        <!-- Large modal -->
        <a href="{{url('accounting/invoice/add')}}"  class="btn btn-primary">
            <span class="fa fa-plus-circle"> Create Invoice</span>
        </a>


        <div class="">


            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><b>Invoice Records</b></h2>
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
                                    <th>Student</th>
                                    <th>Class</th>
                                    <th>Payment Method</th>
                                    <th>Total</th>
                                    <th>Paid</th>
                                    <th>Fee Type</th>
                                    <th>Balance</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{$invoice->id}}</td>
                                        <td>{{$invoice->student_name}}</td>
                                        <td>{{$invoice->class}}</td>
                                        <td>{{$invoice->payment_method}}</td>
                                        <td>{{$invoice->fee_amount}}</td>
                                        <td>{{$invoice->paid_amount}}</td>
                                        <td>{{$invoice->fee_type}}</td>
                                        <td>{{$invoice->balance}}</td>
                                        <td>{{$invoice->date_invoice}}</td>
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
