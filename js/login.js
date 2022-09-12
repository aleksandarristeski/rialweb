jQuery(document).ready(function() {
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  function createElement(element) {
    let msg = "<span style='text-transform: capitalize'>"+$(element).attr("title")+"</span>"
    $(element).after("<strong class='error'>"+msg+"</strong>")
    $(element).focus()
  }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  $("#loginform").submit(function(event) {      
    $(".error").remove()
    let email = $("#email").val()
    let pwd = $("#password_login").val()
    let valid = true
     
    if(email === "") {
      createElement("#email")
      valid = false
    }
    if(pwd === "") {
      createElement("#password_login")
      valid = false
    }
    if(!valid) {
      event.preventDefault()
    }else {
      return
    }
  })
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//console.log(password)
  $("#registerform").validate({
    errorElement:'div',
    wrapper: "div",
    errorPlacement: function(error, element) {
      offset = element.offset();
      error.insertBefore(element)
      error.css('left', offset.left + element.outerWidth());
      error.css('top', offset.top);
    },
    rules:  {
      anrede:{
        required: true,
      },
      name: {
        required: true,
        minlength: 3
      },
      vorname: {
        required: true, 
        minlength: 3
      },
      email: {
        required: true,
        email: true
      },
      farbe: {
        required: true,
      },
      password: {
        required: true,
        minlength: 4
      },
      repassword: {
        required: true,
        equalTo: password
      },
      akzept: {
        required: true,
      }
    },//ende rules
    messages: {
       anrede:{
        required: "Anrede ist ein Pflichtfeld",
      },
      name: {
        required: "Nachname ist ein Pflichtfeld",
        minlength: "Name muss mindestens 3 Zeichen haben"
      },
      vorname: {
        required: "Vorname ist ein Pflichtfeld",
        minlength: "Vorname muss mindestens 3 Zeichen haben"
      },
      email: {
        required: "E-Mail ist ein Pflichtfeld",
        email: "E-Mail-Muster: test@test.de"
      },
      farbe: {
        required: "Farbe ist Plichtfeld"
      },
      password: {
        required: "Passwort ist ein Pflichtfeld",
        minlength: "Passwort muss mindestens 4 Zeichen haben"
      },
      repassword: {
        required: "Bitte das Passwort wiederholen",
        equalTo: "Passwörter sind nicht gleich"
      },
      akzept: {
        required: "(Pflichtfeld)"
      }
    }//ende messages
  });//ende validate 
  
  $("#registerform").submit(function() {
    $(this).get(0).setAttribute("action", "auth/register.php");
  });
})//ende ready   