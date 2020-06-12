<style>
table{
    border-collapse:collapse;

}
table td{
    border:1px solid black;
    padding:5px 10px;
}
</style>

<?php

$array=[
    'header'=>['網站標題','替代文字','顯示','刪除','操作'],
    'rows'=>[
        ["<img src='img/01B01.jpg'","<input type='text' name='text' value='AAAAAA'>","<input type='radio' name='sh' value='1'>",'checkbox','button'],
        ['img/01B02.jpg','BBBBBB','radio','checkbox','button'],
        ['img/01C03.jpg','CCCCCC','radio','checkbox','button'],
        ['img/01C04.jpg','DDDDD','radio','checkbox','button'],
    ],
];


function makeTable($array){
    echo "<table>";
    echo "<tr>";
    foreach($array['header'] as $header){
        echo "<td>$header</td>";
    }
    echo "</tr>";

    foreach($array['rows'] as $row){
        echo "<tr>";
        foreach($row as $col){
           echo "<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

}

makeTable($array);

?>