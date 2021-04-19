

<div class="modal" id="references-modal">
    <div class="modal__content modal__content--xl">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">Referencias de {{$name}} {{$last_name}}</h2>
        </div>
        <div class="p-5">
            <div class=" intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                    <tr>
                        <th class=" whitespace-no-wrap">Nombre(s)</th>
                        <th class=" whitespace-no-wrap">Apellido(s)</th>
                        <th class="text-center whitespace-nowrap">Identificaión</th>
                        <th class="text-center whitespace-nowrap">Parentesco</th>
                        <th class="text-center whitespace-nowrap">Instrucción</th>
                        <th class=" whitespace-nowrap">Tiempo que Conoce</th>
                        <th class="text-center whitespace-nowrap">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data_reference as $data)
                        <tr class="intro-x">
                            <td class="text-center">{{$data->name}}</td>
                            <td class="text-center">{{$data->last_name}}</td>
                            <td class="text-center">{{$data->dni}}</td>
                            <td class="text-center">{{$data->relationship}}</td>
                            <td class="text-center">{{$data->instruction}}</td>
                            <td class="text-center">{{$data->time_to_meet}}</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" data-dismiss ="modal" href="javascript:;" wire:click="editReference({{$data->id}})">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar
                                    </a>
                                    <a class="flex items-center text-theme-6" data-dismiss ="modal" href="javascript:;" wire:click="deleteReference({{$data->id}})" data-toggle="modal" data-target="#delete-confirmation-modal">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Eliminar
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href="">
                            <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pagination__link" href="">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pagination__link" href="">...</a>
                    </li>
                    <li>
                        <a class="pagination__link" href="">1</a>
                    </li>
                    <li>
                        <a class="pagination__link pagination__link--active" href="">2</a>
                    </li>
                    <li>
                        <a class="pagination__link" href="">3</a>
                    </li>
                    <li>
                        <a class="pagination__link" href="">...</a>
                    </li>
                    <li>
                        <a class="pagination__link" href="">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pagination__link" href="">
                            <i class="w-4 h-4" data-feather="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
                <select class="w-20 input box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
        </div>


    </div>
</div>
