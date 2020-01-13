<?php
  if (!isset($_POST['user_id']) || !isset($_POST['user_pw'])) {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
    echo "window.location.replace('login.php');</script>";
  }
  $user_id = $_POST['user_id'];
  $user_pw = $_POST['user_pw'];
  $members = array(
    'Jae' => array('password' => '920915', 'name' => '제이', 'rank' => '사용자'),
    'Sungjin' => array('password' => '930116', 'name' => '성진', 'rank' => '중간 관리자'),
    'Young K' => array('password' => '931219', 'name' => '영 케이', 'rank' => '사용자'),
    'Wonpil' => array('password' => '940428', 'name' => '원필', 'rank' => '관리자'),
    'Dowoon' => array('password' => '950825', 'name' => '도운', 'rank' => '사용자'),
  );

  if( !isset($members[$user_id]) || $members[$user_id]['password'] != $user_pw ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    session_start();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $members[$user_id]['name'];
    $_SESSION['user_rank'] = $members[$user_id]['rank'];
?>
<meta http-equiv="refresh" content="0;url=index.php" />
