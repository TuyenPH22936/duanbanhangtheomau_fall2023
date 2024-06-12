<?php
// them tai khoan
function insert_taikhoan($email, $user, $pass)
{
   $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
   pdo_execute($sql);
}
function checkuser($user,$pass)
{
   $sql = "select * from taikhoan where user ='".$user."' AND pass='".$pass."'";
   $sp = pdo_query_one($sql);
   return $sp;
}
function update_taikhoan($user, $pass, $email, $address, $tel,$id)
{
   $sql = "update taikhoan set user='.$user.',pass='.$pass.',email='.$email.',address='.$address.',tel='.$tel.' where id =".$id;
   pdo_execute($sql);
}
function checkemail($email)
{
   $sql = "select * from taikhoan where email ='".$email."'";
   $sp = pdo_query_one($sql);
   return $sp;
}
function loadAll_taikhoan()
{
   $sql = "SELECT * FROM taikhoan order by id desc";
   $listtaikhoan = pdo_query($sql);
   return $listtaikhoan;
   //return co ket qua tra ve
}