@extends('layouts.app')
@section('title','留言')
@section('content')

<section class="profile-account-setting">

	<div class="container">
		<div class="account-tabs-setting">
			<div class="row">
				<div class="col-lg-3">
					<div class="acc-leftbar">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false">
								<i class="fa fa-comment"></i>留言
							</a>
						</div>
					</div>
					<!--acc-leftbar end-->

					@include('layouts.main-left-sidebar')
				</div>
				<div class="col-lg-9">
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
							<div class="acc-setting">
								<h3><i class="fa fa-comment"></i>留言</h3>
								<form method="POST" action="">
									<div class="cp-field">
										<h5>邮箱</h5>
										<div class="cpp-fiel">
											<input type="text" name="email" placeholder="Email">
											<i class="fa fa-envelope"></i>
										</div>
									</div>
									<div class="cp-field">
										<h5>网址</h5>
										<div class="cpp-fiel">
											<input type="websiet" name="websiet" placeholder="websiet">
											<i class="la la-internet-explorer"></i>
										</div>
									</div>
									<div class="cp-field">
										<h5>有什么要说的</h5>
										<textarea></textarea>
									</div>
									<div class="cp-field">
										<div class="fgt-sec">
											<input type="checkbox" name="cc" id="c4">
											<label for="c4">
												<span></span>
											</label>
											<small><i class="fa fa-envelope"></i>电子邮件选项出</small>
										</div>
										<p>将<i class="la la-envelope"></i>邮箱通知博主</p>
									</div>
									<div class="save-stngs pd3">
										<ul>
											<li><button type="submit">提交</button></li>
											 
										</ul>
									</div>
									<!--save-stngs end-->
								</form>
							</div>
							<!--acc-setting end-->
							@include('layouts.ad-profiles')
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--account-tabs-setting end-->
	</div>
</section>

@endsection