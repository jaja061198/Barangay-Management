@extends('layouts.app')

@section('content')
<div class="container col-lg-12">
    <div class="row">

    	<section class="content">

	    		<div class="row">
		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box">
		            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-text">Residents</span>
		              <span class="info-box-number">90</span>
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->
		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box">
		            <span class="info-box-icon bg-red"><i class="fa fa-warning"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-text">Complaints this month</span>
		              <span class="info-box-number">41,410</span>
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->

		        <!-- fix for small devices only -->
		        <div class="clearfix visible-sm-block"></div>

		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box">
		            <span class="info-box-icon bg-green"><i class="fa fa-warning"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-text">On-going Blotter Cases</span>
		              <span class="info-box-number">760</span>
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->
		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box">
		            <span class="info-box-icon bg-yellow"><i class="fa fa-home"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-text">Purok's</span>
		              <span class="info-box-number">2,000</span>
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->
		      </div>

    	</section>

    </div>

</div>
@endsection
