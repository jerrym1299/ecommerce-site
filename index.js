function checkLogin(usernameId, passwordId, serverUrl, outputId){
    var username = document.getElementById(usernameId);
    var password = document.getElementById(passwordId);

    fetch (url, {headers: {'username': username, 'password': password}}).then(function (data){
        document.getElementById(outputId).innerHTML = data;
    });
}
