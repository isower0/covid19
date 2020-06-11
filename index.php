<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Document</title>
</head>

<body>

    <?php

$covid = file_get_contents("https://covid19.th-stat.com/api/open/today");
$data = json_decode($covid,true);
$covid2 = file_get_contents("https://covid19.th-stat.com/api/open/cases");
$data2= json_decode($covid2,true);

/*echo "<pre>";
print_r($data2);
echo "</pre>";*/
?>
    <div id="wapper">
        <h1>ข้อมูล COVID-19 ประจำวัน</h1>
        <div class="box1 padding">
            <p class="text">ผู้ติดเชื้อ</p>
            <p class="text font"><?php echo $data['Confirmed'];?> คน</p>
            <p class="text">(เพิ่มขึ้น <?php echo $data['NewConfirmed'];?> คน)</p>
        </div>

        <div class="box2 padding">
            <p class="text">หายแล้ว</p>
            <p class="text font"><?php echo $data['Recovered'];?> คน</p>
            <p class="text">(เพิ่มขึ้น <?php echo $data['NewRecovered'];?> คน)</p>

        </div>

        <div class="box3 padding">

            <p class="text">รักษาอยู่ใน รพ.</p>
            <p class="text font"><?php echo $data['Hospitalized'];?> คน</p>

        </div>

        <div class="box4 padding">

            <p class="text">เสียชีวิต</p>
            <p class="text font"><?php echo $data['Deaths'];?> คน</p>
            <p class="text">(เพิ่มขึ้น <?php echo $data['NewDeaths'];?> คน)</p>
        </div>

        <div class="box5">
            <p class="fontf">update เมื่อ <?php echo $data['UpdateDate'];?> </p>
            <p class="fontf">จาก <?php echo $data['Source'];?> </p>
        </div>

 <!-- <?php foreach($data2['Data'] as $key=>$data2) {
                echo $key."=".$data2['Age'], '<br>';
            };?>-->

    </div>

    




</body>

</html>