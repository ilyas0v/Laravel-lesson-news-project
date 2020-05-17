@extends('admin.layouts.default')


@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        @include('admin.news.header')

                        <!-- TABLE -->

                       <div class="row mt-4">
                           <div class="col-12">
                               <h1>{{ $n->title }}</h1>
                           </div>

                           <div class="col-12">
                                <p>{{ $n->description }}</p>
                           </div>

                           <div class="col-12 mt-2">
                                <p>{{ $n->body }}</p>
                           </div>

                          
                           
                       </div>

                        <!-- END TABLE -->

                    </div>
                </div>
            </div>
@endsection