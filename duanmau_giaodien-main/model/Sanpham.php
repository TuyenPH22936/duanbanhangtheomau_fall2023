<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
   $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
   pdo_execute($sql);
}
function delete_sanpham($id)
{
   $sql = "delete from sanpham where id=" . $id;
   pdo_execute($sql);
}
// load tat ca san pham len trang danh sach admin
function loadAll_sanpham($kyw, $iddm)
{
   //return co ket qua tra ve
   $sql = "select * from sanpham where 1";
   if ($kyw != "") {
      $sql.= " and name like '%" . $kyw . "%'";
   }
   if ($iddm > 0) {
      $sql.= " and iddm ='" . $iddm . "'";
   }
   $sql .= " order by id desc";
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}
//load san len trang chu 
function loadAll_sanpham_home()
{
   //return co ket qua tra ve
   $sql = "select * from sanpham where 1 order by id desc limit 0,9";
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}
function loadOne_sanpham($id)
{
   $sql = "select * from sanpham where id =" . $id;
   $sp = pdo_query_one($sql);
   return $sp;
}
function update_sanpham($tensp, $iddm, $giasp, $hinh, $mota, $id)
{
   if ($hinh != "")
      $sql = "update sanpham set name='.$tensp.',iddm='.$iddm.',price='.$giasp.',img='.$hinh.',mota='.$mota.'where id =" . $id;
   else
      $sql = "update sanpham set name='.$tensp.',iddm='.$iddm.',price='.$giasp.',img='.$hinh.',mota='.$mota.'where id =" . $id;
   pdo_execute($sql);
}
//top 10
function loadAll_sanpham_top10()
{
   //return co ket qua tra ve
   $sql = "select * from sanpham where 1 order by luotxem asc limit 0,10";
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}
function load_sanpham_cungloai($id, $iddm)
{
   $sql = "select * from sanpham where iddm=" . $iddm . " AND id <>" . $id;
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}
function load_ten_dm($iddm)
{
   if ($iddm > 0) {
      $sql = "select * from danhmuc where id =" . $iddm;
      $dm = pdo_query_one($sql);
      extract($dm);
      return $name;
   } else {
      return "";
   }
}
