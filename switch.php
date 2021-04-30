<?php
    include 'app.php';
    
    if(isset($_POST["submitBtn"])){
        $option = $_POST["submitBtn"];

        switch ($option) {
            case 1:
                if (isset($_POST['input1']) . isset($_POST['input2'])) {
                    $res = new app;
                    $result = ($res -> maxRange($_POST['input1'], $_POST['input2']));
                    echo '<h1>' . 'Answer:' . $result.'</h1>';
                }
                break;
            case 2:
                if (isset($_POST['input1'])) {
                    $res = new app;
                    $result = ($res-> binCount($_POST['input1']));
                    echo '<h1>' . 'Answer:' . $result.'</h1>';
                }
                break;
            case 3:
                if (isset($_POST['input1']) . isset($_POST['input2'])) {
                    $res = new app;
                    $result = ($res-> partJoin($_POST['input1'],$_POST['input2']));
                    echo '<h1>' . 'Answer:' . $result.'</h1>';
                }
                break;
            case 4:
                if (isset($_POST['input1'])) {
                    $res = new app;
                    $result = ($res->sastryNum($_POST['input1']));
                    echo $result;
                }
                break;
            default:
            echo "<h1>ATAY NAAY ERROR</h1>";
        }
    }
        

?>