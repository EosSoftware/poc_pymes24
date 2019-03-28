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
						<!-- END: Subheader -->
						<div class="m-content">

							<!-- start content -->



							<div class="m-content">
								<div class="row">
									<div class="col-md-12">
										<div class="m-portlet">
											<div class="m-portlet__body  m-portlet__body--no-padding">
												<div class="row m-row--no-padding m-row--col-separator-xl">
													<div class="col-xl-4">

														<!--begin:: Widgets/Stats2-1 -->
														<div class="m-widget1">
															<div class="m-widget1__item">
																<div class="row m-row--no-padding align-items-center">
																	<div class="col">
																		<h3 class="m-widget1__title">Inversiones</h3>
																		<span class="m-widget1__desc">Total de 7 Inversiones</span>
																	</div>
																	<div class="col m--align-right">
																		<span class="m-widget1__number m--font-brand">$17,800</span>
																	</div>
																</div>
															</div>
															<div class="m-widget1__item">
																<div class="row m-row--no-padding align-items-center">
																	<div class="col">
																		<h3 class="m-widget1__title">Ganancia</h3>
																		<span class="m-widget1__desc">Ganancia total de (7) inversion</span>
																	</div>
																	<div class="col m--align-right">
																		<span class="m-widget1__number m--font-danger">+$5,800</span>
																	</div>
																</div>
															</div>
															<div class="m-widget1__item">
																<div class="row m-row--no-padding align-items-center">
																	<div class="col">
																		<h3 class="m-widget1__title">Porcentaje mora</h3>
																		<span class="m-widget1__desc">Porcentaje de atrasos en pagos</span>
																	</div>
																	<div class="col m--align-right">
																		<span class="m-widget1__number m--font-success">-27,49%</span>
																	</div>
																</div>
															</div>
														</div>

														<!--end:: Widgets/Stats2-1 -->
													</div>
													<div class="col-xl-4">

														<!--begin:: Widgets/Daily Sales-->
														<div class="m-widget14">
															<div class="m-widget14__header m--margin-bottom-30">
																<h3 class="m-widget14__title">
																	Crecimiento de inversiones
																</h3>
																<span class="m-widget14__desc">
																	No. Inversiones: 7 | Recuperadas: 3
																</span>
															</div>
															<div class="m-widget14__chart" style="height:120px;">
																<canvas id="m_chart_daily_sales"></canvas>
															</div>
														</div>

														<!--end:: Widgets/Daily Sales-->
													</div>
													<div class="col-xl-4">

														<!--begin:: Widgets/Profit Share-->
														<div class="m-widget14">
															<div class="m-widget14__header">
																<h3 class="m-widget14__title">
																	Ganancia
																</h3>
																<span class="m-widget14__desc">
																	 por mes
																</span>
															</div>
															<div class="row  align-items-center">
																<div class="col">
																	<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
																		<div class="m-widget14__stat">MXN</div>
																	</div>
																</div>
																<div class="col">
																	<div class="m-widget14__legends">
																		<div class="m-widget14__legend">
																			<span class="m-widget14__legend-bullet m--bg-accent"></span>
																			<span class="m-widget14__legend-text">$7,800 Enero</span>
																		</div>
																		<div class="m-widget14__legend">
																			<span class="m-widget14__legend-bullet m--bg-warning"></span>
																			<span class="m-widget14__legend-text">$9,340 Feb.</span>
																		</div>
																		<div class="m-widget14__legend">
																			<span class="m-widget14__legend-bullet m--bg-brand"></span>
																			<span class="m-widget14__legend-text">$4,033 Marzo</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<!--end:: Widgets/Profit Share-->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="m-portlet">
											<div class="m-portlet__head">
												<div class="m-portlet__head-caption">
													<div class="m-portlet__head-title">
														<h3 class="m-portlet__head-text">
															Detalle de Inversiones
														</h3>
													</div>
												</div>
											</div>
											<div class="m-portlet__body">

												<!--begin::Section-->
												<div class="m-section">
													<div class="m-section__content">
														<table class="table m-table">
															<thead>
																<tr>
																	<th>Status</th>
																	<th>Cliente</th>
																	<th>Cantidad</th>
																	<th>Pagado</th>
																</tr>
															</thead>
															<tbody>
																<tr class="m-table__row--warning">
																	<th scope="row"><i class="fa  fa-clock"></i></th>
																	<td>Armando Romero</td>
																	<td>$15,000.<sup>00</sup></td>
																	<td>$7,500.<sup>00</sup></td>
																</tr>
																<tr class="m-table__row--primary">
																	<th scope="row"><i class="fa  fa-piggy-bank "></i></th>
																	<td>Lisa Jimenez</td>
																	<td>$45,000.<sup>00</sup></td>
																	<td>$22,500.<sup>00</sup></td>
																</tr>
																<tr class="m-table__row--success">
																	<th scope="row"><i class="fa fa-check-circle"></i></th>
																	<td>Roberto Rodriguez</td>
																	<td>$10,000.<sup>00</sup></td>
																	<td>$10,000.<sup>00</sup></td>
																</tr>
																<!-- <tr class="m-table__row--brand"> -->
																<tr class="m-table__row--success">
																	<th scope="row"><i class="fa fa-check-circle"></i></th>
																	<td>Fernanda Escalante</td>
																	<td>$50,000.<sup>00</sup></td>
																	<td>$50,000.<sup>00</sup></td>
																</tr>
																<tr class="m-table__row--warning">
																	<th scope="row"><i class="fa  fa-clock"></i></th>
																	<td>Tania Jaramillo</td>
																	<td>$50,000.<sup>00</sup></td>
																	<td>$25,000.<sup>00</sup></td>
																</tr>
																<tr class="m-table__row--success">
																	<th scope="row"><i class="fa fa-check-circle"></i></th>
																	<td>Sean Kingstone</td>
																	<td>$20,000.<sup>00</sup></td>
																	<td>$20,000.<sup>00</sup></td>
																</tr>
																<tr class="m-table__row--danger">
																	<th scope="row"><i class="fa  fa-ban "></i></th>
																	<td>Susie Su&aacute;rez</td>
																	<td>$120,000.<sup>00</sup></td>
																	<td>$60,000.<sup>00</sup></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>

												<!--end::Section-->
											</div>

											<!--end::Form-->
										</div>
									</div>
								</div>
							</div>






							<!--  -->

						</div>
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
