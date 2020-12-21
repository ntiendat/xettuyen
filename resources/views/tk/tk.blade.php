<?php 
header('Content-type: text/plain; charset=utf-8');
// header("content='text/plain; charset=utf-8'");


   include("../lib/connection.php");
   
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
require_once ('jpgraph/src/jpgraph_bar.php');
 
// Some (random) data
$sql = "SELECT * FROM thisinh";
$result = $conn->query($sql);
$toan0=0;
$toan1=0;
$toan2=0;
$toan3=0;
$toan4=0;
$toan5=0;
$toan6=0;
$toan7=0;
$toan8=0;
$toan9=0;
$toan10=0;
if ($result->num_rows > 0) {
    

  while($row = $result->fetch_assoc()) {
    switch ($row['toan']) {
        case 0:
            $toan0 ++;
           break;
        case 1:
            $toan1 ++;
           break;
        case 2:
            $toan2 ++;
           break;
        case 3:
            $toan3 ++;
           break;
        case 4:
            $toan4 ++;
           break;
        case 5:
            $toan5 ++;
    break;
        case 6:
            $toan6 ++;
           break;
        case 7:
            $toan7 ++;
           break;
        case 8:
            $toan8 ++;
           break;
        case 9:
            $toan9 ++;
    break;
       
        case 10 :
            $toan10 ++;
        break;
    }

}}
$ydata = array($toan0,$toan1,$toan2,$toan3,$toan4,$toan5,$toan6,$toan7,$toan8,$toan9,$toan10);

function bd($a){
    $ydata = $a;
    $graph = new Graph(300*2,200*2);
$graph->SetScale('intlin');
$graph->SetShadow();
$graph->SetMargin(40,30,20,40);
$bplot = new BarPlot($a);
$bplot->SetFillColor('orange');
$graph->Add($bplot);
$graph->title->Set(' ');
$graph->xaxis->title->Set(' ');
$graph->yaxis->title->Set('');
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->Stroke();

}
bd($ydata);
?>