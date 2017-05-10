<nav class="sidebar-menu slide-from-left">
	<div class="nano">
		<div class="content">
			<nav class="responsive-menu">
				<ul>
					<li><a href="/myanmar">ပင္မစာမ်က္ႏွာ</a></li>
					<li><a href="<?php echo url(); ?>/aboutusmyanmar">infolink အ​ေၾကာင္​း</a></li>
					<li class="menu-item-has-children"><a href="#">Projects</a>
						<ul class="sub-menu">
							@foreach($categorys as $category)
										@if(count($category->posts)>0)
											<li class="menu-item-has-children"><a href="#">{{ $category->mname }}</span></a>
											@foreach($category->posts as $post)
													<ul class="sub-menu">
														<li><a href="">{{ $post->mname }}</a></li>
													</ul>
											@endforeach
											</li>
										@else
											<li><a href="#">{{ $category->mname }}</a></li>
										@endif
									@endforeach
							
						</ul>
					</li>
					<li><a href="<?php echo url(); ?>/servicesmyanmar"> ဝန္​​ေဆာင္​မႈ​မ်ား</a></li>
					
					<li><a href="<?php echo url(); ?>/contactusmyanmar">ဆက္​သြယ္​ရန္</a></li>
					<li class="menu-item-has-children navbutton-myanmar"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ျမန္မာ</a>
						<ul class="sub-menu">
							<li class="navbutton-english"><a href="<?php echo url(); ?>/en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English</a></li>
							<li class="navbutton-myanmar"><a href="<?php echo url(); ?>/mn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ျမန္မာ</a></li>
						</ul>		
					</li>
				</ul>
			</nav>
			<div class="company-info">
				<img src="<?php echo url(); ?>/images/logo_black.png" alt="">
				<div class="line-dec"></div>
				<p>infolink IT Solution</p>
				<ul class="contact-list">
						<li><span>Phone:</span> +95 09 256268077</li>
							<li><span>Address:</span> 2A. 312, Muditar Housing II, Insein, Yangon, Myanmar </li>
							<li><span>Email:</span> <a href="#">aungtnaing82@gmail.com</a></li>
							<li><span>Website:</span> <a href="#">www.infolink.rocks</a></li>
				</ul>
				<!-- <ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-behance"></i></a></li>
				</ul> -->
			</div>
		</div>
	</div>
</nav>