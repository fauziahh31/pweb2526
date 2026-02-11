<html>
    <h1>From HTML dengan PHP</h1>
<from action="prosEs.php" method="post">
    <div>
        <labe>Nama</label><input type="text" name="nama"/>
</div>
    <div>
        <labe>Email</label><input type="text" name="email"/>
</div>
        <input type="submit" value="simpan"/>
</form>
<?php
if (isset($_POST['submit'])){
    echo 'Nama Anda : '.$_POST['nama'].'<br/>';
    echo 'Email Anda : '.$_POST['email'];
}?>
</html>