<?php

$link = mysqli_connect("localhost",
                           "root",
                          "lict@2",
                           "students");

$query = "INSERT INTO `students`.`users` (
`id` ,
`first_name` ,
`last_name` ,
`phone_number`
)
VALUES (

       ' ".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['phonenumber']."'

                                    );";

mysqli_query($link, $query);
header('location:list.php');
