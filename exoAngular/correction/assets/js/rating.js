const HTTP_METHOD = 'GET';
const FORMAT = 'json';


window.onload = () => {
    const cookiePresent = document.cookier.includes('vote');

    const ratingEl = document.getElementById('rating');
    const sendButton = document.getElementById('send');
    const nbVoteEl = document.getElementById('nbVote');
    const moyenneEl = document.getElementById('moyenne');
    // const LoaderEl = document.getElementById('loader');


    sendButton.onclick = () => {
        console.log(ratingEl.value);
        // loaderEl = 
        buttonEl.disabled = "disabled";
        const xhr = getXHR();
        // 2. Ouverture de flux Http
        xhr.open(HTTP_METHOD, HTTP_METHOD == 'GET' ? "backend/rating.php?rating=" + ratingEl.value + '&format=' + FORMAT : 'backend/rating.php', true);
        if (HTTP_METHOD == 'POST') {
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        }
        // 3. Envoi
        xhr.send(HTTP_METHOD == 'GET' ? null : "value=" + ratingEl.value + '&format=' + FORMAT);
        // 4. On traite coté backend
        // 5. On traite le résultat
        xhr.onreadystatechange = () => {
            if (xhr.readyState == 4 && xhr.status == 200) {
                buttonEl.disabled = "";
                let nb, moyenne;
                if (FORMAT == 'json') {
                    const ratingObj = JSON.parse(xhr.responseText);
                    nbVoteEl.innerHTML = ratingObj;
                    moyenneEl.innerHTML = ratingObj
                } else if (FORMAT == 'xml') {
                    nb = xhr.responseXML.getElementByTagName('nombre')[0].textContent;
                    moyenne = xhr.responseXML.getElementByTagName('moyenne')[0].textContent;
                }
                nbVoteEl = nb;
                moyenneEl = moyenne;
                document.cookie('vote');
            }
        }
    }
}

function getXHR() {
    let xhr = null;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            // < I.E 7
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
        alert("Browser not supported !");
        return null;
    }
}