<?php
    function insert_taikhoan($taikhoan,$matkhau,$tenKH,$sdtKH,$ngaysinhKH){
        $sql = "INSERT INTO nguoidung(email,matkhau,hoten,sdt,ngaysinh)
                 VALUES('$taikhoan','$matkhau','$tenKH','$sdtKH','$ngaysinhKH');";
        pdo_execute($sql);
    }

    function check_user($taikhoan,$matkhau){
        $sql = "SELECT * from nguoidung where email='$taikhoan' AND matkhau='$matkhau'";
        $user = pdo_query_one($sql);
        return $user;
    }
    function check_email($taikhoan){
        $sql = "SELECT * FROM nguoidung WHERE email='$taikhoan'";
        $kq = pdo_query_one($sql);
        return $kq !== false;
    }

    function update_tk($id, $tentk, $pass, $email, $sdt, $dc, $role){
            $sql = "update users set username = '".$tentk."', pass = '".$pass."',
            email = '".$email."', address = '".$dc."', sdt = '".$sdt."', role = '".$role."' where id_user =".$id;
            pdo_execute($sql);
    }

    function loadall_tk(){
        $sql = "select * from users order by id_user desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

    function loadone_tk($id){
        $sql="select * from users where id_user=".$id;
        $tk= pdo_query_one($sql);
        return $tk;
    }

    function loadall_role(){
        $sql = "select * from role order by role_id desc";
        $listrole = pdo_query($sql);
        return $listrole;
    }

    function delete_tk($id){
        $sql="delete from users where id_user=".$id;
        pdo_execute($sql);
    }
?>