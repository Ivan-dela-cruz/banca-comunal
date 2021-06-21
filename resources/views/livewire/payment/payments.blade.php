<div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Pagos de créditos</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="/nuevo-credito"  class="button text-white bg-theme-1 shadow-md mr-2">Nuevo crédito</a>
        </div>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="lg:flex intro-y">
                <div class="relative text-gray-700 dark:text-gray-300">
                    <input wire:keydown.enter="findMember()" wire:model="search_member" type="text" class="input input--lg w-full lg:w-64 box pr-10 placeholder-theme-13" placeholder="Ingrese cédula">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 fas fa-search" ></i>
                </div>
                <select wire:model="selectStatus" class="input input--lg box w-full lg:w-auto mt-3 lg:mt-0 ml-auto">
                    <option value="proceso">Proceso</option>
                    <option value="candelado">Cancelados</option>
                    <option value="todos">Todos</option>
                </select>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5">
                <div class="intro-y col-span-12 lg:col-span-12">
                    @if(count($listCredits)>0)
                        <div class="intro-y inbox box mt-5">
                            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                    <tr>
                                        <th class="whitespace-no-wrap">Cod.</th>
                                        <th class="whitespace-no-wrap">Coutas</th>
                                        <th class="whitespace-no-wrap">Monto</th>
                                        <th class="text-center whitespace-no-wrap">Abonado</th>
                                        <th class="text-center whitespace-no-wrap">Saldo</th>
                                        <th class="text-center whitespace-no-wrap">Estado</th>
                                        <th class="text-center whitespace-no-wrap">Sel.</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                
                                        @foreach ($listCredits as $cred)
                                        <tr class="intro-x">
                                            <td class="w-auto text-center">
                                                <span> CR00000001</span>
                                            </td>
                                            <td class="w-20">
                                                <span>{{ $cred->term}}</span>
                                            </td>
                                            <td class="w-20">
                                                <span>{{ $cred->amount }}</span>
                                            </td>
                                            <td class="w-20 text-center">
                                                <span class="text-base text-theme-10" >$&nbsp;0 </span>
                                            </td>
                                            <td class="w-20 text-center">
                                                <span class="text-base text-theme-11">$&nbsp;0 </span>
                                            </td>
                                            <td class="w-20 text-center">
                                                <span class="text-base text-theme-9">{{ $cred->status }}</span>
                                            </td>
                                            <td class="w-20 text-center">
                                                <button wire:click="getDetailCredit({{$cred->id}})" class="button px-2 mr-1 mb-2 bg-theme-12 text-white">
                                                    <span class="w-5 h-5 flex items-center justify-center">
                                                        <i class="w-3 h-3 fas fa-check-circle"></i>
                                                    </span>
                                                </button>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <div class="intro-y box px-5 pt-5 mt-5">
                            <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
                                <div class="flex flex-1 px-5 items-center justify-center">
                                    <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                                        <img alt="Vacio" src="{{ asset('images/buscar.png') }}">
                                    </div>
                                    <div class="ml-5">
                                        <div class="w-64 truncate sm:whitespace-normal font-medium text-base">
                                            No se encontrarón resultados para "{{ $search_member }}"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
               
            </div>
           
        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <div class="pos__tabs nav-tabs justify-center flex">
                        <a wire:click.prevent="changePos('pay')" data-toggle="tab" data-target="#ticket" href="javascript:;" class="flex-1 py-2 rounded-md text-center {{ $position == 'pay'?'active':''}}">Pagar</a>
                        <a wire:click.prevent="changePos('credit')" data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center {{ $position == 'credit'?'active':''}}">Crédito</a>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-content__pane {{ $position == 'pay'?'active':''}}" id="ticket">
                    <div class="pos__ticket box p-2 mt-5">
                        <a href="javascript:;" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1">N° Couta de Crédito </div> 
                            <div class="text-gray-600"></div>
                            <div class="ml-auto">{{ $periodPay }} @if(!is_null($credit))de {{ $credit->term }} @endif </div>
                        </a>
                        <a href="javascript:;" class="flex items-center p-3  border-t border-gray-200 dark:border-dark-5 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1">Código </div> 
                            <div class="ml-auto text-theme-6">
                                <input disabled with="20" wire:model="code_pay"  type="text" class="input  border text-right w-40">
                            </div>
                        </a>
                        <a href="javascript:;" class="flex items-center p-3  border-t border-gray-200 dark:border-dark-5 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1">Fecha de pago </div> 
                            <div class="text-gray-600"></div>
                            <div class="ml-auto">{{ $datePay }}</div>
                        </a>
                        <a href="javascript:;" class="flex items-center p-3  border-t border-gray-200 dark:border-dark-5 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1">Fecha </div> 
                            <div class="ml-auto">
                                <input wire:model="date_pay"  type="date" class="input  border text-right w-40">
                            </div>
                        </a>
                        <a href="javascript:;" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1">Valor </div> 
                            <div class="text-gray-600"></div>
                            <div class="ml-auto">$ {{ $valuePay }}</div>
                        </a>
                        <a href="javascript:;" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1">Interés </div> 
                            <div class="ml-auto text-theme-6">
                                <input with="20" wire:model="interestPay"  type="text" class="input  border text-right w-40">
                            </div>
                        </a>
                        <a href="javascript:;" class="flex items-center p-3 border-t border-gray-200 dark:border-dark-5 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1 text-base">Valor a pagar </div> 
                            <div class="ml-auto text-base">
                                <input with="20" wire:model="valFinalPay"  type="text" class="input  border text-right w-40">
                            </div>
                        </a>
                        @if($action=="PUT")
                        <a href="javascript:;" class="flex items-center p-3 border-t border-gray-200 dark:border-dark-5 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1 text-base">Estado </div> 
                            <div class="ml-auto text-base">
                                <select with="20" wire:model="statusDetail"  type="text" class="input  border text-right w-40">
                                    <option value="atrasado">Atrasado</option>
                                    <option value="cancelado">Cancelado</option>
                                </select>  
                            </div>
                        </a>
                        @endif
                        
                        <a href="javascript:;" class="flex items-center p-3  border-t border-gray-200 dark:border-dark-5 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-dark-3 hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md">
                            <div class="pos__ticket__item-name truncate mr-1">Saldo Pendiente </div> 
                            <div class="text-gray-600"></div>
                            <i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>
                            <div class="ml-auto text-theme-3">$ {{ $balancePay }}</div>
                        </a>
                       
                        
                       
                    </div>
                    <div class="box flex p-5 mt-5">
                        <div class="w-full relative text-gray-700">
                            <input wire:model="total_pay" type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Ingrese valor a cancelar">
                            <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                        </div>
                        @if($action=="POST")
                        <button wire:click.prevent="store()" class="button text-white bg-theme-1 ml-2">Pagar</button>
                        @else
                        <button wire:click.prevent="update()" class="button text-white bg-theme-9 ml-2">Actualizar</button>
                        @endif
                        
                        
                    </div>
                    
                </div>
                <div class="tab-content__pane {{ $position == 'credit'?'active':''}}" id="details">
                    <div class="box p-5 mt-5">
                        <div class="flex items-center border-b dark:border-dark-5 pb-5">
                            <div class="">
                                <div class="text-gray-600">Fecha de emisión</div>
                                <div>@if(!is_null($credit)){{ \Carbon\Carbon::parse($credit->created_at)->format('Y-m-d')}}@endif</div>
                            </div>
                            <i data-feather="clock" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b dark:border-dark-5 py-5">
                            <div class="">
                                <div class="text-gray-600">Cliente</div>
                                <div>@if(!is_null($credit)){{ $credit->name }} {{ $credit->last_name }}  @endif</div>
                            </div>
                            <i data-feather="user" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b dark:border-dark-5 py-5">
                            <div class="">
                                <div class="text-gray-600">Cuenta</div>
                                <div>@if(!is_null($credit)){{ $credit->account_number }}@endif</div>
                            </div>
                            <i data-feather="users" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                        <div class="flex items-center pt-5">
                            <div class="">
                                <div class="text-gray-600">Monto solicitado</div>
                                <div>@if(!is_null($credit)){{ $credit->amount }}@endif</div>
                            </div>
                            <i data-feather="mic" class="w-4 h-4 text-gray-600 ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12  border-theme-5">
            @if(count($details_amort)>0)
                <div class="intro-y inbox box mt-5">
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                            <tr>
                                <th class="whitespace-no-wrap">N°</th>
                                <th class="whitespace-no-wrap">Fecha</th>
                                <th class="whitespace-no-wrap">Capital</th>
                                <th class="text-center whitespace-no-wrap">Interés</th>
                                <th class="text-center whitespace-no-wrap">Dividendo</th>
                                <th class="text-center whitespace-no-wrap">Pago</th>
                                <th class="text-center whitespace-no-wrap">Cancelado</th>
                                <th class="text-center whitespace-no-wrap">Saldo</th>
                                <th class="text-center whitespace-no-wrap">Int. Mora</th>
                                <th class="text-center whitespace-no-wrap">Sel.</th>
                            </tr>
                            </thead>
                            <tbody>
                        
                                @foreach ($details_amort as $det)
                                <tr class="intro-x">
                                    <td class="w-auto text-center">
                                        <span> {{ $det->period }}</span>
                                    </td>
                                    <td class="w-40">
                                        <span>{{ $det->payment_date}}</span>
                                    </td>
                                    <td class="w-40">
                                        <span>{{number_format( $det->amount,$numberDecimals,'.',',') }}</span>
                                    </td>
                                    <td class="w-20 text-center">
                                        <span class=" text-theme-10" >{{ number_format( $det->interest,$numberDecimals,'.',',') }} </span>
                                    </td>
                                    <td class="w-20 text-center">
                                        <span class=" text-theme-11">{{ number_format( $det->dividing,$numberDecimals,'.',',') }} </span>
                                    </td>
                                    <td class="w-20 text-center">
                                        <span class="">{{ number_format($det->total_payment,$numberDecimals,'.',',') }}</span>
                                    </td>
                                    <td class="w-20 text-center">
                                        <span class=" text-theme-9">{{ number_format( $det->value_pay,$numberDecimals,'.',',') }}</span>
                                    </td>
                                    <td class="w-40 text-center">
                                        <span class="  ">{{number_format( $det->balance_pay,$numberDecimals,'.',',')}}</span>
                                    </td>
                                    <td class="w-40 text-center">
                                        <span class=" text-theme-6 ">{{number_format( $det->interest_pay,$numberDecimals,'.',',')}}</span>
                                    </td>
                                    <td class="w-20 text-center">
                                        <button wire:click.prevent="getItemPay({{$det->id}})" 
                                            class="button px-2 mr-1 mb-2 {{$det->status=='atrasado' || $det->status=='cancelado'?'bg-theme-9':'bg-theme-12'  }} text-white">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i class="w-3 h-3 fas fa-check-circle"></i>
                                            </span>
                                        </button>
                                    </td>
                                    
                                </tr>
                                @endforeach
                        
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="intro-y box px-5 pt-5 mt-5">
                    <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
                        <div class="flex flex-1 px-5 items-center justify-center">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                                <img alt="Vacio" src="{{ asset('images/search.png') }}">
                            </div>
                            <div class="ml-5">
                                <div class="w-64  truncate sm:whitespace-normal font-medium text-base">
                                    Seleccione un crédito para continuar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- END: Ticket -->
    </div>
</div>