<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LIST</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<?php 

        require_once "DbConnection.php";
        require_once "Cookie.php";


        $db = DbConnection::getInstance()->getPdo();

        $sth = $db->query("SELECT * FROM `types`");
        $sth->execute();
        $info = $sth->fetchAll(PDO::FETCH_ASSOC);

        // Cookie::set('types', 4, $time = 31536000);
        // Cookie::remove('types');
        // $c = Cookie::get('types');
        // echo $c;
?>

    <div id="header">
        <div id="info">info</div>
        <div id="authentication"">
            <span id="register">Register</span>
            <span id="log_in">Login</span>
        </div>
    </div>
    <hr>
    <div id="wrapper">    
        
        <div id="main">
        <?php foreach ($info as $value) : ?>

            <div id="<?= $value['id'] ?>" class="topic">
                <div class="topic__title">
                    <h1><?= $value['type'] ?></h1> 
                    <span class='plus'>+</span>
                </div>
                <div class="topic__items"></div>   
            </div>

        <?php endforeach; ?>
        </div>

        <div id="right">
            <?php foreach ($info as $value) : ?>

            <span class="theme"><?= $value['type'] ?></span>
            
            <?php endforeach; ?>
            <span class="theme active">ACtive</span>
        </div>
        
    </div>

    <div id="wait"><img src="img/animatedEllipse.gif" alt=""></div>
   
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
