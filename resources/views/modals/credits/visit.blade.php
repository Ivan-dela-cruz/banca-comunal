

<div class="modal" id="visit-modal">
    <div class="modal__content modal__content--xl">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">Visita de Asesor</h2>
            <a  href="javascript:void(0);"  data-dismiss ="modal" class="button  items-center px-2 bg-theme-31 text-theme-6 inline-block hidden sm:flex"><span class="w-5 h-5 flex items-center justify-center"> <i class="fa fa-times"></i> </span></a>
        </div>
        <div class="p-5">
            <div class="col-span-12 ">
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                        <tr>
                            <th class="whitespace-no-wrap">Código</th>
                            <th class="whitespace-no-wrap">Cliente</th>
                            <th class="whitespace-no-wrap">Tipo</th>
                            <th class="text-center whitespace-no-wrap">Monto</th>
                            <th class="text-center whitespace-no-wrap">Couta</th>
                            <th class="whitespace-no-wrap">Creación</th>
                            <th class="text-center whitespace-no-wrap">Estado</th>
                            <th class="text-center whitespace-no-wrap">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list_visits as $lr )
                            <tr class="intro-x">
                                <td class="w-40">
                                    <span> {{ $lr->code }}</span>
                                </td>

                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">{{ $lr->member->last_name }} {{ $lr->member->name }}</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $lr->member->doc_number }}</div>
                                </td>
                                <td class="w-40">
                                    <span> {{ $lr->credit_type }} </span>
                                </td>
                                <td class="text-center">{{ $lr->amount }}</td>
                                <td class="text-center w-40">
                                    {{$lr->variable_fee?'Fija':'Variable'  }}
                                </td>
                                <td class="w-40">
                                    <span> {{ \Carbon\Carbon::parse($lr->created_at)->format('Y-m-d') }}</span>
                                </td>
                                <td class="text-center w-40">
                                    {{$lr->status}}
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a wire:click="findVisit('{{$lr->code}}')"
                                           data-dismiss ="modal"
                                           class="flex items-center text-theme-6" href="javascript:void(0)">
                                            <i  class="fas fa-check w-4 h-4 mr-1"></i>
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
