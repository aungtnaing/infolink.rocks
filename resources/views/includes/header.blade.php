	<header class="site-header">
		<div id="main-header" class="main-header header-sticky">
			<div class="inner-header container clearfix">
				<div class="logo">
					<a href="/"></a>
				</div>
				<!-- <div><img src="images//home/kyaw/Desktop/17439700_10155277754424474_2065623912_n.png"></div> -->
				<br>
				
					<div class="header-right-toggle pull-right">
						<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
					</div>
				<div class="navbar text-right hidden-xs hidden-sm">
					

					<div class="navbar-collapse collapse">
						<!-- Right nav -->
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">HOME</a></li>
							<li><a href="<?php echo url(); ?>/aboutus">ABOUT US</a></li>
							<li><a href="">PROJECTS <span class="caret"></span></a>
								<ul class="dropdown-menu">
									@foreach($categorys as $category)
												@if(count($category->posts)>0)
													<li><a href="#">{{ $category->name }}<span class="caret"></span></a>
													<ul class="dropdown-menu">
													@foreach($category->posts as $post)
															
																<li><a href="{{ $post->caption1 }}">{{ $post->name }}</a></li>
															
													@endforeach
													</ul>
													</li>
												@else
													<li><a href="#">{{ $category->name }}</a></li>
												@endif
											@endforeach
									
								</ul>
							</li>
							<li><a href="<?php echo url(); ?>/services">SERVICES</a></li>
							<li><a href="<?php echo url(); ?>/contactus">CONTACT US</a></li>
							<li class="navbutton-english"><a href="">English<span class="caret"></a>
									<ul class="dropdown-menu">
										<li class="navbutton-myanmar"><a href="<?php echo url(); ?>/mn">&nbsp;&nbsp;Myanmar</a></li>
										<li class="navbutton-english"><a href="<?php echo url(); ?>/en">&nbsp;&nbsp;English</a></li>
									</ul>
							</li>
							<!-- <li class="side-menu-button"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li> -->
						</ul>

					</div><!--/.nav-collapse -->

				</div>

			</div>
		</div>
	</header>

	<script type="text/javascript">

		$(document).ready(function(){       
			var scroll_start = 0;

			$(document).scroll(function() { 
				scroll_start = $(this).scrollTop();
				if(scroll_start > 0) {
					$(".navbar .nav > li > a").css('color', 'black');
				}
				else
				{
					$(".navbar .nav > li > a").css('color', '#ddd');
				}
			});

		});


	</script>
