
<div class="content">
    <div class="animated fadeIn">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form id="updateform">
                            <div id="response"></div>
                            <h3>Actualizar productos</h3><br>
                            <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'] ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria</label>
                                <select name="categoria" class="form-control" id="categoria" > 
                                    <option id="opt" value="" selected></option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo</label>
                                <input type="text" class="form-control" id="tipo" aria-describedby="emailHelp" placeholder="Enter Tipo" name="tipo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ruta</label>
                                <input type="text" class="form-control" id="ruta" aria-describedby="emailHelp" placeholder="Enter Ruta" name="ruta">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo</label>
                                <input type="text" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Enter Titulo" name="titulo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detalle</label>
                                <input type="text" class="form-control" id="detalle" aria-describedby="emailHelp" placeholder="Enter Detalle" name="detalle">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio</label>
                                <input type="text" class="form-control" id="precio" placeholder="$precio" name="precio">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripcion</label>
                                <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
                            </div>
                            
                            <button type="button" class="btn btn-primary" onclick="updateProduct();">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        getProductById(<?php echo $_GET['id'] ?>);
        getCategory();    
    };
    
    
    
</script>
