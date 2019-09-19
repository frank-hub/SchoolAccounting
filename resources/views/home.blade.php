@extends('layouts.home')

@section('main')

 <!-- page content -->
 <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Classes</span>
        <div class="count">2500</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Students</span>
        <div class="count">123</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Teachers</span>
        <div class="count green">2,500</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
    </div>
    <!-- /top tiles -->

    <br />

  </div>
  <!-- /page content -->
@endsection
