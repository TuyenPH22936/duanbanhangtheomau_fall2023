<?php
function  insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan)
{
   $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
   pdo_execute($sql);
}
function loadAll_binhluan($idpro)
{
   $sql = "SELECT * FROM binhluan where 1";
   if($idpro>0)
   $sql.=" AND idpro ='".$idpro."'";
   $sql.=" order by id desc";
   $dsbl = pdo_query($sql);
   return $dsbl;
   //return co ket qua tra ve
}
function delete_binhluan($id)
{
   $sql = "delete from binhluan where id=".$id;
   pdo_execute($sql);
}
?>