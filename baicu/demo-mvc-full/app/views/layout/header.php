<p>User:
    <?php
    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        echo $user["name"];
    }else{
        header("location:index.php?page=login");
    }

    ?>
</p>
<a href="index.php?page=logout">Logout</a>
<hr>
