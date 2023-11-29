<?php 
    function insert_bl($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) VALUES('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_bl($idpro){
        $sql = "select * from binhluan where 1";
        if($idpro > 0){
        $sql.= " and idpro='.$idpro.'";
        }
        $sql.= " order by id_bl desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }

    function delete_bl($id){
        $sql = "delete from binhluan where id_bl = ".$id;
        pdo_execute($sql);
    }


?>