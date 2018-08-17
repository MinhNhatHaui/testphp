@extends('user.homepage')
@section('content')
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="storage/{{$data->image}}" style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-white">
                            <h2>{{$data->f_name}} {{$data->l_name}}</h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
                        <hr>


                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Cập nhật thông tin</h2>
                    <form action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Ảnh đại diện</label>
                            <input class="input-group" type="file" name="avatar" value="{{$data->image}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tên họ</label>
                            <input class="input-group" type="text" name="f_name" value="{{$data->f_name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tên gọi</label>
                            <input class="input-group" type="text" name="l_name" value="{{$data->l_name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input class="input-group" type="text" name="sdt" value="{{$data->sdt}}">
                        </div>
                        <div class="form-group">
                            <label for="">Ngày sinh</label>
                            <input class="input-group" type="date" name="dob" value="{{$data->dob}}">
                        </div>

                        <div align="center" style="margin-bottom: 10px">
                            <button class="btn btn-light" style="margin-right: 5px">Hủy</button>
                            <button type="submit" class="btn btn-success">Đồng ý</button>
                        </div>
                    </form>
                </div>


                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>

@endsection