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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Complain-view</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Complain Table</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                </div>
                <div class="card-box">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-12 text-sm-center form-inline">
                                <div class="form-group mr-2">
                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                        <option value="">Show all</option>
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
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Channel Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach ($allData as $key=>$cl)
                            <tbody>
                                <tr>
                                    <td>#{{$key+1}}</td>
                                    <td>{{$cl->name}}</td>
                                    <td>{{$cl['channel']['title']}}</td>
                                    <td>{{$cl->mobile}}</td>
                                    <td>{{$cl->email}}</td>
                                    <td>{{$cl->subject}}</td>
                                    <td>
                                        <a href="{{route('client.detail',$cl->id)}}" class="btn btn-xs btn-primary"><i class="fe-eye"></i></a>
                                        <button type="button" value="{{$cl->id}}" class="btn  btn-xs btn-danger deletebtn"><i class="fe-x"></i></button>
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
    @include('backend.code-section.modal.others.delete')
</div>

@endsection

@section('scripts')      

@include('backend.code-section.ajax-script.others.all')

@endsection