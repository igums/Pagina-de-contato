<?php require_once("config/globals.php");
      require_once("config/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maxmum-scale=1, user-scalable=no">
  <title>Contato</title>
   <!--Edição por css-->
  <link rel="stylesheet" href="css/styles.css">
  <!--icons-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>

<div id="main-container">
    <!-- Informações de endereço -->
    <div id="address-container">
      <div class="fade"></div>
      <div id="address-content">
        <h2><ion-icon name="navigate-outline"></ion-icon> Endereço</h2>
        <p>Rua das Flores, 133</p>
        <h2><ion-icon name="call-outline"></ion-icon> Telefone</h2>
        <p>(48)9999-9999</p>
        <h2><ion-icon name="mail-outline"></ion-icon> E-mail</h2>
        <p>meuemail@email.com</p>
      </div>
    </div>
    
    <!-- Formulário para contato -->
    <div id="form-container">
      <h2>Nos mande uma mensagem!</h2>
      <form id="contact-form"  action="<?= $BASE_URL ?>config/process.php" method="POST">
       <input type="hidden" name="type" value="contact">
        
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Digite o nome:" required>
        
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" placeholder="Digite o email:" required>
        
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" id="phone" placeholder="Digite o telefone" required>
        
        <label for="msg">Sua mensagem:</label>
        <textarea name="msg" cols="30" rows="20" placeholder="Como podes te ajudar?"></textarea>
        
        <input type="submit" value="Enviar mensagem">
      </form>
    </div>
  </div>
  
  </div>