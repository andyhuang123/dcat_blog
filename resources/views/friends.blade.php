@extends('layouts.app')
@section('title','友链')
@section('content')
<main>
<div class="container">
    <div class="main-section-data">
       <div class="row">
			<div class="col-lg-3 col-md-4 pd-left-none no-pd">
							@include('layouts.main-left-sidebar')
			</div>
			<div class="col-lg-9 col-md-8 no-pd">
				<section> 
					<div class="container">
						<div class="company-title">
							<h3>优秀博主</h3>
						</div>
						<!--company-title end-->
						<div class="companies-list"> 
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="company_profile_info">
										<div class="company-up-info">
											<img src="/images/resources/user-1.png" alt="">
											<h3>John Doe</h3>
											<h4>Graphic Designer</h4>
											<ul>
												<li><a href="#" title="" class="follow"><i class="fa fa-unlink"></i></a></li>
												<li><a href="#" title="" class="hire-us"><i class="fa fa-globe"></i></a></li>
												<li><a href="#" title="" class="message-us"><i class="fa fa-heartbeat"></i></a></li>
											</ul>
										</div>
										<a href="#" title="" class="view-more-pro">View Profile</a>
									</div>
									<!--company_profile_info end-->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="company_profile_info">
										<div class="company-up-info">
											<img src="/images/resources/user-1.png" alt="">
											<h3>John Doe</h3>
											<h4>Graphic Designer</h4>
											<ul>
												<li><a href="#" title="" class="follow"><i class="fa fa-unlink"></i></a></li>
												<li><a href="#" title="" class="hire-us"><i class="fa fa-globe"></i></a></li>
												<li><a href="#" title="" class="message-us"><i class="fa fa-heartbeat"></i></a></li>
											</ul>
										</div>
										<a href="#" title="" class="view-more-pro">View Profile</a>
									</div>
									<!--company_profile_info end-->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="company_profile_info">
										<div class="company-up-info">
											<img src="/images/resources/user-1.png" alt="">
											<h3>John Doe</h3>
											<h4>Graphic Designer</h4>
											<ul>
												<li><a href="#" title="" class="follow"><i class="fa fa-unlink"></i></a></li>
												<li><a href="#" title="" class="hire-us"><i class="fa fa-globe"></i></a></li>
												<li><a href="#" title="" class="message-us"><i class="fa fa-heartbeat"></i></a></li>
											</ul>
										</div>
										<a href="#" title="" class="view-more-pro">View Profile</a>
									</div>
									<!--company_profile_info end-->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="company_profile_info">
										<div class="company-up-info">
											<img src="/images/resources/user-1.png" alt="">
											<h3>John Doe</h3>
											<h4>Graphic Designer</h4>
											<ul>
												<li><a href="#" title="" class="follow"><i class="fa fa-unlink"></i></a></li>
												<li><a href="#" title="" class="hire-us"><i class="fa fa-globe"></i></a></li>
												<li><a href="#" title="" class="message-us"><i class="fa fa-heartbeat"></i></a></li>
											</ul>
										</div>
										<a href="#" title="" class="view-more-pro">View Profile</a>
									</div>
									<!--company_profile_info end-->
								</div>


							</div>
						</div>
						<!--companies-list end-->
						<div class="process-comm">
							<a href="#" title=""><img src="images/process-icon.png" alt=""></a>
						</div>
					</div>
				</section>
			</div>
	    </div>
   </div>
</div>
</main>
<!--companies-info end--> 
@endsection