<?php
  $ayno = $datos->nombre;
  $cuil = $datos->cuil;
  $cargo = $datos->cargo;
  $ingreso = $datos->fehca_ingreso;
  $mes = $datos->mes_liq;
  $ano = $datos->ano_liq;
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Recibo</title>
    <style>
        table,td {
                  border: 1px solid black;
        }
    </style>
  </head>
  <body>
      <table border="1" cellspacing="0" width="90%">
        <tbody>
          <tr align="center" >
            <td colspan="6" style="font-size: 16px">Colegio "José Manuel Estrada" (L-21)</td>
          </tr>
          <tr align="center" border="1">
            <td colspan="6">España 2251 - (4400) - Salta CUIT 30-54773365-3</td>
          </tr>
          <tr align="center">
            <td colspan="6">Recibo de Sueldo</td>
          </tr>
          <tr>
            <td width="20%" aling="left">Apellido y Nombre</td>
            <td colspan="2" aling="left" style="width: 50%; font-weight:bold">{{$ayno}}</td>
            <td aling="left" style="width: 12%">N° CUIL</td>
            <td aling="center" colspan="2" style="width:18%;font-weight:bold ">{{$cuil}}</td>
          </tr>
        </tbody>
      </table>
      <table border="1" cellspacing="0" width="90%">
        <tbody>
          <tr>
            <td aling="left" style="width: 15%; align:left">Cargo</td>
            <td aling="left" style="width: 25%; font-weight:bold; align:left">{{$cargo}}</td>
            <td aling="left" style="width: 20%">Fecha Ingreso</td>
            <td aling="left" style="width: 15%; font-weight:bold; align:center">{{$ingreso}}</td>
            <td aling="left" style="width: 10%">Periodo</td>
            <td aling="left" style="width: 15%; font-weight:bold; align:center">{{$mes}} - {{$ano}}</td>
          </tr>
          <tr>
            <td></td>
            <td colspan="5"></td>
          </tr>
          <tr>
            <td colspan="4">Concepto</td>
            <td>Remuneración</td>
            <td>Descuentos</td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="4">Subtotal</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="5">Total Neto</td>
            <td></td>
          </tr>
          <tr>
            <td>Son</td>
            <td colspan="5"></td>
          </tr>
        </tbody>
      </table>
     </body>
</html>

