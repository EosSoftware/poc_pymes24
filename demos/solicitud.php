
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



							<!--begin: Form Wizard-->
							<div class="m-wizard m-wizard--3 m-wizard--success" id="m_wizard">

								<!--begin: Message container -->
								<div class="m-portlet__padding-x">

									<!-- Here you can put a message or alert -->
								</div>

								<!--end: Message container -->
								<div class="row m-row--no-padding">
									<div class="col-xl-3 col-lg-12">

										<!--begin: Form Wizard Head -->
										<div class="m-wizard__head">

											<!--begin: Form Wizard Progress -->
											<div class="m-wizard__progress">
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<!--end: Form Wizard Progress -->

											<!--begin: Form Wizard Nav -->
											<div class="m-wizard__nav">
												<div class="m-wizard__steps">
													<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>1</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
																Información
															</div>
														</div>
													</div>
													<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>2</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
																Profile Setup
															</div>
														</div>
													</div>
													<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_3">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>3</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
																Billing Setup
															</div>
														</div>
													</div>
													<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
														<div class="m-wizard__step-info">
															<a href="#" class="m-wizard__step-number">
																<span><span>4</span></span>
															</a>
															<div class="m-wizard__step-line">
																<span></span>
															</div>
															<div class="m-wizard__step-label">
																Confirmation
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>

										<!--end: Form Wizard Head -->
									</div>
									<div class="col-xl-9 col-lg-12">

										<!--begin: Form Wizard Form-->
										<div class="m-wizard__form">

											<!--
						1) Use m-form--label-align-left class to alight the form input lables to the right
						2) Use m-form--state class to highlight input control borders on form validation
					-->
											<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">

												<!--begin: Form Body -->
												<div class="m-portlet__body m-portlet__body--no-padding">

													<!--begin: Form Wizard Step 1-->
													<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Client Details</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* Name:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone">
																	<span class="m-form__help">Please enter your first and last names</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* Email:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="email" name="email" class="form-control m-input" placeholder="" value="nick.stone@gmail.com">
																	<span class="m-form__help">We'll never share your email with anyone else</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* Phone</label>
																<div class="col-xl-9 col-lg-9">
																	<div class="input-group">
																		<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
																		<input type="text" name="phone" class="form-control m-input" placeholder="" value="1-541-754-3010">
																	</div>
																	<span class="m-form__help">Enter your valid phone in US phone format. E.g: 1-541-754-3010</span>
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Mailing Address
																	<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i>
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* Address Line 1:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="address1" class="form-control m-input" placeholder="" value="Headquarters 1120 N Street Sacramento 916-654-5266">
																	<span class="m-form__help">Street address, P.O. box, company name, c/o</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Address Line 2:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="address2" class="form-control m-input" placeholder="" value="P.O. Box 942873 Sacramento, CA 94273-0001">
																	<span class="m-form__help">Appartment, suite, unit, building, floor, etc</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* City:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="city" class="form-control m-input" placeholder="" value="Polo Alto">
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* State:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="state" class="form-control m-input" placeholder="" value="California">
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* Country:</label>
																<div class="col-xl-9 col-lg-9">
																	<select name="country" class="form-control m-input">
																		<option value="">Select</option>
																		<option value="AF">Afghanistan</option>
																		<option value="AX">Åland Islands</option>
																		<option value="AL">Albania</option>
																		<option value="DZ">Algeria</option>
																		<option value="AS">American Samoa</option>
																		<option value="AD">Andorra</option>
																		<option value="AO">Angola</option>
																		<option value="AI">Anguilla</option>
																		<option value="AQ">Antarctica</option>
																		<option value="AG">Antigua and Barbuda</option>
																		<option value="AR">Argentina</option>
																		<option value="AM">Armenia</option>
																		<option value="AW">Aruba</option>
																		<option value="AU">Australia</option>
																		<option value="AT">Austria</option>
																		<option value="AZ">Azerbaijan</option>
																		<option value="BS">Bahamas</option>
																		<option value="BH">Bahrain</option>
																		<option value="BD">Bangladesh</option>
																		<option value="BB">Barbados</option>
																		<option value="BY">Belarus</option>
																		<option value="BE">Belgium</option>
																		<option value="BZ">Belize</option>
																		<option value="BJ">Benin</option>
																		<option value="BM">Bermuda</option>
																		<option value="BT">Bhutan</option>
																		<option value="BO">Bolivia, Plurinational State of</option>
																		<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																		<option value="BA">Bosnia and Herzegovina</option>
																		<option value="BW">Botswana</option>
																		<option value="BV">Bouvet Island</option>
																		<option value="BR">Brazil</option>
																		<option value="IO">British Indian Ocean Territory</option>
																		<option value="BN">Brunei Darussalam</option>
																		<option value="BG">Bulgaria</option>
																		<option value="BF">Burkina Faso</option>
																		<option value="BI">Burundi</option>
																		<option value="KH">Cambodia</option>
																		<option value="CM">Cameroon</option>
																		<option value="CA">Canada</option>
																		<option value="CV">Cape Verde</option>
																		<option value="KY">Cayman Islands</option>
																		<option value="CF">Central African Republic</option>
																		<option value="TD">Chad</option>
																		<option value="CL">Chile</option>
																		<option value="CN">China</option>
																		<option value="CX">Christmas Island</option>
																		<option value="CC">Cocos (Keeling) Islands</option>
																		<option value="CO">Colombia</option>
																		<option value="KM">Comoros</option>
																		<option value="CG">Congo</option>
																		<option value="CD">Congo, the Democratic Republic of the</option>
																		<option value="CK">Cook Islands</option>
																		<option value="CR">Costa Rica</option>
																		<option value="CI">Côte d'Ivoire</option>
																		<option value="HR">Croatia</option>
																		<option value="CU">Cuba</option>
																		<option value="CW">Curaçao</option>
																		<option value="CY">Cyprus</option>
																		<option value="CZ">Czech Republic</option>
																		<option value="DK">Denmark</option>
																		<option value="DJ">Djibouti</option>
																		<option value="DM">Dominica</option>
																		<option value="DO">Dominican Republic</option>
																		<option value="EC">Ecuador</option>
																		<option value="EG">Egypt</option>
																		<option value="SV">El Salvador</option>
																		<option value="GQ">Equatorial Guinea</option>
																		<option value="ER">Eritrea</option>
																		<option value="EE">Estonia</option>
																		<option value="ET">Ethiopia</option>
																		<option value="FK">Falkland Islands (Malvinas)</option>
																		<option value="FO">Faroe Islands</option>
																		<option value="FJ">Fiji</option>
																		<option value="FI">Finland</option>
																		<option value="FR">France</option>
																		<option value="GF">French Guiana</option>
																		<option value="PF">French Polynesia</option>
																		<option value="TF">French Southern Territories</option>
																		<option value="GA">Gabon</option>
																		<option value="GM">Gambia</option>
																		<option value="GE">Georgia</option>
																		<option value="DE">Germany</option>
																		<option value="GH">Ghana</option>
																		<option value="GI">Gibraltar</option>
																		<option value="GR">Greece</option>
																		<option value="GL">Greenland</option>
																		<option value="GD">Grenada</option>
																		<option value="GP">Guadeloupe</option>
																		<option value="GU">Guam</option>
																		<option value="GT">Guatemala</option>
																		<option value="GG">Guernsey</option>
																		<option value="GN">Guinea</option>
																		<option value="GW">Guinea-Bissau</option>
																		<option value="GY">Guyana</option>
																		<option value="HT">Haiti</option>
																		<option value="HM">Heard Island and McDonald Islands</option>
																		<option value="VA">Holy See (Vatican City State)</option>
																		<option value="HN">Honduras</option>
																		<option value="HK">Hong Kong</option>
																		<option value="HU">Hungary</option>
																		<option value="IS">Iceland</option>
																		<option value="IN">India</option>
																		<option value="ID">Indonesia</option>
																		<option value="IR">Iran, Islamic Republic of</option>
																		<option value="IQ">Iraq</option>
																		<option value="IE">Ireland</option>
																		<option value="IM">Isle of Man</option>
																		<option value="IL">Israel</option>
																		<option value="IT">Italy</option>
																		<option value="JM">Jamaica</option>
																		<option value="JP">Japan</option>
																		<option value="JE">Jersey</option>
																		<option value="JO">Jordan</option>
																		<option value="KZ">Kazakhstan</option>
																		<option value="KE">Kenya</option>
																		<option value="KI">Kiribati</option>
																		<option value="KP">Korea, Democratic People's Republic of</option>
																		<option value="KR">Korea, Republic of</option>
																		<option value="KW">Kuwait</option>
																		<option value="KG">Kyrgyzstan</option>
																		<option value="LA">Lao People's Democratic Republic</option>
																		<option value="LV">Latvia</option>
																		<option value="LB">Lebanon</option>
																		<option value="LS">Lesotho</option>
																		<option value="LR">Liberia</option>
																		<option value="LY">Libya</option>
																		<option value="LI">Liechtenstein</option>
																		<option value="LT">Lithuania</option>
																		<option value="LU">Luxembourg</option>
																		<option value="MO">Macao</option>
																		<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																		<option value="MG">Madagascar</option>
																		<option value="MW">Malawi</option>
																		<option value="MY">Malaysia</option>
																		<option value="MV">Maldives</option>
																		<option value="ML">Mali</option>
																		<option value="MT">Malta</option>
																		<option value="MH">Marshall Islands</option>
																		<option value="MQ">Martinique</option>
																		<option value="MR">Mauritania</option>
																		<option value="MU">Mauritius</option>
																		<option value="YT">Mayotte</option>
																		<option value="MX">Mexico</option>
																		<option value="FM">Micronesia, Federated States of</option>
																		<option value="MD">Moldova, Republic of</option>
																		<option value="MC">Monaco</option>
																		<option value="MN">Mongolia</option>
																		<option value="ME">Montenegro</option>
																		<option value="MS">Montserrat</option>
																		<option value="MA">Morocco</option>
																		<option value="MZ">Mozambique</option>
																		<option value="MM">Myanmar</option>
																		<option value="NA">Namibia</option>
																		<option value="NR">Nauru</option>
																		<option value="NP">Nepal</option>
																		<option value="NL">Netherlands</option>
																		<option value="NC">New Caledonia</option>
																		<option value="NZ">New Zealand</option>
																		<option value="NI">Nicaragua</option>
																		<option value="NE">Niger</option>
																		<option value="NG">Nigeria</option>
																		<option value="NU">Niue</option>
																		<option value="NF">Norfolk Island</option>
																		<option value="MP">Northern Mariana Islands</option>
																		<option value="NO">Norway</option>
																		<option value="OM">Oman</option>
																		<option value="PK">Pakistan</option>
																		<option value="PW">Palau</option>
																		<option value="PS">Palestinian Territory, Occupied</option>
																		<option value="PA">Panama</option>
																		<option value="PG">Papua New Guinea</option>
																		<option value="PY">Paraguay</option>
																		<option value="PE">Peru</option>
																		<option value="PH">Philippines</option>
																		<option value="PN">Pitcairn</option>
																		<option value="PL">Poland</option>
																		<option value="PT">Portugal</option>
																		<option value="PR">Puerto Rico</option>
																		<option value="QA">Qatar</option>
																		<option value="RE">Réunion</option>
																		<option value="RO">Romania</option>
																		<option value="RU">Russian Federation</option>
																		<option value="RW">Rwanda</option>
																		<option value="BL">Saint Barthélemy</option>
																		<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																		<option value="KN">Saint Kitts and Nevis</option>
																		<option value="LC">Saint Lucia</option>
																		<option value="MF">Saint Martin (French part)</option>
																		<option value="PM">Saint Pierre and Miquelon</option>
																		<option value="VC">Saint Vincent and the Grenadines</option>
																		<option value="WS">Samoa</option>
																		<option value="SM">San Marino</option>
																		<option value="ST">Sao Tome and Principe</option>
																		<option value="SA">Saudi Arabia</option>
																		<option value="SN">Senegal</option>
																		<option value="RS">Serbia</option>
																		<option value="SC">Seychelles</option>
																		<option value="SL">Sierra Leone</option>
																		<option value="SG">Singapore</option>
																		<option value="SX">Sint Maarten (Dutch part)</option>
																		<option value="SK">Slovakia</option>
																		<option value="SI">Slovenia</option>
																		<option value="SB">Solomon Islands</option>
																		<option value="SO">Somalia</option>
																		<option value="ZA">South Africa</option>
																		<option value="GS">South Georgia and the South Sandwich Islands</option>
																		<option value="SS">South Sudan</option>
																		<option value="ES">Spain</option>
																		<option value="LK">Sri Lanka</option>
																		<option value="SD">Sudan</option>
																		<option value="SR">Suriname</option>
																		<option value="SJ">Svalbard and Jan Mayen</option>
																		<option value="SZ">Swaziland</option>
																		<option value="SE">Sweden</option>
																		<option value="CH">Switzerland</option>
																		<option value="SY">Syrian Arab Republic</option>
																		<option value="TW">Taiwan, Province of China</option>
																		<option value="TJ">Tajikistan</option>
																		<option value="TZ">Tanzania, United Republic of</option>
																		<option value="TH">Thailand</option>
																		<option value="TL">Timor-Leste</option>
																		<option value="TG">Togo</option>
																		<option value="TK">Tokelau</option>
																		<option value="TO">Tonga</option>
																		<option value="TT">Trinidad and Tobago</option>
																		<option value="TN">Tunisia</option>
																		<option value="TR">Turkey</option>
																		<option value="TM">Turkmenistan</option>
																		<option value="TC">Turks and Caicos Islands</option>
																		<option value="TV">Tuvalu</option>
																		<option value="UG">Uganda</option>
																		<option value="UA">Ukraine</option>
																		<option value="AE">United Arab Emirates</option>
																		<option value="GB">United Kingdom</option>
																		<option value="US" selected>United States</option>
																		<option value="UM">United States Minor Outlying Islands</option>
																		<option value="UY">Uruguay</option>
																		<option value="UZ">Uzbekistan</option>
																		<option value="VU">Vanuatu</option>
																		<option value="VE">Venezuela, Bolivarian Republic of</option>
																		<option value="VN">Viet Nam</option>
																		<option value="VG">Virgin Islands, British</option>
																		<option value="VI">Virgin Islands, U.S.</option>
																		<option value="WF">Wallis and Futuna</option>
																		<option value="EH">Western Sahara</option>
																		<option value="YE">Yemen</option>
																		<option value="ZM">Zambia</option>
																		<option value="ZW">Zimbabwe</option>
																	</select>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Account Details</h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-12">
																	<label class="form-control-label">* URL:</label>
																	<input type="url" name="account_url" class="form-control m-input" placeholder="" value="http://sinortech.vertoffice.com">
																	<span class="m-form__help">Please enter your preferred URL to your dashboard</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">* Username:</label>
																	<input type="text" name="account_username" class="form-control m-input" placeholder="" value="nick.stone">
																	<span class="m-form__help">Your username to login to your dashboard</span>
																</div>
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">* Password:</label>
																	<input type="password" name="account_password" class="form-control m-input" placeholder="" value="qwerty">
																	<span class="m-form__help">Please use letters and at least one number and symbol</span>
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Client Settings</h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">* User Group:</label>
																	<div class="m-radio-inline">
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" name="account_group" checked="" value="2"> Sales Person
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" name="account_group" value="2"> Customer
																			<span></span>
																		</label>
																	</div>
																	<span class="m-form__help">Please select user group</span>
																</div>
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">* Communications:</label>
																	<div class="m-checkbox-inline">
																		<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																			<input type="checkbox" name="account_communication[]" checked value="email"> Email
																			<span></span>
																		</label>
																		<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																			<input type="checkbox" name="account_communication[]" value="sms"> SMS
																			<span></span>
																		</label>
																		<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																			<input type="checkbox" name="account_communication[]" value="phone"> Phone
																			<span></span>
																		</label>
																	</div>
																	<span class="m-form__help">Please select user communication options</span>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_3">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Billing Information</h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-12">
																	<label class="form-control-label">* Cardholder Name:</label>
																	<input type="text" name="billing_card_name" class="form-control m-input" placeholder="" value="Nick Stone">
																</div>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-12">
																	<label class="form-control-label">* Card Number:</label>
																	<input type="text" name="billing_card_number" class="form-control m-input" placeholder="" value="372955886840581">
																</div>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-4 m-form__group-sub">
																	<label class="form-control-label">* Exp Month:</label>
																	<select class="form-control m-input" name="billing_card_exp_month">
																		<option value="">Select</option>
																		<option value="01">01</option>
																		<option value="02">02</option>
																		<option value="03">03</option>
																		<option value="04" selected>04</option>
																		<option value="05">05</option>
																		<option value="06">06</option>
																		<option value="07">07</option>
																		<option value="08">08</option>
																		<option value="09">09</option>
																		<option value="10">10</option>
																		<option value="11">11</option>
																		<option value="12">12</option>
																	</select>
																</div>
																<div class="col-lg-4 m-form__group-sub">
																	<label class="form-control-label">* Exp Year:</label>
																	<select class="form-control m-input" name="billing_card_exp_year">
																		<option value="">Select</option>
																		<option value="2018">2018</option>
																		<option value="2019">2019</option>
																		<option value="2020">2020</option>
																		<option value="2021" selected>2021</option>
																		<option value="2022">2022</option>
																		<option value="2023">2023</option>
																		<option value="2024">2024</option>
																	</select>
																</div>
																<div class="col-lg-4 m-form__group-sub">
																	<label class="form-control-label">* CVV:</label>
																	<input type="number" class="form-control m-input" name="billing_card_cvv" placeholder="" value="450">
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Billing Address <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="If different than the corresponding address"></i></h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-12">
																	<label class="form-control-label">* Address 1:</label>
																	<input type="text" name="billing_address_1" class="form-control m-input" placeholder="" value="Headquarters 1120 N Street Sacramento 916-654-5266">
																</div>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-12">
																	<label class="form-control-label">Address 2:</label>
																	<input type="text" name="billing_address_2" class="form-control m-input" placeholder="" value="P.O. Box 942873 Sacramento, CA 94273-0001">
																</div>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-5 m-form__group-sub">
																	<label class="form-control-label">* City:</label>
																	<input type="text" class="form-control m-input" name="billing_city" placeholder="" value="Polo Alto">
																</div>
																<div class="col-lg-5 m-form__group-sub">
																	<label class="form-control-label">* State:</label>
																	<input type="text" class="form-control m-input" name="billing_state" placeholder="" value="California">
																</div>
																<div class="col-lg-2 m-form__group-sub">
																	<label class="form-control-label">* ZIP:</label>
																	<input type="text" class="form-control m-input" name="billing_zip" placeholder="" value="34890">
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Delivery Type</h3>
															</div>
															<div class="form-group m-form__group">
																<div class="row">
																	<div class="col-lg-6">
																		<label class="m-option">
																			<span class="m-option__control">
																				<span class="m-radio m-radio--state-brand">
																					<input type="radio" name="billing_delivery" value="">
																					<span></span>
																				</span>
																			</span>
																			<span class="m-option__label">
																				<span class="m-option__head">
																					<span class="m-option__title">
																						Standart Delevery
																					</span>
																					<span class="m-option__focus">
																						Free
																					</span>
																				</span>
																				<span class="m-option__body">
																					Estimated 14-20 Day Shipping
																					(&nbsp;Duties end taxes may be due
																					upon delivery&nbsp;)
																				</span>
																			</span>
																		</label>
																	</div>
																	<div class="col-lg-6">
																		<label class="m-option">
																			<span class="m-option__control">
																				<span class="m-radio m-radio--state-brand">
																					<input type="radio" name="billing_delivery" value="">
																					<span></span>
																				</span>
																			</span>
																			<span class="m-option__label">
																				<span class="m-option__head">
																					<span class="m-option__title">
																						Fast Delevery
																					</span>
																					<span class="m-option__focus">
																						$&nbsp;8.00
																					</span>
																				</span>
																				<span class="m-option__body">
																					Estimated 2-5 Day Shipping
																					(&nbsp;Duties end taxes may be due
																					upon delivery&nbsp;)
																				</span>
																			</span>
																		</label>
																	</div>
																</div>
																<div class="m-form__help">

																	<!--must use this helper element to display error message for the options-->
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_4">

														<!--begin::Section-->
														<div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">

															<!--begin::Item-->
															<div class="m-accordion__item active">
																<div class="m-accordion__item-head" role="tab" id="m_accordion_1_item_1_head" data-toggle="collapse" href="#m_accordion_1_item_1_body" aria-expanded="  false">
																	<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
																	<span class="m-accordion__item-title">1. Client Information</span>
																	<span class="m-accordion__item-mode"></span>
																</div>
																<div class="m-accordion__item-body collapse show" id="m_accordion_1_item_1_body" class=" " role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1">

																	<!--begin::Content-->
																	<div class="tab-content active  m--padding-30">
																		<div class="m-form__section m-form__section--first">
																			<div class="m-form__heading">
																				<h4 class="m-form__heading-title">Client Details</h4>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Name:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Nick Stone</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Email:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">nick.stone@gmail.com</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Phone</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">+206-78-55034890</span>
																				</div>
																			</div>
																		</div>
																		<div class="m-separator m-separator--dashed m-separator--lg"></div>
																		<div class="m-form__section">
																			<div class="m-form__heading">
																				<h4 class="m-form__heading-title">Corresponding Address <i data-toggle="m-tooltip" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i></h4>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Address Line 1:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Headquarters 1120 N Street Sacramento 916-654-5266</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Address Line 2:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">P.O. Box 942873 Sacramento, CA 94273-0001</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">City:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Polo Alto</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">State:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">California</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Country:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">USA</span>
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--end::Section-->
																</div>
															</div>

															<!--end::Item-->

															<!--begin::Item-->
															<div class="m-accordion__item">
																<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_2_head" data-toggle="collapse" href="#m_accordion_1_item_2_body" aria-expanded="    false">
																	<span class="m-accordion__item-icon"><i class="fa  flaticon-placeholder"></i></span>
																	<span class="m-accordion__item-title">2. Account Setup</span>
																	<span class="m-accordion__item-mode"></span>
																</div>
																<div class="m-accordion__item-body collapse" id="m_accordion_1_item_2_body" class=" " role="tabpanel" aria-labelledby="m_accordion_1_item_2_head" data-parent="#m_accordion_1">

																	<!--begin::Content-->
																	<div class="tab-content  m--padding-30">
																		<div class="m-form__section m-form__section--first">
																			<div class="m-form__heading">
																				<h4 class="m-form__heading-title">Account Details</h4>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">URL:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">sinortech.vertoffice.com</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Username:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">sinortech.admin</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Password:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">*********</span>
																				</div>
																			</div>
																		</div>
																		<div class="m-separator m-separator--dashed m-separator--lg"></div>
																		<div class="m-form__section">
																			<div class="m-form__heading">
																				<h4 class="m-form__heading-title">Client Settings</h4>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">User Group:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Customer</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Communications:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Phone, Email</span>
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--end::Content-->
																</div>
															</div>

															<!--end::Item-->

															<!--begin::Item-->
															<div class="m-accordion__item">
																<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_3_head" data-toggle="collapse" href="#m_accordion_1_item_3_body" aria-expanded="    false">
																	<span class="m-accordion__item-icon"><i class="fa  flaticon-placeholder"></i></span>
																	<span class="m-accordion__item-title">3. Billing Setup</span>
																	<span class="m-accordion__item-mode"></span>
																</div>
																<div class="m-accordion__item-body collapse" id="m_accordion_1_item_3_body" class=" " role="tabpanel" aria-labelledby="m_accordion_1_item_3_head" data-parent="#m_accordion_1">

																	<!--begin::Content-->
																	<div class="tab-content  m--padding-30">
																		<div class="m-form__section m-form__section--first">
																			<div class="m-form__heading">
																				<h4 class="m-form__heading-title">Billing Information</h4>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Cardholder Name:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Nick Stone</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Card Number:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">*************4589</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Exp Month:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">10</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Exp Year:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">2018</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">CVV:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">***</span>
																				</div>
																			</div>
																		</div>
																		<div class="m-separator m-separator--dashed m-separator--lg"></div>
																		<div class="m-form__section">
																			<div class="m-form__heading">
																				<h4 class="m-form__heading-title">Billing Address</h4>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Address Line 1:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Headquarters 1120 N Street Sacramento 916-654-5266</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Address Line 2:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">P.O. Box 942873 Sacramento, CA 94273-0001</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">City:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">Polo Alto</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">State:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">California</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">ZIP:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">37505</span>
																				</div>
																			</div>
																			<div class="form-group m-form__group m-form__group--sm row">
																				<label class="col-xl-4 col-lg-4 col-form-label">Country:</label>
																				<div class="col-xl-8 col-lg-8">
																					<span class="m-form__control-static">USA</span>
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--end::Content-->
																</div>
															</div>

															<!--end::Item-->
														</div>

														<!--end::Section-->

														<!--end::Section-->
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="form-group m-form__group m-form__group--sm row">
															<div class="col-xl-12">
																<div class="m-checkbox-inline">
																	<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																		<input type="checkbox" name="accept" value="1">
																		Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement
																		<span></span>
																	</label>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 4-->
												</div>

												<!--end: Form Body -->

												<!--begin: Form Actions -->
												<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
													<div class="m-form__actions">
														<div class="row">
															<div class="col-lg-6 m--align-left">
																<a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
																	<span>
																		<i class="la la-arrow-left"></i>&nbsp;&nbsp;
																		<span>Back</span>
																	</span>
																</a>
															</div>
															<div class="col-lg-6 m--align-right">
																<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
																	<span>
																		<i class="la la-check"></i>&nbsp;&nbsp;
																		<span>Submit</span>
																	</span>
																</a>
																<a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
																	<span>
																		<span>Save & Continue</span>&nbsp;&nbsp;
																		<i class="la la-arrow-right"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Actions -->
											</form>
										</div>

										<!--end: Form Wizard Form-->
									</div>
								</div>
							</div>

							<!--end: Form Wizard-->






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
