<?php
/* deduzco datos de fecha */
$mes = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
            'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$lugar = " Salta, " . $mes[$datos->mes_liq - 1] . " de " . $datos->ano_liq;

/* genero 2 arrays, uno para haberes y otro para descuentos */

$haberes = array('SUELDO BASICO', 'ANTIGÜEDAD', 'DECRETO 5017-ART2 DECRETO 1285-ART4','AYUDA ADICIONAL',
                'ADICIONAL REMUNERATIVO DTO.3719 DTO.735','EQUIPARACION DOCENTE','TRANSPORTE',
                'ASIGNACION FAMILIAR');
$impohab = array($datos->basico, $datos->antiguedad, $datos->sfre, $datos->d158, $datos->perm, $datos->equi,
                 $datos->tran, $datos->asig);


$descuentos = array('APORTE JUBILATORIO', 'APORTE OBRA SOCIAL', 'DIFERENCIA MINIMO OBRA SOCIAL',
                 'CAJA COMPLEMENTARIA','SEGURO DE VIDA','ADELANTO DE SUELDO',
                 'EMBARGO DE SUELDO','S.A.D.O.P.');
 $impodes = array($datos->jubi, $datos->obra, $datos->difm, $datos->caja, $datos->segu, $datos->vale,
                  $datos->emba, $datos->sindi);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="STYLESHEET" href="css/print_static.css" type="text/css" />
    <style>
        div.mainIzquierda{float:left;width:45%}

        div.mainDerecha{float:right;width:45%}

        /* Default style definitions */

        @import url(common.css);

        @page {
            margin: 0.25in;
        }

        /* General
        -----------------------------------------------------------------------*/
        body {
            background-color: transparent;
            color: black;
            font-family: "verdana", "sans-serif";
            margin: 0px;
            padding-top: 0px;
            font-size: 1em;
        }

        @media print {
            p { margin: 2px; }
        }

        h1 {
            font-size: 1.1em;
            font-style: italic;
        }

        h2 {
            font-size: 1.05em;
        }

        img {
            border: none;
        }

        pre {
            font-family: "verdana", "sans-serif";
            font-size: 0.7em;
        }

        ul {
            list-style-type: circle;
            list-style-position: inside;
            margin: 0px;
            padding: 3px;
        }

        li.alpha {
            list-style-type: lower-alpha;
            margin-left: 15px;
        }

        p {
            font-size: 0.8em;
        }

        a:link,
        a:visited {
            /* font-weight: bold;  */
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: underline;
        }

        #body {
            padding-bottom: 2em;
            padding-top: 5px;
        }

        #body pre {
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        #money {
            text-align: right;
            padding-right: 20px;
        }

        /* Footer
        -----------------------------------------------------------------------*/
        #footer {
            color: black;
        }

        #copyright {
            padding: 5px;
            font-size: 0.6em;
            background-color: white;
        }

        #footer_spacer_row {
            width: 100%;
        }

        #footer_spacer_row td {
            padding: 0px;
            border-bottom: 1px solid #000033;
            background-color: #F7CF07;
            height: 2px;
            font-size: 2px;
            line-height: 2px;
        }

        #logos {
            padding: 5px;
            float: right;
        }

        /* Section Header
        -----------------------------------------------------------------------*/
        #section_header {
            text-align: center;
        }

        #job_header {
            text-align: left;
            background-color: white;
            margin-left: 5px;
            padding: 5px;
            border: 1px dashed black;
        }

        #job_info {
            font-weight: bold;
        }

        .header_details td {
            font-size: 0.6em;
        }

        .header_label {
            padding-left: 20px;
        }

        .header_field {
            padding-left: 5px;
            font-weight: bold;
        }

        /* Content
        -----------------------------------------------------------------------*/
        #content {
            padding: 0.2em 1% 0.2em 1%;
            min-height: 15em;
        }

        .page_buttons {
            text-align: center;
            margin: 3px;
            font-size: 0.7em;
            white-space: nowrap;
            font-weight: bold;
            width: 74%;
        }

        .link_bar {
            font-size: 0.7em;
            text-align: center;
            margin: auto;
            /*  white-space: nowrap; */
        }

        .link_bar a {
            white-space: nowrap;
            font-weight: bold;
        }

        .page_menu li {
            margin: 5px;
            font-size: 0.8em;
        }

        /* Detail
        -----------------------------------------------------------------------*/
        .detail_table {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            padding: 3px;
            margin: 15px;
        }

        .detail_head td {
            background-color: #ddd;
            color: black;
            font-weight: bold;
            padding: 3px;
            font-size: 0.75em;
            text-align: center;
        }

        .detail_label {
            padding: 3px;
            font-size: 0.75em;
            width: 16%;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            background-color: #ddd;
        }

        .detail_field {
            width: 33%;
            font-size: 0.8em;
            color: ;
            text-align: center;
            padding: 3px;
        }

        .detail_sub_table {
            font-size: 1em;
        }

        .detail_spacer_row td {
            border-top: 1px solid white;
            border-bottom: 1px solid white;
            background-color: #999;
            font-size: 2px;
            line-height: 2px;
        }

        #narrow {
            width: 50%;
        }

        .operation {
            width: 1%;
        }

        .summary_spacer_row {
            font-size: 0.1em;
        }

        .bar {
            border-top: 1px solid black;
        }

        /* Forms
        -----------------------------------------------------------------------*/
        .form {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            margin-top: 10px;
        }

        .form td {
            padding: 3px;
        }

        .form th, .form_head td {
            background-color: #ddd;
            border-bottom: 1px solid black;
            color: black;
            padding: 3px;
            text-align: center;
            font-size: 0.65em;
            font-weight: bold;
        }

        .form_head a:link,
        .form_head a:visited {
            color: black;
        }

        .form_head a:hover {
        }

        .sub_form_head td {
            border: none;
            font-size: 0.9em;
            white-space: nowrap;
        }

        .form input {
            color: black;
            background-color: white;
            border: 1px solid black;
            padding: 1px 2px 1px 2px;
            text-decoration: none;
            font-size: 1em;
        }

        .form textarea {
            color: black;
            background-color: white;
            border: 1px solid black;
            font-size: 1em;
        }

        .form select {
            color: black;
            background-color: white;
            font-size: 1em;
        }

        .button, a.button {
            color: black;
            background-color: white;
            border: 1px solid black;
            font-weight: normal;
            white-space: nowrap;
            text-decoration: none;
        }

        a.button {
            display: inline-block;
            text-align: center;
            padding: 2px;
        }

        a.button:hover {
            text-decoration: none;
            color: black;
        }

        .form_field {
            color: black;
            background-color: white;
            font-size: 0.7em;
        }

        .form_label {
            color: black;
            background-color: #ddd;
            font-size: 0.7em;
            padding: 3px;
        }

        /*
        .form_foot {
          background-color: #E5D9C3;
          font-size: 0.6em;
        }
        */

        .form_foot td {
            background-color: #ddd;
            border-bottom: 1px solid black;
            color: black;
            padding: 3px;
            text-align: center;
            font-size: 0.65em;
            font-weight: bold;
        }

        .form_foot a:link,
        .form_foot a:visited {
            color: black;
        }

        .form_foot a:hover {
            color: black;
        }

        .no_border_input input {
            border: none;
        }

        .no_wrap {
            white-space: nowrap;
        }

        tr.row_form td {
            white-space: nowrap;
        }

        /* Wizards
        -----------------------------------------------------------------------*/
        .wizard {
            font-size: 0.8em;
            border-top: 1px solid black;
        }

        #no_border {
            border: none;
        }

        .wizard p {
            text-indent: 2%;
        }

        .wizard td {
            padding: 3px;
            /*  padding-left: 3px;
              padding-right: 3px;
              padding-bottom: 3px;*/
        }

        .wizard input {
            color: black;
            background-color: white;
            border: 1px solid black;
            padding: 1px 2px 1px 2px;
            text-decoration: none;
        }

        .wizard textarea {
            color: black;
            background-color: white;
            border: 1px solid black;
        }

        .wizard select {
            color: black;
            background-color: white;
            border: 1px solid black;
        }

        .wizard_head {
            color: black;
            font-weight: bold;
        }

        .wizard_buttons {
            border-top: 1px solid black;
            padding-top: 3px;
        }

        .wizard_buttons a {
            background-color: white;
            border: 1px solid black;
            padding: 2px 3px 2px 3px;
        }

        /* List
        -----------------------------------------------------------------------*/
        .list_table,
        .notif_list_table {
            color: black;
            padding-bottom: 4px;
            background-color: white;
        }

        .list_table td,
        .notif_list_table td {
            padding: 3px 5px 3px 5px;
        }

        .list_table input {
            color: black;
            background-color: white;
            border: 1px solid black;
            padding: 1px 2px 1px 2px;
            text-decoration: none;
        }

        .list_head,
        .notif_list_head {
            font-weight: bold;
            background-color: #ddd;
            font-size: 0.65em;
        }

        .list_head td,
        .notif_list_head td {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            color: black;
            text-align: center;
            white-space: nowrap;
        }

        .list_head a:link,
        .list_head a:visited,
        .notif_list_head a:link,
        .notif_list_head a:visited {
            color: black;
        }

        .list_head a:hover,
        .notif_list_head a:hover {
        }

        .list_foot {
            font-weight: bold;
            background-color: #ddd;
            font-size: 0.65em;
        }

        .list_foot td {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            color: black;
            text-align: right;
            white-space: nowrap;
        }

        .sub_list_head td {
            border: none;
            font-size: 0.7em;
        }

        .odd_row td {
            /*  background-color: #EDF2F7;
              border-top: 2px solid #FFFFff;*/
            background-color: transparent;
            border-bottom: 0.9px solid #ddd; /* 0.9 so table borders take precedence */
        }

        .even_row td {
            /*  background-color: #F8EEE4;
              border-top: 3px solid #FFFFff;*/
            background-color: #f6f6f6;
            border-bottom: 0.9px solid #ddd;
        }

        .spacer_row td {
            line-height: 2px;
            font-size: 2px;
        }

        .phone_table td {
            border: none;
            font-size: 0.8em;
        }

        div.notif_list_text {
            margin-bottom: 1px;
            font-size: 1.1em;
        }

        .notif_list_row td.notif_list_job {
            text-align: center;
            font-weight: bold;
            font-size: 0.65em;
        }

        .notif_list_row td.notif_list_dismiss table td {
            text-align: center;
            font-size: 1em;
            border: none;
            padding: 0px 2px 0px 2px;
        }

        .notif_list_row td {
            padding: 5px 5px 7px 5px;
            border-bottom: 1px dotted #ddd;
            background-color: white;
            font-size: 0.6em;
        }

        .notif_list_row:hover td {
            background-color: #ddd;
        }

        /* Page
        -----------------------------------------------------------------------*/
        .page {
            border: none;
            padding: 0in;
            margin-right: 0.1in;
            margin-left: 0.1in;
            /*margin: 0.33in 0.33in 0.4in 0.33in; */
            background-color: transparent;
        }

        .page table.header h1{
            font-size: 12pt;
        }

        .page>h2,
        .page>p {
            margin-top: 2pt;
            margin-bottom: 2pt;
        }

        .page h2 {
            page-break-after: avoid;
        }

        .money_table {
            border-collapse: collapse;
            font-size: 6pt;
        }

        /* Tree
        -----------------------------------------------------------------------*/
        .tree_div {
            display: none;
            background-color: #ddd;
            border: 1px solid #333;
        }

        .tree_div .tree_step_bottom_border {
            border-bottom: 1px dashed #8B9DBE;
        }

        .tree_div .button, .tree_row_table .button,
        .tree_div .no_button {
            width: 110px;
            font-size: 0.7em;
            padding: 3px;
            text-align: center;
        }

        /*
        .tree_div .button a, .tree_row_table .button a {
          text-decoration: none;
          color: #114C8D;
        }
        */

        .tree_row_desc {
            font-weight: bold;
            font-size: 0.7em;
            text-indent: -10px;
        }

        .tree_row_info {
            font-size: 0.7em;
            width: 200px;
        }

        .tree_div_head a,
        .tree_row_desc a {
            color: #000033;
            text-decoration: none;
        }

        .tree_div_head {
            font-weight: bold;
            font-size: 0.7em;
        }

        /* Summaries
        -----------------------------------------------------------------------*/
        .summary {
            border: 1px solid black;
            background-color: white;
            padding: 1%;
            font-size: 0.8em;
        }

        .summary h1 {
            color: black;
            font-style: normal;
        }

        /* Sales-agreement specific
        -----------------------------------------------------------------------*/
        table.sa_signature_box {
            margin: 2em auto 2em auto;
        }

        table.sa_signature_box tr td {
            padding-top: 1.25em;
            vertical-align: top;
            white-space: nowrap;
        }

        .special_conditions {
            font-style: italic;
            margin-left: 2em;
            white-space: pre;
        }

        .sa_head * {
            font-size: 7pt;
        }

        /* Change order specific
        -----------------------------------------------------------------------*/
        table.change_order_items {
            font-size: 8pt;
            width: 100%;
            border-collapse: collapse;
            margin-top: 0em;
            margin-bottom: 0em;
        }

        table.change_order_items>tbody {
            border: 1px solid black;
        }

        table.change_order_items>tbody>tr>th {
            border-bottom: 1px solid black;
        }

        table.change_order_items>tbody>tr>td {
            border-right: 1px solid black;
            padding: 0.5em;
        }

        td.change_order_total_col {
            padding-right: 4pt;
            text-align: right;
        }

        td.change_order_unit_col {
            padding-left: 2pt;
            text-align: left;
        }

    </style>
</head>

<body>

<div id="body">

    <div id="content">
      <table style="width: 80%;" class="header" border="1">
        <tr>
          <td>
            <table style="width: 100%;" class="header">
              <tr>
                <td width="100%">
                  <div class="page" style="font-size: 8pt">
                    <table style="width: 100%;" class="header">
                      <tr>
                          <td  width="100%"><h1 style="text-align: center">
                            Colegio "José Manuel Estrada" (L-21)</h1></td>
                      </tr>
                      <tr align="center">
                          <td  width="100%"><h1 style="text-align: center"></h1><strong>España 2251 - (4400) - Salta CUIT 30-54773365-3</strong></td>
                      </tr>
                      <tr align="center">
                          <td  width="100%"><h2 style="text-align: center"></h2><h2>Recibo de Sueldo</h2></td>
                      </tr>
                    </table>

                    <table style="width: 100%; font-size: 8pt;">
                      <tr>
                        <td style="width: 50%">Apellido y Nombre: <strong>{{ $datos->nombre }}</strong></td>
                        <td style="width: 50%">CUIL Nº: <strong>{{ $datos->cuil }}</strong></td>
                      </tr>
                    </table>
                    <table style="width: 100%; font-size: 8pt;">
                      <tr>
                        <td style="width: 40%">Cargo: <strong>{{ $datos->cargo }}</strong></td>
                        <td style="width: 40%">Fecha Ingreso: <strong>{{ $datos->fecha_ingreso }}</strong></td>
                        <td style="width: 20%">Periodo: <strong>{{ $datos->mes_liq }} - {{ $datos->ano_liq }}</strong></td>
                      </tr>
                    </table>
                    <table style="width: 100%; font-size: 8pt;">
                      <tr>
                        <td style="width: 40%">Periodo Abonado: <strong>{{ $datos->cargo }}</strong></td>
                        <td style="width: 60%">Lugar y Fecha de pago: <strong>{{ $lugar }}</strong></td>
                      </tr>
                    </table>

                    <table class="change_order_items" width="100%">
                      <tbody>
                        <tr style="background-color: #9c5a5a ">
                          <td style="width: 60%" align="center"><strong>Descripcion de Concepto</strong></td>
                          <td style="width: 20%" align="center"><strong>Remuneraciones</strong></td>
                          <td style="width: 20%" align="center"><strong>Descuentos</strong></td>
                        </tr>
                      </tbody>
                      <?php
                      $cant_hab = count($haberes);
                      $cant_des = count($descuentos);
                      $tot_hab = 0;
                      $tot_des = 0;
                      $reng=0;
                      //** MUESTRA CONCEPTOS DE HABERES
                      for($i=0; $i<=$cant_hab - 1; $i++)
                        {
                          //dd($impohab[$i]);
                          if ($impohab[$i] > 0)
                            {
                              $tot_hab = $tot_hab + $impohab[$i];
                              $reng++;
                              ?>
                            <tr>
                              <td style="width: 60%" align="left">{{ $haberes[$i] }}
                                <?php //php $haberes[$i] ?>
                              </td>
                              <td style="width: 20%" align="right"><?php echo number_format($impohab[$i],2); ?></td>
                              <td style="width: 20%"></td>
                            </tr>
                            <?php
                            }
                        }

                        //** MUESTRA CONCEPTOS DE DESCUENTOS
                      for($i=0; $i<=$cant_des - 1; $i++)
                        {
                          if ($impodes[$i] > 0)
                            {
                              $tot_des = $tot_des + $impodes[$i];
                              $reng++;
                              ?>
                            <tr>
                              <td style="width: 60%" align="left">{{ $descuentos[$i] }}</td>
                                <td style="width: 20%"></td>
                                <td style="width: 20%" align="right"><?php echo number_format($impodes[$i],2); ?></td>
                            </tr>
                             <?php
                            }
                        }
                      ?>
                      @for($i= $reng; $i < 15; $i++)
                        <tr>
                          <td></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      @endfor
                    </table>
                    <table style="width: 100%; font-size: 10pt;">
                      <tr>
                        <td style="width: 60%" align="right"><strong>SUBTOTAL</strong></td>
                        <td style="width: 20%" align="right"><strong>{{ number_format($tot_hab,2) }}</strong></td>
                        <td style="width: 20%" align="right"><strong>{{ number_format($tot_des,2) }}</strong></td>
                      </tr>
                    </table>
                    <table lass="change_order_items" style="width: 100%; font-size: 10pt;">
                      <tr>
                        <td style="width: 60%" align="right"></td>
                        <td style="width: 20%" align="right"><strong>TOTAL NETO</strong></td>
                        <td style="width: 20%" align="right"><strong>{{ number_format($tot_hab - $tot_des,2)}}</strong></td>
                      </tr>
                    </table>
                  </div>

                  <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 8pt;">

                    <tr>
                      <td>Son: </td>
                    </tr>
                  </table>
                </td>

              </tr>
            </table>
          </td>

        </tr>
      </table>
    </div>
</div>


</body>
</html>
