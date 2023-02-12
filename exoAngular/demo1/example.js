function getXHR() {
    let xhr = null;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) { // IE 
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
        return xhr;
    } else {
        alert("Browser not supported");
        return null;
    }
}


window.onload = () => {

    document.getElementById("sendButton").onclick = () => {
        const name = document.getElementById('name').value;
        const xhr = getXHR();
        // 2. Ouverture du flux http
        xhr.open("GET", "backend/traitement.php", true);
        // 3. Envoie
        xhr.send(null);
        // 4. on traite coté backend
        // 5. On traite le resultat
        xhr.onreadystatechange = () => {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    document.getElementById("result").innerHTML = xhr.responseText;
                } /* else {
                document.getElementById("loader").innerHTML = xhr.responseText;
            } */
            }
        }
    }
}