<?php
    function insert_giohang($idsp, $sl,$idkh, $ms, $kc){
        $spc = "INSERT INTO sanphamchon(id_hanghoa, soluong) values ('$idsp','$sl')";
        pdo_execute($spc);
        $id = "SELECT id FROM sanphamchon order by id desc limit 0,1";
        $spc = pdo_query_one($id);
        $id_spc = $spc['id'];
        $mausac = "INSERT INTO thuoctinh_sanphamchon(id_sanphamchon,id_giatrithuoctinh) values ('$id_spc','$ms')";
        pdo_execute($mausac);
        $kichco = "INSERT INTO thuoctinh_sanphamchon(id_sanphamchon,id_giatrithuoctinh) values ('$id_spc','$kc')";
        pdo_execute($kichco);
        $giohang = "INSERT into giohang(id_khachhang, id_spchon) values('$idkh','$id_spc')";
        pdo_execute($giohang);
    }

    function soluong_giohang($idkh){
        $sql = "SELECT id from giohang where id_khachhang =".$idkh;
        $dsid = pdo_query($sql);
        $sl = count($dsid);
        return $sl;
    }

    function load_giohang($id_kh){
        $sql = "SELECT * FROM giohang where id_khachhang=".$id_kh;
        $giohang = pdo_query($sql);
        return $giohang;
    }
    function updateGH($idspc,$soluong){
        $sql = "UPDATE sanphamchon SET soluong = $soluong WHERE id = $idspc";
        pdo_execute($sql);
    }
    function hoantatDH($tenKH,$sdtKH,$diachi,$id_KH,$ghichu,$tinhtrang_TT){
       if($id_KH != ''){ $sql = "INSERT INTO donhang (id_nguoidung,hoten_nn,sdt_nn,diachi_nn,ghichu_nn,tinhtrangthanhtoan) 
                                VALUES ('$id_KH','$tenKH','$sdtKH','$diachi','$ghichu','$tinhtrang_TT')";
        }else{
            $sql = "INSERT INTO donhang (hoten_nn,sdt_nn,diachi_nn,ghichu_nn,tinhtrangthanhtoan) 
            VALUES ('$tenKH','$sdtKH','$diachi','$ghichu','$tinhtrang_TT')";
        }
        pdo_execute($sql);
    }
    function idDH(){
        $sql = "SELECT id FROM `donhang` WHERE 1 ORDER BY id DESC LIMIT 0,1";
        $id = pdo_query_one($sql);
        return $id;
    }
    function chitiet_DH($id_spc, $id_DH){
        $sql = "INSERT INTO chitietdonhang (id_donhang,id_hanghoachon) VALUES ('$id_DH','$id_spc')";
        var_dump($sql);
        pdo_execute($sql);
    }
?>