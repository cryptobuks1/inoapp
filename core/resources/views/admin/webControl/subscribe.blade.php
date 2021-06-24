@extends('admin')
@section('body')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-info-circle"></i> {{$page_title}}</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url()->current()}}"> {{$page_title}}</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"> {{ $page_title }} </h3>
                
                <div class="tile-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf


                    <div class="form-group">
                        <div class="col-md-12">
                            <h5>Subscribe Section Background Image</h5>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                                     data-trigger="fileinput">
                                    <img style="width: 200px"
                                         src="{{asset('assets/images/subscribe_background.jpg')}}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"
                                     style="max-width: 200px; max-height: 150px"></div>
                                <div>
                                        <span class="btn btn-info btn-file">
                                            <span class="fileinput-new bold uppercase"><i
                                                    class="fa fa-file-image-o"></i> Select image</span>
                                            <span class="fileinput-exists bold uppercase"><i
                                                    class="fa fa-edit"></i> Change</span>
                                            <input type="file" name="image" accept="image/*">
                                        </span>
                                    <a href="#" class="btn btn-danger fileinput-exists bold uppercase"
                                       data-dismiss="fileinput"><i class="fa fa-trash"></i> Remove</a>
                                </div>
                            </div>
                            @if ($errors->has('image'))
                                <div class="error">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                    </div>





                    <div class="form-group">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-send"></i> UPDATE</button>
                        </div>
                    </div>



                    </form>

                </div>
            </div>
        </div>
    </div>

@stop

@section('import-css')
    <link href="{{ asset('assets/admin/css/bootstrap-fileinput.css') }}" rel="stylesheet">
@stop