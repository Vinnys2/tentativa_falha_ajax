<?php
     $query = mysqli_query($con, $SQL);
    if ($query){
        echo $texto;
        Echo "<a href='cadastro_pessoa.php'>Voltar</a>";
    }else {
        echo "mysqli_error($con)";
    }
    mysqli_close($con)
?>