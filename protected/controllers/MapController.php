<?php

class MapController extends CController
{
	public function init()
    {
        $this->layout = false;
    }
    
	public function actionDefault()
	{
		if(array_key_exists('district', $_GET))
		{
			$requiredDistrict = strtolower($_GET['district']);
		}else{
			$requiredDistrict = "all";
		}

		$json_url = "/opt/lampp/htdocs/vawHack/protected/controllers/incident.json";
		$json = file_get_contents($json_url);
		$dataInitial = json_decode($json, TRUE);

		$data = array();
		foreach($dataInitial as $eachdata)
		{
			if ($requiredDistrict =="all" || strtolower($eachdata["incident_district"])==$requiredDistrict)
			{
				$data[] = $eachdata;
			}
		}

		$districts = array();
		foreach($dataInitial as $item)
		{

			$district = $item["incident_district"];
			if(!array_key_exists($district, $districts))
			{
				$districts[$district] =1;
			}else{
				$districts[$district] += 1;
			}
		}
		ksort($districts);

		$criteria=new CDbCriteria();
	    $count= count($data);
	    $pages=new CPagination($count);

	    // results per page
	    $pages->pageSize=10;
	    $pages->applyLimit($criteria);
	    $dataProvider=new CArrayDataProvider($data);
		$dataProvider->setPagination($pages);
		$data = $dataProvider->getData();
		
		$returnArray = array('data'=>$data,
			'districts'=>$districts,
			'pages' => $pages,
		);

		$this->render('default', $returnArray);
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'sclass'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}