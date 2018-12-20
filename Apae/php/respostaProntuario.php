<?php

include_once "connection.php";

var_dump($_POST);

$paciente = $_POST["paciente"];
$deficiencia = $_POST["deficiencia"];
$nSus = $_POST['nSus'];
$dataNascimento = $_POST['dataNascimento'];


$terapeuta = $_POST["terapeuta"];
$especialidade = $_POST["especialidade"];
$texto = $_POST["relatorio"];

$mensagem = "Prontuario cadastrado com sucesso";

// Conexao com DB

$conn = conectar();

$insert = "INSERT INTO prontuario (paciente,
						deficiencia,
						nSus,
                        dataNascimento,
                        terapeuta,
                        especialidade,
                        descricao, 
                        dataCadastro) VALUES (".$paciente.",
											  ".$deficiencia.",
                                              ".$nSus.",
                                              ".$dataNascimento.",
                                              ".$terapeuta .",
                                              ".$especialidade.",
                                              ".$descricao.",
                                              (SELECT CURDATE()))";
                                              
    mysqli_query($conn,$insert);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>
        <?php echo $mensagem?>
    </h2>
<p>
        <a href="prontuario.php">Clique aqui para cadastrar outro paciente?</a>
    </p>
</body>
</html>
