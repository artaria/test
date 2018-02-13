<?php require_once "section/Header.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Register</h2>
                <hr>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" name="name" id="" class="form-control" value="<?=old('name')?>" required>
                    </div>
                    <div class="form-group">
                        <label for="family">family:</label>
                        <input type="text" name="family" id="" class="form-control" value="<?=old('family')?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">username:</label>
                        <input type="text" name="username" id="" class="form-control" value="<?=old('username')?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="text" name="email" id="" class="form-control" value="<?=old('email')?>"required>
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" name="password" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
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