const API_URL = 'https://helha.dev.local/JS/ajax_exercices/api/rating2.php';
const HTTP_METHOD = 'POST';
const RETURN_FORMAT = 'xml';

window.onload = init;

function init() {
  $('#raty').raty({
    number: 10,
    starHalf: 'node_modules/raty-js/lib/images/star-half.png',
    starOff: 'node_modules/raty-js/lib/images/star-off.png',
    starOn: 'node_modules/raty-js/lib/images/star-on.png',
    click: function (score, evt) {
      // fonction lamda : this = objet window , fonction annonyme = objet courant (voterEl)
      enableLoader();
      disableRating();
      const params = {
        value: score,
        format: RETURN_FORMAT
      };
      executeRequest(HTTP_METHOD, API_URL, params, processRating);
    }
  });
  setInterval(() => executeRequest(HTTP_METHOD, API_URL, null, processRating), 1000);

  const rateEl = document.getElementById('rate');
  const voterEl = document.getElementById('voter');

  if (document.cookie.indexOf('voter=true') >= 0) {
    disableRating();
  }

  voterEl.onclick = function () {
    // fonction lamda : this = objet window , fonction annonyme = objet courant (voterEl)
    enableLoader();
    disableRating();
    const params = {
      value: rateEl.value,
      format: RETURN_FORMAT
    };
    executeRequest(HTTP_METHOD, API_URL, params, processRating);
  };
}

function disableRating() {
  const voterEl = document.getElementById('voter');
  voterEl.setAttribute('disabled', 'disabled');
  $('#raty').data('raty').readOnly(true);
}

function enableLoader() {
  const voterEl = document.getElementById('loader');
  loader.style.display = 'block';
}

function disableLoader() {
  const voterEl = document.getElementById('loader');
  loader.style.display = 'none';
}

function processRating(xhr, createCookie) {
  const nbVoteEl = document.getElementById('nbVote');
  const moyenneVoteEl = document.getElementById('moyenneVote');
  const errorMsgEl = document.getElementById('errorMessage');

  if (xhr.status === 200) {
    let moyenne, nombreVote;
    if (RETURN_FORMAT.toUpperCase() === 'XML') {
      moyenne = xhr.responseXML.getElementsByTagName('moyenne')[0].innerHTML;
      nombreVote = xhr.responseXML.getElementsByTagName('nombre')[0].innerHTML;
    } else {
      const voteObj = JSON.parse(xhr.responseText);
      nombreVote = voteObj.nombre;
      moyenne = voteObj.moyenne;
    }
    nbVoteEl.innerHTML = nombreVote;
    moyenneVoteEl.innerHTML = moyenne;
    // resultP.innerHTML = xhr.responseText;
    // loader.style.display = "none";
    if (createCookie) {
      document.cookie = 'voter=true';
    }
  } else {
    errorMsgEl.innerHTML = xhr.responseText;
  }
  disableLoader();
}

function executeRequest(method, url, params, callback) {
  const xhr = getXHR();
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4) {
      callback(xhr, params != null);
    }
  };
  let param_str = '';
  if (params != null) {
    Object.keys(params).forEach((key) => {
      if (param_str) {
        param_str += '&';
      }
      param_str += key + '=' + encodeURIComponent(params[key]);
    });
  }
  if (method === 'GET') {
    url += '?' + param_str;
  }
  xhr.open(method, url, true);
  if (method === 'POST') {
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(param_str);
  } else {
    xhr.send(null);
  }
}

function getXHR() {
  let xhr;
  if (window.XMLHttpRequest || window.ActiveXObject) {
    if (window.XMLHttpRequest) {
      xhr = new XMLHttpRequest();
    } else {
      xhr = new ActiveXObject('Microsoft.XMLHTTP');
    }
  }
  return xhr;
}
