<div>

    <form class="shadow-lg card p-5  container mt-5 " style="max-width: 45rem;" wire:submit.prevent='update'>
        <a class=" text-dark btn-lg  text-decoration-none " href={{ Route('ambientes') }}><i
                class="bi bi-box-arrow-left"></i> </a>
        <h2 class=" m-3 p-3 rol-12 text-center">Editar Ambiente</h2>

        <div class="rol-12">
            <p> Nome </p>
            <input class=" mb-4 col-4 border-secondary shadow-sm rounded-3  " type="text" wire:model="nome">

            <p> Descrição </p>
            <input class="col-12 mb-4 shadow-sm rounded-3 " type="text" wire:model="descricao">
            <div class="form-check">
                <p> Status</p>
                <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked"
                    wire:model='status'>
                <label class="form-check-label" for="switchCheckChecked">Ambiente Ativo</label>
            </div>
            <div class="d-grid gap-2 mt-4">
                <span wire:loading wire:target="Salvando...">
                </span>
                <button class=" bg-primary text-white border-primary rounded-3 d-grid gap-2 col-6 mx-auto "
                    type="submit"> Salvar Aletações</button>
            </div>

    </form>
</div>
