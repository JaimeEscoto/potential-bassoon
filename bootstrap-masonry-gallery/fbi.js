//Get geolocationData
var geolocationData = null;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    //document.getElementById("demo").innerHTML = myObj.ip + myObj.country_code;
    geolocationData = myObj;
  }
};
xmlhttp.open("GET", "http://freegeoip.net/json/", true);
xmlhttp.send();

//download zotero
function downloadZotero(filename, text) {
  var element = document.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
  element.setAttribute('download', filename);

  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}
//functions
function getAutores() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(divname).innerHTML = this.responseText;
    }
  };

  xmlhttp.open("GET", "getAutores.php", true);

  xmlhttp.send();

}

function enableControls(id) {
  //  alert(nombreInput);
  document.getElementById("name" + id).disabled = false;
  //document.getElementById("enableb" + id).style.display = "none";
  //document.getElementById("updateb" + id).style.display = "block";
  //alert("hola");
  if (document.getElementById("nombreAutor" + id)) {

    document.getElementById("nombreAutor" + id).disabled = false;;

  }
  if (document.getElementById("anio" + id)) {

    document.getElementById("anio" + id).disabled = false;;

  }
  if (document.getElementById("definicion" + id)) {

    document.getElementById("definicion" + id).disabled = false;;

  }
  if (document.getElementById("nombreLibro" + id)) {

    document.getElementById("nombreLibro" + id).disabled = false;;

  }
  if (document.getElementById("pagina" + id)) {

    document.getElementById("pagina" + id).disabled = false;;

  }

  //alert("hola");

}

function saveAutor() {
  if (document.getElementById("loader")) {

    var x = document.getElementById("loader");
    x.style.display = "block";
  }
  var nombreAutor = document.guardarAutor.nombreAutor.value;
  //var edad = document.formu.edad.value;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById(divname).innerHTML = this.responseText;
      location.reload();
      //alert(this.responseText);
    }
  };

  xmlhttp.open("GET", "saveAutor.php?nombreAutor=" + nombreAutor + "&ip=" + geolocationData.ip + "&city=" + geolocationData.city + "&country_code=" + geolocationData.country_code + "&latitude=" + geolocationData.latitude + "&longitude=" + geolocationData.longitude, true);

  xmlhttp.send();

}

function saveLibro() {
  if (document.getElementById("loader")) {

    var x = document.getElementById("loader");
    x.style.display = "block";
  }
  var nombreLibro = document.guardarLibro.nombreLibro.value;
  var anio = document.guardarLibro.anio.value;
  var codigoAutor = document.guardarLibro.nombreAutor.value;
  //var edad = document.formu.edad.value;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById(divname).innerHTML = this.responseText;
      location.reload();
      //  alert(this.responseText);
    }
  };

  xmlhttp.open("GET", "saveLibro.php?nombreLibro=" + nombreLibro + "&anio=" + anio + "&codigoAutor=" + codigoAutor + "&ip=" + geolocationData.ip + "&city=" + geolocationData.city + "&country_code=" + geolocationData.country_code + "&latitude=" + geolocationData.latitude + "&longitude=" + geolocationData.longitude, true);

  xmlhttp.send();

}

function saveDefinicion() {
  if (document.getElementById("loader")) {

    var x = document.getElementById("loader");
    x.style.display = "block";
  }
  var termino = document.guardarDefinicion.termino.value;
  var definicion = document.guardarDefinicion.definicion.value;
  var nombreLibro = document.guardarDefinicion.nombreLibro.value;
  var pagina = document.guardarDefinicion.pagina.value;
  //var edad = document.formu.edad.value;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById(divname).innerHTML = this.responseText;
      location.reload();
      //alert(this.responseText);
    }
  };

  xmlhttp.open("GET", "saveDefinicion.php?termino=" + termino + "&definicion=" + definicion + "&nombreLibro=" + nombreLibro + "&pagina=" + pagina + "&ip=" + geolocationData.ip + "&city=" + geolocationData.city + "&country_code=" + geolocationData.country_code + "&latitude=" + geolocationData.latitude + "&longitude=" + geolocationData.longitude, true);

  xmlhttp.send();

}

function updateAutor(codigo) {
  if (document.getElementById("loader")) {

    var x = document.getElementById("loader");
    x.style.display = "block";
  }
  var nombreAutor = document.getElementById("name" + codigo).value;
  //var edad = document.formu.edad.value;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById(divname).innerHTML = this.responseText;
      location.reload();

      //alert(this.responseText);
    }
  };

  xmlhttp.open("GET", "updateAutor.php?codigo=" + codigo + "&nombreAutor=" + nombreAutor, true);

  xmlhttp.send();

}

function updateLibro(codigo) {

  if (document.getElementById("loader")) {

    var x = document.getElementById("loader");
    x.style.display = "block";
  }

  var nombreLibro = document.getElementById("name" + codigo).value;
  var nombreAutor = document.getElementById("nombreAutor" + codigo).value;
  var anio = document.getElementById("anio" + codigo).value;

  //var edad = document.formu.edad.value;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById(divname).innerHTML = this.responseText;
      location.reload();

      //alert(this.responseText);
    }
  };

  xmlhttp.open("GET", "updateLibro.php?codigo=" + codigo + "&nombreLibro=" + nombreLibro + "&nombreAutor=" + nombreAutor + "&anio=" + anio, true);

  xmlhttp.send();

}

function updateDefinicion(codigo) {

  if (document.getElementById("loader")) {

    var x = document.getElementById("loader");
    x.style.display = "block";
  }

  var termino = document.getElementById("name" + codigo).value;
  var nombreLibro = document.getElementById("nombreLibro" + codigo).value;
  //var termino = document.getElementById("termino" + codigo).value;
  var definicion = document.getElementById("definicion" + codigo).value;
  var pagina = document.getElementById("pagina" + codigo).value;

  //var edad = document.formu.edad.value;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById(divname).innerHTML = this.responseText;
      location.reload();

      //alert(this.responseText);
    }
  };

  xmlhttp.open("GET", "updateDefinicion.php?codigo=" + codigo + "&termino=" + termino + "&definicion=" + definicion + "&nombreLibro=" + nombreLibro + "&pagina=" + pagina, true);

  xmlhttp.send();

}