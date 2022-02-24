<!-- Hidden form in post. Detect connection or disconnection of client -->
<form name="login" action="#" method="post">
    <input hidden id="phantomDisconnect" name="phantomDisconnect" value="">
    <input hidden id="phantomAccount" name="phantomAccount" value="">
</form>

<?php
    if(isset($_POST['phantomAccount']) && !empty($_POST['phantomAccount'])) {
        $_SESSION['phantomAccount'] = $_POST['phantomAccount']; //If connected create a session with the id of the wallet
    }
    if(isset($_POST['phantomDisconnect']) && !empty($_POST['phantomDisconnect'])) {
        unset($_SESSION['phantomAccount']); //If deconnected delete session
    }
    if(isset($_SESSION['phantomAccount']) && !empty($_SESSION['phantomAccount'])) {
        echo'<button onclick="disconnect()">';t("Log out");echo'</button>'; //show log out button if connected
    }else{
        echo'<button onclick="connect()">';t("Login with Phantom");echo'</button>'; //else show login button
    }
?>
<div id="noPhantomContent" class="noPhantomContent" onclick="closeNoPhantomContent()">
    <div class="noPhantom">
        <h3><?php t("You need to download Phantom to login : ")?></h3>
        <a href="https://phantom.app/" target="_blank"><?php t("https://phantom.app/")?></a>
    </div>
</div>