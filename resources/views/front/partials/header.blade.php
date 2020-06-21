<header>		
		<div class="container">
			<a class="logo" href="{{ route('front.home') }}">
			<img src="/storage/{{ setting('logo') }}" alt="Logo">
			</a>
			
			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form action="{{ route('front.search') }}">
					<input type="text" name="q" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div><!-- src-form -->
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				@foreach($categories as $category)
					@if(count($category->children) > 0)
						<li class="drop-down"><a href="{{ route('front.home', ['category' => $category->id]) }}">{{ $category->name }}<i class="ion-arrow-down-b"></i></a>
							<ul class="drop-down-menu drop-down-inner">
								@foreach($category->children as $child)
									<li><a href="{{ route('front.home', ['category' => $child->id]) }}">{{ $child->name }}</a></li>
								@endforeach
							</ul>
						</li>
					@else
						<li><a href="{{ route('front.home', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
					@endif
				@endforeach

				<!-- <li><a href="02_archive-page.html">NEWS</a></li>
				<li class="drop-down"><a href="03_single-post.html">GUIDES & ANALYTICS<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="#">PAGE 1</a></li>
						<li><a href="#">PAGE 2</a></li>
					</ul>
				</li>
				<li><a href="04_FAQS.html">EVENTS</a></li>
				<li><a href="05_FAQS-single.html">EXPLAINED</a></li>
				<li><a href="06_contact-us.html">ICON CLAENDER</a></li> -->
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>