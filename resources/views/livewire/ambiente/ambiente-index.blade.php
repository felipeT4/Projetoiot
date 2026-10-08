<div>
     
     <a class=" bg-success text-white bi bi-plus-house-fill p-3 rounded-3 text-decoration-none float-sm-end m-4 mb-4" href={{Route ('ambiente.create')}}><b> Novo Ambiente </b></a>
    <h2 class="d-flex text-center m-3 p-3 rol-12 ">Ambientes</h2> 
    <div class="container">
    <div class=" position-absolute top-40 start-50 translate-middle mt-5 shadow-sm col-8"  style="max-width: 50rem;">
    <table class="table table-striped m-5 mb-5 ">
        <thead class="">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Status</th>
         
            </tr>
        </thead>

        <tbody>
            @foreach ($ambientes as $a)
            <tr> 
                <th>{{$a ->id}}  </th>
                <th>{{$a ->nome}}</th>
                <th>{{$a ->descricao}}</th>
                <th><input class="form-check-input mt-2" type="checkbox" role="switch" id="status-{{$a->id}}"
                    wire:click="status ({{$a ->id}})"
                    @checked($a -> status)> 
                    <span class=" mx-3 badge bg-{{$a->status ? 'success': 'danger'}}">
                        {{$a -> status ? 'ATIVO': 'INATIVO'}}
                    </span> 
                    

                   <button type="button" class="bg-white text-danger border-danger bi bi-trash rounded-1 ms-5 " wire:click="delete"></button>
                    <a class=" mb-1 btn btn-sm btn-outline-success bg-white text-success border-success bi bi-pencil " href={{Route ('ambiente.edit', ['id' => $a->id])}}><b>  </b></a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>