<?php require_once "section/Header.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>login:</h2>
                <h3>test</h3>
                <hr>
                <form action="../login.php" method="post">
                    <div class="form-group">
                        <label for="username">username:</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input type="checkbox" name="remember"/>remember me
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
                <?php if (!is_null($status)): ?>
                    <div class="alert alert-danger">
                        <?=$status?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php require_once "section/Footer.php"?>