<div wire:ignore.self class="modal" id="accountModal">
    <div class="modal__content modal__content--xl">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">Editar cuenta </h2>
            <a  href="javascript:void(0);"  data-dismiss ="modal" class="button  items-center px-2 bg-theme-31 text-theme-6 inline-block hidden sm:flex"><span class="w-5 h-5 flex items-center justify-center"> <i class="fa fa-times"></i> </span></a>
        </div>
        <div class="p-5">
            <div class=" intro-y col-span-12 overflow-auto lg:overflow-visible">
                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Cliente  </div>
                        <input  wire:model="names_modal" type="text" class="input w-full border flex-1" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Identificación</div>
                        <input   wire:model="doc_number_modal" type="text" class="input w-full border flex-1" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Tipo de socio</div>
                        <select  wire:model="member_type_modal" class="input w-full border flex-1">
                            <option value="cliente">Cliente</option>
                            <option value="socio">Socio</option>
                            <option value="socio fundador">Socio Fundador</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Número de cuenta </div>
                        <input  wire:model="acount_number_modal" type="text" class="input w-full border flex-1" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Tipo de socio</div>
                        <select  wire:model="status_modal" class="input w-full border flex-1">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                            <option value="bloqueado">Bloqueado</option>
                            <option value="revision">Revisión</option>
                        </select>
                    </div>

                    <div  class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button wire:click.prevent="storeFinal()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


