<?php
// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
session_start();
// It will be called file.xls
header('Content-Disposition: attachment; filename="file.xls"');
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Caracas');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
$id_arribo = $_GET['arribo'];
// consulta de los datos
require_once('conexion.php');


/** Include PHPExcel */
require_once ('./Classes/PHPExcel.php');

//echo $resul;
$objPHPExcel = new PHPExcel();
$objPHPExcel2 = new PHPExcel();


$objPHPExcel->
  getProperties()
    ->setCreator("SAORINOCO")
    ->setTitle("VERIFICACION DE RIESGO BIOLOGICO-FISICO-QUIMICO")
    ->setSubject("Documento")
    ->setDescription("Documento generado con PHPExcel");

 $borders = array(
          'borders' => array(
            'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_THICK,
              'color' => array('argb' => 'FFA5A5A5'),
            )
          ),
);

$objPHPexcel2 = PHPExcel_IOFactory::load('Formato_reporte_SAO.xlsx');
$objClonedWorksheet = clone $objPHPexcel2->getSheetByName('Hoja1');
$objPHPExcel->addExternalSheet($objClonedWorksheet);
// Add some data
$sheetIndex = $objPHPExcel->getIndex($objPHPExcel-> getSheetByName('Worksheet'));
$objPHPExcel->removeSheetByIndex($sheetIndex);
$sheetIndex = $objPHPExcel->getIndex($objPHPExcel-> getSheetByName('Hoja1'));
$objPHPExcel->getActiveSheet()->setTitle("Reporte");


$consulta = "select ID_arribo,Fecha_arribo,Observaciones,Diferencias_calado,Calado_popa,Calado_proa,Numero_IMO,arr.ID_agencia,arr.ID_puerto,Nombre_puerto,arr.ID_buque,Nombre_buque,ag.Nombre_agencia
      from arribo as arr,agencia as ag, puerto as p, buque as b where ag.ID_agencia=arr.ID_agencia and p.ID_puerto=arr.ID_puerto AND b.ID_buque=arr.ID_buque AND ID_arribo=$id_arribo
      order by Fecha_arribo desc";
  $resultado = $conexion->query($consulta);
  if ($row=mysqli_fetch_array($resultado)) {
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('J6', $row['Fecha_arribo']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C7', $row['Nombre_buque']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C9', $row['Numero_IMO']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C19', $row['Nombre_puerto']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C21', $row['Fecha_arribo']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C23', $row['Nombre_agencia']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K19', $row['Calado_proa']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K21', $row['Calado_popa']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K23', $row['Diferencias_calado']);


  }
  $id_buque=$row['ID_buque'];
  $consulta2 = "select * from buque where ID_buque=$id_buque";
  $resultado2 = $conexion->query($consulta2);
  if ($row2=mysqli_fetch_array($resultado2)) {
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C11', $row2['Abanderamiento']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C13', $row2['Eslora']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C15', $row2['Manga']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('C17', $row2['Puntal']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K7', $row2['N_tanques_babor']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K9', $row2['N_tanques_estribor']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K11', $row2['N_tanques_db']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K13', $row2['Total_tanques']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K15', $row2['Capacidad_tanques']);
     $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K17', $row2['Vol_total']);
  }
  $consulta3="SELECT count(1) as total from estudio WHERE ID_arribo=$id_arribo";
  $resultado3= $conexion->query($consulta3);
  $data=mysqli_fetch_array($resultado3);
  // echo "size";
  $i=$data[0];
  // echo $i;
  $tam = $i/4;
  $pag= ceil($tam);
  $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('L3', 'Pagina 1 de 1');
  $arr = array(0,0,0,0,0);
  if ($pag>1) {
    
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('L3', 'Pagina 1 de '.$pag);
    
  }
  

 


$u=$_SESSION['user'];
$consulta = "SELECT * FROM usuario WHERE Username='$u'";
$resultado = $conexion->query($consulta);
$fila=mysqli_fetch_array($resultado);

$objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('J38', $fila['Nombre']);


$col = array('D','F','H','J','K');
$cont=0;
$paginado=0;
$consulta4="SELECT * FROM estudio WHERE ID_arribo=$id_arribo ORDER BY ID_estudio";
$resultado4 = $conexion->query($consulta4);
//   $rows = mysql_num_rows($resultado4);
while ($row4=mysqli_fetch_array($resultado4)) { 
    $arr[0]+=$row4['Actividad'];
    $arr[1]+=$row4['Salinidad'];
    $arr[2]+=$row4['Temperatura'];
    $arr[3]+=$row4['Conductividad'];
    $arr[4]+=$row4['Ph'];
    if ($cont-4==0) {
      $paginado++;
      $cont=0;
      $objWorkSheetBase = $objPHPExcel->getSheet($sheetIndex);
      $objWorkSheet1 = clone $objWorkSheetBase;
      $objWorkSheet1->setTitle('Reporte'.$paginado);
      $objPHPExcel->addSheet($objWorkSheet1);
      $sheetIndex = $objPHPExcel->getIndex($objPHPExcel-> getSheetByName('Reporte'.$paginado)); 
      $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('L3', 'Pagina '.$paginado++.' de '.$pag);
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('D28', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('D29', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('D30', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('D31', '');  
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('D32', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('D33', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('D34',''); 
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('F28', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('F29', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('F30', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('F31', '');  
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('F32', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('F33', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('F34',''); 
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('H28', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('H29', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('H30', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('H31', '');  
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('H32', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('H33', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('H34',''); 
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('J28', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('J29', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('J30', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('J31', '');  
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('J32', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('J33', '');
              $objPHPExcel->setActiveSheetIndex($sheetIndex)
                        ->setCellValue('J34','');
    }
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue($col[$cont].'28', $row4['N_tanque']);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue($col[$cont].'29', $row4['Actividad']);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue($col[$cont].'30', $row4['Salinidad']);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue($col[$cont].'31', $row4['Temperatura']);  
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue($col[$cont].'32', $row4['Conductividad']);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue($col[$cont].'33', $row4['Ph']);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue($col[$cont].'34', $row4['Volumen']); 
    $cont++;
}

    
   if ($paginado == 0) {
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K29', $arr[0]);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K30', $arr[1]);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K31', $arr[2]);  
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K32', $arr[3]);
    $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K33', $arr[4]);
   }else {
    for ($i=0; $i < $paginado++ ; $i++) { 
      if ($i==0) {
        $sheetIndex = $objPHPExcel->getIndex($objPHPExcel-> getSheetByName('Reporte'));
      }else {
        $sheetIndex = $objPHPExcel->getIndex($objPHPExcel-> getSheetByName('Reporte'.$i++));
      }
      $objPHPExcel->setActiveSheetIndex($sheetIndex)
              ->setCellValue('K29', $arr[0]);
      $objPHPExcel->setActiveSheetIndex($sheetIndex)
                ->setCellValue('K30', $arr[1]);
      $objPHPExcel->setActiveSheetIndex($sheetIndex)
                ->setCellValue('K31', $arr[2]);  
      $objPHPExcel->setActiveSheetIndex($sheetIndex)
                ->setCellValue('K32', $arr[3]);
      $objPHPExcel->setActiveSheetIndex($sheetIndex)
                ->setCellValue('K33', $arr[4]);
    }
   }


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;

