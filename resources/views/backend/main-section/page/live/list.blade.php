@extends('backend.main-section.body.main')
@section('main')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Channel-view</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Channel Table</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    <div class="col-lg-12" align="right"> <a href="{{route('live.add')}}" class="btn btn-primary">Add Channel</a> </div>
                </div>
                <div class="card-box">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-12 text-sm-center form-inline">
                                <div class="form-group mr-2">
                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                        <option value="">Show all</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="demo-foo-filtering" class="table table-bordered table-centered mb-0" data-page-size="7">
                            <thead class="thead-light">
                            <tr align="center">
                                <th>Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach ($allData as $key=>$channel)
                            <tbody>
                                <tr align="center">
                                    <td>#{{$key+1}}</td>
                                    <td>
                                        <img src="{{ (!empty($channel->image))? url('backend/all-images/web/channel/'.$channel->image):url('upload/no_image.jpg') }}" style="width: 80px; height: 40px;">
                                    </td>
                                    <td>{{$channel->title}}</td>
                                    <td>{{$channel['user']['name']}}</td>
                                    <td>{{$channel->created_at->format('d-m-Y')}}</td>
                                    <td>
                                        @if($channel->status == '1')
                                        <a href="{{ route('change.status',$channel->id)}}" class="btn btn-xs btn-primary">Active</a>
                                        @else
                                        <a href="{{ route('change.status',$channel->id)}}" class="btn  btn-xs btn-danger">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a type="button" href="{{route('live.edit',$channel->id)}}" class="btn btn-xs btn-primary"><i class="fe-edit"></i></a>
                                        <button type="button" value="{{$channel->id}}" class="btn  btn-xs btn-danger deletebtn"><i class="fe-x"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            <tfoot>
                            <tr class="active">
                                <td colspan="8">
                                    <div class="text-right">
                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


    </div> <!-- container -->
    @include('backend.code-section.modal.live.delete')
</div> 

@endsection

@section('scripts')      

@include('backend.code-section.ajax-script.live.all')

@endsection