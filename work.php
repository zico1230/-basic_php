<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบงาน4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Prompt', sans-serif;
    }
    </style>
</head>

<body>
    <?php
    $salary = 8000;
     if($salary < 10000){
        $bonus = ($salary * 80) / 100;
    }else if($salary<=50000){
        $bonus =($salary * 50) / 100;
    }else{
        $bonus = ($salary * 30) / 100;
    }

    echo "เงินเดือน = ".number_format($salary)."บาท"."<br>";
    echo "-----------------"."<br>";
    echo "ได้รับโบนัส = ".number_format($bonus,2)."บาท"."<br>";
    echo "รายรับสุทธิ = ".number_format($bonus + $salary,2)."บาท"."<br>";
    echo "คิดภาษี 7% จากรายรับสุทธิ = ".number_format((($bonus + $salary )* 7) /100,)."<br>";
    echo "รายรับหลังหักภาษี = " .number_format( ($salary+$bonus)-((($bonus + $salary )* 7) /100)  ,)."<br>";
   

?>