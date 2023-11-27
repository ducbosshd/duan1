<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "global.php";
include "view/header.php";


if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            include "view/sanpham.php";
            break;
        case "sanphamct":
            include "view/chitietSP.php";
            break;
        case "dangky":
            unset($_SESSION['taikhoan']);
            unset($_SESSION['matkhau']);
            unset($_SESSION['tenKH']);
            unset($_SESSION['sdtKH']);
            unset($_SESSION['ngaysinhKH']);
            
            if (isset($_POST["dangkyTK"])) {
                include "model/validate.php";        
 
                if (!isset($_SESSION['taikhoan']) && 
                    !isset($_SESSION['matkhau']) && 
                    !isset($_SESSION['tenKH']) && 
                    !isset($_SESSION['sdtKH']) && 
                    !isset($_SESSION['ngaysinhKH'])) {
                    
                    if(empty(check_email($taikhoan))){
                        insert_taikhoan($taikhoan, $matkhau, $tenKH, $sdtKH, $ngaysinhKH);
                        
                        $_SESSION['taikhoan'] = $taikhoan;
                        $_SESSION['thanhcong'] = true ;
                        header("Location: trangchu.php?act=dangnhap");
                        exit();
                    } else {
                        $_SESSION['taikhoan'] = "Tài khoản đã tồn tại!!! Vui lòng nhập tài khoản khác...";
                    }
                }
            }
            include "view/login/dangky.php";
            break;       
        case "dangnhap": 
            if(isset($_POST['dangnhap'])){
                $email = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $taikhoan = check_user( $email,$matkhau);
                if(is_array($taikhoan)){
                $_SESSION['taikhoan'] = $taikhoan;
                header('location:trangchu.php');
                exit;
                }else{
                    $thongbao = "Tài Khoản không tồn tại";
                }       
            }
            include "view/login/dangnhap.php";          
            break;
        case "dangxuat":
            session_unset();
            header('location:trangchu.php');
            break;    
        case "quenmk":
            include "view/login/quenmk.php";
            break;
    }
}else{
    include "view/home.php";
}
include "view/footter.php";
?>