<?php
if(!empty($_POST['sub'])){
    $nameF=$_POST['FirstName'];
    $nameL=$_POST['LastName'];

    $email=$_POST['EmailID'];
    $con=$_POST['MobileNumber'];
    $gen=$_POST['Gender'];
    $birD=$_POST['BirthDay'];
    $birM=$_POST['BirthdayMonth'];
    $birY=$_POST['BirthdayYear'];

    $add=$_POST['Address'];
    $city=$_POST['City'];
    $pin=$_POST['PinCode'];
    $state=$_POST['State'];
    $country=$_POST['Country'];

    $hobbieD=$_POST['HobbyDrawing'];
    $hobbieS=$_POST['HobbySinging'];
    $hobbieDa=$_POST['HobbyDancing'];
    $hobbieC=$_POST['HobbyCooking'];
    $hobbieO=$_POST['Other_Hobby'];

    $qh=$_POST['HighSchool'];
    $qhs=$_POST['HigherSchool'];
    $qg=$_POST['Graduation'];
    $qpg=$_POST['PostGraduation'];
    $qphd=$_POST['Phd'];

    $ca=$_POST['CourseBCA'];
    $cb=$_POST['CourseBCom'];
    $cc=$_POST['CourseBSc'];
    $cd=$_POST['CourseBTech'];
    $ce=$_POST['CourseBA'];
    $cf=$_POST['CourseMCA'];
    $cg=$_POST['CourseMCom'];
    $ch=$_POST['CourseMSc'];
    $ci=$_POST['CourseMA'];
    
    require("fpdf.php");
    $pdf= new FPDF();
    $pdf-> AddPage();
    $pdf-> SetFont("Arial","",13);
    $pdf-> Cell(0,10,"Student Registration Details",1,1,'C');
    $pdf-> Cell(0,10,"Full Name: $nameF $nameL",1,1,'L');
    $pdf-> Cell(0,10,"Email ID: $email",1,1,'L');
    $pdf-> Cell(0,10,"Contact Number: $con",1,1,'L');
    $pdf-> Cell(0,10,"Gender: $gen",1,1,'L');
    $pdf-> Cell(0,10,"Date of birth: $birD/$birM/$birY",1,1,'L');
    $pdf-> Cell(0,10,"Address: $add",1,1,'L');
    $pdf-> Cell(0,10,"City: $city",1,1,'L');
    $pdf-> Cell(0,10,"State: $state",1,1,'L');
    $pdf-> Cell(0,10,"Pin Code: $pin",1,1,'L');
    $pdf-> Cell(0,10,"Country: $country",1,1,'L');
    $pdf-> Cell(0,10,"Hobbies: $hobbieD $hobbieC $hobbieDa $hobbieS $hobbieO",1,1,'L');
    $pdf-> Cell(0,10,"Highest Qualification: $qh  $qhs  $qg  $qpg  $qphd",1,1,'L');
    $pdf-> Cell(0,10,"Course Applied For: $ca $cb $cc $cd $ce $cf $cg $ch $ci",1,1,'L');

    $pdf->output();
    $file= confirmation.'.pdf'; //to download pdf when form submitted
    $pdf->output($file,'D');

}

?>