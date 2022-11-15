<?php
require_once 'head.php';
require_once 'config.php';
?>

<div>
    <!-- 1 RETANGULO ROXO -->
    <div>
        <!-- 2 RETANGULO ARREDONDADO -->
        <div>
            <!-- TITULO -->
            <h1>Recuperar dados</h1>
        </div>
        <form action="procurar_dados.php" method="POST">
            <div>
                <input type="text" name="email" placeholder="E-mail">
            </div>
            <div>
                <button>Fornecer dados</button>
            </div>
            <div>
                <?php
                if (!empty($_POST["email"])) {
                    $emails = $_POST["email"];
                    $sql = "SELECT * FROM userdados WHERE email = ?";
                    $sql = $pdo->prepare($sql);

                    if ($sql->execute([$emails])) {
                        $emails = $sql->fetchAll(PDO::FETCH_ASSOC);
                        if (!empty($emails)) {
                            foreach ($emails as $email) : ?>
                                <h6>USERNAME - <?php echo $email['username']; ?></h6>,
                                <h6>PASSWORD - <?php echo $email['password']; ?></h6>
                            <?php endforeach;
                        } else {?><h6>E-mail não encontrado</h6><?php } }} ?>
            </div>
        </form>
    </div>
</div>
<?php
require_once 'foot.php'
?>