<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PDF-AMORTIZACIÓN</title>
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
        height: 60;
        width:60;
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
        background: #2653d8;
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
        color: #214dd3;
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
        background-color: #1C3FAA;
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
        background-color: #fff;
        border: 2px solid #1C3FAA;
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

    table tbody tr:nth-child(2n) {
        background: #f2f2f2;
    }


</style>
<body>
<section style="margin-bottom: 0px; height: auto;">
    <div class="encabezado">
        <img class="logo" src="http://18.221.204.244/dist/images/dinero.jpg" alt="">
        <div class="box-company">
            <h1 class="name-company">Banca Comunal</h1>
            <small class="dates-company">Procesos de Crédito y Control Financiero <br></small>
            <small class="dates-company">Email: bancacommunal@gmail.com</small>
            <small class="dates-company"> Télefono: +(539) 984 500 335</small>
        </div>
    </div>
    <div class="box">
        <div class="lines-1"></div>
        <div class="lines-2"></div>
    </div>
    <h5 style=" margin-bottom: 0px;font-size: 13px;color: #1c47ca;font-family: 'Montserrat', sans-serif; ">Pago de Cuotas</h5>
    <div class="box">
        <div class="box-1">
            <h1>Sr(a).</h1>
            <span>{!!$member['names']!!}</span>
            <h1>Identificación</h1>
            <span>{{$member['dni']}}</span>
            <h1>Télefono</h1>
            <span>   {{$member['phone1']}}</span>
            <h1>Correo</h1>
            <span>  {{$member['email']}}</span>
        </div>
        <div class="box-derecho">
            <div class="box-2">
                <h1>&nbsp;</h1>


                <h1>Fecha de Liquidación</h1>
                <span>  {{\Carbon\Carbon::parse($dataOperation['date_pay'])->format('Y-m-d') }}</span>

                <h1>Fecha de Vencimiento</h1>
                <span>  {{\Carbon\Carbon::parse($dataOperation['date_period'])->format('Y-m-d') }}</span>

            </div>

        </div>


    </div>
</section>
<section style="margin-top: 0px; margin-top: -220px;">

    <div>
        <table>
            <thead>
            <tr style="color: black; text-align: center; background-color: #FFFFFF; border: 1px solid #FFFFFF;">
                <th style="text-align: left; font-size: 15px;" colspan="7">Datos del Pago</th>
            </tr>
            <tr style="color: black; text-align: center; background-color: #FFFFFF; border: 1px solid #FFFFFF;">
                <th>
                    <h1>Monto</h1>
                    <span>  {{$dataOperation['amount']}}</span>
                </th>
                <th>
                    <h1>Pago N°</h1>
                    <span>  {{$dataOperation['num_pay']}}</span>
                </th>

                <th>
                    <h1>Estado</h1>
                    <span>  {{$dataOperation['status_pay']}}</span>
                </th>
            </tr>

            <tr style="color: black; text-align: center; background-color: #FFFFFF; border: 1px solid #FFFFFF;">
                <th>
                    <h1> Interés Mora</h1>
                    <span>  {{$dataOperation['interest_mora']}}</span>
                </th>
                <th>
                    <h1>Valor cancelado</h1>
                    <span>  {{$dataOperation['total']}}</span>
                </th>
                <th>
                    <h1>Saldo</h1>
                    <span>  {{$dataOperation['balance']}}</span>
                </th>
            </tr>

            <tr style="color: black; text-align: center; background-color: #FFFFFF; border: 1px solid #FFFFFF;">
                <th style="text-align: left; font-size: 15px;" colspan="7">Detalle de las Coutas</th>
            </tr>

            <tr style="text-align: left; background-color: #1C3FAA; border: 2px solid #1C3FAA;">
                <th style="text-align: center" width="30px">Periodo</th>
                <th style="text-align: center" width="80px">Fecha de Pago</th>
                <th style="text-align: center" width="65px">Capital</th>
                <th style="text-align: center" width="65px">Interes</th>
                <th style="text-align: center" width="70px">Dividiendo</th>
                <th style="text-align: center" width="70px">Total A Pagar</th>
                <th style="text-align: center" width="70px">Saldo</th>
                <th style="text-align: center" width="90px">Estado</th>

            </tr>
            </thead>
            <tbody>

            @foreach($dataTable as $data)
                <tr>

                    <td style=" text-transform: uppercase;text-align: center;">
                        {{$data['period']}}
                    </td>
                    <td style=" text-transform: uppercase;">
                        {{$data['payment_date']}}
                    </td>
                    <td style="text-align: left">
                        $&nbsp;{{$data['amount']}}
                    </td>
                    <td style="text-align: left">
                        $&nbsp;{{$data['interest']}}
                    </td>
                    <td style="text-align: left">
                        $&nbsp;{{$data['dividing']}}
                    </td>
                    <td style="text-align: left">
                        $&nbsp;{{$data['total_payment']}}
                    </td>
                    <td style="text-align: left">
                        $&nbsp;{{$data['balance']}}
                    </td>
                    <td style="text-align: right">
                        {{$data['status']}}
                    </td>
                </tr>

            @endforeach


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
