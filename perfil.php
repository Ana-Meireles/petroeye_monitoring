<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Perfil</title>
    <style>
body {
    background-color: #f0eff6;
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding-top: 60px; 
}
.container {
    background-color: #ffffff;
    padding: 70px 70px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 900px;
    margin-top: 300px;
}
.foto_perfil {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
.foto_perfil img {
    width: 150px; 
    height: 150px; 
    overflow: hidden;
    border-radius: 50%;
    border: 2px solid #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.editar {
    text-decoration: none;
    font-size: 16px;
    color: #007bff;
    display: block;
    text-align: center;
    margin-bottom: 20px;
}
.editar:hover {
    text-decoration: underline;
}
.form-group {
    margin-bottom: 20px;
}
.form-group label {
    font-size: 18px;
    margin-bottom: 5px;
    display: block;
    color: #333;
}
.form-group input {
    font-size: 16px;
    width: 100%;
    padding: 8px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-sizing: border-box;
}
.hr {
    width: 100%;
    height: 2px;
    background-color: #ccc;
    border: none;
    margin: 50px 0;
}
.button-group {
    text-align: right;
    margin-top: 20px;
}
button {
    background-color: #FE8F1E;
    border: none;
    width: 120px;
    height: 40px;
    font-size: 18px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
}
button.cancelar {
    background-color: lightgray;
}
button:hover {
    opacity: 0.8;
}
.concluir{
    margin-top: 20px;
    margin-left: 0px;
}
</style>

</head>
<body>
<?php include 'header.php'; ?>
   

    <div class="container">
        <!-- Quadro de foto -->
        <div class="foto_perfil">
            <img id="Image" src="https://media.bzi.ro/unsafe/0x600/smart/filters:contrast(3):format(jpeg):quality(100)/http://www.bzi.ro/wp-content/uploads/2022/01/farapoza-de-profil.jpg" alt="Foto de Perfil">
        </div>
        <!-- Link para alterar foto -->
        <a class="editar" href="https://www.remove.bg/pt-br/upload">Editar foto</a>
        
        <!-- Formulário -->
        <div class="form-group">
            <label for="empresa">Nome da empresa</label>
            <input type="text" id="empresa" required>
        </div>

        <div class="form-group">
            <label for="administrador">Administrador</label>
            <input type="text" id="administrador" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" id="cnpj" maxlength="14" required>
        </div>

        <div class="form-group">
            <label for="identificacao">Identificação</label>
            <input type="text" id="identificacao" required>
        </div>
        
        <hr class="hr">
        <h1>Senha</h1>
        <div class="form-group">
            <label for="senha">Redefinir senha</label>
            <input type="password" id="senha" required>
        </div>

        <div class="form-group">
            <label for="confirmar_senha">Confirmar Senha</label>
            <input type="password" id="confirmar_senha" required>
            <button class="concluir" type="submit">Concluído</button>
        </div>
        
        <div class="button-group">
            
        <button class="cancelar" type="button">Cancelar</button>
            <button class="enviar" type="submit">Enviar</button>
            
        </div>
    </div>
</body>
</html>
