<?php
function productos_json(&$entradas, &$camisas = 0, &$etiquetas = 0){
  $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'dos_dias' );
  $total_entradas = array_combine($dias, $entradas);
  $json = array();

  foreach ($total_entradas as $key => $entradas) {
    if ((int) $entradas > 0 ) {
      $json[$key] = (int) $entradas;
    }
  }

  $camisas = (int) $camisas;
  if ($camisas > 0) {
    $json['camisas'] = $camisas;
  }
  if ($etiquetas > 0) {
    $json['etiquetas'] = $etiquetas;
  }
  return json_encode($json);
}

function eventos_json(&$eventos){
  $eventos_json = array();
  foreach($eventos as $evento) {
    $eventos_json['eventos'][] = $evento;
  }
  return json_encode($eventos_json);
}


?>
