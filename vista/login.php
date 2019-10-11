<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>

<div class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-md-4 col-md-iffset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="login-form" action="validarCode.php" method="POST" role="form">
                            <legend>Iniciar Sesion</legend>

                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" name="txtUsuario" id="usuario" class="form-control"
                                    placeholder="usuario" aria-describedby="helpId" autofocus required>

                                <label for="password">Password</label>
                                <input type="text" name="txtPassword" id="password" class="form-control"
                                    placeholder="*********" aria-describedby="helpId" required>
                                <button type="submit" class="btn btn-sucess">Ingresar</button>
                                <small id="helpId" class="text-muted">Help text</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>