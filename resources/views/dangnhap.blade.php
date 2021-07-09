<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  @if(Session::has('nhanvien') !=null)
  <h2>{{ Session::get('nhanvien')[0]->manv }}</h2>
  @endif
  <form method="POST" action="{{ route('kiemtra') }}">
    @csrf
    <div class="form-group">
      <label for="">Đăng nhập</label>
      <input type="text" name="taikhoan" id="taikhoan" class="form-control" placeholder="Mã Số Nhân Viên" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group">
      <label for="">Mật khẩu</label>
      <input type="password" name="matkhau" id="matkhau" class="form-control" placeholder="Mật khẩu" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <input type="submit" value="Thêm">
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>