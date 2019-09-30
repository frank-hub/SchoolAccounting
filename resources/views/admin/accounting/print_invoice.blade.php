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
        <a href="{{url('accounting/invoice')}}"  class="btn btn-primary">
            <span class="fa fa-arrow-circle-left"> Back To Invoices</span>
        </a>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">

                    <div class="x_content">
                        <section class="content invoice">

                            <div class="row">
                                <div class="col-xs-12 invoice-header">
                                    <h1>
                                        <img src="{{asset('images/logo.jpeg')}}" class="img-responsive" style="height:125px;"> Invoice.
                                        <small class="pull-right">Date: {{Date('d/m/Y')}}</small>
                                    </h1>
                                </div>

                            </div>

                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>Light House Grace Academy</strong>
                                        <br>P.O.BOX 1395-00618 ,RUARAKA
                                        <br>Phone: 0700347765  / 0720432971
                                        <br>Email: lighthousegrace@gmail.com
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                        <strong>Name: {{$student->fname." ".$student->lname}}</strong>
                                        <br>Reg No. {{$invoice->student_name}}
                                        <br>Class {{$student->class}}

                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #{{$invoice->id}}</b>

                                    <br>
                                    <b>Payment Status:</b>  {{$invoice->payment_status}}
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-xs-12 table">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fee Type</th>
                                            <th>Amount</th>
                                            <th>Discount</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$invoice->id}}</td>
                                            <td>{{$invoice->fee_type}}</td>
                                            <td>{{$invoice->fee_amount}}</td>
                                            <td>0</td>
                                            <td>{{$invoice->fee_amount}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-6">
{{--                                    <p class="lead">Payment Methods:</p>--}}
{{--                                    <img src="images/visa.png" alt="Visa">--}}
{{--                                    <img src="images/mastercard.png" alt="Mastercard">--}}
{{--                                    <img src="images/american-express.png" alt="American Express">--}}
{{--                                    <img src="images/paypal.png" alt="Paypal">--}}
{{--                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">--}}
{{--                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.--}}
{{--                                    </p>--}}
                                </div>

                                <div class="col-xs-6">
{{--                                    <p class="lead">Amount Due 2/22/2014</p>--}}
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th style="width:50%">Total Amount:</th>
                                                <td>{{$invoice->fee_amount}}</td>
                                            </tr>
                                            <tr>
                                                <th>Paid</th>
                                                <td>{{$invoice->paid_amount}}</td>
                                            </tr>
                                            <tr>
                                                <th>Balance:</th>
                                                <td>{{$invoice->balance}}</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>


                            <div class="row no-print">
                                <div class="col-xs-12">
{{--                                    <button class="btn btn-default" onclick="if (!window.__cfRLUnblockHandlers) return false; window.print();"><i class="fa fa-print"></i> Print</button>--}}
{{--                                    <a href="{{url('accounting/invoice/add')}}" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</a>--}}
{{--                                    <button class="btn btn-primary " style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>--}}
                                    <button class="btn btn-primary pull-right" onclick="if (!window.__cfRLUnblockHandlers) return false; window.print();"><i class="fa fa-print"></i> PRINT</button>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script>

    </script>
    <!-- /page content -->
@endsection

