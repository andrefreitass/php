<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario PHP Validacao</title>
</head>

<body>
    <h1>Formulario com PHP - Validacao</h1>
    <hr>
    <form action="12-validacoes_escaping.php" method="post">
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br><br>

        <label for="">Email</label><br>
        <input type="text" name="email"><br><br>

        <fieldset>
            <legend>Area de interesse</legend>
            <input type="checkbox" name="interesse[]" id="" value = "informatica"> Informatica <br>
            <input type="checkbox" name="interesse[]" id="" value = "esporte"> Esporte <br>
            <input type="checkbox" name="interesse[]" id="" value = "compras"> Compras <br>
            <input type="checkbox" name="interesse[]" id="" value = "moda"> Moda <br>
            <input type="checkbox" name="interesse[]" id="" value = "ciencia"> Ciencia <br>
            <input type="checkbox" name="interesse[]" id="" value = "religicao"> Religicao <br>

        </fieldset>

        <br><br>

        <label for="">Onde conheceu</label>
        <select name="ondeConheceu" id="">
            <option value="">Selecione</option>
            <option value="google">Google</option>
            <option value="amigos">Amigos</option>
            <option value="tv">TV</option>
        </select>

        <br><br>
        <label for="">Mensagem</label>
        <textarea name="mensagem" id="" cols="30" rows="10"></textarea>

        <fieldset>
            <legend>Redirecionar para:</legend>
            <input type="radio" name="redirecionar" value = "home">Home <br>
            <input type="radio" name="redirecionar" value = "contato">Contato <br>
        </fieldset>

        <hr>

        <button type="submit">Enviar</button>
    </form>

</body>

</html>