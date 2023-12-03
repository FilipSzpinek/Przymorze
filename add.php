<html>

<head>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <link rel="Stylesheet" type="text/css" href="css.css" />
    
    <title>Księga Gości</title>

</head>

<body>

    <div class="all">
    
        <form method="POST">
        
        Nick: <input type="text" name="nick" />
        <br />
        Opinia:
        <br />
        <textarea name="opinia" cols="60%" rows="20%"></textarea>
        <br /><br />
        <input type="submit" value="Dodaj!">
        
        <input type="hidden" name="useform" value="true" />
        
        </form>
        
        <br /><br />
        
        <?php
        
        $nick = $_POST['nick'];
        $opinia = $_POST['opinia'];
        $useform = $_POST['useform'];
        
        $all = "<table width=60%><tr><td class=a><b>$nick</b> dodal/a:</td></tr><tr><td class=b>$opinia</td></tr></table><br /><br />";
        
        if(empty($nick)){
        echo "Musisz wypełnić wszystkie pola przed wysłaniem";
        }

        else if(empty($opinia)){
        echo "Musisz wypełnić wszystkie pola przed wysłaniem";
        }

        else if($useform == true){
        echo 'Wysyłanie udane. Dziękujemy za dodanie opini.<br /><a href="index.php">Wróć</a>';
        file_put_contents("list.html", $all, FILE_APPEND);
        }

        ?>
    
    </div>

</body>

</html>