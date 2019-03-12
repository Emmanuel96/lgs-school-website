
@extends('Admin.AdminLayouts.admin_main_layout')
 @section('content')
 

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Youtube Channel<small></small></h3>
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
                    <h2>Youtube Channel: All in your control<small></small></h2>
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
                    <table id = "datatable" class= "table table-striped table-bordered">
						<thead>
							<tr>
							  <th>Video Name</th>
							  <th>Youtube Link</th>
							  <th>Video Description</th>
							  <th>Action</th>
							</tr>
                        </thead>
                        <tbody>
                          @foreach($viewVideos as $video)
						<tr>
            <td>{!! $video->Video_name !!}</td>
              <td>{!! $video->Youtube_url !!}</td>
              <td>{!! $video->video_description !!}</td>
							<td align= "center">
								<a href = "lgs_edit_videos.html" title="edit"  class = "btn btn-primary"><i class = "fa fa-edit"></i></a>
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

