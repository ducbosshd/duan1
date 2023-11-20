<?php
    include '../mode/pdo.php';
    include '../mode/danhmuc.php';
    include '../mode/hanghoa.php';
    include '../mode/binhluan.php';
    include '../mode/taikhoan.php';
    include 'header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            //danhmuc
            case 'dsdm':
                $dsdm = loadall_dm();
                include './danhmuc/danhsach.php';
                break;
            case 'themdm':
                if(isset($_POST['luu_dm'])){
                    if(!empty($_POST['tenloai'])){
                        $tenloai = $_POST['tenloai'];
                        if(!empty($_FILES['hinhanh']['name'])){
                            $tagetDir = "../img1/";
                            $tagetFile = $tagetDir.($_FILES['hinhanh']['name']);
                            if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $tagetFile)){   
                                $fileImage = $tagetFile;
                            }else{
                                $fileImage = 'Không thể lưu trữ';
                            }
                        }
                        insert_dm($tenloai,$fileImage);
                        $thongbao = 'Thêm thành công';
                    }
                    
                }
                include './danhmuc/them.php';
                break;
            case 'suadm':
                if(isset($_GET['id']) && $_GET['id']){
                    $dm = loadone_dm($_GET['id']);
                }
                include './danhmuc/capnhat.php';
                break;
            case 'capnhatdm':
                if(isset($_POST['luu_dm']) ){
                    if(!empty($_POST['tenloai'])){
                        $tenloai = $_POST['tenloai'];
                        $id = $_POST['id'];
                        if(!empty($_FILES['hinhanh']['name'])){
                            $tagetDir = "../img1/";
                            $tagetFile = $tagetDir.($_FILES['hinhanh']['name']);
                            if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $tagetFile)){   
                                $fileImage = $tagetFile;
                            }else{
    
                            }
                        }else{
                            $fileImage = "";
                        }
                        update_dm($id, $tenloai,$fileImage);
                        $thongbao = 'Cập nhật thành công';
                    }
                    
                }
                // $dsdm = loadall_dm();
                // include './danhmuc/danhsach.php';
            case 'xoadm':
                if(isset($_GET['id']) && $_GET['id']){
                    delete_dm($_GET['id']);
                }
                $dsdm = loadall_dm();
                include './danhmuc/danhsach.php';
                break;
            //hàng hóa
            case 'dshh':
                if(isset($_POST['btnok']) && $_POST['btnok']){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = "";
                    $iddm = 0;
                }
                $dshh = loadall_hh($kyw, $iddm);
                $dsdm = loadall_dm();
                $dstt = loadall_thuoctinh();
                include './hanghoa/danhsach.php';
                break;
            case 'themhh':
                if(isset($_POST['luu_hh']) && $_POST['luu_hh']){
                    $iddm = $_POST['iddm'];
                    if(!empty($_POST['tenhh'])){
                        $tenhh = $_POST['tenhh'];
                    }else{

                    }
                    if(!empty($_POST['gia'])){
                        $gia = $_POST['gia'];
                    }else{
                        
                    }
                    if(!empty($_FILES['hinhanh']['name'])){
                        $tagetDir = "../img1/";
                        $tagetFile = $tagetDir.($_FILES['hinhanh']['name']);
                        if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $tagetFile)){   
                            $fileImage = $tagetFile;
                        }else{

                        }
                    }else{

                    }
                    if(!empty($_POST['mota'])){
                        $mota = $_POST['mota'];
                    }else{
                        
                    }
                    insert_hh($tenhh,$gia,$mota,$fileImage,$iddm);
                    $thongbao = "Thêm thành công";
                }
                $dsdm = loadall_dm();
                include './hanghoa/them.php';
                break;
            case 'xoahh':
                if(isset($_GET['id']) && $_GET['id']){
                    delete_hh($_GET['id']);
                }
                $dsdm = loadall_dm();
                $dshh = loadall_hh("",0);
                include './hanghoa/danhsach.php';
                break;
            case 'suahh':
                if(isset($_GET['id']) && $_GET['id']){
                    $hh = loadone_hh($_GET['id']);
                }
                $dsdm = loadall_dm();
                include './hanghoa/capnhat.php';
                break;
            case 'capnhathh':
                if(isset($_POST['luu_hh']) && $_POST['luu_hh']){
                    $id= $_POST['id'];
                    $iddm = $_POST['iddm'];
                    if(!empty($_POST['tenhh'])){
                        $tenhh = $_POST['tenhh'];
                    }else{

                    }
                    if(!empty($_POST['gia'])){
                        $gia = $_POST['gia'];
                    }else{
                        
                    }
                    if(!empty($_FILES['hinhanh']['name'])){
                        $tagetDir = "../img1/";
                        $tagetFile = $tagetDir.($_FILES['hinhanh']['name']);
                        if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $tagetFile)){   
                            $fileImage = $tagetFile;
                        }else{

                        }
                    }else{
                        $fileImage = "";
                    }
                    if(!empty($_POST['mota'])){
                        $mota = $_POST['mota'];
                    }else{
                        
                    }
                    update_hh($id,$tenhh,$gia,$mota,$fileImage,$iddm);
                    $thongbao = "Cập nhật thành công";
                }
                $dsdm = loadall_dm();
                $dshh = loadall_hh("",0);
                include './hanghoa/danhsach.php';
                break;
            case 'dsha':
                if(isset($_POST['btnok']) && $_POST['btnok']){
                    $idhh = $_POST['idds'];
                }else{
                    $idhh = 0;
                }
                $dshh = loadall_hh("", 0);
                $dsha = loadall_hinhanh($iddm);
                include './hanghoa/hinhanh.php';
                break;
            default:
                # code...
                break;
        }
    }else{
        if(isset($_POST['btnok']) && $_POST['btnok']){
            $kyw = $_POST['kyw'];
            $iddm = $_POST['iddm'];
        }else{
            $kyw = "";
            $iddm = 0;
        }
        $dshh = loadall_hh($kyw, $iddm);
        $dsdm = loadall_dm();
        $dstt = loadall_thuoctinh();
        include './hanghoa/danhsach.php';
    }
?>