<?php
session_start();
unset ( $_SESSION['ses_id'] );
unset ( $_SESSION['ses_username'] );
unset ( $_SESSION['ses_status'] );
session_destroy();
?>