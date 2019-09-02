<?php
     if (isset($_GET["conta"])){
        $conta = $_GET["conta"];
    }
    else{
        $conta = null;
    }

    echo "<p>
        <label>Número da Conta</label>
        <input type=\"number\" name=\"num_conta\" value=\"$conta\" />
    </p>";
?>
<p>
    <label>Oparação:</label>
    <select name="operacao">
        <option value="saque">Saque</option>
        <option value="deposito">deposito</option>
    </select>
</p>
<p>
    <label>Valor:</label>
    <input type="number" name="valor" />
</p>
<p>
    <label></label>
    <input type="submit" value="Cadastrar"/>
</p>
