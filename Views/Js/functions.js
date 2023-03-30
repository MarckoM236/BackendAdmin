function logout(){
    $.ajax({
      url: '/PHP/backendMVC/Controllers/AjaxController.php',
      type: 'POST',
      data: {function: 'logout',controller:'Administrator'},
      dataType: 'json',
      success: function(data) {
        alert('Sesion Finalizada');
        location.replace('/PHP/backendMVC/');
      },
      error: function() {
        alert('Error al finalizar la Sesion');
      }
    });
}

function entrar(){
  var datas = new FormData(document.getElementById('loginform'));
  var emai = datas.get('email');
  var pass = datas.get('passw');
  $.ajax({
    url: '/PHP/backendMVC/Controllers/AjaxController.php',
    type: 'POST',
    data: {function: 'login',controller:'Administrator',email:emai,passw:pass},
    dataType: 'json',
    success: function(data) {
      if(data.message==="sesion OK"){
        //alert('Sesion iniciada');
      location.replace('/PHP/backendMVC/');
      }
      else{
        
        $('#response').addClass('alert alert-danger').text(data.message);
      }
      
    },
    error: function(data) {
      alert('Error al iniciar la sesion');
    }
  });
}





