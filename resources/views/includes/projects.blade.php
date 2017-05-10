<section class="our-projects">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading-left black-bg text-left">
					<img src="assets/images/icon_big.png" alt="">
					<h2>Our <em>Popular Projects</em></h2>
					<p>Here are some of <span>our projects</span> we have finished.</p>
					<div class="accent-button">
						<a href="#">View All Projects</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="projects-items">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="owl-projects" class="owl-carousel owl-theme">
					
				@foreach($populars as $popular)
					<div class="item">
						<div class="project-item">
							<div class="thumb">
								<div class="image">
									<a href=""><img src="{{ $popular->photourl2 }}" alt=""></a>
								</div>
							</div>
							<a href=""><h4>{{ $popular->name }}</h4></a>
							<span>{{ $popular->category->name }}</span>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="owl-navigation hidden-sm hidden-xs">
			<a class="btn prev fa fa-angle-left"></a>
			<a class="btn next fa fa-angle-right"></a>
		</div>
	</div>
</div>
