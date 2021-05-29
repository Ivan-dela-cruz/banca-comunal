

<div class="modal" id="attachment-modal">
    <div class="modal__content modal__content--xl">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">Anexos</h2>
            <a  href="javascript:void(0);"  data-dismiss ="modal" class="button  items-center px-2 bg-theme-31 text-theme-6 inline-block hidden sm:flex"><span class="w-5 h-5 flex items-center justify-center"> <i class="fa fa-times"></i> </span></a>
        </div>
        <div class="p-5">
            <div class="col-span-12 ">
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-1">
                        <thead>
                        <tr>
                            <th class="whitespace-no-wrap">N°</th>
                            <th class="whitespace-no-wrap">Nombre</th>
                            <th class="whitespace-no-wrap">Descripción</th>
                            <th class="whitespace-no-wrap">URL</th>
                            <th class="text-center whitespace-no-wrap">Estado</th>
                            <th class="text-center whitespace-no-wrap">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list_docs as $data )
                            <tr class="intro-x">
                                <td class="w-40">
                                    <span> {{ $count++ }}</span>
                                </td>
                                <td class="w-40">
                                    <span> {{ $data->name_doc }} </span>
                                </td>
                                <td class="w-40">
                                    <span>{{$data->description_doc}}</span>
                                </td>
                                <td class="w-40">
                                    <a href="{{asset($data->url_doc)}}" target="_blank" class="hover:text-theme-4">{{asset($data->url_doc)}}</a>
                                </td>
                                <td class="text-center w-40">
                                 <span class="px-2 py-1 rounded-full  text-white mr-1 {{$data->status == 1 ? 'bg-theme-9': 'bg-theme-6'}}"> {{$data->status == 1 ? 'Activo' : 'Inactivo'}}</span>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a wire:click="editDoc('{{$data->id}}')"
                                           data-dismiss ="modal"
                                           class="flex items-center text-theme-1 mr-2" href="javascript:void(0)">
                                            <i  class="fas fa-pencil-alt w-4 h-4"></i> Editar
                                        </a>

                                        <a wire:click="deleteDoc('{{$data->id}}')"
                                           data-dismiss ="modal"
                                           class="flex items-center text-theme-6" href="javascript:void(0)">
                                            <i  class="fas fa-trash w-4 h-4"></i> Eliminar
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
</div>
