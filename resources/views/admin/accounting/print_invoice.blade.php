<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Light House Academy</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css" rel="stylesheet')}}">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css" rel="stylesheet')}}">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div>
    <!-- page content -->
    <div class="right_col" role="main">



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
                                            <th>Payment Mode</th>
                                            <th>Fee Type</th>
                                            <th>Fee Amount</th>
                                            <th>Paid Amount</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($checks as $check)
                                            <tr>
                                                <td>{{$check->payment_method}}</td>
                                                <td>{{$check->fee_type}}</td>
                                                <td>{{$check->fee_amount}}</td>
                                                <td>{{$check->paid_amount}}</td>
                                                <td>{{$invoice->date_invoice}}</td>
                                            </tr>
                                        @endforeach


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
</div>

<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="v{{asset('endors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>

<script src="{{asset('js/rocket-loader.min.js')}}" data-cf-settings="3c3320a8e059fd627f6bef99-|49" defer=""></script>
</body>
</html>


