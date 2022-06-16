<?php  

  include_once "header2.php";

?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<body>
<div class="container">
    <div class="card">
        <div class="user signin_form">
            <div class="image-box"> <img src="https://images.unsplash.com/photo-1518714049508-96a3054cdaef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YnJpY2t8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"> </div>
            <div class="form">
                <div class="flag-text"> <select>
                        <option>Português</option>
                        <option>Inglês</option>
                        <option>Outro</option>
                    </select> </div>
                <div class="text_signup">
                    <h4>Faça login</h4>
                    <h2>login</h2>
                    <p>Não tem uma conta? <a href="formcadastrouser.php" class="signup-click">Cadastre-se</a></p>
                </div>
                <form action="validauser.php" method="post"> 
                <div class="input-text-signup"> <input type="text" id="useremail" name="useremail" required> <i class="fa fa-envelope-o"></i> <label>E-mail</label> </div>
                <div class="input-text-signup"> <input type="password" id="userpassword" name="userpassword" required> <i class="fa fa-eye-slash change_eye"></i> <label>Senha</label> </div>
                <div class="signup-button"> <button>Logar</button> </div>
            </div>
        </div>
    </div>
</div>
            </form>
</body>

    <section></section>

    <?php 
        session_start();
        if(isset($_SESSION['mensage'])){
            $mensage= $_SESSION['mensage'];

            echo '<p>'.$mensage.'</p>';

            unset($_SESSION['mensage']);
        }
    ?>


</html>

<?php 

include_once "footer.php";

?>