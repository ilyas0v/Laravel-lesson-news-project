@extends('front.layouts.default')

@section('content')

<section class="ptb-0">
		<div class="mb-30 brdr-ash-1 opacty-5"></div>
		<div class="container">
			<a class="mt-10" href="{{ route('front.home') }}"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
			<a class="mt-10 color-ash" href="#">{{ $news->title }}</a>
		</div><!-- container -->
	</section>
	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12">
					<img src="/storage/news/{{ $news->image }}" alt="">
					<h3 class="mt-30"><b>{{ $news->title }}</b></h3>
					<ul class="list-li-mr-20 mtb-15">
						<li>{{ $news->created_at }}</li>
						<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>{{ $news->category ? $news->category->name : ''}}</li>
						<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>0</li>
					</ul>
					
                    
                    {!! $news->body !!}
                    
					
					<h4 class="p-title mt-20"><b>03 COMMENTS</b></h4>
					
					<div class="sided-70 mb-40">
					
						<div class="s-left rounded">
							<img src="images/profile-3-120x120.jpg" alt="">
						</div><!-- s-left -->
						
						<div class="s-right ml-100 ml-xs-85">
							<h5><b>Shuhein Chui, </b> <span class="font-8 color-ash">Nov 21, 2017</span></h5>
							<p class="mtb-15">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam.</p>
							<a class="btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5" href="#"><b>LIKE</b></a>
							<a class="btn-brdr-grey btn-b-sm plr-15 mt-5" href="#"><b>REPLY</b></a>
						</div><!-- s-right -->
						
					</div><!-- sided-70 -->
					
					<div class="sided-70 ml-100 ml-xs-20 mb-40">
					
						<div class="s-left rounded">
							<img src="images/profile-1-120x120.jpg" alt="">
						</div><!-- s-left -->
						
						<div class="s-right ml-100 ml-xs-85">
							<h5><b>Shuhein Chui, </b> <span class="font-8 color-ash">Nov 21, 2017</span></h5>
							<p class="mtb-10">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam.</p>
							<a class="btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5" href="#"><b>LIKE</b></a>
							<a class="btn-brdr-grey btn-b-sm plr-15 mt-5" href="#"><b>REPLY</b></a>
						</div><!-- s-right -->
						
					</div><!-- sided-70 -->
					
					<div class="sided-70 mb-50">
					
						<div class="s-left rounded">
							<img src="images/profile-2-120x120.jpg" alt="">
						</div><!-- s-left -->
						
						<div class="s-right ml-100 ml-xs-85">
							<h5><b>Shuhein Chui, </b> <span class="font-8 color-ash">Nov 21, 2017</span></h5>
							<p class="mt-10 mb-15">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam.</p>
							<a class="btn-brdr-grey btn-b-sm plr-15 mr-10" href="#"><b>LIKE</b></a>
							<a class="btn-brdr-grey btn-b-sm plr-15" href="#"><b>REPLY</b></a>
						</div><!-- s-right -->
						
					</div><!-- sided-70 -->
					
					<h4 class="p-title mt-20"><b>LEAVE A COMMENT</b></h4>
					
					<form class="form-block form-plr-15 form-h-45 form-mb-20 form-brdr-lite-white mb-md-50">
						<input type="text" placeholder="Your Name*:">
						<input type="text" placeholder="Your Email*:">
						<input type="text" placeholder="Your Phone*:">
						<textarea class="ptb-10" placeholder="Your Comment"></textarea>
						<button class="btn-fill-primary plr-30" rows="4" cols="50" type="submit"><b>LEAVE A COMMENT</b></button>
					</form>
				</div><!-- col-md-9 -->
				
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section>

@endsection