  function validation() {

      var ge = document.myform.gender;
      var imgs = document.myform.Images;
      var flag = 0;

      var uservalue = document.getElementById('user').value;
      var namevalue = document.getElementById('name').value;
      var numbervalue = document.getElementById('number').value;
      var emailvalue = document.getElementById('email').value;
      var agevalue = document.getElementById('age').value;
      var passwordvalue = document.getElementById('password').value;
      var confirmvalue = document.getElementById('confirm').value;
      var geerror = document.getElementById("geerror");

      if (uservalue == "") {
          document.getElementById('usernameerror').innerHTML = " ** Please Fill the username field";
          return false;
      }
      if ((uservalue.length <= 2) || (uservalue.length > 20)) {
          document.getElementById('usernameerror').innerHTML = " ** Username length must be between 2 and 20";
          return false;

      }


      if (namevalue == "") {
          document.getElementById('nameerror').innerHTML = " ** Please Fill the name field";
          return false;
      }

      if ((namevalue.length <= 2) || (namevalue.length > 20)) {
          document.getElementById('nameerror').innerHTML = " ** Name length must be between 2 and 20";
          return false;
      }
      if (!isNaN(namevalue)) {
          document.getElementById('nameerror').innerHTML = " ** Only characters are allowed";
          return false;
      }



      if (numbervalue == "") {
          document.getElementById('numbererror').innerHTML = " ** Please Fill the Contact number field";
          return false;
      }
      if (numbervalue.length != 10) {
          document.getElementById('numbererror').innerHTML = " ** User must write 10 digits number only";
          return false;
      }



      if (emailvalue == "") {
          document.getElementById('emailerror').innerHTML = " ** Please Fill the email field";
          return false;
      }
      if (emailvalue.indexOf('@') <= 0) {
          document.getElementById('emailerror').innerHTML = " ** @ Invalid position";
          return false;
      }
      if ((emailvalue.charAt(emailvalue.length - 4) != '.') && (emailvalue.charAt(emailvalue.length - 3) != '.')) {
          document.getElementById('emailerror').innerHTML = " ** Please Fill the email field";
          return false;
      }




      if (agevalue == "") {
          document.getElementById('ageerror').innerHTML = " ** Please Fill the Age field";
          return false;
      }

      if (ge.value.length <= 0) {
          geerror.innerHTML = "please Select gender";
          flag++;
      } else {
          geerror.innerHTML = " ";
      }

      if (imgs.value.length <= 0) {
          ierror.innerHTML = "Please Select image";
          flag++;
      } else {
          ierror.innerHTML = " ";
      }

      if (passwordvalue == "") {
          document.getElementById('passworderror').innerHTML = " ** Please Fill the Password field";
          return false;
      }
      if ((passwordvalue.length <= 5) || (passwordvalue.length > 20)) {
          document.getElementById('passworderror').innerHTML = " ** Password length must be greater than 5";
          return false;
      }

      if (passwordvalue != confirmvalue) {
          document.getElementById('confirmerror').innerHTML = " ** Password are not matching";
          return false;
      }

      if (confirmvalue == "") {
          document.getElementById('confirmerror').innerHTML = " ** Please Fill the Password again";
          return false;
      }
      if (flag == 0) {

          return true;
      } else {
          return false;
      }
  }