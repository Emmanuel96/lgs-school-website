@extends('Admin.AdminLayouts.admin_main_layout')
 @section('content')


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit {!! $videos->video_name !!}</h3>
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
                    <h2>Youtube Channel<small>Edit youtube channel For Display</small></h2>
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
                    <br />
                    <form style= "overflow-x: scroll; height: 50%; " enctype="multipart/form-data" id="demo-form2" method = "POST" action="{{ route('admin.updateYouTube', [$videos->youtube_id]) }}" class="form-horizontal form-label-left">
                        <input type = "hidden" name = "_token" value = "{{csrf_token()}}">

					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Video Name<span class = "required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="video-name" class="form-control col-md-7 col-xs-12"  type="text" name="video_name" maxlength = "" value="{!! $videos->video_name !!}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Youtube URL <span class = "required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="youtube-url" class="form-control col-md-7 col-xs-12"  type="text" name="youtube_url" maxlength = "" value="{!! $videos->youtube_url !!}">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" maxlength = "255">Video Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="video_description" required="required" class="form-control col-md-7 col-xs-12" maxlength = "500" value="{!! $videos->video_description !!}">
                        </div>
                      </div>


					  <div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Display Image <span class = "required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="display-image" class="form-control col-md-7 col-xs-12"  type="file" name="display_image" maxlength = "" value="">
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
