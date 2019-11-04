@extends('Admin.AdminLayouts.admin_main_layout')
 @section('content')


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit {{ $team->staff_name }}</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Responsive Header<small>-- For Admin Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>

					  <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Teams<small>Edit Teams For Display</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        {{-- <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul> --}}
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <form style= "overflow-x: scroll; height: 50%; " enctype="multipart/form-data" id="demo-form2" method = "post" action="{{ route('admin.updateTeam', [$team->team_id])}}" class="form-horizontal form-label-left">
                        <input type = "hidden" name = "_token" value = "{{csrf_token()}}">

					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Staff Name<span class = "required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="staff-name" class="form-control col-md-7 col-xs-12"  type="text" name="staff_name" maxlength = "" value="{!! $team->staff_name !!}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Staff Role <span class = "required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="staff-role" class="form-control col-md-7 col-xs-12"  type="text" name="staff_role" maxlength = "" value="{!! $team->staff_role !!}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Image<span class = "required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img name = "current_image" class = "img-responsive" alt = " No image"  id = "display-image" src =  "/images/team/{!! $team->display_image !!}"   >
                            <input class="form-control col-md-7 col-xs-12" type="file" name = "display_image"  required>
                            <input value = "{!! $team->display_image !!}" type = "file " id = "display-image" />
                        </div>
                    </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        @endsection
