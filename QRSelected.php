<?php
include ('connection.php');

$action=$_POST['action'];
$termidd=$_POST['accid'];
$xuser=$_POST['username'];
$xpass=$_POST['password'];



if($action=="showupdate"){
            $query1=pg_query("update account SET username='$xuser', userpass='$xpass' where account_id=$termidd");
            $result1=pg_query($query1);
            echo "Information Modified";
          }

$xStudId=$_POST['Student_id'];
$xStudName=$_POST['fullname'];
$xCName=$_POST['CourseName'];
if($action=="showupdate1"){
            $query1=pg_query("update Students a,Stud_details b, Courses c SET a.student_id='$xStudId', a.fullname='xStudName',a.= b.student_id='$xStudId', c.course_name='$xCName' where Student_id=$xStudId");
            $result1=pg_query($query1);
            echo "Information Modified";
          }
?>