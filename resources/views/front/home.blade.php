@extends('front.layouts.default')
	
@section('content')	
	<div class="container mt-4 mb-4">


        <div class="row">
            @foreach($news as $n)
                <div class="col-md-4">
                    <a href="{{ route('front.news.detail', $n->id) }}">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="/storage/news/{{ $n->image }}" alt="Card image cap">
                            <div class="card-body p-3">
                                <h4>{{ $n->title }}</h4>
                                <p class="card-text">{{ $n->description }}</p>
                                <p style="font-size:13px;font-weight:bold;">{{ $n->category ? $n->category->name : '' }}</p>
                                <p style="font-size:10px;float:right;">{{ $n->created_at->format('d M, Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

	</div><!-- container -->
	
	
@endsection
