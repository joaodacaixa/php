<div class="titulo">Array $_post</div>

<form action="#" method="post">
<input type="text" name ="nome">
<input type="text" name ="sobrenome">
<select name="estado">
    <option value="AC">Acre</option>
    <option value="BA">Bahia</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="MG">Minas Gerais</option>
    <option value="SP">São Paulo</option>
</select>
<button>Enviar</button>

</form>

<style>
    form>*{
        font-size:1.8rem;
    }
</style>

<?php
print_r($_GET);
echo '<br>';

print_r($_POST);
echo '<br>'.count($_POST);