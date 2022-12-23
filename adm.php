
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Administração</title>
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
     <script src="https://kit.fontawesome.com/4d0cdf4c93.js" crossorigin="anonymous"></script>
     <link rel="shortcut icon" href="imagens/LOGO.png" type="image/x-icon">
 </head>

 <body>
     <section class="dobra1">

         <div class="topoADM">
             <div class="logoADM"><img src="imagens/LOGO.png" /></div>
             <h1>VENTRE DOS PÉLAGOS<BR>ADMINISTRAÇÃO</h1>
             <ul>
                 <li class="ativoADM"><a href="website.php">HOME</a></li>
             </ul>
             <div class="adm">

                 <div class="loginBar">
                     <form method="POST" action="listaHospede.php">

                         <input type="text" placeholder="Usuário" required name="login">
                         <input type="password" placeholder="Senha" required name="senha">

                         <button type="submit" class="btn">ENVIAR</button>

                     </form>
                 </div>
             </div>
         </div>
     </section>




 </body>

 </html>