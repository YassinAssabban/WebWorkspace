// 1. Instancier XHR
function getXHR() {
  let xhr = null;
  if (window.XMLHttpRequest || window.ActiveXObject) {
    if (window.ActiveXObject) {
      // < I.E 7
      try {
        xhr = new ActiveXObject('Msxml2.XMLHTTP');
      } catch (e) {
        xhr = new ActiveXObject('Microsoft.XMLHTTP');
      }
    } else {
      xhr = new XMLHttpRequest();
    }
    return xhr;
  } else {
    alert('Browser not supported !');
    return null;
  }
}

window.onload = () => {
  const buttonEl = document.getElementById('sendButton');
  const name = document.getElementById('name').value;
  const loaderEl = document.getElementById('loader');
  const resultEl = document.getElementById('result');

  buttonEl.onclick = () => {
    buttonEl.disabled = 'disabled';
    const xhr = getXHR();
    // 2. Ouverture de flux Http
    xhr.open('GET', 'backend/traitement.php?name=' + name, true);
    // 3. Envoi
    xhr.send(null);
    loaderEl.style.display = 'inline';
    // 4. On traite coté backend
    // 5. On traite le résultat
    xhr.onreadystatechange = () => {
      if (xhr.readyState == 4 && xhr.status == 200) {
        loaderEl.style.display = 'none';
        buttonEl.disabled = '';
        resultEl.innerHTML = xhr.responseText;
      }
    };
  };
};
