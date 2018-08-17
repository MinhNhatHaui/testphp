@extends('layouts.app')
@section('content')
    <form action="{{route('lecturers.create')}}" method="POST" style="padding-top: 10px" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid ">
            <div class="form-group col-md-2">
                <label for="inputEmail4">Mã giảng viên</label>
                <input type="text" name="code" class="form-control" value="{{$lecturer->code}}">
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail4">Tên giảng viên</label>
                <input type="text" name="name" class="form-control" id="inputEmail4" value="{{$lecturer->name}}
                        ">
            </div>
            <div class="form-group col-md-2">
                <label for="">Giới tính</label>
                <div class="input-group">
                    <input type="radio" @if($lecturer->gender == 'nam')
                    checked
                            @endif
                    > Nam
                    <input type="radio" @if($lecturer->gender == 'nữ')
                    checked
                            @endif
                    > Nữ
                </div>
            </div>
            <div class="col-md-3">
                <label for="">Ngày sinh</label>
                <input type="date" name="dob" class="input-group" VALUE="{{$lecturer->dob}}">
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-md-3">
                <label for="">Hình ảnh</label>
                <input type="file" name="image">

            </div>

            @if($lecturer->image != null)
                <div class="col-md-12">
                    <br>
                    <img width="90px" class="img-thumbnail" src="/storage/{{$lecturer->image}}" alt="{{$lecturer->name}}">
                </div>
            @endif
        </div>
        <br>
        <div class="container-fluid">

        </div>

        <br>
        <div class="container-fluid">
            <div class="col-md-12">
                <label for="">Số điện thoại</label>
                <input type="tel" name="phone" class="input-group" value="{{$lecturer->phone}}">
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="col-md-12">
                <label for="">Địa chỉ</label>
                <textarea name="address" class="input-group" rows="2" style="width: 100%">{{$lecturer->address}}</textarea>
            </div>
        </div>
        <br>
        <div style="float:right;">
            <a class="btn btn-primary" href="{{ route('lecturers.index') }}"> Go back</a>
            <button style="margin-right:  30px;" type="submit" class="btn btn-info">Thêm giảng viên</button>
        </div>
    </form>
@endsection