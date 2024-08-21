<?php 
    include ("conexion.php");
    session_unset();
    session_destroy();
?>
<script>
    window.location.replace("index.html");
</script>