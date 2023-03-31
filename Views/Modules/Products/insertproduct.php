<div class="content">
    <div class="animated fadeIn">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form id="insertform">
                            <div id="response"></div>
                            <h3>Nuevos productos</h3><br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Categoria" name="categoria">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tipo" name="tipo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ruta</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Ruta" name="ruta">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Titulo" name="titulo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detalle</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Detalle" name="detalle">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="$precio" name="precio">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripcion</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                            </div>
                            
                            <button type="button" class="btn btn-primary" onclick="insertProduct();">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>