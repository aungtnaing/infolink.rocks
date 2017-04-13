<section id="content">
	<div class="section notopmargin notopborder">
		<div class="container clearfix">
			<div class="heading-block center nomargin">
				<h3>Latest from the Blog</h3>
			</div>
		</div>
	</div>

	<div class="container clear-bottommargin clearfix">
		<div class="row">

			@foreach($latestblogs as $latestblog)
			<div class="col-md-3 col-sm-6 bottommargin">
				<div class="ipost clearfix">
					<div class="entry-image">
						<a href="#"><img class="image_fade" src="{{ $latestblog->photourl2 }}" alt="Image"></a>
					</div>
					<div class="entry-title">
						<h3><a href="blog-single.html">{{ $latestblog->name }}</a></h3>
					</div>
					<ul class="entry-meta clearfix">
						<li><i class="icon-calendar3"></i>{{ $latestblog->created_at }}</li>
						<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
					</ul>
					<div class="entry-content">
						<p><?php echo substr($latestblog->description,0, 70) ?></p>
					</div>
				</div>
			</div>
			@endforeach

		

		

		</div>
	</div>
</section>