@extends('layouts.bimahub')

@section('content')
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">Bimabox</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>Bimabox</li>
							</ul><!-- /.breadcrumbs -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.page-title -->
			<section class="flat-about style2">
				<div class="container">
					<div class="row">
							<div class="content-inner">
								<div class="one-half">
									<div class="text-tabs">
										<div class="text-content">
											<h3>About BimaBox</h3>
										<p>
											IRA has identified Regulatory Sandbox “BimaBox” as useful regulatory framework which can be employed to create experimental environment where FinTech/InsurTech can test new ideas and innovations in product design, product development and distribution with a leverage to contain the consequences of failure.
											The BimaBox allows businesses to test innovative propositions in the market, with real consumers. The BimaBox will be open to firms that require authorisation and technology businesses.
										</p></div>
										<div class="text-content">
											<h3>The BimaBox seeks to provide firms with:</h3>
											<div class="text-list">
												<div class="image">
													<img src="{{ asset('bimahub')}}/images/bimabox.png" alt="">
												</div>
												<ul>
													<li>
														Controlled test environment for products
													</li>
													<li>
														Reduced time-to-market at potentially lower cost
													</li>
													<li>
														Consumer protection
													</li>
													<li>
														Better access to finance
													</li>
												</ul>
											</div>
										</div>
									</div><!-- /.text-tabs -->
								</div><!-- /.one-half -->
								<div class="one-half">
									<img src="{{ asset('bimahub')}}/images/bimabox-step.png" alt="" style="margin: 20px;">
								</div><!-- /.one-half -->
								<br>
								<br>
								<br>
								<p>IRA will oversee tests using a customised regulatory environment for each test – including safeguards for consumers. BimaBox tests are expected to have a clear objective (e.g. reducing costs to consumers) and to be conducted on a small scale, so firms will test their innovation for limited duration with a limited number of customers.
								</p>
								<div class="clearfix"></div>
							</div><!-- /.content-inner -->
					</div>
				</div>
			</section>
@endsection