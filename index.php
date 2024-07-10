<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    /*atualizar a imagem */
        body{
            background: url('img/background.png') no-repeat center center fixed; 
            background-size: cover;
            margin: 0;
        }
        .logo{
            width: 10%;
            margin: 20px 20px;
        }
        .container {
            display: flex;
            width: 455px;
            height: 600px;
            background-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 80px 1450px
        }
        .input-box {
            position: relative;
            margin-bottom: 30px;
        }

        .input-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            margin-left: 32%;
            border: none;
            border-bottom: 1px solid #555;
            outline: none;
            background: transparent;
        }
        .input-box label {
            position: absolute;
            top: 0;
            left: 32%;
            padding: -5px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #black;
            font-size: 18px;
        }
        h3{
            margin-top: -35px  ;
            margin-left: 193px;
            font-size: 200%;
        }
        .forget{
            margin-left: 32%;
            font-size: 16px;
        }
        .botton{
            margin-left: 53%;
            width: 60%;
            height: 15%;
            padding: 10px;
            background-color: #FE8F1E;
            border: none;
            font-size: 16px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }
        .login {
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 1;
        }

        .login h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .apoio {
            width: 455px;
            height: 600px;
            margin-top: -680px;
            margin-left: 995px;
            border: none; 
            border-radius: 10px; 
            background-color: rgb(18, 17, 30, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            font-family: 'Arial', sans-serif; 
            color: black; 
        }
        .apoio h2{
            text-align: center;
           padding: 80px 0px;
            color: white;
        }
        .apoio p{
            text-align: justify;
            padding: 10px 25px;
            font-size: 18px;
            color: white;
        }

        </style>
</head>
<body>
<img class="logo" src="img/logo.png" alt="Logo_da_empresa">
     <!--caixa de login-->
    <div class="container">
        <div class="login">
            <h3>Login</h3><br><br><br>
            <form>
            <div class="input-box"><br>
            <br>
                <input type="text" required>
                    <label>Usuário</label>
                </div>
                <div class="input-box"><br>
<br>
                    <input type="password" required>
                    <label>Senha</label>
                </div><br>
                <a class= "forget"href="https://drive.google.com/file/d/1JZunTF3j8Evygqfb41TF2d8Z1UyVHV2J/view" target="_blank" >Esqueceu a senha?</a><br><br><br>
                <button class="botton"type="submit">Entrar</button>
            </form>
                </div>
                </div>
                <div class="apoio">
                <h2>Petroeye Monitoring!!</h2> 
                <p>Somos uma empresa que trabalha na distribuição de informações<br>sobre campos de extração, facilitamos o trabalho de pesquisas e <br>analise de dados para as empresas do ramo petrolífero de forma<br> segura, com alto desempenho e intuitividade</p>
    </div>
</body>
</html>