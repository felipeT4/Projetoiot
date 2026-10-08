<div>
     
     <a class="shadow-sm bg-success text-white bi bi-plus-circle p-3 rounded-3 text-decoration-none float-sm-end m-4 mb-4" href={{Route ('ambiente.create')}}><b> Novo Ambiente </b></a>
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
                <th>{{$a ->status}}  <button type="button" class="bg-danger text-white border-danger rounded-3 ms-3" wire:click="delete">Excluir</button></th>
            
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>