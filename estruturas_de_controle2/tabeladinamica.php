<div class="titulo">Tabela Dinamica</div>
<form action="#" method ="post">
    <div>
            <h3>linhas  :  <input type ="number" value=<?=$_POST['linha'] ?? 1?> name="linha"></h3>
            <h3>colunas:  <input type ="number" value=<?=$_POST['coluna'] ?? 1?> name="coluna"></h3>
           
            <br>
            <button>Gerar</button>
    </div>
</form>

<?php
$l = intval($_POST['linha']);
$c = intval($_POST['coluna']);

if (!$l) $l=1;
if (!$c) $c=1;
echo " Gerar dinamicamente uma tabela com $l linhas $c colunas";
?>

<table>
<?php
$num=1;
for ($i=0;$i<$l;$i++){
    echo '<tr>';
    for($j=0;$j<$c;$j++){
        echo "<td> {$num}";
        $num++;
    }

} 
?>


</table>

<style> 
    table{
        border:1px solid #444;
        border-collapse:collapse;
        margin:20px 0px;
    }

    table tr{
        border:1px solid #444;
    }

    table td{
        padding :10px 20px;
    }

</style>