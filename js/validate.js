$.validator.addMethod("checkPasswordComplexity", function(value, element)
{
  var hasDigits = /[0-9]/.test(value);
  var hasCaps = /[A-Z]/.test(value);
  return hasDigits && hasCaps;

},
"Passworts muss mindestens eine Zahl und Grossbuchstaben enthalten" //Auszugebende Message falls nicht erfüllt.
);

$("#form").validate({
  rules:
  {
    inputUsername:
    {
      required: true,
      minlength: 3
    },

    inputEmail:
    {
      required: true,
      email: true
    },

    inputRole:
    {
      required: true,
    },

    inputPassword:
    {
      required: true
    },

    inputConfirmPassword:
    {
      equalTo: inputPassword
    }

  },

  messages:
  {
    inputUsername:
    {

    },

    inputEmail:
    {

    },

    inputRole:
    {

    },

    inputPassword:
    {

    },

    inputConfirmPassword:
    {

    }



  }
});
