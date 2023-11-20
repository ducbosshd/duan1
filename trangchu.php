<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "global.php";
include "view/header.php";

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                $keyw = $_POST['keyword'];
            }else{
                $keyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
            }else{
                $iddm=0;
            }
            $dssp=loadall_sanpham($keyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if(isset($_POST['guibinhluan'])){
                insert_binhluan($_POST['idpro'],$_POST['noidung']);
            }
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                $sp = loadone_sanpham($_GET['idsp']);
                $sp_cungloai = loadsp_cungloai($_GET['idsp'], $sp['iddm']);
                $binhluan = load_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            }else{
                include "view/home.php";
            }
            break;
        case "dangky":
            if(isset($_POST['dangky']) && ($_POST['dangky']!="")){
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email,$user,$pass);
                $thongbao = "Chúc mừng bạn đã đăng kí thành công!!!";
            }
            include "view/login/dangky.php";
            break;
        case "dangnhap":
            if(isset($_POST['dangnhap'])){
                $thongbao = dangnhap($_POST['user'], $_POST['pass']);
                include "view/home.php";
            }
            break;
        case "dangxuat":
            dangxuat();
            include "view/home.php";
            break;    
        case "quenmk":
            if(isset($_POST['guiemail'])){
                $email = $_POST['email'];
                $guimail = sendMail($email);
            }
            include "view/login/quenmk.php";
            break;
    }
}else{
    include "view/home.php";
}
include "view/footter.php";
?>
