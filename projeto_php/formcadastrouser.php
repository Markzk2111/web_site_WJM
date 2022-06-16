<?php include_once "header2.php"; ?>

  <link rel="stylesheet" href="CSS/loginstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<div class="container">
    <div class="card">
        <div class="user signup_form">
            <div class="form">
            <div class="flag-text"> <select>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>Outro</option>
                    </select> </div>
                <div class="text_signup">
                    <h2>cadastre de graça</h2>
                    <p>Já tem uma conta? <a href="userlogin.php" class="signin-click">Login</a></p>
                </div>
                <form action="cadastrouser.php" method="post">
                <div class="input-text-signup"> <input type="text" id="username" name="username" required> <i class="fa fa-user"></i> <label for="username">Nome</label> </div>
                <div class="input-text-signup"> <input type="text" id="usercel" name="usercel" required> <i class="fa fa-user"></i> <label for="username">Celular</label> </div>
                <div class="input-text-signup"> <input type="text" id="useremail" name="useremail" required> <i class="fa fa-envelope-o"></i> <label for="useremail">E-mail</label> </div>
                <div class="input-text-signup"> <input type="password" id="userpassword" name="userpassword" required> <i class="fa fa-eye-slash"></i> <label>Senha</label> </div>
                <div class="signup-button"> <button>Cadastrar</button> </div>
                <div class="policy">
                </div>
            </div>
            </form>
            <div class="image-box"> <img src="https://images.unsplash.com/photo-1588451186824-f9278b63cb1f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGJyaWNrfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"> </div>
        </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php 

include_once "footer.php";

?>