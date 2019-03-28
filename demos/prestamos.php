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
			Metronic | Dashboard
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
        <!--begin::Page Vendors -->
		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/demo/demo9/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="assets/demo/demo9/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m--skin- m-page--loading-enabled m-page--loading m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default"  >
		<!-- begin::Page loader -->
		<div class="m-page-loader m-page-loader--base">
			<div class="m-blockui">
				<span>
					Please wait...
				</span>
				<span>
					<div class="m-loader m-loader--brand"></div>
				</span>
			</div>
		</div>
		<!-- end::Page Loader -->
<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!--  -->
			<?php include('header.php')?>
			<!--  -->
								<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
				<i class="la la-close"></i>
			</button>
			<div id="m_aside_left" class="m-aside-left  m-aside-left--skin-dark ">
				<!-- BEGIN: Aside Menu -->
	<div
		id="m_ver_menu"
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
		data-menu-vertical="true"
		 m-menu-scrollable="1" m-menu-dropdown-timeout="500"
		>
					<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
						<li class="m-menu__section">
							<h4 class="m-menu__section-text">
								Departments
							</h4>
							<i class="m-menu__section-icon flaticon-more-v3"></i>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
							<a  href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-layers"></i>
								<span class="m-menu__link-text">
									Resources
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
										<span class="m-menu__link">
											<span class="m-menu__link-text">
												Resources
											</span>
										</span>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Timesheet
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Payroll
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Contacts
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-suitcase"></i>
								<span class="m-menu__link-text">
									Finance
								</span>
							</a>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
							<a  href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-graphic-1"></i>
								<span class="m-menu__link-title">
									<span class="m-menu__link-wrap">
										<span class="m-menu__link-text">
											Support
										</span>
										<span class="m-menu__link-badge">
											<span class="m-badge m-badge--accent">
												3
											</span>
										</span>
									</span>
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  m-menu-link-redirect="1">
										<span class="m-menu__link">
											<span class="m-menu__link-title">
												<span class="m-menu__link-wrap">
													<span class="m-menu__link-text">
														Support
													</span>
													<span class="m-menu__link-badge">
														<span class="m-badge m-badge--accent">
															3
														</span>
													</span>
												</span>
											</span>
										</span>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<span class="m-menu__link-text">
												Reports
											</span>
										</a>
									</li>
									<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
										<a  href="javascript:;" class="m-menu__link m-menu__toggle">
											<span class="m-menu__link-text">
												Cases
											</span>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu ">
											<span class="m-menu__arrow"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Pending
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Urgent
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Done
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Archive
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<span class="m-menu__link-text">
												Clients
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<span class="m-menu__link-text">
												Audit
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-light"></i>
								<span class="m-menu__link-text">
									Administration
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-share"></i>
								<span class="m-menu__link-text">
									Management
								</span>
							</a>
						</li>
						<li class="m-menu__section">
							<h4 class="m-menu__section-text">
								Reports
							</h4>
							<i class="m-menu__section-icon flaticon-more-v3"></i>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-graphic"></i>
								<span class="m-menu__link-text">
									Accounting
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-network"></i>
								<span class="m-menu__link-text">
									Products
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-network"></i>
								<span class="m-menu__link-text">
									Sales
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-alert"></i>
								<span class="m-menu__link-title">
									<span class="m-menu__link-wrap">
										<span class="m-menu__link-text">
											Bills
										</span>
										<span class="m-menu__link-badge">
											<span class="m-badge m-badge--danger">
												12
											</span>
										</span>
									</span>
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-technology"></i>
								<span class="m-menu__link-text">
									IPO
								</span>
							</a>
						</li>
						<li class="m-menu__section">
							<h4 class="m-menu__section-text">
								System
							</h4>
							<i class="m-menu__section-icon flaticon-more-v3"></i>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
							<a  href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-clipboard"></i>
								<span class="m-menu__link-text">
									Applications
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
										<span class="m-menu__link">
											<span class="m-menu__link-text">
												Applications
											</span>
										</span>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Audit
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Notifications
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Messages
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
							<a  href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-computer"></i>
								<span class="m-menu__link-text">
									Modules
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
										<span class="m-menu__link">
											<span class="m-menu__link-text">
												Modules
											</span>
										</span>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Logs
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Errors
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
										<a  href="inner.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Configuration
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-cogwheel"></i>
								<span class="m-menu__link-text">
									Files
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-lifebuoy"></i>
								<span class="m-menu__link-text">
									Security
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
							<a  href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-settings"></i>
								<span class="m-menu__link-text">
									Options
								</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- END: Aside Menu -->
			</div>
			<!-- END: Left Aside -->
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
						<!-- BEGIN: Subheader -->
						<div class="m-subheader ">
							<div class="d-flex align-items-center">
								<div class="mr-auto">
									<h3 class="m-subheader__title ">
										Dashboard
									</h3>
								</div>
								<div>
									<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
										<span class="m-subheader__daterange-label">
											<span class="m-subheader__daterange-title"></span>
											<span class="m-subheader__daterange-date m--font-brand"></span>
										</span>
										<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
											<i class="la la-angle-down"></i>
										</a>
									</span>
								</div>
							</div>
						</div>
						<!-- body -->
						<div class="m-content">
							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-6">
									<!--begin:: Widgets/Quick Stats-->
									<div class="row m-row--full-height">
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-brand ">
												<div class="m-portlet__body">
													<div class="m-widget26">
														<div class="m-widget26__number">
															4
															<small>
																Pr&eacute;stamos Activos.
															</small>
														</div>
														<div class="m-widget26__chart" style="height:90px; width: 220px;">
															<canvas id="m_chart_quick_stats_1"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="m--space-30"></div>
											<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-danger ">
												<div class="m-portlet__body">
													<div class="m-widget26">
														<div class="m-widget26__number">
															2
															<small>
																Pr&eacute;stamos con Atraso
															</small>
														</div>
														<div class="m-widget26__chart" style="height:90px; width: 220px;">
															<canvas id="m_chart_quick_stats_2"></canvas>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
												<div class="m-portlet__body">
													<div class="m-widget26">
														<div class="m-widget26__number">
															6
															<small>
																Nuevas Solicitudes
															</small>
														</div>
														<div class="m-widget26__chart" style="height:90px; width: 220px;">
															<canvas id="m_chart_quick_stats_3"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="m--space-30"></div>
											<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-accent ">
												<div class="m-portlet__body">
													<div class="m-widget26">
														<div class="m-widget26__number">
															4
															<small>
																Pr&eacute;stamos en revisi&oacute;n
															</small>
														</div>
														<div class="m-widget26__chart" style="height:90px; width: 220px;">
															<canvas id="m_chart_quick_stats_4"></canvas>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end:: Widgets/Quick Stats-->
								</div>
								<div class="col-xl-6">
									<!--begin:: Widgets/Finance Summary-->
									<div class="m-portlet m-portlet--full-height m-portlet--fit ">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Balance por mes
													</h3>
												</div>
											</div>
											<div class="m-portlet__head-tools">
												<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
															Mes
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
															Año
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="m-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active">
													<div class="m-widget12 m-widget12--chart-bottom m--margin-top-10" style="min-height: 450px">
														<div class="m-widget12__item">
															<span class="m-widget12__text1">
																Pagos de tasa
																<br>
																<span>
																	$352.<sup>531</sup>
																</span>
															</span>
															<span class="m-widget12__text2">
																Siguiente Pago
																<br>
																<span>
																	$519.<sup>74</sup>
																</span>
																<span>
																	- Marzo 31,2019
																</span>
															</span>
														</div>
														<div class="m-widget12__item">
															<span class="m-widget12__text1">
																Total de deuda
																<br>
																<span>
																	$60,070.<sup>776</sup>
																</span>
															</span>
															<div class="m-widget12__text2">
																<div class="m-widget12__desc">
																	Porcentaje de deuda
																</div>
																<br>
																<div class="m-widget12__progress">
																	<div class="m-widget12__progress-sm progress m-progress--sm">
																		<div class="m-widget12__progress-bar progress-bar bg-brand" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<span class="m-widget12__stats">
																		63%
																	</span>
																</div>
															</div>
														</div>
														<div class="m-widget12__chart m-portlet-fit--sides" style="height:290px;">
															<canvas id="m_chart_finance_summary"></canvas>
														</div>
													</div>
												</div>
												<div class="tab-pane"></div>
											</div>
										</div>
									</div>
									<!--end:: Widgets/Finance Summary-->
								</div>
							</div>
							<!--End::Section-->
							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-12">
									<!--begin:: Widgets/Application Sales-->
									<div class="m-portlet m-portlet--full-height ">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Listado de Pr&eacute;stamos
													</h3>
												</div>
											</div>
											<div class="m-portlet__head-tools">
												<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
															Activas
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
															En Revisi&oacute;n
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="m-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="m_widget11_tab1_content">
													<!--begin::Widget 11-->
													<div class="m-widget11">
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table">
																<!--begin::Thead-->
																<thead>
																	<tr>
																		<td class="m-widget11__label">
																			Estatus
																		</td>
																		<td class="m-widget11__app">
																			No. Pr&eacute;stamo
																		</td>
																		<td class="m-widget11__sales">
																			Cantidad
																		</td>
																		<td class="m-widget11__change">
																			Pagos
																		</td>
																		<td class="m-widget11__price">
																			Deuda
																		</td>
																		<td class="m-widget11__total m--align-right">
																			Total
																		</td>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Pr&eacute;stamo 1
																			</span>
																			<span class="m-widget11__sub">
																				Pr&oacute;ximo pago: Abril 2,2019
																			</span>
																		</td>
																		<td>
																			19,200
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			$63
																		</td>
																		<td class="m--align-right m--font-brand">
																			$14,740
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Pr&eacute;stamo 2
																			</span>
																			<span class="m-widget11__sub">
																				Pr&oacute;ximo pago: Abril 02,2019
																			</span>
																		</td>
																		<td>
																			24,310
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			$39
																		</td>
																		<td class="m--align-right m--font-brand">
																			$16,010
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Pr&eacute;stamo 3
																			</span>
																			<span class="m-widget11__sub">
																				Pr&oacute;ximo pago: Marzo 31,2019
																			</span>
																		</td>
																		<td>
																			9,076
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			$105
																		</td>
																		<td class="m--align-right m--font-brand">
																			$37,200
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Pr&eacute;stamo 4
																			</span>
																			<span class="m-widget11__sub">
																				Pr&oacute;ximo pago: Abril 03,2019
																			</span>
																		</td>
																		<td>
																			11,094
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			$16
																		</td>
																		<td class="m--align-right m--font-brand">
																			$8,520
																		</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
															<!--end::Table-->
														</div>
														<div class="m-widget11__action m--align-right">
															<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
																Generar Reporte
															</button>
														</div>
													</div>
													<!--end::Widget 11-->
												</div>
												<div class="tab-pane" id="m_widget11_tab2_content">
													<!--begin::Widget 11-->
													<div class="m-widget11">
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table">
																<!--begin::Thead-->
																<thead>
																	<tr>
																		<td class="m-widget11__label">
																			Estatus
																		</td>
																		<td class="m-widget11__app">
																			No. Pr&eacute;stamo
																		</td>
																		<td class="m-widget11__sales">
																			Cantidad
																		</td>
																		<td class="m-widget11__change">
																			Pagos
																		</td>
																		<td class="m-widget11__price">
																			Deuda
																		</td>
																		<td class="m-widget11__total m--align-right">
																			Total
																		</td>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Loop
																			</span>
																			<span class="m-widget11__sub">
																				CRM System
																			</span>
																		</td>
																		<td>
																			19,200
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td>
																			$63
																		</td>
																		<td class="m--align-right m--font-brand">
																			$34,740
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Selto
																			</span>
																			<span class="m-widget11__sub">
																				Powerful Website Builder
																			</span>
																		</td>
																		<td>
																			24,310
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td>
																			$39
																		</td>
																		<td class="m--align-right m--font-brand">
																			$46,010
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Jippo
																			</span>
																			<span class="m-widget11__sub">
																				Pr&oacute;ximo pago: Marzo 31,2019
																			</span>
																		</td>
																		<td>
																			9,076
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td>
																			$105
																		</td>
																		<td class="m--align-right m--font-brand">
																			$67,800
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																				<input type="checkbox">
																				<span></span>
																			</label>
																		</td>
																		<td>
																			<span class="m-widget11__title">
																				Verto
																			</span>
																			<span class="m-widget11__sub">
																				Web Development Tool
																			</span>
																		</td>
																		<td>
																			11,094
																		</td>
																		<td>
																			<div class="m-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td>
																			$16
																		</td>
																		<td class="m--align-right m--font-brand">
																			$18,520
																		</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
															<!--end::Table-->
														</div>
														<div class="m-widget11__action m--align-right">
															<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
																Generate Report
															</button>
														</div>
													</div>
													<!--end::Widget 11-->
												</div>
											</div>
										</div>
									</div>
									<!--end:: Widgets/Application Sales-->
								</div>
								<div class="col-xl-4">
									<!--begin:: Widgets/Latest Updates>
									<div class="m-portlet m-portlet--full-height m-portlet--fit ">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Latest Updates
													</h3>
												</div>
											</div>
											<div class="m-portlet__head-tools">
												<ul class="m-portlet__nav">
													<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
														<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
															Today
														</a>
														<div class="m-dropdown__wrapper">
															<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
															<div class="m-dropdown__inner">
																<div class="m-dropdown__body">
																	<div class="m-dropdown__content">
																		<ul class="m-nav">
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-share"></i>
																					<span class="m-nav__link-text">
																						Activity
																					</span>
																				</a>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-chat-1"></i>
																					<span class="m-nav__link-text">
																						Messages
																					</span>
																				</a>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-info"></i>
																					<span class="m-nav__link-text">
																						FAQ
																					</span>
																				</a>
																			</li>
																			<li class="m-nav__item">
																				<a href="" class="m-nav__link">
																					<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																					<span class="m-nav__link-text">
																						Support
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="m-portlet__body">
											<div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
												<div class="m-widget4__item">
													<div class="m-widget4__ext">
														<a href="#" class="m-widget4__icon m--font-brand">
															<i class="flaticon-interface-3"></i>
														</a>
													</div>
													<div class="m-widget4__info">
														<span class="m-widget4__text">
															Make Metronic Great Again
														</span>
													</div>
													<div class="m-widget4__ext">
														<span class="m-widget4__number m--font-accent">
															+500
														</span>
													</div>
												</div>
												<div class="m-widget4__item">
													<div class="m-widget4__ext">
														<a href="#" class="m-widget4__icon m--font-brand">
															<i class="flaticon-folder-4"></i>
														</a>
													</div>
													<div class="m-widget4__info">
														<span class="m-widget4__text">
															Green Maker Team
														</span>
													</div>
													<div class="m-widget4__ext">
														<span class="m-widget4__stats m--font-info">
															<span class="m-widget4__number m--font-accent">
																-64
															</span>
														</span>
													</div>
												</div>
												<div class="m-widget4__item">
													<div class="m-widget4__ext">
														<a href="#" class="m-widget4__icon m--font-brand">
															<i class="flaticon-line-graph"></i>
														</a>
													</div>
													<div class="m-widget4__info">
														<span class="m-widget4__text">
															Make Apex Great Again
														</span>
													</div>
													<div class="m-widget4__ext">
														<span class="m-widget4__stats m--font-info">
															<span class="m-widget4__number m--font-accent">
																+1080
															</span>
														</span>
													</div>
												</div>
												<div class="m-widget4__item m-widget4__item--last">
													<div class="m-widget4__ext">
														<a href="#" class="m-widget4__icon m--font-brand">
															<i class="flaticon-diagram"></i>
														</a>
													</div>
													<div class="m-widget4__info">
														<span class="m-widget4__text">
															A Programming Language
														</span>
													</div>
													<div class="m-widget4__ext">
														<span class="m-widget4__stats m--font-info">
															<span class="m-widget4__number m--font-accent">
																+19
															</span>
														</span>
													</div>
												</div>
												<div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;">
													<canvas id="m_chart_latest_updates"></canvas>
												</div>
											</div>
										</div>
									</div>
									<!--end:: Widgets/Latest Updates-->
								</div>
							</div>
							<!--End::Section-->
							<!--Begin::Section-->

							<!--End::Section-->
							<!--Begin::Section-->

							<!--End::Section-->
						</div>
						<!-- body -->
					</div>
				</div>
			</div>
			<!-- end:: Body -->
<!-- begin::Footer -->
			<footer class="m-grid__item  m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 &copy; Metronic theme by
								<a href="https://keenthemes.com" class="m-link">
									Keenthemes
								</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											Privacy
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Purchase
										</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item--last">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
					<i class="la la-close"></i>
				</span>
				<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
							Messages
						</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
							Settings
						</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
							Logs
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
						<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
							<div class="m-messenger__messages">
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg" alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Hi Bob. What time will be the meeting ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Hi Megan. It's at 2.30PM
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg" alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Will the development team be joining ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes sure. I invited them as well
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">
									2:30PM
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg"  alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. For the Coca-Cola Mobile App project as well ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes, sure.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Please also prepare the quotation for the Loop CRM project as well.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">
									3:15PM
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-no-pic m--bg-fill-danger">
											<span>
												M
											</span>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. I will prepare it.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Thanks Megan. I will see you later.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="assets/app/media/img//users/user3.jpg"  alt=""/>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Sure. See you in the meeting soon.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__seperator"></div>
							<div class="m-messenger__form">
								<div class="m-messenger__form-controls">
									<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
								</div>
								<div class="m-messenger__form-tools">
									<a href="" class="m-messenger__form-attachment">
										<i class="la la-paperclip"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
						<div class="m-list-settings">
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">
									General Settings
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Email Notifications
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Site Tracking
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										SMS Alerts
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Storage
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">
									System Settings
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										System Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Error Reporting
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Applications Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Servers
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
						<div class="m-list-timeline">
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									System Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											12 new users registered
											<span class="m-badge m-badge--warning m-badge--wide">
												important
											</span>
										</a>
										<span class="m-list-timeline__time">
											Just now
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											System shutdown
										</a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">
											New invoice received
										</a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">
											Database overloaded 89%
											<span class="m-badge m-badge--success m-badge--wide">
												resolved
											</span>
										</a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											System error
										</a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											Production server down
											<span class="m-badge m-badge--danger m-badge--wide">
												pending
											</span>
										</a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											Production server up
										</a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Applications Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											New order received
											<span class="m-badge m-badge--info m-badge--wide">
												urgent
											</span>
										</a>
										<span class="m-list-timeline__time">
											7 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											12 new users registered
										</a>
										<span class="m-list-timeline__time">
											Just now
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											System shutdown
										</a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">
											New invoices received
										</a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">
											Database overloaded 89%
										</a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											System error
											<span class="m-badge m-badge--info m-badge--wide">
												pending
											</span>
										</a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											Production server down
										</a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Server Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											Production server up
										</a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											New order received
										</a>
										<span class="m-list-timeline__time">
											7 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											12 new users registered
										</a>
										<span class="m-list-timeline__time">
											Just now
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											System shutdown
										</a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">
											New invoice received
										</a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">
											Database overloaded 89%
										</a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											System error
										</a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											Production server down
										</a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">
											Production server up
										</a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">
											New order received
										</a>
										<span class="m-list-timeline__time">
											1117 hrs
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end::Quick Sidebar -->
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<!--
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
				<a href="">
					<i class="la la-eye"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
				<a href="" >
					<i class="la la-comments-o"></i>
				</a>
			</li>
			-->
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
					<i class="la la-cart-arrow-down"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
					<i class="la la-code-fork"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
					<i class="la la-life-ring"></i>
				</a>
			</li>
		</ul>
		<!-- begin::Quick Nav -->
    	<!--begin::Base Scripts -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/demo9/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
        <!--begin::Page Vendors -->
		<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->
        <!--begin::Page Snippets -->
		<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
        <!-- begin::Page Loader -->
		<script>
            $(window).on('load', function() {
                $('body').removeClass('m-page--loading');
            });
		</script>
		<!-- end::Page Loader -->
	</body>
	<!-- end::Body -->
</html>
