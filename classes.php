<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Classes</title>
</head>
<body>
    <?php 
        class CarrinhoDeCompras{
            var $item;

            function adicionaItem($artnr, $num){
                $this->item[$artnr] = $num;
            }

            function removeItem($artnr, $num){
                if($this->$item[$artnr] > $num){
                    $this->$item[$artnr] -= $num;
                    return true;
                }
                return false;
            }

        }

        $carrinho = new CarrinhoDeCompras;
        $carrinho->adicionaItem("Limão", 12);

        var_dump($carrinho);
    ?>
</body>
</html>