<p>
    <label>CPF</label>
    <input type="text" name="cpf" />
</p>
<p>
    <label>Tipo de Conta:</label>
    <select name="conta" onchange="liberar_limite(this.value)">
         <option value="">selecione</option>
        <option value="conta_corrente">Conta Corrente</option>
        <option value="conta_especial">Conta Especial</option>
    </select>
    <br/>
    <div id="limite" style="display:none">
        <input type="number" name="limite" placeholder="Digite o limite especial..." />    
    </div>
</p>
<p>
    <label>Nome:</label>
    <input type="text" name="nome" />
</p>
<p>
    <label>Email:</label>
    <input type="text" name="email" />
</p>
<p>
    <label></label>
    <input type="submit" value="Cadastrar"/>
</p>
