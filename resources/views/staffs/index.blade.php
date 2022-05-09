<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h1 class="text-center"> </i>Danh sách nhân viên</h1>

                <div class="col-lg-12 mt-6">
                    <form class="navbar-form navbar-left" action="" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-6">

                                <input class="form-control" type="text" placeholder="Nhập mã nhân viên hoặc họ tên" name="search" />
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                @if (Session::has('success'))
                <div class="alert alert-success">{{session::get('success')}}</div>
                @endif
                <a style="float: right;" href="{{route('staffs.create')}}" class="btn btn-success">Thêm nhân viên</a>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr class="text-center">
                            <th>Mã nhân viên</th>
                            <th>Nhóm nhân viên</th>
                            <th>Họ tên</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staffs as $staff)
                        <tr class="text-center">
                            <td>{{ $staff->id }}</td>
                            <td>{{ $staff->staffGroup }}</td>
                            <td>{{ $staff->name }}</td>
                            <td>{{ $staff->gender }}</td>
                            <td>{{ $staff->phone }}</td>
                            <td>
                                <a href="{{ route('staffs.edit',$staff->id )}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('staffs.destroy',$staff->id )}}" style="display:inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Xóa {{$staff->name}} ?')"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="float:right">
                    {{ $staffs->links() }}
                </div>

            </div>
        </div>
    </div>

</body>

</html>