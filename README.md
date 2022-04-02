# A login system in PHP/JS for Phantom wallet (Solana)
See a demo on : https://estrimon.com/phantom-wallet/index.php
<br><br>
The login check if the user have the Phantom wallet extension, if the user have this extension he can login with it. Else if the user don't have it, a popup appears like "Hey, you don't have the extension, download it on ..." (You can try it with an incognito window if you have the extension)

<pre>When an user is connected if you want to register it on a database, you can use the variable $_SESSION['phantomAccount'],
it contain the id of the Phantom wallet (44 char string)</pre>
If you have a question you can create an issue
<pre>GADGET : The system detect where people come from and change text with the local language (just for French - look at : settings/translation)
With the ip of users</pre>
