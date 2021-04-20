

<div class="modal" id="references-modal">
    <div class="modal__content modal__content--xl">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">Referencias Personales de {{$name}} {{$last_name}}</h2>
            <a  href="javascript:void(0);"  data-dismiss ="modal" class="button  items-center px-2 bg-theme-31 text-theme-6 inline-block hidden sm:flex"><span class="w-5 h-5 flex items-center justify-center"> <i class="fa fa-times"></i> </span></a>
        </div>
        <div class="p-5">
            <div class=" intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                    <tr>
                        <th class="text-center whitespace-no-wrap">Nombre(s)</th>
                        <th class="text-center whitespace-no-wrap">Apellido(s)</th>
                        <th class="text-center whitespace-nowrap">Identificaión</th>
                        <th class="text-center whitespace-nowrap">Parentesco</th>
                        <th class="text-center whitespace-nowrap">Instrucción</th>
                        <th class="text-center whitespace-nowrap">Tiempo que Conoce</th>
                        <th class="text-center whitespace-nowrap" colspan="2">&nbsp;</th>
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
                            <td>
                                <a class="flex items-center button button--sm bg-theme-17 text-theme-11 "
                                   data-dismiss ="modal"
                                   href="javascript:void(0);"
                                   wire:click="editReference({{$data->id}})">
                                    <span class="w-5 h-5 flex items-center justify-center">
                                         <i class="fa fa-pen"></i>
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a class="flex items-center button button--sm  bg-theme-31 text-theme-6"
                                   data-dismiss ="modal"
                                   href="javascript:void(0);"
                                   wire:click="deleteReference({{$data->id}})">
                                      <span class="w-5 h-5 flex items-center justify-center">
                                          <i class="fa fa-trash-alt"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
