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
                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                        </ol>
                    </div>
                    <h4 class="page-title"><br/></h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">

            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
                <div class="modal-header bg-success">
                    <h4 class="modal-title" id="myCenterModalLabel">Edit Channel</h4>
                </div>
                <div class="card-box">
                <form action="{{route('update',$editData->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                               <label>Title</label>
                               <input type="text" name="title" id="title" value="{{$editData->title}}" placeholder="Channel Name" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                               <label>Description</label>
                               <input type="text" name="description" id="description" value="{{$editData->description}}" placeholder="Description" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" id="author" value="{{$editData->author}}" placeholder="Description" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" id="link" value="{{$editData->link}}" placeholder="m3u8 link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-3">
                            <img id="showImage" src="{{ (!empty($editData->image)) ? url('backend/all-images/web/channel/'.$editData->image): url('backend/all-images/others/default/cost.png') }}" alt="image" class="img-fluid avatar-lg rounded"/><br/>
                            <span class="badge rounded-pill"> <input class="avatar-ms" type="file" name="image" id="image"> </span>
                        </div>


                        <div class="col-sm-12 col-md-12">
                           <div class="text-right">
                            <input type="submit" class="btn btn-success waves-effect waves-light" value="Update">
                           </div>
                        </div>
                    </form>
                       </div>
                </div> <!-- end card-box -->
                <div class="col-lg-2">
                </div>
            </div><!-- end col -->
        </div>
</div>
    <script type="text/javascript">

       @include('backend.code-section.ajax-script.image.show')
            
    </script>
@endsection
