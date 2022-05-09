<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3">Chỉnh sửa nhân viên</h1>
        <form method="post" action="{{route('staffs.update',$staff->id)}}">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nhóm nhân viên</label>
                        <select name="staffGroup" class="form-control" placeholder="nhóm nhân viên">
                            <option> Quản Trị hệ thống</option>
                            <option> Quản lý quân sự</option>
                            <option> Lễ Tân</option>
                            <option> Quản lý phòng</option>
                            <option> Quản lý dịch vụ</option>
                        </select> @if ($errors->any())
                        <p style="color:red">{{ $errors->first('staffGroup') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                <label>Số CMND</label>
                <input type="number" name="CMND" class="form-control" placeholder="số CMND" value=" {{ $staff->CMND }}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('CMND') }}</p>
                @endif
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                <label>Họ tên</label>
                <input type="text" name="name" class="form-control" placeholder="họ và tên" value=" {{ $staff->name }}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('name') }}</p>
                @endif
            </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="email" value=" {{ $staff->email }}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('email') }}</p>
                @endif
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                <label>Ngày sinh</label>
                <input type="date" name="birthday" class="form-control" placeholder="ngày sinh" value=" {{$staff->birthday}}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('birthday') }}</p>
                @endif
            </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" placeholder="số điện thoại" value=" {{$staff->phone}}">
                        @if ($errors->any())
                        <p style="color:red">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                <label>Giới tính</label>
                <input type="radio" checked name="gender" value="Nam">Nam
                <input type="radio" name="gender" value="Nữ">Nữ
            </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control" placeholder="địa chỉ" value=" {{ $staff->address }}">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('address') }}</p>
                @endif
            </div>
                </div>
            </div>



    



 

            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </div>
    </form>
    </div>
</body>

</html>