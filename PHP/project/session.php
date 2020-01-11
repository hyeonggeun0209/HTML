<?php
  function __autoload($className) {
    include $className . '.php';
  }
    $session_manager = new SessionManager();
    if(!$session_manager->isValidAccess() || $session_manager->isLoginExpired()) {
       $session_manager->destroy_session();
       header("Location: sign_in.php");
     } else {
       $session_manager->update_active_time();
     }

     class SessionManager {
       var $last_active_time;
       var $user_email;

       function __construct() {
         session_start();
         $this->user_email = $_SESSION["user_email"];
         $this->last_active_time = $_SESSION["sign_in_timestamp"];
       }
       function isLoginExpired() {
         $result = false;
         if((time() - $this->last_active_time) > 1800) {
           $result = true; session_destroy();
         }
         return $result;
       }
       function destroy_session() {
         session_destroy();
       }
       function isValidAccess() {
         $result = false;
         if(isset($this->user_email))
         $result = true;
         return $result;
       }
       function update_active_time() {
         $_SESSION["sign_in_timestamp"] = time();
         $this->last_active_time = $_SESSION["sign_in_timestamp"];
       }
       function printUser() {
            print_r($this);
        }
     }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $object = new SessionManager;
      $object->printUser();
    ?>
  </body>
</html>
