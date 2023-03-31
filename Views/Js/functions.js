//---------------------LOGIN-----------------------------------------------
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
//------------------------------FIN LOGIN-----------------------------------------------

//----------------------------PRODUCTS-----------------------------------------------

function getProducts(){
  $.ajax({
    url: '/PHP/backendMVC/Controllers/AjaxController.php',
    type: 'POST',
    data: {function: 'getAll',controller:'Product'},
    dataType: 'json',
    success: function(datas) {
      if(datas.message==="OK"){
        for(let i=0; i<=Object.keys(datas.data).length;i++) {
          let fila = $("<tr>");
            fila.append($("<td>").text(datas.data[i].id));
            fila.append($("<td>").text(datas.data[i].category));
            fila.append($("<td>").text(datas.data[i].title));
            fila.append($("<td>").text(datas.data[i].descrip));
            fila.append($("<td>").html("<button onclick='updateProduct("+datas.data[i].id+");' class='btn btn-success'>Editar</button> | <button onclick='deleteProduct("+datas.data[i].id+")' class='btn btn-danger'>Eliminar</button>"));
            $("#products tbody").append(fila);
        }
      }
      else{
        $("#products tbody").append(datas.message);
      }
      
    },
    error: function() {
      $("#products tbody").append(datas.message);
    }
  });
}

function insertProduct(){
  var formData = new FormData(document.getElementById('insertform'));
  let products={categoria:formData.get('categoria'),tipo:formData.get('tipo'),ruta:formData.get('ruta'),titulo:formData.get('titulo'),
  detalle:formData.get('detalle'),precio:formData.get('precio'),descripcion:formData.get('descripcion')};
  console.log(products);
    $.ajax({
      url: '/PHP/backendMVC/Controllers/AjaxController.php',
      type: 'POST',
      data: {function: 'insertProduct',controller:'Product',products},
      dataType: 'json',
      success: function(data) {
        if(data.message==="Error"){
          $('#response').addClass('alert alert-danger').text(data.data);
        }
        else{
          alert(data.message);
          console.log(data.data);
          location.replace('/PHP/backendMVC/products');
        }
          
      },
      error: function() {
        alert('Error al intentar eliminar el producto');
      }
    });
  }

function updateProduct(id){
  alert('Editar '+id);
}

function deleteProduct(idd){
  if(confirm("Realmente desea eliminar este producto?")){
    $.ajax({
      url: '/PHP/backendMVC/Controllers/AjaxController.php',
      type: 'POST',
      data: {function: 'deleteProduct',controller:'Product',id:idd},
      dataType: 'json',
      success: function(data) {
        if(data.message==="Producto Eliminado"){
          alert(data.message);
          location.replace('/PHP/backendMVC/products');
        }
        else{
          alert(data.message);
        }
          
      },
      error: function() {
        alert('Error al intentar eliminar el producto');
      }
    });
  }
  
}




