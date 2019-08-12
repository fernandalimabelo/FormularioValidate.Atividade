<html>
<body>

    <form action = "welcome.php" method = "POST">

        <label> Nome Completo:  </label>
        <input type = "text" name = "nome" />

        <label> E-mail:  </label>
        <input type = "email" name = "email" />

        <input type = "radio" name = "sexo" value = "M"> Masculino
        <input type = "radio" name = "sexo" value = "F"> Feminino
        <input type = "radio" name = "sexo" value = "O"> Outros

        <input type = "submit" value = "enviar" />
        
    </form>

</body>
</html>