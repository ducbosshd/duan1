<?php
    session_start();
    include 'model/pdo.php';
    include 'model/danhmuc.php';
    include 'model/hanghoa.php';
    include 'model/binhluan.php';
    include 'model/taikhoan.php';
    include 'model/giohang.php';
    include 'admin/header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            //danhmuc
            case 'dsdm':
                $dsdm = loadall_dm();
                include 'admin/danhmuc/danhsach.php';
                break;
            case 'themdm':
                if(isset($_POST['luu_dm'])){
                    if(!empty($_POST['tenloai'])){
                        $tenloai = $_POST['tenloai'];
                        if(!empty($_FILES['hinhanh']['name'])){
                            $tagetDir = "img1/";
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
                include 'admin/danhmuc/them.php';
                break;
            case 'suadm':
                if(isset($_GET['id']) && $_GET['id']){
                    $dm = loadone_dm($_GET['id']);
                }
                include 'admin/danhmuc/capnhat.php';
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
            case 'xoadm':
                if(isset($_GET['id']) && $_GET['id']){
                    delete_dm($_GET['id']);
                }
                $dsdm = loadall_dm();
                include 'admin/danhmuc/danhsach.php';
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
                include 'admin/hanghoa/danhsach.php';
                break;
            case 'themhh':
                if(isset($_POST['luu_hh'])){
                    $iddm = $_POST['iddm'];
                    if(!empty($_POST['tenhh'])){
                        $tenhh = $_POST['tenhh'];
                    }else{

                    }
                    if(!empty($_POST['gia'])){
                        $gia = $_POST['gia'];
                    }else{
                        
                    }
                    if(!empty($_FILES['hinhanhchinh']['name'])){
                        $tagetDir = "img1/";
                        $tagetFile = $tagetDir.($_FILES['hinhanhchinh']['name']);
                        if(move_uploaded_file($_FILES['hinhanhchinh']['tmp_name'], $tagetFile)){   
                            $fileImage = $tagetFile;
                        }else{

                        }
                    }else{
                        $fileImage = "";
                    }
                    if(!empty($_FILES['hinhanhphu']['name'])){
                        $files = $_FILES['hinhanhphu'];
                        $length = count($files['name']);
                        $tagetDir = "img1/";
                        $images = [];
                        for($i = 0; $i < $length; $i++){
                            $tagetFile = $tagetDir.$files['name'][$i];
                            if(move_uploaded_file($files['tmp_name'][$i],$tagetFile)){
                                array_push($images,$tagetFile);
                            }
                        }
                    }
                    if(!empty($_POST['mota'])){
                        $mota = $_POST['mota'];
                    }else{
                        
                    }
                    if(!empty($_POST['gt_tt'])){
                        $dsgt_tt = $_POST['gt_tt'];
                    }
                    
                    // 
                    insert_hh($tenhh,$gia, $mota, $iddm);
                    $dshh =loadall_hh("",0);
                    $hh_moi = end($dshh);
                    foreach($dsgt_tt as $gt_tt){
                        insert_gttt_hh($hh_moi['id'],$gt_tt);
                    }
                    if(!empty($fileImage)){
                        insert_ha($hh_moi['id'],$fileImage,0);
                    }
                    if(!empty($images)){
                        foreach($images as $image){
                            insert_ha($hh_moi['id'],$image,1);
                        }
                    }
                    $thongbao = "Thêm sản phẩm thành công";           
                }
                $dsdm = loadall_dm();
                $dshh = loadall_hh("",0);
                $dstt = loadall_thuoctinh();
                include 'admin/hanghoa/them.php';
                break;
            case 'xoahh':
                if(isset($_GET['id']) && $_GET['id']){
                    delete_hh($_GET['id']);
                }
                $dsdm = loadall_dm();
                $dshh = loadall_hh("",0);
                $dstt = loadall_thuoctinh();
                include 'admin/hanghoa/danhsach.php';
                break;
            case 'suahh':
                if(isset($_GET['id']) && $_GET['id']){
                    $id =$_GET['id'];
                    $hh = loadone_hh($id);
                    $ha_dd = load_hinhanh_dd($id); //hình ảnh đại diện
                    $dsha = load_hinhanh($id); //hình ảnh thêm
                }

                $dstt = loadall_thuoctinh();
                $dsdm = loadall_dm();
                include 'admin/hanghoa/capnhat.php';
                break;
            case 'capnhathh':
                if(isset($_POST['luu_hh'])){
                    $id= $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $idha_dd = $_POST['idha_dd'];
                    if(!empty($_POST['tenhh'])){
                        $tenhh = $_POST['tenhh'];
                    }else{

                    }
                    if(!empty($_POST['gia'])){
                        $gia = $_POST['gia'];
                    }else{
                        
                    }
                    if(!empty($_FILES['hinhanhchinh']['name'])){
                        $tagetDir = "img1/";
                        $tagetFile = $tagetDir.($_FILES['hinhanhchinh']['name']);
                        if(move_uploaded_file($_FILES['hinhanhchinh']['tmp_name'], $tagetFile)){   
                            $fileImage = $tagetFile;
                        }else{

                        }
                    }else{
                        $fileImage = "";
                    }
                    if(!empty($_FILES['hinhanhphu']['name'])){
                        $images = $_FILES['hinhanhphu'];
                        $length = count($images['name']);
                        $tagetDir = "img1/";
                        for($i = 0; $i < $length; $i++){
                            $tagetFile = $tagetDir.$images['name'][$i];
                            if(move_uploaded_file($images['tmp_name'][$i],$tagetFile)){
                                insert_ha($id,$tagetFile,1);
                            }
                        }
                    }
                    if(!empty($_POST['mota'])){
                        $mota = $_POST['mota'];
                    }else{
                        
                    }
                    delete_tt_hh($id);
                    $dsgt_tt = $_POST['gt_tt'];
                    foreach($dsgt_tt as $gt_tt){
                        insert_gttt_hh($id,$gt_tt);
                    }
                    update_hh($id,$tenhh,$gia,$mota,$iddm);
                    if(!empty($fileImage)){
                        update_ha_dd($idha_dd,$fileImage);
                    }
                    $thongbao = "Cập nhật thành công";
                    $dsdm = loadall_dm();
                    $dshh = loadall_hh("",0);
                    $dstt = loadall_thuoctinh();
                    include 'admin/hanghoa/danhsach.php';
                }
                
                if(isset($_POST['xoaanh'])){
                    $id= $_POST['id'];
                    $idha= $_POST['id_anh'];
                    delete_ha($idha);
                    $hh = loadone_hh($id);
                    $ha_dd = load_hinhanh_dd($id); //hình ảnh đại diện
                    $dsha = load_hinhanh($id); //hình ảnh thêm
    
                    $dstt = loadall_thuoctinh();
                    $dsdm = loadall_dm();
                    include 'admin/hanghoa/capnhat.php';
                }
                
                break;
            case 'dstk':
                $dstk = loadall_tk();
                include 'admin/taikhoan/dstk.php';
                break;
            case 'hang_tk':
                if(isset($_POST['nangcap'])){
                    $id = $_POST['id'];
                    nangcap_tk($id);
                }
                if(isset($_POST['hacap'])){
                    $id = $_POST['id'];
                    hacap_tk($id);
                }
                header('location: index.php?act=dstk');
                break;
            case 'qldonhang':
                $dsdh = danhsachdonhang();
                include 'admin/donhang/danhsach.php';
                break;
            case 'update_ttdh':
                if(isset($_POST['next'])){
                    $id = $_POST['id'];
                    trangthaidonhang($id);
                }
                if(isset($_POST['thatbai'])){
                    $id = $_POST['id'];
                    donhangthatbai($id);
                }
                header('location: index.php?act=qldonhang');
                break;
            case 'chitiet_DH':
                include 'admin/donhang/chitietdonhang.php';
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
        include 'admin/hanghoa/danhsach.php';
    }
?>