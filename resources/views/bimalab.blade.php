@extends('layouts.bimahub')
@section('content')
<div class="page-title parallax parallax2">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">Bimalab</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="/" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>About Bimalab</li>
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
								<h2>Bimalab</h2>
							</div>
							<div class="content">
								<div class="motto">
                                    BimaLab is an insurance innovation hub that aims to harness innovation that will create synergies and efficiencies within the insurance sector with the purpose of financial inclusion and enhanced access to insurance products and services.
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
							<h2>More info</h2>
                            <p>This platform attracts, inspires and organizes key players and disruptors across financial industry and technologies to collaborate on ground breaking, innovative insurance products and services – revolutionizing the future of insurance in Kenya.
                                The Lab is established by the Insurance Regulatory Authority (IRA) which is mandated to develop the insurance industry. The Authority’s strategic plan is centred on policy and market development for inclusion and enhanced access to insurance products and services
                                Harnessing technology is one of the levers IRA aims to use to deliver our mandate of increasing insurance penetration in the Kenya. The insurance industry has been slow to innovate compared to the rest of the financial sector and IRA is positioning itself to lead and expedite innovation in the region in this regard.
                            </p>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection