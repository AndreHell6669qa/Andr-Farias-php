<?php
// criar uma array produtos
$produtos = [
    "maça" => 1,
    "banana" => 2,
    "tomate" => 3
];
// exibir lista
echo "lista de produtos:";
foreach ($produtos as $produto => $preco){
    echo "$produto custa R$$preco .";
}
?>cli_set_process_title
