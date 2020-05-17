<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">NEWS</h2>
                                    @if(\Request::route()->getName() != 'news.index')
                                        <a href="{{ route('news.index') }}" class="btn btn-success">All</a>
                                    @endif
                                    <a href="{{ route('news.create') }}" class="btn btn-success">Create</a>
                                </div>
                            </div>
                            
                        </div>

@if(\Session::get('success_message'))
<div class="row mt-4">
    <div class="col-12">
        <div class="alert alert-success">{{ \Session::get('success_message') }}</div>
    </div>
</div>
@endif