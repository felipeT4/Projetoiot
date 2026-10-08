<div>
 <a class=" text-dark btn-lg  text-decoration-none " href={{ Route('sensores') }}><i
                class="bi bi-box-arrow-in-left"></i> </a>
    <form class="shadow-lg card p-5 container mt-5 " style="max-width: 45rem;" wire:submit="store">
       
        <h2 class=" m-3 p-3 rol-12 text-center">Cadastrar Sensor</h2>

        <div class="rol-12">
            <p class=""> Código </p>
            <input class=" mb-4 col-4 border-secondary shadow-sm rounded-3 " type="text" wire:model="codigo"> 
              <p> Tipo </p>
            <input class="col-4 mb-4 rounded-3 shadow-sm " type="text" wire:model="tipo">

            <p> Descrição </p>
            <input class="col-12 mb-4 shadow-sm rounded-3 " type="text" wire:model="descricao">

             <p> Ambiente ID </p>
            <input class="col-12 mb-4 shadow-sm rounded-3 " type="text" wire:model="ambiente_id">


            <div class="form-check">
                <p> Status</p>
                <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked"
                    wire:model='status'>
                <label class="form-check-label" for="switchCheckChecked">Ativo</label>
            </div>
            <div class="d-grid gap-2 mt-4">
                <button class=" bg-primary text-white border-primary rounded-3" type="submit">Salvar</button>
            </div>
            <span wire:loading wire:target="Salvando...">
            </span>
    </form>
</div>
