@extends('layouts.app') 
@section('title','小程序')
@section('content')  
 <script src="/js/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"> </script>  
 <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" rel="stylesheet" /> 
 <style> 
 .photo-img {
		height: 200px; 
		background-size: cover;
		text-align: center;
		border-radius: 12px 12px 0 0;
	}
</style>
<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>所有小程序</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row"  id="photo_group">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info"> 
									<a no-pjax href="/images/resources/xcx.png" data-fancybox="gallery" data-caption="/images/resources/xcx.png" data-type="image">
									     <img src="/images/resources/xcx.png" alt="" style="height:200px">
									</a>
									<h3>小程序名称</h3>
									<h4>Graphic Designer</h4>
									<ul>
									    <li><a href="#" title="" class="follow"><i class="fa fa-gamepad"></i></a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li> 
									</ul>
								</div>
								<a title="" class="view-more-pro">微信扫码试玩</a>
							</div><!--company_profile_info end-->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info"> 
									<a no-pjax href="/images/resources/xcx.png" data-fancybox="gallery" data-caption="/images/resources/xcx.png" data-type="image">
									     <img src="/images/resources/xcx.png" alt="" style="height:200px">
									</a>
									<h3>小程序名称</h3>
									<h4>Graphic Designer</h4>
									<ul>
									    <li><a href="#" title="" class="follow"><i class="fa fa-gamepad"></i></a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li> 
									</ul>
								</div>
								<a title="" class="view-more-pro">微信扫码试玩</a>
							</div><!--company_profile_info end-->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info"> 
									<a no-pjax href="/images/resources/xcx.png" data-fancybox="gallery" data-caption="/images/resources/xcx.png" data-type="image">
									     <img src="/images/resources/xcx.png" alt="" style="height:200px">
									</a>
									<h3>小程序名称</h3>
									<h4>Graphic Designer</h4>
									<ul>
									    <li><a href="#" title="" class="follow"><i class="fa fa-gamepad"></i></a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li> 
									</ul>
								</div>
								<a title="" class="view-more-pro">微信扫码试玩</a>
							</div><!--company_profile_info end-->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info"> 
									<a no-pjax href="/images/resources/xcx.png" data-fancybox="gallery" data-caption="/images/resources/xcx.png" data-type="image">
									     <img src="/images/resources/xcx.png" alt="" style="height:200px">
									</a>
									<h3>小程序名称</h3>
									<h4>Graphic Designer</h4>
									<ul>
										<li><a href="#" title="" class="follow"><i class="fa fa-gamepad"></i></a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li> 
									</ul>
								</div>
								<a title="" class="view-more-pro">微信扫码试玩</a>
							</div><!--company_profile_info end-->
						</div>
						 
					</div>
				</div><!--companies-list end-->
				<div class="process-comm">
					<a href="#" title=""><img src="/images/process-icon.png" alt=""></a>
				</div>
			</div>
		</section><!--companies-info end-->
 <script>
   
    $(function () {
        var photo_group = $('photo_group');
            if(photo_group.length){
                photo();
            }
    });
    
    function photo() {
            $('[data-fancybox="gallery"]').fancybox({
                // Options will go here 
                    maxWidth    : 800,
                    maxHeight   : 600,
                    fitToView   : false,
                    width       : '70%',
                    height      : '70%',
                    autoSize    : false,
                    closeClick  : false,
                    openEffect  : 'none',
                    closeEffect : 'none' 
            });
        }
</script>    
@endsection
