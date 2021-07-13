<div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Perfil del {{ $member->member_type }}</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="cliente imagen" class="rounded-full" src="{{ asset($member->url_image) }}">
                   
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-base">{{ \Illuminate\Support\Str::title($member->last_name) }} 
                        {{ \Illuminate\Support\Str::title($member->name) }}</div>
                    <div class="text-gray-600">{{ $member->doc_number  }}</div>
                    <div class="text-gray-600">Cta: {{ $member->account_number }}</div>
                </div>
            </div>
            <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i  class="w-4 h-4 mr-2 fas fa-mail-bulk"></i> {{ $member->email }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i  class="w-4 h-4 mr-2 fas fa-address-book"></i> {{ $member->residence_address }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i  class="w-4 h-4 mr-2 fas fa-phone"></i>  {{ $member->phone1 }}/  {{ $member->phone2 }}
                </div>
            </div>
            <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i  class="w-4 h-4 mr-2 fas fa-calendar-alt"></i> {{\Illuminate\Support\Str::title($member->birth_place) }} /{{ $member->birth_date }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i  class="w-4 h-4 mr-2 fas fa-user-friends"></i> {{ \Illuminate\Support\Str::title($member->marital_status) }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i  class="w-4 h-4 mr-2 fas fa-user-graduate"></i>  {{ \Illuminate\Support\Str::title($member->instruction) }}
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box col-span-12 mt-5 pt-5">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">Creditos</h2>
            
            <button class="button border relative flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300 hidden sm:flex">
                <i data-feather="file" class="w-4 h-4 mr-2"></i> Descargar PDF
            </button>
        </div>
        <div class="p-5">
            <table class="table table-report sm:mt-2">
                <thead>
                <tr>
                    <th class="whitespace-no-wrap">Código</th>
                    <th class="whitespace-no-wrap">Emisión</th>
                    <th class="whitespace-no-wrap">Coutas</th>
                    <th class="whitespace-no-wrap">Monto</th>
                    <th class="text-center whitespace-no-wrap">Abonado</th>
                    <th class="text-center whitespace-no-wrap">Saldo</th>
                    <th class="text-center whitespace-no-wrap">Estado</th>
                </tr>
                </thead>
                <p hidden>{{\Carbon\Carbon::setLocale('es')  }}</p>
                <tbody>
                    @foreach ($listCredits as $cred)
                    <tr class="intro-x">
                        <td class="w-30">
                            <span> CR00000001</span>
                        </td>
                        <td class="w-30">
                            <span>{{ \Carbon\Carbon::parse($cred->created_at)->isoFormat('ll') }}</span>
                        </td>
                        <td class="w-auto">
                            <span>{{ $cred->term}}</span>
                        </td>
                        <td class="w-auto">
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="intro-y box col-span-12 mt-5 pt-5">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">Pagos de para este mes</h2>
            {{$listPayments  }}
            <button class="button border relative flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300 hidden sm:flex">
                <i data-feather="file" class="w-4 h-4 mr-2"></i> Descargar PDF
            </button>
        </div>
        <div class="p-5">
            <table class="table table-report sm:mt-2">
                <thead>
                <tr>
                    <th class="whitespace-no-wrap">Código</th>
                    <th class="whitespace-no-wrap">Emisión</th>
                    <th class="whitespace-no-wrap">Coutas</th>
                    <th class="whitespace-no-wrap">Monto</th>
                    <th class="text-center whitespace-no-wrap">Abonado</th>
                    <th class="text-center whitespace-no-wrap">Saldo</th>
                    <th class="text-center whitespace-no-wrap">Estado</th>
                </tr>
                </thead>
                <p hidden>{{\Carbon\Carbon::setLocale('es')  }}</p>
                <tbody>
                    @foreach ($listCredits as $cred)
                    <tr class="intro-x">
                        <td class="w-30">
                            <span> CR00000001</span>
                        </td>
                        <td class="w-30">
                            <span>{{ \Carbon\Carbon::parse($cred->created_at)->isoFormat('ll') }}</span>
                        </td>
                        <td class="w-auto">
                            <span>{{ $cred->term}}</span>
                        </td>
                        <td class="w-auto">
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
