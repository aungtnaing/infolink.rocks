	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="about-us">
						<img src="<?php echo url(); ?>/images/logo_black.png" alt="">
						<p>Infolink it solution is a full serviced eCommerce Web App, Company Profiles, Android App, Business-Tire App, Desktop App and Consultant, data collection assessment firm based in Myanmar. The company was established in 2011 by Mr. Aung Thein Naing.</p>
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="our-history">
						<h6>Our History</h6>
						  @foreach($ourhistorys as $ourhistory)
						<div class="history-item">
							<img src="{{ $ourhistory->photourl2 }}" alt="">
							<h4>{{ $ourhistory->created_at->year }}</h4>
							<div class="line-dec"></div>
							<p>{{ $ourhistory->name }}.</p>
						</div>
						@endforeach
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="contact-info">	
						<h6>Contact Info</h6>
						<p>Frienly welcome infolink IT solution.</p>
						<ul class="contact-list">
							<li><span>Phone:</span> +95 09 256268077</li>
							<li><span>Address:</span> 2A. 312, Muditar Housing II, Insein, Yangon, Myanmar </li>
							<li><span>Email:</span> <a href="#">aungtnaing82@gmail.com</a></li>
							<li><span>Website:</span> <a href="#">www.infolink.rocks</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">	
					<div class="copyright-text">
						<p>@ 2016 CocoTemplates. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>