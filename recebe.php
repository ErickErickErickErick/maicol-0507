<?php
    //PEGAR OS CHECKBOXES QUE O USUÁRIO CLICOU:
    $op1 = $_POST["op1"];
    $op2 = $_POST["op2"];
    $op3 = $_POST["op3"];

    if (isset($_POST["op1"]) )
    {
        $op1 = "S";
    }
    else
    {
        $op1 = "N";
    }
    if (isset($_POST["op2"]) )
    {
        $op2 = "S";
    }
    else
    {
        $op2 = "N";
    }
    if (isset($_POST["op3"]) )
    {   
        $op3 = "S";
    }
    else
    {
        $op3 = "N";
    }

    //MOSTAR NA TELA O QUE ESSAS VARIÁVEIS PEGARAM
    echo("$op1 <br>");
    echo("$op2 <br>");
    echo("$op3 <br>");
    
?>