@extends('layouts.bimahub')

@section('content')
		<div class="page-title parallax parallax2">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">RegTech</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="/" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>RegTech</li>
							</ul><!-- /.breadcrumbs -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.page-title -->

		<section class="flat-about">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="about-us">
							<div class="flat-title style1">
								<h2>RegTech</h2>
							</div>
							<div class="content">
								<div class="motto">
									Significant business opportunities for RegTech arise from the trade-off between the need to stay compliant with ever-changing regulations and the need to cut costs to remain profitable. Accordingly, most of RegTech today centres around solutions for regulated financial institutions, helping them comply more efficiently and with greater certainty with regulations and improve risk management, while cutting costs. While the market is still developing, the lab will identify areas of RegTech for the industry.
									<br>
                                <br>
                                </div>
                            </div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="owl-carousel-1">
							<div class="images-about">
								<img src="{{ asset('bimahub')}}/images/about/slide2.png" alt="">
							</div>
							<div class="images-about">
								<img src="{{ asset('bimahub')}}/images/about/slide3.png" alt="">
							</div>
							<div class="images-about">
								<img src="{{ asset('bimahub')}}/images/about/slide1.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="flat-accordion">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="flat-title style1">
							<h2>The lab will focus on</h2>
							<div class="text left row-inner">
								<h3></h3>
								{{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>--}}
								<ul>
									<li><span class="ion-checkmark-round"></span>Compliance - identifying and keeping track of changes in regulatory requirements, at local or global levels, and solutions for automated real-time monitoring of compliance levels and compliance risk, based on the analysis of operational and other data. This type of RegTech can dramatically reduce the costs of manual compliance procedures. A wave of start-ups and a few tech giants operate in this arena to help institutions keep up-to-date with regulatory requirements, identify potential financial crimes, and manage financial risk.
									</li>
									<li><span class="ion-checkmark-round">Identity Management and Control Another - focuses on counterpart due diligence and KYC procedures, anti-money laundering (AML) controls and fraud detection. For instance, digitalization of client or partner onboarding processes, digitization and sharing of customer/partner information, gathering and analyzing customer and transaction data, and identifying suspicious transactions based on automated triggers and constantly updated customer/partner profiles.</span></li>
									<li><span class="ion-checkmark-round">Risk Management  - focuses on tools to improve the risk management process at financial institutions, by bringing efficiencies to the generation of risk data, risk data aggregation, internal risk reporting, automatically identifying and monitoring risks according to internal methodologies or regulatory definitions, and creating alerts and automated actions triggered when pre-determined risk levels are reached.</span></li>
									<li><span class="ion-checkmark-round">•	Regulatory Reporting - help automate and integrate regulatory reporting requirements to cut costs, and streamline and increase the accuracy and timeliness of reporting, including making real-time reporting possible</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection