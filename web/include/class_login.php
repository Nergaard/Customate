<?php
/**
 *
 */
class Login{
  public function fetch_user_by_username($username) {
      global $pdo;
      $query = $pdo->prepare("SELECT * FROM user_info WHERE user_name = ?");
      $query->bindValue(1, $username);
      $query->execute();
      return $query->fetch();
  }


  public function verify_existing_user($username) {
      global $pdo;
      $query = $pdo->prepare("SELECT COUNT('user_name') FROM user_info WHERE user_name = ?");
      $query->bindValue(1, $username);
      $query->execute();
      $number_of_rows = (int)$query->fetchColumn();

      if ($number_of_rows == 1) {
          return TRUE;
      }
      return FALSE;
  }
}

 ?>
