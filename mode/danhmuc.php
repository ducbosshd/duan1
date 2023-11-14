<?php 
    function insert_dm($tenloai,$fileImage){
        $sql = "INSERT INTO danhmuc(ten,hinhanh) VALUES('$tenloai','$fileImage')";
        pdo_execute($sql);
    }
    
    function delete_dm($id){
        $sql = "delete from danhmuc where id = ".$id;
        pdo_execute($sql);
    }


    function loadall_dm(){
        $sql = "select * from danhmuc order by id";
        $listdm = pdo_query($sql);
        return $listdm;
    }

    function loadone_dm($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_dm($id, $tenloai,$fileImage){
        if($fileImage != "")
            $sql = "update danhmuc set ten = '".$tenloai."', hinhanh = '".$fileImage."' where id =".$id;
        else
            $sql = "update danhmuc set ten = '".$tenloai."' where id =".$id;

        pdo_execute($sql);
    }
?>