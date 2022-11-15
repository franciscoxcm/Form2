<?php
require_once 'head.php';
require_once 'config.php';

$query = 'SELECT * FROM produtos';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $produtos = $sql->fetchALL(PDO::FETCH_ASSOC);
} else {
    $produtos = [];
}?>
<div class="row">
<?php
foreach ($produtos as $produto) : ?>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo $produto['imagem']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><b><?php echo $produto['nome']; ?></b></h5>
                    <p class="card-text text-secondary"><?php echo $produto['ingredientes']; ?></p>
                    <p class="card-text"><small class="text-danger"><b><?php echo $produto['preco']; ?>€</b></small></p>
                    <button type="button" class="btn btn-outline-secondary btn-sm">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php
require_once 'foot.php';
?>