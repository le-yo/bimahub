@extends('layouts.bimahub')

@section('content')
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">EVALUATION CRITERIA</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>EVALUATION CRITERIA</li>
							</ul><!-- /.breadcrumbs -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.page-title -->
			<section class="flat-about style2">
				<div class="container">
					<div class="row">
						<div class="about-us style3">
							<div class="flat-title style1">
								<h2>EVALUATION CRITERIA</h2>
							</div>
							<div class="content">
								<ul>
									<li>Legal Diligence - Applicant has conducted sufficient diligence to understand the potential risks and/or legal and regulatory requirements for deploying the proposed financial product, service or solution;
									</li>
									<li>Mature Development Stage - The proposed product, service or solution is sufficiently developed and mature to be offered to customers in a live setting;
									</li>
									<li>Sufficient Resources - Applicant has sufficient resources to participate in the Sandbox, including resources and expertise to effectively mitigate and control potential risks and losses arising from offering of the product, service or solution;
									</li>
									<li>Clear Business Plan and Exit Strategy - Applicant has defined a clear strategy and business plan for exiting the Sandbox, which includes scenarios for deploying the product, service or solution on a commercial scale in Kenya after successful exit from the Sandbox; and
									</li>
									<li>Fit and Proper Management and Leadership - Applicant is led and managed by persons with credibility and integrity.
									</li>
								</ul>
						</div>
							<!--<div class="bottom">-->
								<!--<div class="btn-more">-->
									<!--<a href="#" title="">READ MORE</a>-->
								<!--</div>-->
							<!--</div>-->
						</div>
						<div class="owl-about">
							<div class="owl-carousel-1 style1">
								<div class="images-about">
									<img src="{{ asset('bimahub')}}/images/about/slide3.png" alt="">
								</div>
								<div class="images-about">
									<img src="{{ asset('bimahub')}}/images/about/slide2.png" alt="">
								</div>
								<div class="images-about">
									<img src="{{ asset('bimahub')}}/images/about/hackathon.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection