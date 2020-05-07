@extends('layouts.bimahub')

@section('content')
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">Apply Here</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="#" title="">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								<li>Innovation Bootcamp</li>
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
								<h2>Apply Here</h2>
							</div>
							<div class="content">
							<p>We are not open for applications yet</p>
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
@endsection()