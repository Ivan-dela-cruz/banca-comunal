<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PDF-ORDEN-</title>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
                    </link>
<style>
    body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif;
        font-size: 13px;
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
        font-size: 12px;
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
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facarticulo thead {
        padding: 20px;
        background: #238288;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
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
</style>
<body>

<header>
    <div id="logo">
        <img src="{{asset('img/auth-logo-dark.png')}}" alt="CompartiendoCodigo" id="imagen">
    </div>
    <div id="datos">

        <p id="tiutlo_pdf">
            <b>Souri Odontología Digital</b>
            <br> Sucursal Latacunga
        </p>
        <p id="encabezado">

            Avenida 5 de Junio y Río Langoa Sector la Estación, Latacunga, Ecuador.
            <br>Telefono: +(539) 984 500 337
            <br>Email: verocdp@gmail.com
        </p>
    </div>
</header>

<br>

<section>
    <div>
        <table id="facliente">
            <thead>
            <tr>
                <th colspan="2" id="fac">Paciente</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>
                    <p>
                        Sr(a).
                        <span style="font-weight: normal; text-transform: uppercase;">{!!$treatment->name_p!!} {!!$treatment->last_name_p!!}</span>
                    </p>
                    <p id="cliente">

                        cedula: {{$treatment->ci}}
                       

                    </p>
                    <p id="cliente">
                        Dirección:
                        <span style="font-weight: normal; text-transform: uppercase;">{{$treatment->address}}</span>

                    </p>

                </th>
                <th>
                    <p id="cliente">
                        Teléfono:
                        <span style="font-weight: normal;">{{$treatment->phone}}</span>

                    <p id="cliente">
                        Email:
                        <span style="font-weight: normal;">{{$treatment->email}}</span>

                    </p>
                    <p><br></p>

                </th>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<section>
    <div>
        <table id="facvendedor">
            <thead>
            <tr id="headerOrden">
                <th class="tdOrdenDetalle">Código</th>
                <th class="tdOrdenDetalle">Fecha registro</th>
                <th class="tdOrdenDetalle">Estado del tratamiento</th>
            </tr>
            </thead>
            <tbody>
            <tr id="datoOrden">
                <td class="tdOrdenDetalle">{{$treatment->id}}</td>
                <td class="tdOrdenDetalle">{{\Carbon\Carbon::parse($treatment->updated_at)->format('Y-m-d') }}</td>
                
                <td class="tdOrdenDetalle">
                    {{$treatment->status}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<br>
<section>
    <div>
        <table id="facarticulo">
            <thead>
            <tr style="color: black; text-align: center; background-color: white;">
                <th class="tdOrdenDetalle" style="text-align: center;" colspan="5">Detalle del tratamiento</th>
            </tr>
            <tr style="text-align: left;" id="fa">
                <th class="tdOrdenDetalle" width="10px">N°</th>
                <th class="tdOrdenDetalle">Procedimiento</th>
                <th width="120px" class="tdOrdenDetalle">Precio Und.</th>
                <th class="tdOrdenDetalle">Cantidad</th>
                <th class="tdOrdenDetalle">Total</th>

            </tr>
            </thead>
            <tbody>
            {{$contador = 1}}
            @foreach($details as $detail)
                <tr>
                    <td class="tdOrdenDetalle">{{$contador}}</td>
                    <td style=" text-transform: uppercase;"  class="tdOrdenDetalle">
                       {{$detail->description}}
                    </td>
                    <td class="tdOrdenDetalle">
                        {{$detail->price_unit}}
                    </td>
                    <td class="tdOrdenDetalle">
                        {{$detail->quantity}}
                    </td>
                    <td style=" text-transform: uppercase;" class="tdOrdenDetalle">
                        {{$detail->price}}
                    </td>
                   

                </tr>
                {{$contador++}}
            @endforeach
            </tbody>
        </table>
    </div>
</section>
<br>
<section>
    <div>
        <table id="facarticulo">
            <thead>
            <tr style="color: black; text-align: center; background-color: white;">
                <th class="tdOrdenDetalle" style="text-align: center;">Observaciones</th>
            </tr>
            <tr style="text-align: left;" id="fa">

                <th class="tdOrdenDetalle">Indicaciones</th>
            </tr>
            </thead>
            <tbody>
            {{----  @foreach ($detalles as $det)--}}
            <tr>
                <td style=" text-transform: uppercase;" class="tdOrdenDetalle">
                    {{$detail->description}}
                </td>
                
            </tr>

            {{----    @endforeach --}}
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