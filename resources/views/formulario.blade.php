<!DOCTYPE html>
<html>    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulário</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                scroll-behavior: smooth;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #passo-um {
                height: 100vh;
                background-color: #ffe6e6;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #passo-dois {
                height: 100vh;
                background-color: #ffe6e6;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #passo-tres {
                height: 100vh;
                background-color: #ffe6e6;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .wrap-1 {
                height: 30%;
                width: 70%;
                display: flex;
                justify-content: center;
                align-items: center;  
            }

            input {
                padding: 10px;
                border-color: #ff8080;
                border-style: solid;
                border-radius: 3px;
                /* display: block; */
                outline: none;
            }

            .btn {
                border: solid #ff8080;
                border-radius: 3px;
                background-color: #ff8080;
                outline: none;
                padding: 5px;
                color: #000000;
            }
            .btn:hover{
                transform: scale(1.05);
            }

            a {
                text-decoration: none;
            }
            a:hover{
                padding: 6px;
            }
            a:active{
                background-color: #ff6666;
                border: solid #ff6666;
            }

            .msg-erro{
                color: red;
            }
            .msg-ok{
                color: green;
            }
        </style>
    </head>
    <body>

        <form method="POST" action="formulario">
        {{ csrf_field() }}
            <div id=passo-um>
                <div class="msg-erro">

                    @include('inc.erros')
                
                </div>
                <div class="msg-ok">

                    {{ Session::get('success') }}
                </div>
                <div class=wrap-1>
                
                    <input type="text" name="Nome" placeholder="Nome Completo">
                    <input type="text" name="DataNascimento" id="DataNascimento" placeholder="Data de Nascimento">
                    <a href="#passo-dois" class="btn">Próximo</a>
                </div>
            </div>

            <div id=passo-dois>
                <div class=wrap-1>
                    <input type="text" name="Endereco" placeholder="Rua e Número">
                    <input type="text" name="CEP" id="CEP" placeholder="CEP" class="form-control" data-inputmask="'mask': '99999-999'">
                    <input type="text" name="Cidade" placeholder="Cidade">
                    <input type="text" name="Estado" placeholder="Estado">
                    <a href="#passo-tres" class="btn">Próximo</a>
                </div>
            </div>
            
            <div id=passo-tres>
                <div class=wrap-1>
                    <input type="" name="TelefoneFixo" id="TelefoneFixo" placeholder="Telefone Fixo">
                    <input type="" name="TelefoneCelular" id="TelefoneCelular" placeholder="Telefone Celular">
                    <button type="submit" class="btn">Cadastrar</button>  
                </div>
            </div>

        </form>


    </body>

    <footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script>
            $(document).ready(function () {
                var $DataNascimento = $("#DataNascimento");
                var $CEP = $("#CEP");
                var $TelefoneFixo = $("#TelefoneFixo");
                var $TelefoneCelular = $("#TelefoneCelular");

                $DataNascimento.mask('00/00/0000');
                $CEP.mask('00000-000');
                $TelefoneFixo.mask('(00)0000-0000');
                $TelefoneCelular.mask('(00)00000-0000');
            });

        </script>
    </footer>


</html>


