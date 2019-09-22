@extends('layouts.home')

@section('main')

 <!-- page content -->
 <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Fee Type</span>
        <div class="count">{{$feeTypes}}</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Students</span>
        <div class="count">{{$students}}</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Balance</span>
        <div class="count green">{{$balance}}</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Paid</span>
        <div class="count">{{$paid_amount}}</div>
      </div>
    </div>
    <!-- /top tiles -->

    <br />

  </div>
  <!-- /page content -->
@endsection
