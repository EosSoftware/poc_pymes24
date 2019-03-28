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
			<?php include('header_form.php')?>
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
										Solicita tu crédito
									</h3>
								</div>
								<div>


									<span class="m-subheader__daterange">
									Préstamos con tasas desde 8.5% anual

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
																Empresa
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
																Referencias y Banco
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
																Comprobantes
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
																<h3 class="m-form__heading-title">Información Personal</h3>
																<span class="m-form__help" style="color:#4e88f1">Si tu negocio factura como persona moral, ingresa los datos de un socio o representante legal </span>


															</div>


															<div class="form-group m-form__group row">
																<!-- <label class="col-xl-3 col-lg-3 col-form-label"></label> -->
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="*Nombre" value="Marco">
																	<span class="m-form__help">Por favor ingrese su nombre</span>
																</div>
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="Segundo Nombre" value="Ramiro">
																	<span class="m-form__help">Por favor ingrese su segundo Nombre</span>
																</div>
															</div>

															<div class="form-group m-form__group row">
																<!-- <label class="col-xl-3 col-lg-3 col-form-label">Primer Apellido:</label> -->
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="*Primer Apellido" value="Gonzalez">
																	<span class="m-form__help">Por favor ingrese su primer apellido</span>
																</div>
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="*Segundo Apellido" value="Martinez">
																	<span class="m-form__help">Por favor ingrese su segundo apellido</span>
																</div>
															</div>

															<div class="form-group m-form__group row">
																<!-- <label class="col-xl-3 col-lg-3 col-form-label">* Email:</label> -->
																<div class="col-xl-6">
																	<input type="email" name="email" class="form-control m-input" placeholder="*E-mail" value="marco@decoracion.com">
																	<span class="m-form__help">Nunca compartiremos tu e-mail y teléfono con nadie más.</span>
																</div>
																<div class="col-xl-6">
																	<div class="input-group">
																		<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
																		<input type="text" name="phone" class="form-control m-input" placeholder="*Teléfono" value="55 8798 8765">
																	</div>
																	<span class="m-form__help"></span>
																</div>
															</div>

															<div class="form-group m-form__group row">
																<!-- <label class="col-xl-3 col-lg-3 col-form-label">Primer Apellido:</label> -->
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="* Curp" value="AETD760425HMRCDZ03">
																	<span class="m-form__help">Curp</span>
																</div>
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="*R.F.C" value="AETD760425-G6D">
																	<span class="m-form__help">R.F.C</span>
																</div>
															</div>

															<div class="col-lg-6 m-form__group-sub">
																<label class="form-control-label">* Comunicación:</label>
																<div class="m-checkbox-inline">
																	<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																		<input type="checkbox" name="account_communication[]" checked value="email"> Email
																		<span></span>
																	</label>
																	<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																		<input type="checkbox" name="account_communication[]" value="phone"> Phone
																		<span></span>
																	</label>
																	<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																		<input type="checkbox" name="account_communication[]" value="sms"> WhatsApp
																		<span></span>
																	</label>
																</div>
																<span class="m-form__help">Seleccione como le gustaria que lo contactaramos</span>
															</div>


															<div class="m-separator m-separator--dashed m-separator--lg"></div>
															<!--  -->
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Información Financiera</h3>
															</div>
															<div class="form-group m-form__group row">
																<!-- <label class="col-xl-3 col-lg-3 col-form-label">Primer Apellido:</label> -->
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="Ingreso" value="$56,000.00">
																	<span class="m-form__help">Ingreso mensual neto</span>
																</div>
																<div class="col-xl-6">
																	<input type="text" name="name" class="form-control m-input" placeholder="Ingreso" value="$15,000.00">
																	<span class="m-form__help">Otros ingresos comprobables</span>
																</div>
															</div>
															<!--  -->

															<!-- INFORMACION DE LA CUENTA -->

														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Información de la Cuenta
																	<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Informacion con la que ingresaras a tu cuenta CreditoPyme24"></i>
																</h3>
															</div>

															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label"></label>
																	<input type="text" name="account_username" class="form-control m-input" placeholder="* Username" value="Marco">
																	<span class="m-form__help">Tu nombre de usuario para iniciar sesión en tu panel de control</span>
																</div>
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label"></label>
																	<input type="password" name="account_password" class="form-control m-input" placeholder="* Contraseña" value="123456">
																	<span class="m-form__help">Contraseña por favor use letras y al menos un número o símbolo</span>
																</div>
															</div>

															<!-- <div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* Country:</label>
																<div class="col-xl-9 col-lg-9">
																	<select name="country" class="form-control m-input">
																		<option value="">Select</option>
																		<option value="AF">Afghanistan</option>
																		<option value="AX">Åland Islands</option>
																	</select>
																</div>
															</div> -->
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Información de la Empresa</h3>
															</div>

															<div class="form-group m-form__group row">
															<div class="col-lg-12">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="Empresa" value="GlobalTechnology">
																<span class="m-form__help">Nombre de la Empresa</span>
															</div>
															</div>

															<div class="form-group m-form__group row">
															<div class="col-lg-12">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="* Calle y Número exterior" value="Roberto Gayol, Ciudad de México, CDMX ">
																<span class="m-form__help">Dirección de la empresa</span>
															</div>
															</div>
															<div class="form-group m-form__group row">
															<div class="col-lg-4">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="No. Int" value="129">
																<span class="m-form__help">Número interior</span>
															</div>
															<div class="col-lg-2">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="C.P." value="07870">
																<span class="m-form__help">Código Postal</span>
															</div>
															<div class="col-lg-6">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="* Municipio o Delegación" value="Guadalupe Insurgentes ">
																<span class="m-form__help">Municipio o Delegación</span>
															</div>
															</div>

															<div class="form-group m-form__group row">
															<div class="col-lg-5">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="Teléfono Empresa" value="55 8798 2354">
																<span class="m-form__help">Teléfono Empresa</span>
															</div>
															<div class="col-lg-2">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="Extension" value="118">
																<span class="m-form__help">Extensión</span>
															</div>
															<div class="col-lg-5">
																<!-- <label class="form-control-label"></label> -->
																<input type="text" name="account_username" class="form-control m-input" placeholder="Otro Teléfono" value="55 9845 2376">
																<span class="m-form__help">Otro Teléfono</span>
															</div>
														</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-6">
																	<!-- <label class="form-control-label"></label> -->
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Giro de la Empresa" value="Tecnología de Software">
																	<span class="m-form__help">Giro de la empresa</span>
																</div>
																<div class="col-xl-6">
																	<select class="form-control m-input" name="billing_card_exp_month">
																		<option value="">Selecciona una opción</option>
																		<option value="01">1-10</option>
																		<option value="02">11-100</option>
																		<option value="03">más de 100</option>
																	</select>
																	<span class="m-form__help">¿Cuantos trabajan en tu Empresa?</span>
																</div>
															</div>

															<div class="form-group m-form__group row">
															<div class="col-lg-12">
																<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120407.393440909!2d-99.14648109977736!3d19.42402336113157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff404146935f%3A0xd9505f9206a86dff!2sTravel+Viajes+M%C3%A9xico+(Mayorista)!5e0!3m2!1ses-419!2smx!4v1553749399788" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

															</div>
															</div>



														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>

													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_3">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Referencias Personales</h3>
																<label class="form-control-label">Tus referencias sólo serán contactadas para validar tu identidad y en caso de que no podamos contactarte si te retrasas en tus pagos.</label>
															</div>


															<div class="form-group m-form__group row">
																<div class="col-md-12">
																	<label class="form-control-label">Referencia 1</label>
																</div>
																<div class="col-xl-3">
																	<select class="form-control m-input" name="billing_card_exp_month">
																		<option value="">Parentesco</option>
																		<option value="01">Familiar</option>
																		<option value="02">Amigo</option>
																		<option value="03">Conocido</option>
																	</select>
																	<span class="m-form__help"></span>
																</div>
																<div class="col-lg-6">
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Nombre" value="Miguel Lopez Gonzalez">
																	<span class="m-form__help">Nombre de tu Referencia</span>
																</div>
																<div class="col-lg-3">
																	<!-- <label class="form-control-label"></label> -->
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Teléfono " value="55 2376 0934">
																	<span class="m-form__help">Teléfono</span>
																</div>
															</div>

															<div class="form-group m-form__group row">
																<div class="col-md-12">
																	<label class="form-control-label">Referencia 2</label>
																</div>
																<div class="col-xl-3">
																	<select class="form-control m-input" name="billing_card_exp_month">
																		<option value="">Parentesco</option>
																		<option value="01">Familiar</option>
																		<option value="02">Amigo</option>
																		<option value="03">Conocido</option>
																	</select>
																	<span class="m-form__help"></span>
																</div>
																<div class="col-lg-6">
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Nombre" value="Sarahi Martinez Martinez">
																	<span class="m-form__help">Nombre de tu Referencia</span>
																</div>
																<div class="col-lg-3">
																	<!-- <label class="form-control-label"></label> -->
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Teléfono " value="55 2376 0934">
																	<span class="m-form__help">Teléfono</span>
																</div>
															</div>

															<div class="form-group m-form__group row">
																<div class="col-md-12">
																	<label class="form-control-label">Referencia 3</label>
																</div>
																<div class="col-xl-3">
																	<select class="form-control m-input" name="billing_card_exp_month">
																		<option value="">Parentesco</option>
																		<option value="01">Familiar</option>
																		<option value="02">Amigo</option>
																		<option value="03">Conocido</option>
																	</select>
																	<span class="m-form__help"></span>
																</div>
																<div class="col-lg-6">
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Nombre" value="Martin Osorio Gomez">
																	<span class="m-form__help">Nombre de tu Referencia</span>
																</div>
																<div class="col-lg-3">
																	<!-- <label class="form-control-label"></label> -->
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Teléfono " value="55 2376 0934">
																	<span class="m-form__help">Teléfono</span>
																</div>
															</div>

															<div class="m-separator m-separator--dashed m-separator--lg"></div>

															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Datos Bancarios</h3>
																<label class="form-control-label"> Requerimos tus datos bancarios para poder transferirte tu crédito en caso de que sea aprobado.</label>
															</div>

															<div class="form-group m-form__group row">
																<div class="col-lg-12">
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Titular" value="Marco Ramiro Gonzalez Martinez">
																	<span class="m-form__help">Nombre del Titular</span>
																</div>

															</div>

															<div class="form-group m-form__group row">
																<div class="col-xl-4">
																	<select class="form-control m-input" name="billing_card_exp_month">
																		<option value="">Banco</option>
																		<option value="01">Banamex</option>
																		<option value="02">Santander</option>
																		<option value="03">Bancomer</option>
																	</select>
																	<span class="m-form__help"></span>
																</div>
																<div class="col-lg-8">
																	<input type="text" name="account_username" class="form-control m-input" placeholder="Clabe" value="398574638204958374">
																	<span class="m-form__help">Clabe interbancaria</span>
																</div>

															</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>


														<div class="form-group m-form__group row">
															<div class="col-lg-12">
																<!--begin::Form-->
																<form class="m-form m-form--fit m-form--label-align-right">
																	<div class="m-portlet__body">
																		<div class="form-group m-form__group row">
																			<label class="col-form-label col-lg-12 col-sm-12">Carga tu estado de Cuenta
																				<br>
																			<span class="m-form__help">El estado de cuenta no debe ser mayor a 3 Meses</span></label>

																			<div class="col-lg-12 col-md-12 col-sm-12">
																				<div class="m-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
																					<div class="m-dropzone__msg dz-message needsclick">
																						<h3 class="m-dropzone__msg-title">Coloque los archivos aquí o haga clic para subir.</h3>
																						<span class="m-dropzone__msg-desc"><i class="fa fa-files-o" style="font-size: 80px;"></i></span>
																					</div>
																				</div>
																			</div>
																		</div>


																	</div>

																</form>

																<!--end::Form-->

															</div>

														</div>
													</div>

													<!--end: Form Wizard Step 3-->
													</div>

													<!--begin: Form Wizard Step 3-->
													<div class="m-wizard__form-step" id="m_wizard_form_step_4">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Comprobantes</h3>
																<label class="form-control-label"></label>
															</div>
														<div class="form-group m-form__group row">
															<!--begin::Form-->
															<div class="col-lg-6">
																<form class="m-form m-form--fit">
																	<div class="m-portlet__body">
																		<div class="form-group m-form__group row">
																			<label class="col-form-label col-lg-12 col-sm-12">Identificación Frontal
																				<br>
																			<span class="m-form__help">Parte Frontal de tu identificación</span></label>

																			<div class="col-lg-12 col-md-12 col-sm-12">
																				<div class="m-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
																					<div class="m-dropzone__msg dz-message needsclick">
																						<h3 class="m-dropzone__msg-title">Coloque los archivos aquí o haga clic para subir.</h3>
																						<span class="m-dropzone__msg-desc"><i class="fa fa-vcard-o" style="font-size: 80px;"></i></span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
															<!--end::Form-->
															<!--begin::Form-->
															<div class="col-lg-6">
																<form class="m-form m-form--fit">
																	<div class="m-portlet__body">
																		<div class="form-group m-form__group row">
																			<label class="col-form-label col-lg-12 col-sm-12">Identificación Trasera
																				<br>
																			<span class="m-form__help">Parte Trasera de tu identificación</span></label>

																			<div class="col-lg-12 col-md-12 col-sm-12">
																				<div class="m-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
																					<div class="m-dropzone__msg dz-message needsclick">
																						<h3 class="m-dropzone__msg-title">Coloque los archivos aquí o haga clic para subir.</h3>
																						<span class="m-dropzone__msg-desc"><i class="fa fa-vcard-o" style="font-size: 80px;"></i></span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
															<!--end::Form-->
														</div>

														<div class="m-separator m-separator--dashed m-separator--lg"></div>

														<div class="form-group m-form__group row">
															<!--begin::Form-->
															<div class="col-lg-12">
																<form class="m-form m-form--fit">
																	<div class="m-portlet__body">
																		<div class="form-group m-form__group row">
																			<label class="col-form-label col-lg-12 col-sm-12">Comprobante de Domicilio
																				<br>
																			<span class="m-form__help">Comprobante de Domicilio no mayor a 3 Meses</span></label>

																			<div class="col-lg-12 col-md-12 col-sm-12">
																				<div class="m-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
																					<div class="m-dropzone__msg dz-message needsclick">
																						<h3 class="m-dropzone__msg-title">Coloque los archivos aquí o haga clic para subir.</h3>
																						<span class="m-dropzone__msg-desc"><i class="fa fa-file-text-o" style="font-size: 80px;"></i></span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
															<!--end::Form-->
														</div>

														<div class="m-separator m-separator--dashed m-separator--lg"></div>

														<div class="form-group m-form__group row">
															<!--begin::Form-->
															<div class="col-lg-12">
																<form class="m-form m-form--fit">
																	<div class="m-portlet__body">
																		<div class="form-group m-form__group row">
																			<label class="col-form-label col-lg-12 col-sm-12">Acta constitutiva
																				<br>
																			<span class="m-form__help"></span></label>

																			<div class="col-lg-12 col-md-12 col-sm-12">
																				<div class="m-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
																					<div class="m-dropzone__msg dz-message needsclick">
																						<h3 class="m-dropzone__msg-title">Coloque los archivos aquí o haga clic para subir.</h3>
																						<span class="m-dropzone__msg-desc"><i class="fa fa-files-o" style="font-size: 80px;"></i></span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
															<!--end::Form-->
														</div>








													</div>
													</div>

													<!--end: Form Wizard Step 3-->
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
																		<span>Regresar</span>
																	</span>
																</a>
															</div>
															<div class="col-lg-6 m--align-right">
																<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
																	<span>
																		<i class="la la-check"></i>&nbsp;&nbsp;
																		<span>Enviar</span>
																	</span>
																</a>
																<a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
																	<span>
																		<span>Guardar y Continuar</span>&nbsp;&nbsp;
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
								2019 Todos los derechos Reservados ©
								<a href="#" class="m-link">
									CreditoPyme24
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

		<!--begin::Page Scripts -->
		<script src="default/assets/demo/custom/crud/wizard/wizard.js" type="text/javascript"></script>



		<!-- end::Page Loader -->
	</body>
	<!-- end::Body -->
</html>
