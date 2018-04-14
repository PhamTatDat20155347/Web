@extends('layout_recruiter.master_recruiter')
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Sửa
                            <small>Bài Post</small>
                        </h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                     
                        <form action="Recruiter/UpdatePost/{{$post->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                    <ul> 
                                        <li>{{$err}}</br></li>
                                    </ul>
                                      
                                    @endforeach
                                </div>
                            @endif
                             @if(Session::has('thanhcong'))
                             <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                            @endif
                            @if(Session::has('loi'))
                                <div class="alert alert-danger">
                                    {{Session::get('loi')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Tên công ty:</label>
                                <input class="form-control" name="congty" placeholder="Nhập tên công ty" value="{{$post->congty}}" />
                            </div>
                            <div class="form-group">
                                <label>Title:</label>
                                <input class="form-control" name="title" placeholder="" value="{{$post->title}}" />
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <input class="form-control" name="description" placeholder="" value="{{$post->description}}"/>
                            </div>
                        
                            <div class="form-group">
                                <label>Content</label>
                                <input class="form-control" name="content" placeholder="" value="{{$post->content}}" />
                            </div>
                            <div class="form-group">
                                <label>keyword</label>
                                <input type="text" class="form-control"  name="keyword" value="{{$post->keywork}}">
                            </div>
                            <div class="form-group">
                                <label>Category_id</label>
                                <input type="text" class="form-control"  name="category_id" value="{{$post->category_id}}">
                            </div>
                           
                            <button type="submit" class="btn btn-success">Sửa</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        <form>
                    </div>
                </div>
@endsection