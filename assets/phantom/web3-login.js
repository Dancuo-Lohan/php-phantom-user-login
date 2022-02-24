async function connect(){
    try {
        const resp = await window.solana.connect();
        resp.publicKey.toString()
        console.log(resp.publicKey.toString());
        $('#phantomAccount').val(resp.publicKey.toString());
        document.forms['login'].submit();
    } catch (err) {
        if (err.message == "Cannot read properties of undefined (reading 'connect')") {
            if ("solana" in window) {
                const provider = window.solana;
                if (provider.isPhantom) {
                    console.log(err);
                    return provider;
                }
            }
            if (typeof provider === "undefined") {
                $("#noPhantomContent").css("visibility", "visible");
                $("#noPhantomContent").css("opacity", "1");
            }
        }
    }
}

function closeNoPhantomContent(){
    $("#noPhantomContent").css("opacity", "0");
    $("#noPhantomContent").css("visibility", "hidden");
}

function disconnect(){
    window.solana.disconnect();
    $('#phantomDisconnect').val("1");
    document.forms['login'].submit();
}

//for more details look at : https://docs.phantom.app/