<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
  <title>Kyosuke's Calendar</title>
  <style type="text/css">
    .item {
      position: relative;
    }

    .overlay {
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      background: rgba(0, 0, 0, .4);
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container-xxl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Kyosuke's Calendar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">回今天日期</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">其他查詢</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="YYYYmmdd">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </form>

        </div>
      </div>
    </nav>
    <?php
    //定義變數
    $thisMonth = date('m');
    $monthDay = date('t');
    $fDate = strtotime(date('Y-m-', '1'));
    $startDayWeek = date('w', $fDate);
    $today=date('d');
    $year=date('Y');
    //定義一個月有幾週
    if ($startDayWeek + $monthDay <= 28) {
      $week = 4;
    } elseif ($startDayWeek + $monthDay <= 35) {
      $week = 5;
    } elseif ($startDayWeek + $monthDay > 35 && $startDayWeek + $monthDay < 37) {
      $week = 6;
    }
    //定義跳月計算邏輯
    if($thisMonth>12){
      $year=$year+1;
      $next=
    }
    ?>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="item col-md-3 border-right">
          <img class="d-none d-md-block w-100" src="https://picsum.photos/600/1500/?random=1" alt="...">
          <img class="md-pic d-black d-md-none w-100" src="https://picsum.photos/739/300/?random=1" alt="...">
          <div class="overlay">
            <div class="year"><?= $year?>年</div>
            <div class="month"><?= $thisMonth ?>月<?=$today?>日</div>
          </div>
        </div>

        <div class="col-12 col-md-9">
          <div class="card-body bg-secondary">
            <table class="container-fluid text-center text-light">
              <thead>
                <td>日</td>
                <td>一</td>
                <td>二</td>
                <td>三</td>
                <td>四</td>
                <td>五</td>
                <td>六</td>
              </thead>
              <tbody>
                <?php






                ?>


              </tbody>
          </div>
        </div>
      </div>
    </div>

</body>

</html>