<?php?>

function redirecct ($parth){
    header("Location: ".BASE_URL.$parth);
    exit();
}
?>