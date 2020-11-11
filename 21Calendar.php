<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a1381bb91e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Kyosuke's Calendar</title>
</head>
<style>
body {
  height: 100vh;
  /* background-image: linear-gradient(135deg, #fff 30%, #eee 80%); */
  overflow: hidden;
}

.card {
  box-shadow: 0px 0px 15px #555;
  opacity: .5;
  backdrop-filter: blur(50px);
}

.item {
  position: relative;
  opacity: 1;
}

.overlay {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  background: rgba(0, 0, 0, 0.4);
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: #fff;
  opacity: 1;
}
thead tr {
  background: #333;
  height: 50px;
  color: #fff;
}

tbody tr {
  background: #ddd;
}

tbody td {
  font-size: 20px;
  height: 12%;
  color: #666;
}

tbody td:nth-child(6n+1) {
  background: #fcc;
  color: #f77;
}

thead td:nth-child(6n+1) {
  background: rgb(131, 18, 18);
}

.today {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #ccc;
  color: #eee;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: #fff;
  background: rgb(124, 246, 255);
  box-shadow: 0 0 20px #fff;
  text-shadow: 0 0 10px rgb(50, 111, 116);
  /* opacity: .3; */
}

.pmonth,
.nmonth {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #ccc;
  color: #eee;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

#pick {
  width: 300%;
}

.sday {
  color: #f33 !important;
  background: #ffa !important;
  box-shadow: 0 0 20px #ffd;
}

.sign {
  bottom: 10%;
  left: 0;
  right: 0;
}

.f1 {
  right: 80%;
  animation: f1 1.5s forwards;
}

.f2 {
  left: 75%;
  animation: f2 1.5s .2s forwards;
}

.f3 {
  right: 30%;
  animation: f3 1.5s .4s forwards;
}

.f4 {
  left: 20%;
  animation: f4 1.5s .3s forwards;
}

.f5 {
  right: 50%;
  animation: f5 1.5s .5s forwards;
}

.f1,
.f2,
.f3,
.f4,
.f5 {
  bottom: -100%;
  width: 10%;
}

@media screen and (min-width: 1500px) {
  table {
    height: 80vh;
  }

  .alert {
    display: none;
    top: 3%;
    right: 0%;
    opacity: .9;
    z-index: 10;
  }

  .btn2 {
    display: none;
  }

  .carousel-control-prev {
    left: -5%;
    width: 5%;
    flex-direction: column;
  }

  .carousel-control-next {
    right: -5%;
    width: 5%;
    flex-direction: column;
  }

  .btn2-p {
    left: -8%;
    width: 3%;
  }

  .btn2-n {
    right: -8%;
    width: 3%;
  }
}

@media screen and (max-width: 1500px) and (min-width: 768px) {
  table {
    height: 75vh;
  }

  .alert {
    display: none;
    top: 3%;
    right: 0%;
    opacity: .9;
    z-index: 10;
  }

  .btn2 {
    display: none;
  }

  .card-body {
    position: relative;
    padding: 1rem 1rem 3.5rem;
  }

  .carousel-control-prev {
    left: 20%;
    width: 5%;
    top: 95%;
    height: 5%;
  }

  .carousel-control-next {
    right: 20%;
    width: 5%;
    top: 95%;
    height: 5%;
  }

  .d1 {
    margin-left: .5rem;
    margin-bottom: .5rem;
  }

  .d2 {
    margin-right: .5rem;
    margin-bottom: .5rem;
    order: -1;
  }

  .btn2-p {
    left: 5%;
    width: 3%;
  }

  .btn2-n {
    right: 5%;
    width: 3%;
  }
}

@media screen and (max-width: 768px) {
  .sign {
    font-size: .5rem;
    bottom: 0%;
    left: 0;
    right: 0;
  }

  .alert {
    display: none;
    top: 3%;
    right: 0%;
    opacity: .9;
    z-index: 10;
  }

  table {
    height: 45vh;
  }

  .btn1 {
    display: none;
  }

  .card-body {
    position: relative;
    padding: 0;
  }

  .carousel-control-prev {
    left: 15%;
    width: 5%;
    justify-content: center;
  }

  .carousel-control-next {
    right: 15%;
    width: 5%;
    justify-content: center;
  }

  .btn2-p {
    left: 5%;
    width: 3%;
  }

  .btn2-n {
    right: 5%;
    width: 3%;
  }
}

@media screen and (max-height: 700px) {

  .d1,
  .d2 {
    display: none;
  }

  .carousel-control-prev {
    width: 5%;
    bottom: 1%;
    justify-content: flex-end;
  }

  .carousel-control-next {
    width: 5%;
    bottom: 1%;
    justify-content: flex-end;
  }
}
</style>

<body>
  <?php
  //ini_set('display_errors','off');//關閉輸出錯誤訊息
  //定義變數
  //date_default_timezone_set("Asia/Taipei");
  $year = date('Y');
  $month = date('m');
  ?>
  <div class="container-xxl">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="21Calendar.php" target="_self">Kyosuke's Calendar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link align-center" href="21Calendar.php?year=<?php echo $year ?>&month=<?php echo $month ?>">Back to today</a>
            </li>
          </ul>
          <?php
          //定義變數
          $year = isset($_GET['year']) ? $_GET['year'] : date('Y'); //當前年
          $thisMonth = isset($_GET['month']) ? $_GET['month'] : date('m'); //當前月
          $fDate = strtotime("{$year}-{$thisMonth}-1"); //當月一號時間 Y-m-d
          $monthDay = date('t', $fDate); //當月天數28-31
          $startDayWeek = date('w', $fDate); //當月一號是周幾0-6
          $today = date('d', $fDate); //今日日期
          $pDays = date('t', strtotime("{$year}-{$thisMonth}-1 -1 Months")); //上月天數
          $nDays = date('w', strtotime("{$year}-{$thisMonth}-{$monthDay}")); //本月結束是周幾
          $rYear = rand(date('Y'), date('Y') + 1);

          if ($rYear > date('Y')) {
            $rMonth = rand(1, 12);
            $rDay = rand(1, date('t', $rMonth));
          } else {
            $rMonth = rand(date('m'), 12);
            $rDay = rand($today, date('t', $rMonth));
          }

          ?>
          <form class="d-flex" action="21Calendar.php" method="get">
            <input class="form-control mr-2" type="text" name="year" maxlength="4" size="3" placeholder="YYYY" value="<?= date('Y') ?>" required>

            <select class="form-control mr-2" name="month">
              <?php
              for ($i = 1; $i < 13; $i++) {
                if ($i == $thisMonth) {
                  echo "<option value='" . $i . "' selected>" . $i . "月</option>";
                } else {
                  echo "<option value='" . $i . "'>" . $i . "月</option>";
                }
              }
              ?>
            </select>
            <button class="btn btn-outline-secondary" type="submit" value="submit">Search</button>
            <div id="pick" class="pick btn btn-outline-secondary ml-3">Pick good day!</div>
            <script type="text/javascript">
              $(document).ready(function() { //文件準備完畢開始做事
                //做事的位置
                $("#pick").click(function() {
                  $("#alert").toggle();
                })
              })
            </script>
          </form>
        </div>
      </div>
    </nav>
    <?php
    //定義一個月有幾週
    if ($startDayWeek + $monthDay <= 28) {
      $week = 4;
    } elseif ($startDayWeek + $monthDay <= 35) {
      $week = 5;
    } elseif ($startDayWeek + $monthDay > 35 && $startDayWeek + $monthDay < 38) {
      $week = 6;
    }

    //定義跳月計算邏輯
    //下一月
    $nextYear = $year;
    $nextMonth = $thisMonth + 1;
    if ($nextMonth > 12) {
      $nextYear = $year + 1;
      $nextMonth = 1;
    }
    //上一月
    $preYear = $year;
    $preMonth = $thisMonth - 1;
    if ($preMonth < 1) {
      $preYear = $year - 1;
      $preMonth = 12;
    }
    //月份換算英文格式
    $enmonth = [
      '1'  => "January",
      '2'  => "February",
      '3'  => "March",
      '4'  => "April",
      '5'  => "May",
      '6'  => "June",
      '7'  => "July",
      '8'  => "August",
      '9'  => "September",
      '10' => "October",
      '11' => "November",
      '12' => "December"
    ];
    ?>
    <div id="alert" class="alert position-absolute alert-warning alert-dismissible fade show" role="alert">
      <?= "Info：幫您精挑細選了" . $year . "年" . $thisMonth . "月" . $rDay . "日這個特別日子，趕快安排些活動吧！ " ?>
      <br>
      <a class="text-center" href="21Calendar.php?year=<?php echo $rYear ?>&month=<?php echo $rMonth ?>">不喜歡這天？ 點擊這裡找尋新的命定之日！</a>
      <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="item col-md-3 border-right">
          <?php
          switch ($thisMonth) {
            case '1':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/fRwxNmfw/large1.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/YSTGhWYL/small1.jpg'>";
              break;
            case '2':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/sxdh0h2C/large2.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/WzwhWYK0/small2.jpg'>";
              break;
            case '3':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/fyc94R3t/large3.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/KcPk84z4/small3.jpg'>";
              break;
            case '4':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/rwQ5Fsf5/large4.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/9QFqSVc0/small4.jpg'>";
              break;
            case '5':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/DzNsLDkZ/large5.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/QC3FqZ6X/small5.jpg'>";
              break;
            case '6':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/Ls5LqSWw/large6.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/rwnt2bpJ/small6.jpg'>";
              break;
            case '7':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/fL0dKKDv/large7.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/MKtn141S/small7.jpg'>";
              break;
            case '8':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/7P07JmBH/large8.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/wT9tyHy2/small8.jpg'>";
              break;
            case '9':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/ncxm4B5v/large9.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/wjG3GmW4/small9.jpg'>";
              break;
            case '10':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/VLFCD5Q2/large10.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/x1Cc5RPb/small10.jpg'>";
              break;
            case '11':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/zfyHzjb1/large11.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/W4qtL1CN/small11.jpg'>";
              break;
            case '12':
              echo "<img class='d-none d-md-block w-100 h-100' src='https://i.postimg.cc/DZsWswPj/large12.jpg'>
              <img class='md-pic d-black d-md-none w-100' src='https://i.postimg.cc/fL4ywhQx/small12.jpg'>";
              break;
          };
          ?>
          <div class="overlay">
            <div class="syear display-1"><?= $year ?></div>
            <div class="smonth display-6 border-bottom"><?= $enmonth[$thisMonth] ?></div>
          </div>
          <div class="btn2">
            <a class="carousel-control-prev flex-column text-decoration-none" href="?year=<?php echo $preYear ?>&month=<?php echo $preMonth ?>" role="button" data-slide="prev">
              <p class="fas fa-angle-left"></p>
              <p class="h6 d-none d-sm-block">Month</p>
            </a>
            <a class="btn2-p carousel-control-prev flex-column text-decoration-none" href="?year=<?php echo $year - 1 ?>&month=<?php echo $thisMonth ?>" role="button" data-slide="prev">
              <p class="fas fa-angle-double-left"></p>
              <p class="h6 d-none d-sm-block">Year</p>
            </a>
            <a class="carousel-control-next flex-column text-decoration-none" href="?year=<?php echo $nextYear ?>&month=<?php echo $nextMonth ?>" role="button" data-slide="next">
              <span class="fas fa-angle-right"></span>
              <p class="h6 d-none d-sm-block">Month</p>
            </a>
            <a class="btn2-n carousel-control-next flex-column text-decoration-none" href="?year=<?php echo $year + 1 ?>&month=<?php echo $thisMonth ?>" role="button" data-slide="prev">
              <p class="fas fa-angle-double-right"></p>
              <p class="h6 d-none d-sm-block">Year</p>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-9">
          <div class="card-body">
            <table class="container-fluid text-center text-light">
              <thead>
                <td style="width: 14%;">SUN</td>
                <td style="width: 14%;">MON</td>
                <td style="width: 14%;">TUE</td>
                <td style="width: 14%;">WED</td>
                <td style="width: 14%;">THU</td>
                <td style="width: 14%;">FRI</td>
                <td style="width: 14%;">SAT</td>
              </thead>
              <tbody>
                <?php
                $date = "";
                ?>
                <?php
                include 'holiday.php';
                for ($i = 0; $i < $week; $i++) {
                  echo "<tr>";
                  for ($j = 0; $j < 7; $j++) {
                    echo "<td class='position-relative border border-white'>";
                    $date = '';
                    if ($year == date('Y') && $thisMonth == date('m') && (($i * 7) + ($j + 1)) == date('j')) { //標註今日
                      echo "<div class='date today position-absolute border border-white'>" . date('j') . "</div>";
                    }
                    if ($i == 0 && $j < $startDayWeek) {
                      echo "<div class='date pmonth position-absolute'>" . ($j + 1 - $startDayWeek + $pDays) . "</div>"; //none
                    } else if ((($i * 7) + ($j + 1) - $startDayWeek) > $monthDay) {
                      echo "<div class='date nmonth position-absolute'>" . ($j - $nDays) . "</div>"; //none
                    } else {
                      $date = (($i * 7) + ($j + 1) - $startDayWeek);
                    }
                    echo $date;
                    if($thisMonth==5 && $j==0){
                      if($startDayWeek==0 && $i==1){
                        echo "<br><div class='sign  text-danger position-absolute'>母親節</div>";
                      }elseif($startDayWeek>0 && $i==2){
                        echo "<br><div class='sign  text-danger position-absolute'>母親節</div>";
                      }
                    }elseif(!empty($holiday[$thisMonth . "-" . $date])) {
                      echo "<br><div class='sign  text-danger position-absolute'>" . $holiday[$thisMonth . "-" . $date] . "</div>";
                    };
                    echo "</div>";
                  }
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
            <div class="btn1">
              <a class="carousel-control-prev" href="?year=<?php echo $preYear ?>&month=<?php echo $preMonth ?>" role="button" data-slide="prev">
                <p class="text-dark h2 fas fa-angle-left"></p>
                <p class="d1 text-dark">Month</p>
              </a>
              <a class="btn2-p carousel-control-prev" href="?year=<?php echo $year - 1 ?>&month=<?php echo $thisMonth ?>" role="button" data-slide="prev">
                <p class="text-dark h2 fas fa-angle-double-left"></p>
                <p class="d1 text-dark">Year</p>
              </a>
              <a class="carousel-control-next" href="?year=<?php echo $nextYear ?>&month=<?php echo $nextMonth ?>" role="button" data-slide="next">
                <span class="text-dark h2 fas fa-angle-right"></span>
                <p class="d2 text-dark">Month</p>
              </a>
              <a class="btn2-n carousel-control-next" href="?year=<?php echo $year + 1 ?>&month=<?php echo $thisMonth ?>" role="button" data-slide="prev">
                <p class="text-dark h2 fas fa-angle-double-right"></p>
                <p class="d2 text-dark">Year</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<style>
body{
 <?php
              switch ($thisMonth) {
                case '1':
                  echo "background:url(https://i.postimg.cc/wTvKFPFL/01.jpg);";
                  echo "background-size: cover;";
                  break;
                case '2':
                  echo "background:url(https://i.postimg.cc/9MpSYt7L/02.jpg);";
                  echo "background-size: cover;";
                  break;
                case '3':
                  echo "background:url(https://i.postimg.cc/pLwgWdvJ/03.jpg);";
                  echo "background-size: cover;";
                  break;
                case '4':
                  echo "background:url(https://i.postimg.cc/kg60Pb05/04.jpg);";
                  echo "background-size: cover;";
                  break;
                case '5':
                  echo "background:url(https://i.postimg.cc/pTx4j1p9/05.jpg);";
                  echo "background-size: cover;";
                  break;
                case '6':
                  echo "background:url(https://i.postimg.cc/NFjnJ98B/06.jpg);";
                  echo "background-size: cover;";
                  break;
                case '7':
                  echo "background:url(https://i.postimg.cc/j23FGxvN/07.jpg);";
                  echo "background-size: cover;";
                  break;
                case '8':
                  echo "background:url(https://i.postimg.cc/hP3kYr3w/08.jpg);";
                  echo "background-size: cover;";
                  break;
                case '9':
                  echo "background:url(https://i.postimg.cc/8CLxjVPQ/09.jpg);";
                  echo "background-size: cover;";
                  break;
                case '10':
                  echo "background:url(https://i.postimg.cc/WbtK0Zb7/10.jpg);";
                  echo "background-size: cover;";
                  break;
                case '11':
                  echo "background:url(https://i.postimg.cc/fTFPCbVQ/11.jpg);";
                  echo "background-size: cover;";
                  break;
                case '12':
                  echo "background:url(https://i.postimg.cc/VkCVVctr/12.jpg);";
                  echo "background-size: cover;";
                  break;
              };

?>
}
<?php
    if ($thisMonth == 1) {
      echo "
  @keyframes f1 {
    45%{
      right: 80%;
      bottom: 50%;
      width: 10%;
    }
    50%{
      right: 60%;
      bottom: 20%;
      width: 60%;
      opacity: 1;
    }
    100%{
      right: 60%;
      bottom: 20%;
      width: 60%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f2 {
    45%{
      left: 75%;
      bottom: 10%;
      width: 10%;
    }
    50%{
      left: 55%;
      bottom: -15%;
      width: 50%;
      opacity: 1;
    }
    100%{
      left: 55%;
      bottom: -15%;
      width: 50%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f3 {
    45%{
      right: 30%;
      bottom: 15%;
      width: 10%;
    }
    50%{
      right: 10%;
      bottom: -10%;
      width: 40%;
      opacity: 1;
    }
    100%{
      right: 10%;
      bottom: -10%;
      width: 40%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f4 {
    45%{
      left: 20%;
      bottom: 20%;
      width: 10%;
    }
    50%{
      left: 0%;
      bottom: 10%;
      width: 55%;
      opacity: 1;
    }
    100%{
      left: 0%;
      bottom: 10%;
      width: 55%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f5 {
    45%{
      right: 50%;
      bottom: 50%;
      width: 10%;
    }
    50%{
      right: 30%;
      bottom: 40%;
      width: 50%;
      opacity: 1;
    }
    100%{
      right: 30%;
      bottom: 40%;
      width: 50%;
      opacity: 0;
      display:none;
    }
  }
  
  @media screen and (max-width: 768px) {
    .f1,.f2,.f3,.f4,.f5{
      bottom: -100%;
      width: 10%;
    }
    @keyframes f1 {
    45%{
      right: 80%;
      bottom: 60%;
      width: 10%;
    }
    50%{
      right: 60%;
      bottom: 50%;
      width: 60%;
      opacity: 1;
    }
    100%{
      right: 60%;
      bottom: 50%;
      width: 60%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f2 {
    45%{
      left: 75%;
      bottom: 60%;
      width: 10%;
    }
    50%{
      left: 55%;
      bottom: 50%;
      width: 50%;
      opacity: 1;
    }
    100%{
      left: 55%;
      bottom: 50%;
      width: 50%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f3 {
    45%{
      right: 30%;
      bottom: 65%;
      width: 10%;
    }
    50%{
      right: 10%;
      bottom: 60%;
      width: 40%;
      opacity: 1;
    }
    100%{
      right: 10%;
      bottom: 60%;
      width: 40%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f4 {
    45%{
      left: 20%;
      bottom: 50%;
      width: 10%;
    }
    50%{
      left: 0%;
      bottom: 45%;
      width: 55%;
      opacity: 1;
    }
    100%{
      left: 0%;
      bottom: 45%;
      width: 55%;
      opacity: 0;
      display:none;
    }
  }
  @keyframes f5 {
    45%{
      right: 50%;
      bottom: 50%;
      width: 10%;
    }
    50%{
      right: 10%;
      bottom: 40%;
      width: 70%;
      opacity: 1;
    }
    100%{
      right: 10%;
      bottom: 40%;
      width: 60%;
      opacity: 0;
      display:none;
    }
  }
  }";
    } else {
      echo ".f1,.f2,.f3,.f4,.f5{
        display:none;
      }";
    }
    ?>
  </style>
  <div class="fire">
    <img class="f1 position-absolute" src="https://i.postimg.cc/1XgBtk7Z/firework.png">
    <img class="f2 position-absolute" src="https://i.postimg.cc/d1Cmc2hq/fireworkb.png">
    <img class="f3 position-absolute" src="https://i.postimg.cc/5yqB6f5T/fireworkg.png">
    <img class="f4 position-absolute" src="https://i.postimg.cc/HnC0YrMb/fireworkb2.png">
    <img class="f5 position-absolute" src="https://i.postimg.cc/jqzQ8hVc/fireworkr.png">
  </div>
</body>

</html>