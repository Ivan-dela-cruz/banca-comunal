<div>
    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">Nuevo miembro</h2>
    </div>
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button wire:click="selectFrame({{1}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["1"]}}">1</button>
                <div class="lg:w-32 {{ $listTextFrame["1"]}}">Datos personales</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{2}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["2"]}}">2</button>
                <div class="lg:w-32  {{ $listTextFrame["2"]}}"> Datos Conyuge</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{3}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["3"]}}">3</button>
                <div class="lg:w-32  {{ $listTextFrame["3"]}}">Dirección </div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{4}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["4"]}}">4</button>
                <div class="lg:w-32  {{ $listTextFrame["4"]}}"> Referencias</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{5}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["5"]}}">5</button>
                <div class="lg:w-32  {{ $listTextFrame["5"]}}">Finalizar</div>
            </div>
            <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
        </div>
        <div {{  $visibleFrame["1"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
            <div class="font-medium text-base">Datos personales</div>
            <input hidden wire:model="member_id" type="text" class="input w-full border flex-1" placeholder="">
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Nombres</div>
                    <input wire:model="name" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Apellidos</div>
                    <input  wire:model="last_name" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Identificación</div>
                    <input wire:keydown.enter="findMember()"  wire:model="dni" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Pasaporte</div>
                    <input  wire:model="passport" type="text" class="input w-full border flex-1" placeholder="Requerido para extrajeros">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Instruccción </div>
                    <input  wire:model="instruction" type="text" class="input w-full border flex-1" placeholder="Nivel educativo">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Estado cívil </div>
                    <input  wire:model="marital_status" type="text" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Fecha de nacimiento </div>
                    <input wire:model="birth_date" type="date" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Email </div>
                    <input  wire:model="email" type="text" class="input w-full border flex-1" placeholder="ejemplo@email.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Télefono 1 </div>
                    <input  wire:model="phone1" type="text" class="input w-full border flex-1" placeholder="Principal">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Télefono 2 </div>
                    <input  wire:model="phone2" type="text" class="input w-full border flex-1" placeholder="Secundario">
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button wire:click.prevent="storePersonal()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
                </div>
            </div>
        </div>
        <div {{  $visibleFrame["2"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
            <div class="font-medium text-base">Datos conyuge</div>
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <!-- Datos Conyuge :  -->
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Nombres</div>
                    <input  wire:model="name_spouse" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Apellidos</div>
                    <input wire:model="last_name_spouse" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Identificación</div>
                    <input  wire:model="dni_spouse" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Pasaporte</div>
                    <input wire:model="passport_spouse" type="text" class="input w-full border flex-1" placeholder="Requerido para extrajeros">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Fecha de nacimiento </div>
                    <input wire:model="birth_date_spouse" type="date" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Email </div>
                    <input wire:model="email_spouse" type="text" class="input w-full border flex-1" placeholder="ejemplo@email.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Télefono 1 </div>
                    <input wire:model="phone1_spouse" type="text" class="input w-full border flex-1" placeholder="Principal">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Télefono 2 </div>
                    <input wire:model="phone2_spouse" type="text" class="input w-full border flex-1" placeholder="Secundario">
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button wire:click.prevent="storeSpouse()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
                </div>
            </div>
        </div>
        <div {{  $visibleFrame["3"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
            <div class="font-medium text-base">Lugar de residencia</div>
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <!--  Lugar de residencia :  -->
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div  class="mb-2">Ciudad </div>
                    <input wire:model="city" type="text" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Cantón </div>
                    <input  wire:model="canton" type="text" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Parroquia </div>
                    <input  wire:model="parish" type="text" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Calle principal </div>
                    <input wire:model="principal_street" type="text" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Calle secundaria </div>
                    <input wire:model="secundary_street" type="text" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Referencia del lugar </div>
                    <textarea wire:model="reference_place" type="text" class="input w-full border flex-1" placeholder=""></textarea>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button wire:click.prevent="storeAddress()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
                </div>
            </div>
        </div>
        <div {{  $visibleFrame["4"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
            <div class="font-medium text-base"> Referencias personales</div>
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <!--   Referencias personales :  -->
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Nombres</div>
                    <input wire:model="name_reference" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Apellidos</div>
                    <input wire:model="last_name_reference" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Identificación</div>
                    <input wire:model="dni_reference" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Parentesco</div>
                    <input wire:model="relationship" type="text" class="input w-full border flex-1" placeholder="Nivel de parentesco">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Instrucción</div>
                    <input wire:model="instruction_reference" type="text" class="input w-full border flex-1" placeholder="Nivel de educación">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Tiempo que conoce </div>
                    <input wire:model="time_to_meet" type="text" class="input w-full border flex-1" placeholder=" ">
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button wire:click.prevent="storeReference()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
                </div>
            </div>
        </div>
        <div {{  $visibleFrame["5"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
            <div class="font-medium text-base"> Referencias personales</div>
            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Tipo de socio</div>
                    <select  wire:model="member_type" class="input w-full border flex-1">
                        <option value="">Selecciona</option>
                        <option value="cliente">Cliente</option>
                        <option value="socio">Socio</option>
                        <option value="socio fundador">Socio Fundador</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Número de cuenta </div>
                    <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <div class="mb-2">Estado </div>
                    <div class="mt-2">
                        <input wire:model="status" type="checkbox" class="input input--switch border">
                    </div>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button wire:click.prevent="storeFinal()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>