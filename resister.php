<?php
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$number =$_REQUEST['number'];
$massage =$_REQUEST['massage'];
if(emapty($name) || emapty($email) || emapty($number) || emapty($massage) )
{
    echo"please fill the all fields";
}
else{
    mail("arvindmca9525@gmail.com","BBCACADEMY Massage",$massage,"Form: $name < $email >");
    echo"<script type='text/javascript'>alert('your massage sent successfully');
    window.history.log(-1);
    </script>
}>   