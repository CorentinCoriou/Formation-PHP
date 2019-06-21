
<?php if (isset($_SESSION["security"])): ?>
    <form method="post" action="Security/logout.php">
        <input type="submit" value="Déconnexion" nom="Déconnexion">
    </form>
<?php endif; ?>

<?php if (isset($_SESSION["security"])): ?>
<p> Bienvenue <?= $_SESSION["security"]["nom"]; ?></p>
    <form method="get" action="Security/change.php">
        <input type="submit" value="Modification user" name="modification-user">
    </form>
<?php endif; ?>

<?php if (isset($_SESSION["security"])): ?>
    <form method="post" action="Security/rgpd.php">
        <input type="submit" value="Suppression user" name="suppression-user">
    </form>
<?php endif; ?>

<?php if ($errorLogin): ?>
<div>
    <p style="color: #0406ff;">Erreur de connexion !!!</p>
</div>
<?php endif; ?>

    <form method="post" action="Security/login.php">
        <p>Veuillez vous identifier !!</p>
        <div>
            <label for="login-mail">Email :</label>
            <input type="text" id="login-mail" name="email" value="<?= $errorLogin?>">
        </div>
        <div>
            <label for="login-pass">Password :</label>
            <input type="password" id="login-pass" name="pass">
        </div>

        <input type="submit" value="Authentification" nom="Authentification">
    </form>

    <br><br>

    <form method="post" action="">
        <p>Veuillez créer votre compte !!</p>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div>
            <label for="mail">Email :</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="pass">Password :</label>
            <input type="password" id="pass" name="pass">
        </div>

        <input type="submit" value="Valider" nom="valider">

    </form>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Pass</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user["nom"]; ?></td>
                <td><?= $user["prenom"]; ?></td>
                <td><?= $user["email"]; ?></td>
                <td><?= $user["pass"]; ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>