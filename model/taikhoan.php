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
        return $kq;
    }

    function update_tk($id, $tentk, $pass, $email, $sdt, $role){
            $sql = "update nguoidung set hoten = '".$tentk."', matkhau = '".$pass."',
            email = '".$email."', sdt = '".$sdt."' where id =".$id;
            pdo_execute($sql);
    }

    function loadall_tk(){
        $sql = "select * from nguoidung order by id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

    function loadone_tk($id){
        $sql="select * from nguoidung where id=".$id;
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
    function nangcap_tk($id){
        $sql = "update nguoidung set vaitro = vaitro + 1 where id=".$id;
        pdo_execute($sql);
    }

    function hacap_tk($id){
        $sql = "update nguoidung set vaitro = vaitro - 1 where id=".$id;
        pdo_execute($sql);
    }
    function sendMail($email){
        $sql = "SELECT * FROM nguoidung WHERE email='$email'";
        $taikhoan = pdo_query_one($sql);
    
        if($taikhoan != false){
            sendPass($email, $taikhoan['hoten'], $taikhoan['matkhau'] );
            return "Gửi Email Thành Công";
        }else{
            return "Email của bạn không tồn tại trong hệ thống";
        }
    }
    function sendPass($email, $hoten, $matkhau){
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
    
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '2ab26fdb36d1a7';                     //SMTP username
            $mail->Password   = '0abf5708834a56';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($email, $hoten);     //Add a recipient
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Lay lai mat khau';
            $mail->Body    = 'Mat Khau Tai Khoan La =>'.$matkhau;
        
    
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>