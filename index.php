<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::การทำงานกับฟอร์ม::</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

<style type="text/css">
    body{
        font-family:'Kanit',sans-serif
    }
</style>

</head>
<body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<form name="form1" action="#" method="post" enctype="multipart/form-data">
<div class="container">
  <div class="row">
    <div class="col">
      <label class="form-label">คำนำหน้าชื่อ</label>
      <select class="form-select" aria-label="Default select example">
  <option selected>เลือกคำนำหน้าชื่อ</option>
  <option value="1">นาย</option>
  <option value="2">นาง</option>
  <option value="3">นางสาว</option>
</select>
    </div>
    <div class="col">
<label class="form-label">ชื่อ</label>
<input type="text" class="form-control" placeholder="ใส่ชื่อ">
    </div>
    <div class="col">
    <label class="form-label">นามสกุล</label>
    <input type="text" class="form-control" placeholder="ใส่นามสกุล">
    </div>
  </div>
</div>
</form>
</body>
</html>