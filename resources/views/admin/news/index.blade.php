@extends('admin.layouts.default')


@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">NEWS</h2>
                                </div>
                            </div>
                        </div>

                        <!-- TABLE -->

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Test test</td>
                                                <td>Test test test test</td>
                                                <td class="process">Active</td>
                                                <td>12-03-2020</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        
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