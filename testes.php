<?php
    include './src/db.php';
    $stmt = $db->prepare('SELECT * FROM users');
    $stmt->execute();
    $resp = $stmt->get_result();
    print_r ($resp -> fetch_all());
?>
