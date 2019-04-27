
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
            <button class="btn btn-default source" onclick="new PNotify({
                title: 'Regular Success',
                text: 'That thing that you were trying to do worked!',
                type: '{{ $msg }}',
                styling: 'bootstrap3'
            });">Success</button>
          <!-- modals -->
                  <!-- Small modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">
                        <span class="fa fa-plus-circle"> Add Group</span>
                  </button>

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog ">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Modal title</h4>
                        </div>
                        <div class="modal-body">
                        <form class="form-horizontal form-label-left" method="POST" action="{{route('groups.store')}}">
                          @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3"  for="first-name">Group Name <span class="required">*</span>
                                </label>
                                <div class="col-md-7">
                                <input type="text" id="first-name2" name="group_name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                   <div class="row">
                                        <label class="control-label col-md-3" for="first-name">Group Type <span class="required">*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <select id="heard" class="form-control" name="group_type" required>
                                                <option value="" selected>Group Type</option>
                                                <option value="class">Class</option>
                                                <option value="club">Club</option>
                                                {{-- <option value="mouth">Word of mouth</option> --}}
                                            </select>
                                        </div>
                                        
                                   </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
        <div class="">
          

          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Button Example <small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p class="text-muted font-13 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                  </p>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Group Name</th>
                        <th>Group Type</th>
                        <th>Date Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>


                    <tbody>
                        @foreach ($groups as $group)
                            <tr>
                            <td>GRP{{$group->id}}</td>
                                <td>{{$group->group_type}}</td>
                                <td>{{$group->group_name}}</td>
                                <td>{{$group->created_at->format('F,m,Y')}}</td>
                                <td>$320,800</td>
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
