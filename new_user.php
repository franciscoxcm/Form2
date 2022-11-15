<?php
require_once 'head.php';
require_once 'config.php';
?>

<div class="container">
    <div class="form-control">
        <div class="d-flex justify-content-center arredondar">
            <form class="form" action="registar.php" method="POST">
                <h1 class="card-header">New User</h1>
                <div class="mb-3 input-group">
                    <input class="form-control"  type="t" name="email" placeholder="E-mail">
                </div>
                <div class="mb-3 input-group">
                    <input class="form-control" type="test" name="username" placeholder="UserName">
                </div>

                <div class="mb-3 input-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="mb-3 input-group">
                    <input class="form-control" type="test" name="morada" placeholder="Morada">
                </div>
                <div class="mb-3 input-group">
                    <input class="form-control" type="test" name="telefone" placeholder="Telefone">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">REGISTAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'foot.php'
?>