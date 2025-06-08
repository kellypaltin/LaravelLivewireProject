@section("titulo", "Gestion Categorias")

<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h1>Categoria</h1>
                    <!-- {{ $categorias }} -->

                    
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DETALLE</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <TBody>
                            @foreach ($categorias as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->nombre }}</td>
                                <td>{{ $cat->detalle }}</td>
                                <td>
                                    <button class="btn btn-warning" wire:click="editarCategoria({{$cat->id}})"><i class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            
                            @endforeach
                        </TBody>
                    </table>
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="class-card">
            <div class="card-body">
                <form wire:submit.prevent="guardarCategoria">
                    <div class="form-group">
                        <label for="nom">Ingrese Nombre</label>
                        <input type="text" wire:model.lazy="nombre" class="form-control @error('nombre')is-invalid @enderror" id="nom">
                        @error('nombre') <span class="alert alert-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                    <input type="text" wire:model.lazy="detalle" class="form-control @error('detalle') is-invalid @enderror" id="detalle">
                    @error('detalle') <span class="alert alert-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-info btn-block">{{($id_cat != null)?'Modificar Categoria':'Guardar Categoria'}}</button>
                    <button type="reset" class="btn btn-primary">Reset</button>

                </form>
            </div>
        </div>
    </div>

</div>