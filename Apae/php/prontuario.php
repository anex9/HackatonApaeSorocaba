<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <link rel="stylesheet" type="text/css" href="../css/prontuario.css">
    <title>Preenchimento de prontuario</title>
<style class="cp-pen-styles">.container {
  width: 50%;
  margin: 0 auto;
} </style>

</head>

<body>

<div class="container">  
<p align="center"><img src="../img/logo.png"/ width="auto"></p>
  <form action="respostaProntuario.php" class="form-contact" method="post" tabindex="1">
    
     <input type="text" class="form-contact-input" name="paciente" placeholder="Paciente" required />
     <input type="text" class="form-contact-input" name="deficiencia" placeholder="Deficiencia" required />
     <input type="text" class="form-contact-input" name="nSus" placeholder="n° do SUS"/>
     <input type="date" class="form-contact-input" name="dataNascimento" placeholder="Data de Nascimento" /> 
     <br>
     <br>
     <br>
     <br>

    <!--data é automatico.-->
     <input type="tex" class="form-contact-input" name="terapeuta" placeholder="Terapeuta" required />  
     <input type="text" class="form-contact-input" name="especialidade" placeholder="Especialista" />
     <textarea class="form-contact-textarea" name="relatorio" placeholder="Relatorio" required></textarea>  
     <button type="submit" class="form-contact-button">Enviar</button>  
  </form>  
</div>  
</body>
</html>
