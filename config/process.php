<?php

  session_start();

  include_once("db.php");
  include_once("globals.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "contact") {

      $name = $data["name"];
      $phone = $data["phone"];
      $email = $data["email"];
      $observations = $data["observations"];

      $query = "INSERT INTO users (name, email, phone, observations) VALUES (:name, :email, :phone, :observations)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":observations", $observations);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Mensagem enviada com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }
  }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");
     
    // FECHAR CONEXÃO
    $conn = null;