@extends('Admin.AdminLayouts.admin_main_layout')
 @section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>About: <small>Changes to the about section of the Website</small></h3>
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
                    <h2>About:<small>Edit About For Display</small></h2>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="{{ route('admin.updateAbout', [$about_details->about_id])}}">
                      <input type="hidden" name="_token" value="{{ csrf_token()}}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Year Range<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name = "year_range"  required="required" value="{{$about_details->year_range}}"  maxlength= "15" class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" maxlength = "25">Year Heading<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="year_heading" required="required" value="{{$about_details->year_heading}}"  class="form-control col-md-7 col-xs-12" maxlength = "20">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" maxlength = "100">Year Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id= "about_id" name="year_description" required="required" value="{{$about_details->year_description}}"  class="form-control col-md-7 col-xs-12" maxlength = "20">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Display Image <span class = "required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="about_id" class="form-control col-md-7 col-xs-12" value= "{{$about_details->display_image}}" type="file" name="display_image" maxlength = "15">
                        </div>
                      </div>

                      <div class="hidden">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Display Image <span class = "required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="about_id" class="form-control col-md-7 col-xs-12" value= "{{$about_details->display_image}}" type="text" name="display_image" maxlength = "15">
                        </div>
                      </div>


                     
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        @endsection