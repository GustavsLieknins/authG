<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Login</h1>

<form method="POST">
    <label>
        Email:
        <input name="email" type="email"  style="<?= isset($errors["email"]) ? "border: 1px solid red" : "" ?>">
        <?php if(isset($errors["email"])) { ?>
            <p><?= $errors["email"] ?></p>
        <?php } ?>
    </label>
    <label>
        Password:
        <input name="password" type="password"  style="<?= isset($errors["email"]) ? "border: 1px solid red" : "" ?>">
        <?php if(isset($errors["password"])) { ?>
            <p><?= $errors["password"] ?></p>
        <?php } ?>
    </label>
    <button>Continue</button>
</form>

<p class="flash"><?= $_SESSION["flash"] ?? "" ?></p>

<?php require "views/components/footer.php" ?>