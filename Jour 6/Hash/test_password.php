<form action="decrypt_password.php" method="post">
    <label for="password">Mot de Passe:</label>
    <input type="password" id="password" name="password" />
    <label for="hashedpassword">Mot de Passe chiffré :</label>
    <input type="password" id="hashedpassword" name="hashedpassword" />
    <button type="submit">Hasher le mot de passe</button>
</form>