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
                                    <th>Total</th>
                                    <th>Paid</th>
                                    <th>Fee Type</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                    <tbody>
                                    @foreach ($invoices as $invoice)
                                        <tr>
                                            <td>{{$invoice->id}}</td>
                                            <td>{{$invoice->student_name}}</td>
                                            <td>{{$invoice->class}}</td>
                                            <td>{{$invoice->fee_amount}}</td>
                                            <td>{{$invoice->paid_amount}}</td>
                                            <td>{{$invoice->fee_type}}</td>
                                            <td>{{$invoice->balance}}</td>
                                            <td>
                                                @if($invoice->payment_status == "Not Paid")
                                                    <button class="btn btn-xs btn-danger">Not Paid</button>
                                                @elseif($invoice->payment_status == "Partially Paid")
                                                    <button class="btn btn-xs btn-warning">Partially Paid</button>
                                                @elseif($invoice->payment_status == "Fully Paid" && $invoice->balance == "0")
                                                    <button class="btn btn-xs btn-info">Cleared</button>
                                                @else
                                                    <button class="btn btn-xs btn-warning">Partially Paid</button>
                                                @endif

                                            </td>
                                            <td>{{$invoice->date_invoice}}</td>
                                            <td>
                                                @if($invoice->payment_status == "Not Paid")
                                                    <a href="{{route('invoices.edit', $invoice['id'])}}" type="button" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                @endif
                                                @if($invoice->balance > 0)
                                                    <a href="{{route('invoices.show', $invoice['id'])}}" type="button" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Make Payment">
                                                        <i class="fa fa-money"></i>
                                                    </a>
                                                @endif
                                                <a href="{{url('print', $invoice['id'])}}" type="button" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Invoice">
                                                    <i class="fa fa-clipboard"></i>
                                                </a>
                                                <button hidden>
                                                    <form method="post" action="{{route('invoices.destroy',$invoice['id'])}}">
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
