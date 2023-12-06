<?php



if (empty($_POST['taikhoan']) || !filter_var($_POST['taikhoan'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email'] = "Email không hợp lệ!";
}else{
    $email = $_POST['taikhoan'];
}

if (empty($_POST['matkhau']) || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $_POST['matkhau'])) {
    $_SESSION['matkhau'] = "Mật khẩu không hợp lệ!";
}else{
    $matkhau = $_POST['matkhau'];
}

if (empty($_POST['tenKH'])) {
    $_SESSION['tenKH'] = "Vui lòng nhập tên sinh viên!";
}else{
    $tenKH = $_POST['tenKH'];
}
if (empty($_POST['diachi'])) {
    $_SESSION['diachi'] = "Vui lòng nhập địa chỉ!";
}else{
    $diachi = $_POST['diachi'];
}

if (empty($_POST['sdtKH']) || !preg_match('/^0[2-9]\d{8}$/', $_POST['sdtKH'])) {
    $_SESSION['sdtKH'] = "Số điện thoại không hợp lệ!";
}else{
    $sdtKH = $_POST['sdtKH'];
}

if (empty($_POST['ngaysinhKH']) || !isValidDate($_POST['ngaysinhKH']) || Age($_POST['ngaysinhKH']) < 16 || Age($_POST['ngaysinhKH']) > 100) {
    $_SESSION['ngaysinhKH'] = "Vui lòng nhập ngày tháng hợp lệ và bạn phải từ 16 đến 100 tuổi!";
}else{
    $ngaysinhKH = $_POST['ngaysinhKH'];
}

// check lại ngày tháng
function isValidDate($date) {
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') == $date;
}

// Hàm tính tuổi từ ngày sinh
function Age($birthdate) {
    $today = new DateTime();
    $birthDate = new DateTime($birthdate);
    $age = $today->diff($birthDate)->y;
    return $age;
}
?>

