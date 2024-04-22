<?php

if (!$_SESSION["user"]) {
  header("Location: /login");
  die();
}

require "views/index.view.php";