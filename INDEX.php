<?php

if(isset($_POST['submit']))
{
  // print_r('Nome:' . $_POST['nome']);
  // print_r('<br>');
  // print_r('Email:'. $_POST['email']);
 //  print_r('<br>');
  // print_r('Telefone:' . $_POST['telefone']);
  // print_r('<br>');
 //  print_r('Nacionalidade:' . $_POST['nacionalidade']);
  // print_r('<br>');
 //  print_r('Sexo: ' . $_POST['sexo']);
 // print_r('<br>');
  //print_r('Data de Nasci: :' . $_POST['data_nascimento']);
 // print_r('<br>');
 // print_r('Cidade:' . $_POST['cidade']);

 include_once('config.php');

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];
 $nacionalidade = $_POST['nacionalidade'];
 $sexo = $_POST['sexo'];
 $data_nasc = $_POST['data_nascimento'];
 $cidade = $_POST['cidade'];

 $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,nacionalidade,sexo,data_nasc,cidade) VALUES ('$nome','$email','$telefone','$nacionalidade','$sexo','$data_nasc','$cidade')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário Mesquita</title>

  <style>
    body{
      font-family: Arial, Helvetica, sans-serif;
      background-image: linear-gradient(to right, red , blue)

    }
    .box{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.6);
      padding: 15px;
      border-radius: 15px;
      width: 20%;
      color: white;
    }

    fieldset{
      border: 3px solid darkorange;

    }

    legend{
      border: 1px solid darkgoldenrod;
      padding: 10px;
      text-align: center;
      background-color: darkorange;
      border-radius: 8px;

    }

    .inputBox
    {
      position: relative;
    }

    .inputUser{
      background: none;
      border: none;
      border-bottom: 1px solid white;
      outline: none;
      color: white;
      font-size: 15px;
      width: 100%;
      letter-spacing: 2px;
    }

    .labelInput{
      position: absolute;
      top: 0px;
      left: 0px;
      pointer-events: none;
      transition: .5s;
    }
    .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput
    {
      top: -15px;
      font-size: 12px;
      color: darkorange;
    }

    #data_nascimento{
      border: none;
      padding: 8px;
      border-radius: 10px;
      outline: none;
      font-size: 15px;
    }

    #submit{
      background-image: linear-gradient(to right, rgb(251, 255, 0), rgb(255, 136, 0));
      width: 100%;
      border: none;
      padding: 15px;
      color: white;
      font-size: 15px;
      cursor: pointer;
      border-radius: 10px;
    }

    #submit:hover{
      background-image: linear-gradient(to left, rgb(235, 212, 6), rgb(255, 136, 0));
    }

  </style>
</head>
<body>
  <div class="box">
    <form action="index.php" method="post">
      <fieldset>
        <legend> <b>Formulário Mesquita</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="labelInput">Nome Completo</label>
        </div>
        <br>
        <div class="inputBox">
          <input type="email" name="email" id="email" class="inputUser" required>
          <label for="email" class="labelInput">Email</label>
        </div>
        <br>
        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" required>
          <label for="telefone" class="labelInput">Telefone</label>
        </div>
        <br>
        <div class="inputBox">
          <input type="text" name="nacionalidade" id="nacionalidade" class="inputUser" required>
          <label for="nacionalidade" class="labelInput">Nacionalidade</label>
        </div>
        <br>
        Sexo:
        <br><br>
        <input type="radio" id="feminino" name="sexo" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" id="masculino" name="sexo" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <br>
       
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento"  required>
        
        <br><br>
        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputUser" required>
          <label for="cidade" class="labelInput">Cidade e Estado </label>
        </div>
        <br>
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form>
  </div>
</body>
</html>