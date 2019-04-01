<?php
    session_start();
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsClienteDAO.php';
    include_once 'model/clsCliente.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica Angels - Marcar Consulta</title>
        <link href="estilos2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="top_consultas">
        
            <h1 align="center" id="titulo_consultas">Clinica Angels</h1> 
        
            </div>
     
        
        <?php
            require_once 'menu.php';
        ?>
        
        
        <br><br>
        
        
    <div id="area_formulario">
        
        <form id="formulario" autocomplete="off">
            <fieldset>
            <label>Nome: </label>
            <input class="campo_nome" type="text" name="txtNome" required maxlength="100" placeholder="Insira o nome aqui"/> 
        
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" required maxlength="100" placeholder="Digite o telefone"/>  <br>
        
            <label>E-mail: </label>
            <input type="email" name="txtEmail" required maxlength="100" placeholder="Endereço de E-mail"/> <br><br>
        
            <label>CPF: </label>
            <input type="text" name="txtCPF" required maxlength="100" placeholder="111.222.333-00"/> <br><br>
            
            <label>Bairro: </label>
            <input type="text" name="txtBairro" required maxlength="100" placeholder="Digite seu bairro"/>
            
            <label>Cidade: </label>
            <input type="text" name="txtCidade" required maxlength="100" placeholder="Digite sua cidade"/>
            
            <label>CEP: </label>
            <input type="text" name="txtCEP" required maxlength="100" placeholder="Digite seu CEP"/>
            
            <label>Horários Disponíveis</label>
            <input type="radio" name="txtHora" required/> 14:35
            <input type="radio" name="txtHora"/> 14:50
            <input type="radio" name="txtHora"/> 15:30
            <input type="radio" name="txtHora"/> 16:40 <br>
        
            <label>Modo de Pagamento: </label>
            <select name="pagamento">
                <option value="dinheiro">Dinheiro</option> 
                <option value="debito">Débito</option> 
                <option value="credito">Crédito</option>
            </select>
            </fieldset>
        </form>
    </div>
    </body>
</html>
