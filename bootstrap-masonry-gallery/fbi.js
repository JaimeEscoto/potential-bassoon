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
  alert("hola");
  if (document.getElementById("nombreAutor" + id)) {

    document.getElementById("nombreAutor" + id).disabled = false;;

  }
  if (document.getElementById("anio" + id)) {

    document.getElementById("anio" + id).disabled = false;;

  }
  alert("hola");

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