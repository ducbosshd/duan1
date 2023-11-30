<?php 
    //hàng hóa
    function insert_hh($tenhh,$gia, $mota, $iddm){
        $sql = "INSERT INTO hanghoa(ten,gia,mota,id_danhmuc) VALUES('$tenhh', '$gia', '$mota', '$iddm')";
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

    function update_hh($id, $tenhh, $gia,$mota,$iddm){
        $sql = "update hanghoa set ten = '".$tenhh."',gia = '".$gia."',
        mota = '".$mota."', id_danhmuc = '".$iddm."'  where id =".$id;
        pdo_execute($sql);
    }

    //load hình ảnh hàng hóa
    function load_hinhanh_dd($id){
        $sql = "select * from hinhanh where vitri = 0 and id_hanghoa =".$id;
        $hinhanh = pdo_query_one($sql);
        return $hinhanh;
    }
    function load_hinhanh($id){
        $sql = "select * from hinhanh where vitri = 1 and id_hanghoa =".$id;
        $hinhanh = pdo_query($sql);
        return $hinhanh;
    }
    function loadall_hinhanh($idhh){
        $sql = "select * from hinhanh where 1";
        if($idhh > 0){
            $sql .= " and id_hanghoa = ".$idhh;
        }
        $sql.= " order by id";
        $hinhanh = pdo_query($sql);
        return $hinhanh;
    }
    function update_ha_dd($id,$fileImage){
        $sql ="update hinhanh set hinhanh_url='".$fileImage."' where id=".$id;
        pdo_execute($sql);
    }
    function insert_ha($id_hh,$hinhanh_url,$vitri){
        $sql = "INSERT INTO hinhanh(id_hanghoa,hinhanh_url,vitri) VALUES('$id_hh','$hinhanh_url','$vitri')";
        pdo_execute($sql);
    }
    function delete_ha($id){
        $sql = "delete from hinhanh where id=".$id;
        pdo_execute($sql);
    }

    

    //thuộc tính
    function insert_gttt_hh($id_hh,$id_gttt){
        $sql  = "INSERT INTO thuoctinh_hanghoa(id_hanghoa,id_giatrithuoctinh) VALUES('$id_hh','$id_gttt')";
        pdo_execute($sql);
    }
    function loadall_thuoctinh(){
        $sql = "select * from thuoctinh where 1";
        $tt = pdo_query($sql);
        return $tt;
    }
    
    function loadall_gtthuoctinh($id_tt){
        $sql = "select * from giatrithuoctinh where id_thuoctinh=".$id_tt;
        $gtthuoctinh = pdo_query($sql);
        return $gtthuoctinh;
    };

    function loadall_tt_hanghoa($id_hh, $id_tt){
        $sql = "select gt_tt.id, gt_tt.tengiatri, gt_tt.id_thuoctinh from thuoctinh_hanghoa as tt_hh inner join 
        giatrithuoctinh as gt_tt on tt_hh.id_giatrithuoctinh = gt_tt.id  where  tt_hh.id_hanghoa = '$id_hh'
        and gt_tt.id_thuoctinh = ".$id_tt;
        $tt_hh = pdo_query($sql);
        return $tt_hh;
    }

    function delete_tt_hh($id_hh){
        $sql = "delete from thuoctinh_hanghoa where id_hanghoa =".$id_hh;
        pdo_execute($sql);
    }
    // hiện thị cột chứa giá trị thuộc tính
    function load_td_tt($dstt, $id_hh){
        $td_gt_tt = '';
        foreach ($dstt as $tt){
            $dsgt_tt = loadall_tt_hanghoa($id_hh, $tt['id']);
            $ten_gt ='';
            foreach ($dsgt_tt as $gt_tt){
                $ten_gt.= ' '.$gt_tt['tengiatri'];
            }
            $td_gt_tt.='<td>'.$ten_gt.'</td>';
          }

        return $td_gt_tt;
    }
?>