<?php
/*
     afficher un graphique jpChart
     nous allons chercher le graphique généré
     par le module graphique sur la fonction executeIndex
     sur une idée de http://www.symfony-project.org/forum/index.php/m/20245/
     après installation de
     * jpgraph : sudo apt-get install libphp-jpgraph
     * dwJpgraphPlugin : symfony plugin:install dwJpgraphPlugin --release=1.0.2
     le code est dans : apps\gd\modules\graphique\actions\actions.class.php
     executeIndex peut etre appele par <img src="<?php echo url_for('graphique/index'); ?>" />
     depuis n'importe quel module -->
*/

class graphiqueActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex($request)
  {
  
  $this->getResponse()->setContentType('image/jpeg');
	$this->getResponse()->sendHttpHeaders();
	$sfJ = new sfJpGraph('pie', 600, 300);
	$sfJpGraph = $sfJ ->getJpGraph();

  	$data = array(100, 500);
	$sfJpGraph->SetScale("textint");

	$sfJpGraph->SetShadow();
		
	$bplot = new PiePlot3D($data);
	$bplot->value->Show();
	// $bplot->value->SetFont(FF_ARIAL,FS_BOLD);
	// $bplot->value->SetAngle(45);
	$bplot->value->SetColor("black","navy");
	$legends = array('label1', 'label2');		
	$bplot->SetLegends($legends); 
	$bplot->value->Show(); 		
	$bplot->ExplodeSlice(0);
		
	$sfJpGraph->Add($bplot);
	$sfJpGraph->Stroke();
		
  	return sfView::NONE;
  }
  }
  