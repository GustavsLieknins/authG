<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Register</h1>

<form method="POST">
        <span class="expla">Password jabut 8 rakstzimem, 1 mazam, 1 lielam, 1 ciparam un 1 spec char</span>
        <br>
        <span class="expla">Email jabut atbilstosam</span>
        <br>
    <label>
        Email:
        <input name="email" type="email" style="<?= isset($errors["email"]) ? "border: 1px solid red" : "" ?>">
        <?php if(isset($errors["email"])) { ?>
            <p><?= $errors["email"] ?></p>
        <?php } ?>
    </label>
    <label>
        Password:
        <input name="password" type="password" style="<?= isset($errors["password"]) ? "border: 1px solid red;" : "" ?>">
        <?php if(isset($errors["password"])) { ?>
            <p><?= $errors["password"] ?></p>
        <?php } ?>
    </label>
    <button>Continue</button>
</form>

<?php require "views/components/footer.php" ?>