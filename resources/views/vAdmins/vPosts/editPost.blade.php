@extends('layouts.frontAdmins.frontAdmin')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit Post</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                                <li class="breadcrumb-item active">Posting</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title" style="text-align: center">Masukkan Data Admin</h4><br><br>

                            <form action="{{route('updatePost',[$posts->id])}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="title" class="col-md-2 col-form-label">Judul</label>
                                    <div class="col-md-10">
                                        <input name="title" class="form-control" type="text" value="{{$posts->title}}" id="title" required>
                                    </div>
                                </div>

                                {{-- <div class="form-group row">
                                    <label for="category" class="col-md-2 col-form-label">kategori :</label>
                                    <div class="col-md-10">
                                        <select name="category_id" class="form-control">
                                            <option value="" class="disable selected">Pilih Kategori</option>
                                            @foreach ($category as $kategori)
                                                <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tags" class="col-md-2 col-form-label">Tag :</label>
                                    <div class="col-md-10">
                                        <select name="tags[]" multiple="multiple" class="form-control selectpicker" >
                                            @foreach ($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="form-group row">
                                    <label for="content" class="col-md-2 col-form-label">Konten</label>
                                    <div class="col-md-10">
                                        <textarea id="editor" name="content" class="form-control" type="text" value="">{{$posts->content}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                          </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="thumbnail">
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>
                                
                                <div class="btn-group btn-group-example mb-3" role="group">
                                    <button type="submit" class="btn btn-primary w-sm "><i class="mdi mdi-content-save">   Simpan</i></button>
                                    <button type="button" class="btn btn-danger w-sm">
                                        <a href="{{route('posts')}}" style="color: white;text-align: center" >
                                            <i class="mdi mdi-close-circle">   Batal</i>
                                        </a>
                                    </button>
                                    
                                </div>
                            </div>

                            </form>

                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection