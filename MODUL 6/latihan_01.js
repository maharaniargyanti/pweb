// MAHARANI ARGYANTI NURAHMAN
// 227006038

function createXMLHttpObject() {
  var xmlhttl = false;

  try {
    xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }

  if (!xmlhttp) {
    alert("Terdapat kesalahan saat membuat XMLHttpRequest object!!");
  } else {
    alert("XMLHttp telah berhasil dibuat!!");
  }

  return xmlhttp;
}
