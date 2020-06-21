@extends('admin.layouts.default')


@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        @include('admin.news.header')

                        <!-- FORM -->


                        <div class="row mt-4">
                            <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>News create</strong>

                                            <div>

                                                @if($errors->any())
                                                    <ul class="alert alert-danger">
                                                        @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                @csrf


                                                 <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label">Category</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="category_id" id="select" class="form-control">
                                                            <option value="">Please select</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>




                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Title</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="text-input" name="title" placeholder="" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="description" id="textarea-input" rows="4" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Body</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="body" id="news_body" rows="30" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>



                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Image</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                       <input type="file" name="image">
                                                    </div>
                                                </div>





                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Gallery</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                       <input type="file" name="images[]" multiple>
                                                    </div>
                                                </div>

                                                
                                               
                                               
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label class=" form-control-label">Status</label>
                                                    </div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check">
                                                            <div class="radio">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="radio1" name="status" value="1" class="form-check-input">Active
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="radio2" name="status" value="0" class="form-check-input">Deactive
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row form-group">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Save
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>  
                                                
    
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        

                        <!-- END FORM -->

                    </div>
                </div>
            </div>

@endsection