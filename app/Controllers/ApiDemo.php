<?php namespace App\Controllers;

class ApiDemo extends BaseController
{
	public function index()
	{
		return view('welcome_message');
    }
    
    public function demo1()
	{
    
    $car_info = array(
        'name_th' => 'น้ำมันเครื่องกึ่งสังเคราะห์ดีเซล 10W30 (6 ลิตร)',
        'name_en' => 'GENUINE ENGINE OIL DIESEL 10W30 6L',
        'unit' => 1,
        'distance_10000' => 900,
        'distance_20000' => 900,
        'distance_30000' => 900,
        'distance_40000' => 900,
        'distance_50000' => 900,
        'distance_60000' => 900,
        'distance_70000' => 900,
        'distance_80000' => 900,
        'distance_90000' => 900,
        'distance_100000' => 900
    );

    $user_info = array(
        'datarow1' => $car_info,
        'datarow2' => $car_info
    );

    $resp_data = $this->response
        ->setStatusCode(200)
        ->setContentType('application/json')
        ->setJSON($user_info);

    return $resp_data;

    /* return $this->response
        ->setStatusCode(200)
        ->setContentType('text/plain')
        ->setBody('Hello CI4 API'); */
    }

	//--------------------------------------------------------------------

}
