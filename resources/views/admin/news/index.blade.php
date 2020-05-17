@extends('admin.layouts.default')


@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        
                        @include('admin.news.header')

                        <!-- TABLE -->

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <td>Image</td>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($news as $n)
                                                <tr>
                                                    <td>{{ $n->id }}</td>
                                                    <td>
                                                        <img src="/storage/news/{{ $n->image }}" alt="" width="200">
                                                    </td>
                                                    <td>{{ $n->title }}</td>
                                                    <td>{{ $n->description }}</td>
                                                    <td class="process">{{ $n->status }}</td>
                                                    <td>{{ $n->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('news.show', $n->id) }}" class="btn btn-primary">Show</a>
                                                        <a href="{{ route('news.edit', $n->id) }}" class="btn btn-secondary">Edit</a>

                                                        <form action="{{ route('news.destroy', $n->id) }}" method="POST" onsubmit="return confirm('Silmek istediyinizden eminsinizmi?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" class="btn btn-danger" value="Delete">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                        <!-- END TABLE -->

                    </div>
                </div>
            </div>
@endsection