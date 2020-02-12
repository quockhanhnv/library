<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Đại Học Công Nghiệp Hà Nội
		</title>

		<!-- include css here  -->
		@include('sub.admin.css')
		@yield('css')
		<!-- include css here  -->

	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-content--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			@include('sub.admin.header')
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light " style="margin-left: -30px">
					<!-- BEGIN: Aside Menu -->
					@include('sub.admin.aside_menu')
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									@yield('subheader')
								</h3>
							</div>
							
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content" style="min-height: 540px;background-color: white;">
						<!-- BEGIN: content -->
						@yield('content')
						<!-- end::Content -->
					</div>	
					
			<!-- end:: Body -->

			<!-- begin::Footer -->
			@include('sub.admin.footer')
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    	    
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->
		
		<!-- BEGIN::CSS -->
		@include('sub.admin.js')
		@yield('js')
		<!-- end::CSS -->
	</body>
	<!-- end::Body -->
</html>
