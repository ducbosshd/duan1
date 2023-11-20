<?php 
    function insert_hh($tenhh,$gia, $mota, $fileImage, $iddm){
        $sql = "INSERT INTO hanghoa(ten,gia,mota,hinhanh,id_danhmuc) VALUES('$tenhh', '$gia', '$mota', '$fileImage', '$iddm')";
        pdo_execute($sql);
    }
    
    function delete_hh($id){
        $sql = "delete from hanghoa where id = ".$id;
        pdo_execute($sql);
    }


    function loadall_hh($kyw, $iddm){
        $sql = "select * from hanghoa where 1";
        if($kyw != ""){
            $sql.= " and ten like '%".$kyw."%'";
        }
        if($iddm > 0){
            $sql.= " and id_danhmuc = '".$iddm."'";
        }
        $sql.= " order by ten";
        $listhh = pdo_query($sql);
        return $listhh;
    }
    function loadall_hh_top10(){
        $sql = "select * from hanghoa where 1 order by view desc limit 0,10";
        $listhh = pdo_query($sql);
        return $listhh;
    }
    function loadall_hh_home(){
        $sql = "select * from hanghoa where 1 order by id desc limit 0,9";
        $listhh = pdo_query($sql);
        return $listhh;
    }

    function loadone_hh($id){
        $sql = "select * from hanghoa where id=".$id;
        $hh = pdo_query_one($sql);
        return $hh;
    }

    function loadtop8_hh(){
        $sql = "select * from hanghoa order by luotxem desc limit 0,8";
        $tophh = pdo_query($sql);
        return $tophh;
    }

    function load_ten_dm($iddm){
        if($iddm > 0){
            $sql = "select * from category where id_danhmuc =".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $category_name;
        }else{
            return "";
        }
    }

    function load_hh_cl($id,$iddm){
        $sql = "select * from hanghoa where id_danhmuc = ".$iddm." and id <>".$id;
        $hh = pdo_query($sql);
        return $hh;
    }
    function load_hinhanh_dd($id){
        $sql = "select hinhanh_url from hinhanh where vitri = 0 and id_hanghoa =".$id;
        $hinhanh = pdo_query_one($sql);
        return $hinhanh;
    }
    function load_hinhanh($id){
        $sql = "select hinhanh_url from hinhanh where vitri = 1 and id_hanghoa =".$id;
        $hinhanh = pdo_query($sql);
        return $hinhanh;
    }
    function loadall_hinhanh($idhh){
        $sql = "select * from hinhanh where 1";
        if($idhh > 0){
            $sql .= "and id_hanghoa = '".$idhh."'";
        }
        $sql.= " order by id_hanghoa";
        $hinhanh = pdo_query($sql);
        return $hinhanh;
    }

    function update_hh($id, $tenhh, $gia,$mota,$fileImage,$iddm){
        if($fileImage != "")
            $sql = "update hanghoa set ten = '".$tenhh."',gia = '".$gia."', mota = '".$mota."', hinhanh = '".$fileImage."',
            id_danhmuc = '".$iddm."'  where id =".$id;
        else
            $sql = "update hanghoa set ten = '".$tenhh."',gia = '".$gia."',
            mota = '".$mota."', id_danhmuc = '".$iddm."'  where id =".$id;
        pdo_execute($sql);
    }
?>