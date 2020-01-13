<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Session Login Test</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php
      if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
        echo "<p>로그인을 해 주세요. <a href=\"login.php\">[로그인]</a></p>";
      } else {
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];
        $user_rank = $_SESSION['user_rank'];
        echo "<p><strong>$user_name</strong>($user_id)님 환영합니다. 회원:($user_rank)";
        echo "<a href=\"logout.php\">[로그아웃]</a></p>";
      }
    ?>
    <hr />
    <p>
      혼잣말이 늘어가
      네가 떠난 뒤로
      이젠 어색하지도 않아
      어쩌나
      아까는 식탁 위에 있던
      죄 없는 과자봉지만
      구기고 던지면서
      화내고 있더라
      어쩌나
      아 몰라
      (괜찮냐) 괜찮겠냐
      널 대신할 머릿속의 목소리
      (나가자) 아 싫어
      (일어나) 싫다고
      무기력해 뭣도 하기 싫어
      나도 알아 안다고
      뭐라도 해야지
      근데 참 엉덩이가
      안 떨어지는걸
      나더러 어떡하라고
      Just talking to 나
      말할 사람이 없어서
      누가 봐도 널 보낸 건 나니까
      I'm just talking to 나
      탓하지도 못하겠어
      나를 혼자가 되게 만든 건
      나였으니까
      야 그때 왜 그랬냐 이 자식아
      너도 문제다 상태는 심각
      이 정도면 거의 뭐 던짐각
      나도 알어
      아아아 나도 알어
      야 자존심이 그리 중요했냐
      뭣이 중요한지도 몰랐던 거냐
      나도 안다니까
      아는데 왜 그랬냐
      인간은 같은 실수를 반복하니까?
      Just talking to 나
      말할 사람이 없어서
      누가 봐도 널 보낸 건 나니까
      I'm just talking to 나
      탓하지도 못하겠어
      나를 혼자가 되게 만든 건
      나였으니까
      사실 요즘 다 귀찮아
      밥 먹기도 특히 치우는 게 귀찮아
      나도 모르게 습관이 됐나 봐
      2인분을 차리는 거 마마말이야
      사실 요즘 잠도 안 와
      더워서 더욱 그런가 봐
      항상 이불 뺏던 네가 옆에 없으니깐
      더워 죽겠다
      잠이 안 와 미치겠다
      Just talking to 나
      말할 사람이 없어서
      누가 봐도 널 보낸 건 나니까
      I'm just talking to 나
      탓하지도 못하겠어
      나를 혼자가 되게 만든 건
      나였으니까
    </p>
  </body>
</html>
