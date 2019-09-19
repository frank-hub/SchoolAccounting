@extends('layouts.home')
@section('main')
<div class="right_col" role="main">
        <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
            @endif
        @endforeach
        </div>
<div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
        <div class="count">7657</div>
        <h3>Total Arrears</h3>

      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-comments-o"></i></div>
        <div class="count">179</div>
        <h3>New Sign ups</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
        <div class="count">179</div>
        <h3>New Sign ups</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o"></i></div>
        <div class="count">179</div>
        <h3>New Sign ups</h3>
      </div>
    </div>
  </div>

  {{-- Fee Payment Form --}}
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
    <span class="fa fa-plus-circle"> Make Payment</span>
</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Make Payment</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal form-label-left input_mask" method="POST" action="{{route('fee_payment.store')}}">
              @csrf
              <h4>Student Details</h4>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <select id="heard" class="form-control" name="reg_no" required>
                    <option value="" selected>Registration Number</option>
                    @foreach ($students as $student)
                    <option value="{{$student->reg_name}}">{{$student->reg_name}}</option>
                    @endforeach
                </select>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" name="paid_by" class="form-control" id="inputSuccess3" placeholder="Paid By">
                  <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">

                  <select id="heard" class="form-control" name="class" required>
                      <option value="" selected>Stream/Class</option>
                      <option value="cl1">Class One</option>
                      <option value="cl2">Class Two</option>
                  </select>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <select id="heard" class="form-control" name="payment_mode" required>
                    <option value="" selected>Payment Mode</option>
                    <option value="pm0">CASH</option>
                    <option value="pm1">MPESA</option>
                    <option value="pm2">BANK-SLIP</option>
                    <option value="pm3">CHEQUE</option>
                </select>
              </div>


             ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

              <h4>Payment Details</h4>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" name="mpesa_code" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Mpesa Code">
                  <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" name="bank_slip_code" class="form-control" id="inputSuccess3" placeholder="Bank Slip Code">
                  <span class="fa fa-barcode form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="number" name="amount" class="form-control has-feedback-left" id="inputSuccess4" name="amount" placeholder="Amount In Ksh.">
                  <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
    </div>
  </div>
</div>
   {{-- End of Form --}}
   <hr>
   {{-- The Class Details Class Details ( Kindergarten / Nursery)--}}
   <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Class Details ( Kindergarten / Nursery)</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Baby Class</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Middle Class</a>
                </li>
                <li role="presentation" class="active"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="true">Top Class</a>
                </li>

              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                </div>
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="profile-tab">
                  <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      {{-- End of Class --}}

       {{-- The Class Details Class Details ( Lower Primary)--}}
   <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Class Details (Lower Primary)</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class=""><a href="#cl_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Class One</a>
                </li>
                <li role="presentation" class=""><a href="#cl_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Class Two</a>
                </li>
                <li role="presentation" class="active"><a href="#cl_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="true">Class Three</a>
                </li>

              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="cl_content1" aria-labelledby="home-tab">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="cl_content2" aria-labelledby="profile-tab">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                </div>
                <div role="tabpanel" class="tab-pane fade active in" id="cl_content3" aria-labelledby="profile-tab">
                  <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      {{-- End of Class --}}

      {{-- The Class Details Class Details ( Lower Primary)--}}
   <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Class Details (Upper Primary)</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#pl_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Class Four</a>
                </li>
                <li role="presentation" class=""><a href="#pl_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Class Five</a>
                </li>
                <li role="presentation" class=""><a href="#pl_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="true">Class Six</a>
                </li>
                <li role="presentation" class=""><a href="#pl_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="true">Class Seven</a>
                </li>
                <li role="presentation" class=""><a href="#pl_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="true">Class Eight</a>
                </li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="pl_content1" aria-labelledby="home-tab">
                  <p>
                      Class 4
                  </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="pl_content2" aria-labelledby="profile-tab">
                  <p> Class 5</p>
                </div>
                <div role="tabpanel" class="tab-pane " id="pl_content3" aria-labelledby="profile-tab">
                  <p> Class 6</p>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="pl_content4" aria-labelledby="profile-tab">
                <p> Class 7</p>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="pl_content5" aria-labelledby="profile-tab">
                <p>
                        Class 8
                 </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      {{-- End of Class --}}
</div>
@endsection
