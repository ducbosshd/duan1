<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/hanghoa.php";
include "model/binhluan.php";
include "model/taikhoan.php";
// include "global.php";
include "view/header.php";


if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if(isset($_POST['btnok']) && $_POST['btnok']){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            $dshh = loadall_hh($kyw, 0);
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            if(isset($_POST['thembl'])){
                if(!empty($_POST['binhluan'])){
                    $binhluan = $_POST['binhluan'];
                }
                $iduser = $_SESSION['taikhoan']['id'];
                $ngaybinhluan = date('d/m/Y H:i:s');
                insert_bl($binhluan, $iduser, $id, $ngaybinhluan);
                var_dump($ngaybinhluan);
            }
            $hh = loadone_hh($id);
            $dsha = loadall_hinhanh($id);
            $mausac = loadall_tt_hanghoa($id,1);
            $kichco = loadall_tt_hanghoa($id,2);
            $binhluan = loadall_bl($id);
            $spcl = loadall_hh("", $hh['id_danhmuc']);
            include "view/chitietSP.php";
            break;
        case "dangky":
            unset($_SESSION['email']);
            unset($_SESSION['matkhau']);
            unset($_SESSION['tenKH']);
            unset($_SESSION['sdtKH']);
            unset($_SESSION['ngaysinhKH']);
            
            if (isset($_POST["dangkyTK"])) {
                include "model/validate.php";        
 
                if (!isset($_SESSION['email']) && 
                    !isset($_SESSION['matkhau']) && 
                    !isset($_SESSION['tenKH']) && 
                    !isset($_SESSION['sdtKH']) && 
                    !isset($_SESSION['ngaysinhKH'])) {
                    
                    if(empty(check_email($email))){
                        insert_taikhoan($email, $matkhau, $tenKH, $sdtKH, $ngaysinhKH);
                        
                        $_SESSION['email'] = $email;
                        $_SESSION['thanhcong'] = true ;
                        header("Location: trangchu.php?act=dangnhap");
                        exit();
                    } else {
                        $_SESSION['email'] = "Tài khoản đã tồn tại!!! Vui lòng nhập tài khoản khác...";
                    }
                }
            }
            include "view/login/dangky.php";
            break;       
        case "dangnhap": 
            if(isset($_POST['dangnhap'])){
                $email = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $taikhoan = check_user($email,$matkhau);
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
    
    $dshh = loadtop8_hh();
    $dsdm = loadall_dm();
    include "view/home.php";
}
include "view/footter.php";
?>