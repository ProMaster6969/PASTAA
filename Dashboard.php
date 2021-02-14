<html>
<head>
<title>Dashboard</title>
        <link rel="stylesheet" href="dashboar.css" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
</head>
<?php
require_once 'Mapper.php';
include 'header.php';
require 'contactVerify.php';



?>
<body>
    <main>

<h1 style="color:green;margin-left:590px;font-size:60pt;">Dashboard</h1>

<h1 style="color:green;margin-left:720px;margin-top:100px;">UsersList</h1>
<div id="userlist">
<table border="1"style="color:green;margin-left:350px;">

<tr>
    <th>ID</th>
<th>Name</th>
<th>Emaill</th>
<th>Password</th>
<th>Role</th>
<th></th>

</tr>

<?php

$mapperi=new Mapper();
$userat=$mapperi->getAllUsers();
foreach($userat as $user){
    ?>
    <tr>
     <td><?php echo $user['ID'];?></td>
    <td><?php echo $user['name']?></td>
    <td><?php echo $user['email'];?></td>
    <td><?php echo $user['password'];?></td>
    <td><?php echo $user['role'];?></td>
    <td><a href=<?php echo"delete.php?ID=".$user['ID'];?>>Delete</td>
        
    </tr>
    <?php
}
?>


</table>
</div>
	<h1 style="color:green;margin-left:650px;margin-top:100px;">MESSAGES</h1>
<div id="Mesage">
    <table border="1" style="margin-left:600px;color:green;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Message</th>
            <td><a href=<?php echo"deletemessage.php?ID=".$user['ID'];?>>Delete</td>
</tr>
<?php
$map=new Mapper();
$dates=$map->getAllbyContact();
foreach($dates as $d){
    ?>
    <tr>
        <td><?php echo $d['ID'];?></td>
        <td><?php echo $d['name'];?></td>
        <td><?php echo $d['message'];?></td>
        <td><a href=<?php echo"deletemessage.php?ID=".$d['ID'];?>>Delete</td>
        
</tr>
  <?php      
}
?>

   
</table>
</div>


</main>
</body>
<?php
include 'footer.php';
?>

