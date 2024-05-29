function createXMLHttpObject() {
  var xmlhttp = false;

  try {
    xmlhttp = new ActiveXObject("Msxm12.XMLHttp");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHttp");
    } catch (E) {
      xmlhttp = false;
    }
  }

  if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
    xmlhttp = new XMLHttpRequest();
  }

  if (!xmlhttp) {
    alert("Telah terjadi kesalahan saat pembuatan XMLHttpRequest object!");
  }

  return xmlhttp;
}

function requestContent() {
  reqObj = createXMLHttpObject();
  reqObj.open("GET", "contactList.xml", true);

  reqObj.onreadystatechange = function () {
    if (reqObj.readyState == 4 && reqObj.status == 200) {
      dataXML = reqObj.responseXML;
      contact = dataXML.getElementsByTagName("contact")[0];

      nama = contact.getElementsByTagName("nama")[0].firstChild.data;
      alamat = contact.getElementsByTagName("alamat")[0].firstChild.data;
      phone_1 = contact.getElementsByTagName("phone")[0].firstChild.data;
      phone_2 = contact.getElementsByTagName("phone")[1].firstChild.data;
      phone_3 = contact.getElementsByTagName("phone")[2].firstChild.data;
      email = contact.getElementsByTagName("email")[0].firstChild.data;
      document.getElementById("txtName").innerHTML = nama;
      document.getElementById("txtAddress").innerHTML = alamat;
      document.getElementById("txtMobilePhone").innerHTML = phone_1;
      document.getElementById("txtHomePhone").innerHTML = phone_2;
      document.getElementById("txtOfficePhone").innerHTML = phone_3;
      document.getElementById("txtEmail").innerHTML = email;
      document.getElementById("divContent").innerHTML = "";
      console.log(nama);
      console.log(alamat);
      console.log(phone_1);
      console.log(phone_2);
      console.log(phone_3);
      console.log(email);
    } else {
      document.getElementById("divContent").innerHTML = "loading..";
    }
  };

  reqObj.send(null);
}
