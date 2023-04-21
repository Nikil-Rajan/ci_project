<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form action="<?php echo base_url('index/insert_data'); ?>" method="post">
    <label for="">Name</label>
    <input type="text" name="name" id=""><br><br>
    <label for="">Email</label>
    <input type="email" name="email" id=""><br><br>
    <label for="">Phone</label>
    <input type="text" name="phone" id=""><br><br>
    <button type="submit" name="submit">Add Data</button>
    </form><br>
    <a href="<?php echo base_url('view');?>"><button name ="view">View Records</button></a>