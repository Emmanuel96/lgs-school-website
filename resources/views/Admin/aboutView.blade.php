
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
                    <h2>Events<small></small></h2>
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
							  <th>Year Range</th>
							  <th>Year Header</th>
							  <th>Year Description</th>
							  <th>Actions</th>
							</tr>
            </thead>
            <tbody>
               @foreach($abouts as $about)

						<tr>
							<td>{!! $about->year_range !!}</td>
							<td>{!! $about->year_heading !!}</td>
							<td>{!! $about->year_description !!}</td>
							<td>
                            <a href = "/admin/edit/about/{{ $about->about_id }}" title="edit"  class = "btn btn-primary"><i class = "fa fa-edit"></i></a>
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

							</td>
