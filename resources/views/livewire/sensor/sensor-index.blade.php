<div>
     
     <a class="shadow-sm bg-primary text-white bi bi-plus-circle p-3 rounded-3 text-decoration-none float-sm-end m-4 mb-4" href={{Route ('sensor.create')}}><b> Cadastrar Sensor </b></a>
    <h2 class="d-flex text-center m-3 p-3 rol-12 ">Painel de Sensores</h2> 
    <div class=" position-absolute top-40 start-50 translate-middle mt-5  col-8"  style="max-width: 50rem;">
    <table class="table table-striped m-5 mb-5 ">
        <thead class="">
            <tr>
                <th>ID</th>
                <th>ambiente_id</th>
                <th>Código</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Status</th>
         
            </tr>
        </thead>

        <tbody>
            @foreach ($sensores as $s)
            <tr> 
                <th>{{$s ->id}}  </th>
                 <th>{{$s ->ambiente_id}}</th>
                <th>{{$s ->codigo}}</th>
                <th>{{$s ->tipo}}</th>
                <th>{{$s ->descricao}}</th>
                <th><input class="form-check-input" type="checkbox" role="switch" id="status-{{$s->id}}"
                    wire:click="status ({{$s ->id}})"
                    @checked($s -> status)> 
                    <span class=" mx-3 badge bg-{{$s->status ? 'success': 'danger'}}">
                        {{$s -> status ? 'ATIVO': 'INATIVO'}}
                    </span> 
                <button type="button" class="bg-white text-danger border-danger bi bi-trash rounded-3 " wire:click="delete"></button>
            </th>
                    
            </tr>
            
            @endforeach
        </tbody>
    </table>
    </div>
</div>
