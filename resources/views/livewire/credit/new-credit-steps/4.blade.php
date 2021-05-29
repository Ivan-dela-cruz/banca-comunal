<div {{  $visibleFrame["4"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base"> Detalle final</div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado de crédito</div>
            <select  wire:model="status_cred" class="input w-full border flex-1">
                <option value="aprovado">Aprobado</option>
                <option value="revision">Revisión</option>
                <option value="anulado">Anulado</option>
            </select>
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Número de cuenta </div>
            <input disabled wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Monto del crédito </div>
            <input disabled wire:model="amount" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Valor de coutas </div>
            <input disabled  wire:model="fixed_free" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Total de coutas </div>
            <input disabled wire:model="term" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Fecha primer pago </div>

            <input disabled type="text" class="input w-full border flex-1" placeholder=""
                   value="@foreach($data_table as $data){{ $data['payment_date'] }} @break @endforeach">
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeCredit()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
