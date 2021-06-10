<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PDF-FICHA MÉDICA-</title>
<style>
    body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif;
        /*font-family: SourceSansPro;*/
    }

    #logo {
        float: left;
        margin-top: 1%;
        margin-left: 2%;
        margin-right: 2%;
    }

    #imagen {
        width: 120px;
        height: 75px;
    }

    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 0%;
        margin-right: 2%;
        /*text-align: justify;*/
    }

    #encabezado {
        text-align: center;
        margin-left: 10%;
        margin-right: 35%;
        font-size: 13px;
    }

    #tiutlo_pdf {
        text-align: center;
        margin-left: 10%;
        margin-right: 35%;
        font-size: 18px;
    }

    #fact {
        /*position: relative;*/
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #facliente {
        width: 60%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 12px;
    }

    #fac, #fv, #fa {
        color: #FFFFFF;
        font-size: 10px;
    }

    #facliente thead {
        padding: 20px;
        background: #238288;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #facvendedor {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facvendedor thead {
        padding: 20px;
        background: #238288;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #facarticulo {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facarticuloS thead {
        padding: 20px;
        background: #238288;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    thead {
        background-color: #246355;
        color: white;
    }

    #gracias {
        text-align: center;
    }

    #datoOrden {
        text-align: left;
        font-size: 12px;
    }

    #headerOrden {
        text-align: left;
        vertical-align: center;
        font-size: 12px;
        color: white;
    }

    #tableOrdenDetalle {
        width: 100%;
        border: 1px solid #000;
    }

    #thOrdenDetalle, .tdOrdenDetalle {
        text-align: left;
        vertical-align: center;
        border: 1px solid #000;
        border-collapse: collapse;
        padding: 0.3em;
        font-size: 11px;

    }

    .encabezado {
        width: 100%;
        height: auto;
        background-color: #d0d2d4;
        display: flex;
    }

    .logo {
        margin-right: 20px;
        height: 80px;
    }

    .name-company {
        margin-bottom: 0px;
        font-size: 20px;
        color: #238288;
        font-family: 'Montserrat', sans-serif;
    }

    .box-company {
        float: right;
        text-align: center;
        width: 50%;
        height: 80px;
        align-content: center;
    }

    .dates-company {
        font-size: 9px;
        color: #3e3d3d;
    }

    .lines-1 {
        opacity: 0.5;
        margin-top: -5px;
        margin-bottom: 5px;
        height: 10px;
        width: 50%;
        background-color: #bcccef;
    }

    .lines-2 {
        margin-left: 50%;
        opacity: 0.5;
        margin-top: -5px;
        margin-bottom: 5px;
        height: 10px;
        width: 50%;
        background-color: #06a084;
    }

    .box-1 {
        height: 190px;
        width: 300px;
        padding: 10px;
    }

    .box-derecho {
        height: 190px;
        width: 30%;
        margin-left: 50%;
        padding: 10px;
    }

    .box-2 {
        height: 120px;
        width: 100%;
        padding-left: 10px;
        background-color: #5de2c9;
        border: 2px solid #5de2c9;
        border-radius: 25px;
    }

    h1 {
        font-size: 11px;
        font-family: 'Montserrat', sans-serif;
        color: #000000;
        font-weight: bold;
        margin-bottom: 2px;
        margin-top: 2px;
    }

    span {
        margin-top: 2px;
        margin-bottom: 2px;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-size: 9px;
        color: #434343;
        font-weight: normal;
    }

    .box {
        height: auto;
        background-color: #0a1120;
        display: flex;
        flex-wrap: nowrap;
    }

    .diente {
        height: 40px;
        width: 40px;

    }

    .group-diente {
        display: flex;
        flex-wrap: nowrap;
        width: 300px;
        height: 45px;
    }

    .img-diente {
        height: 40px;
        width: 40px;

    }

    table {
        width: 100%;
        border: 1px solid #ffffff;
        border-collapse: collapse;
    }

    th, td {
        text-align: left;
        vertical-align: top;
        border: 1px solid #FFFFFF;
        border-collapse: collapse;
        padding: 0.3em;
        caption-side: bottom;
        font-size: 10px;
        font-family: 'Montserrat', sans-serif;
    }


</style>
<body>
<section style="margin-bottom: 0px; height: auto;">
    <div class="encabezado">
        <img class="logo" src="{{asset('img/logo_pantallas.png')}}" alt="CompartiendoCodigo">
        <div class="box-company">
            <h1 class="name-company">Souri Odontología Digital</h1>
            <small class="dates-company">Avenida 5 de Junio y Río Langoa Sector la Estación, Latacunga,
                Ecuador <br></small>
            <small class="dates-company">Email: sourilatacunga@gmail.com</small>
            <small class="dates-company"> Télefono: +(539) 984 500 337</small>
        </div>
    </div>
    <div class="box">
        <div class="lines-1"></div>
        <div class="lines-2"></div>
    </div>
    <div class="box">
        <div class="box-1">
            <h1>Sr(a).: <span>{!!$patient->name!!} {!!$patient->last_name!!}</span></h1>
            <h1>Identificación: <span>{{$patient->ci}}</span></h1>
            <h1>Edad: <span>{{\Carbon\Carbon::parse($patient->birth_date)->age }}</span></h1>
            <h1>Genéro: <span>{{$patient->gender}}</span></h1>
            <h1>Tipo de sangre: <span>{{$patient->blood_type}}</span></h1>
            <h1>Estado civíl: <span>{{$patient->marital_status}}</span></h1>
            <h1>Instrucción: <span>{{$patient->instruction}}</span></h1>
            <h1>Trabaja en: <span>{{$patient->job}}</span></h1>

            <h1>Correo: <span style="text-transform: lowercase;">   {{$patient->email}}</span></h1>

            <h1>Télefonos: <span>   {{$patient->phone}}, {{$patient->phone_2}}</span></h1>

            <h1>Dirección: <span> {{$patient->province}}/ {{$patient->city}}/ {{$patient->address}}</span></h1>

        </div>
        <div class="box-derecho">
            <div class="box-2">
                <h1>Ficha</h1>
                <span>#   {{$patient->id}}</span>
                <h1>Fecha de ingreso</h1>
                <span>  {{\Carbon\Carbon::parse($patient->created_at)->format('Y-m-d') }}</span>
                <h1>Estado</h1>
                <span>  {{$patient->status}}</span>
            </div>
            <div style="width: 90px; height: 45px; margin-top: 10px;">
                <div style="width: 45px; height: 45px;">
                    <img style="margin-left: 40px; margin-right: 40px;" class="img-diente"
                         src="{{asset('img/dental.png')}}"/>
                </div>
                <div style="width: 45px; height: 45px; margin-left: 90px; margin-top: -90px;">
                    <img style="margin-left: 40px; margin-right: 40px;" class="img-diente"
                         src="{{asset('img/dental.png')}}"/>
                </div>
                <div style="width: 45px; height: 45px; margin-left: 40px;">
                    <img style="margin-left: 40px; margin-right: 40px; margin-top: -45px;" class="img-diente"
                         src="{{asset('img/dental.png')}}"/>
                </div>
            </div>
        </div>


    </div>
</section>
<section style="margin-top: 0px; margin-top: -220px;">
    <div>
        <table>
            <thead>
            <tr style="color: black; text-align: center; background-color: #FFFFFF; border: 1px solid #FFFFFF;">
                <th style="text-align: left; font-size: 11px;">FICHA MÉDICA</th>
                <th style="text-align: right;  font-weight: normal; font-size: 11px; font-size: 12px;">Emitido por
                    - {{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}
                    el {{\Carbon\Carbon::now()}}
                </th>
            </tr>
            <tr style="text-align: left; background-color: #5de2c9; border: 2px solid #5de2c9;">
                <th style="text-align: left; color: #ffffff;" width="180px">1.- ANTECEDENTES</th>
                <th style="text-align: left; color: #ffffff;" width="480px">Observaciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">1.1 Motivo de la consulta</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (empty($background->reason))
                        {!! $background->reason !!}
                    @endif
                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;"> 1.2 ¿Qué síntomas presenta ?</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($background->symptoms))
                        {{$background->symptoms}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;"> 1.3 Antecedentes familiares</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($background->family_background))
                        {{$background->family_background}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">1.4 Antecedentes personales</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($background->personal_background))
                        {{$background->personal_background}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;"> 1.5 ¿Ha sido intervenido quirúrjicamente
                    alguna vez?
                </td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($background->surgical_interventions))
                        {{$background->surgical_interventions}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;"> 1.6 ¿Actualmente tiene un tratamiento
                    médico?
                </td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($background->previous_treatment))
                        {{$background->previous_treatment}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">1.7 ¿Está tomando alguna medicación? <small>(Describa
                        la dosis y el medicamento).</small></td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($background->medication))
                        {{$background->medication}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;"> 1.8 ¿Fecha de última visita dental?</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($background->date_last_treatment))
                        {{$background->date_last_treatment}}
                    @endif

                </td>
            </tr>

            </tbody>
        </table>


        <table>
            <thead>
            <tr style="text-align: left; background-color: #5de2c9; border: 1px solid #FFFFFF; ">
                <th style="text-align: left; color: #ffffff; width: 180px;">2. Antecedentes de emfermedades</th>
                <th style="text-align: left; color: #ffffff; width: 25px;">SI</th>
                <th style="text-align: left; color: #ffffff; width: 25px;">NO</th>
                <th style="text-align: left; color: #ffffff; width: 410px;">Observación</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.1 ¿Presenta problemas con la anestesia local
                    o general?
                </td>
                @if (empty($question->anesthesia)||$question->anesthesia=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->anesthesia) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->anesthesia}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.2 ¿Padece de hemorragías o sangrados ?</td>
                @if (empty($question->hemorrhages)||$question->hemorrhages=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->hemorrhages) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->hemorrhages}}
                    </td>
                @endif


            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.3 ¿Padece de diabetes Mellitus?</td>
                @if (empty($question->diabetes)||$question->diabetes=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->diabetes) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->diabetes}}
                    </td>
                @endif


            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.4 ¿Padece de Hipertensión Arterial?</td>
                @if (empty($question->hypertension)||$question->hypertension=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->hypertension) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->hypertension}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.5 ¿Padece de alguna enfermedad contagiosa?
                </td>
                @if (empty($question->contagious)||$question->contagious=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->contagious) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->contagious}}
                    </td>
                @endif


            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.6 ¿Padece enfermedades Cardiovasculares?</td>
                @if (empty($question->cardiovascular)||$question->cardiovascular=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->cardiovascular) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->cardiovascular}}
                    </td>
                @endif


            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.7 ¿Padece enfermedades resporatorias?</td>
                @if (empty($question->respiratory)||$question->respiratory=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->respiratory) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->respiratory}}
                    </td>
                @endif


            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.8 ¿Padeció alguna enfermedad grave
                    recientemente?
                </td>
                @if (empty($question->recent_disease)||$question->recent_disease=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->recent_disease) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->recent_disease}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.9 ¿Padece de algun desorden congenito?</td>
                @if (empty($question->congenital_disorders)||$question->congenital_disorders=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->congenital_disorders) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->congenital_disorders}}
                    </td>
                @endif

            </tr>
            </tbody>
        </table>


        <table>
            <thead>
            <tr style="text-align: left; background-color: #5de2c9; border: 1px solid #FFFFFF; ">
                <th style="text-align: left; color: #ffffff; width: 180px;">Estado y hábitos</th>
                <th style="text-align: left; color: #ffffff; width: 25px;">SI</th>
                <th style="text-align: left; color: #ffffff; width: 25px;">NO</th>
                <th style="text-align: left; color: #ffffff; width: 410px;">Observación</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.10 ¿Usted está embarazada?</td>
                @if (empty($question->pregnancy)||$question->pregnancy=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->pregnancy) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->pregnancy}}
                    </td>
                @endif
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.11 ¿Consume usted Alcohol?</td>
                @if (empty($question->alcohol)||$question->alcohol=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->alcohol) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->alcohol}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.12 ¿Fuma?</td>
                @if (empty($question->smokes)||$question->smokes=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->smokes) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->smokes}}
                    </td>
                @endif


            </tr>
            </tbody>
        </table>


        <table>
            <thead>
            <tr style="text-align: left; background-color: #5de2c9; border: 1px solid #FFFFFF; ">
                <th style="text-align: left; color: #ffffff; width: 180px;">Salud bucal</th>
                <th style="text-align: left; color: #ffffff; width: 25px;">SI</th>
                <th style="text-align: left; color: #ffffff; width: 25px;">NO</th>
                <th style="text-align: left; color: #ffffff; width: 410px;">Observación</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.13 ¿Molestia o dolor de boca?</td>
                @if (empty($question->annoyance)||$question->annoyance=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->annoyance) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->annoyance}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.14 ¿Mal olor o mal sabor de boca?</td>
                @if (empty($question->bad_smell)||$question->bad_smell=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->bad_smell) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->bad_smell}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.15 ¿Le sangran las encías?</td>
                @if (empty($question->bleeding)||$question->bleeding=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->bleeding) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->bleeding}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.16 ¿Siente aprieta o rechinan sus dientes?
                </td>
                @if (empty($question->teeth)||$question->teeth=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->teeth) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->teeth}}
                    </td>
                @endif


            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.17 ¿Malos habitos orofaciales? <small> (moder
                        uñas, lapices)</small></td>
                @if (empty($question->bad_habits)||$question->bad_habits=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->bad_habits) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->bad_habits}}
                    </td>
                @endif

            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.18 ¿Cuantas veces cepilla al día sus
                    dientes?
                </td>
                <td style="text-align: left; border: 1px solid #d0d0d0;" colspan="2"></td>
                <td style=" text-transform: uppercase; border: 1px solid #d0d0d0;">
                    @if (!empty($question->brush))
                        {{$question->brush}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.19 ¿Aparte del cepillo utiliza otro
                    aditamento para limpiar sus dientes?
                </td>
                @if (empty($question->additive)||$question->additive=="")
                    <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                    </td>
                @else
                    @if (strtolower($question->additive) !="no" )
                        <td style="text-align: left; border: 1px solid #d0d0d0;">X</td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                    @else
                        <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
                        <td style="text-align: left; border: 1px solid #d0d0d0;"> X</td>

                    @endif
                    <td style="text-align: left; border: 1px solid #d0d0d0;">
                        {{$question->additive}}
                    </td>
                @endif


            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">2.20 ¿Observaciones?</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;" colspan="3">
                    @if (!empty($question->observation))
                        {{$question->observation}}
                    @endif
                </td>

            </tr>

            </tbody>
        </table>

        <table>
            <thead>
            <tr style="text-align: left; background-color: #5de2c9; border: 1px solid #FFFFFF; ">
                <th style="text-align: left; color: #ffffff; width: 180px;">3. Estado fisíco</th>
                <th style="text-align: left; color: #ffffff; width: 60px;">Estado</th>
                <th style="text-align: left; color: #ffffff; width: 410px;">Observación</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">3.1 Presión</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($exploration->pressure))
                        {{$exploration->pressure}} mn Hg
                    @endif
                </td>

                <td style=" text-transform: uppercase; border: 1px solid #d0d0d0;">

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;"> 3.2 Pulso</td>
                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($exploration->pulse))
                        {{$exploration->pulse}} / min
                    @endif
                </td>

                <td style=" text-transform: uppercase; border: 1px solid #d0d0d0;">

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">3.3 Frecuencia cardio</td>

                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($exploration->heart_frequency))
                        {{$exploration->heart_frequency}}  x min.
                    @endif

                </td>
                <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">3.4 Frecuencia respiratoria</td>

                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($exploration->breathing_frequency))
                        {{$exploration->breathing_frequency}}  / min
                    @endif

                </td>
                <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">3.5 Temperatura</td>

                <td style="text-align: left; border: 1px solid #d0d0d0;">
                    @if (!empty($exploration->temperature))
                        {{$exploration->temperature}} °C
                    @endif

                </td>
                <td style="text-align: left; border: 1px solid #d0d0d0;"></td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">3.6 Observación física</td>

                <td colspan="2" style=" text-transform: uppercase; border: 1px solid #d0d0d0;">
                    @if (!empty($exploration->physical_exam))
                        {{$exploration->physical_exam}}
                    @endif

                </td>
            </tr>
            <tr>
                <td style="text-align: left; border: 1px solid #d0d0d0;">3.7 Observación bucal</td>

                <td colspan="2" style=" text-transform: uppercase; border: 1px solid #d0d0d0;">
                    @if (!empty($exploration->oral_exam))
                        {{$exploration->oral_exam}}
                    @endif

                </td>
            </tr>


            </tbody>
        </table>

    </div>
</section>
<br>
<section>
    <div>
        <table>
            <thead>
            <tr style="text-align: left; background-color: #5de2c9; border: 2px solid #5de2c9;">
                <th>Observaciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-transform: uppercase;">
                    <br><br><br><br><br>
                    <div style="background-color: #a9a8a8; height: 1px; width: 100%;"></div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<br>
<footer>
    <div id="gracias">
        <p><b>Gracias por preferirnos!</b></p>
    </div>
</footer>
</body>
</html>
