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

const buttonEl = document.getElementById("sendButton");
window.onload = () => {
  const resultEl = document.getElementById("result");
  buttonEl.onclick = () => {
    buttonEl.disabled = "disabled";
    const xhr = getXHR();
    // 2. Ouverture de flux Http
    const rating = document.getElementById("note").value;
    xhr.open("get", "./traitement.php?rating=" + rating, true);
    // 3. Envoi
    xhr.send(null);
    // 4. On traite coté backend
    // 5. On traite le résultat
    xhr.onreadystatechange = () => {
      if (xhr.readyState == 4 && xhr.status == 200) {
        buttonEl.disabled = "";
        resultEl.innerHTML = JSON.stringify(xhr.responseText);
      }
    }; 
  };
};
