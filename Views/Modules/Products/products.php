<div class="content">
    <div class="animated fadeIn">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="container"><a href="insertProduct" class=" w-25 p-3 btn btn-success">Añadir Productos</a><br></div>
                    <table class="table" id="products">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">TITULO</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- data -->
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>  
    </div>
</div>
<script>
    window.onload = function() {
        getProducts();
    };
</script>