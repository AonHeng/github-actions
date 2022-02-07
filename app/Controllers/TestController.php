<?php namespace App\Controllers;

class TestController extends BaseController
{
	public function index()
	{
		return view('welcome_message');
    }
    
    public function demo1()
	{
        $user_info = array(
            'id' => 1,
            'firstname' => 'anuwach',
            'lastname' => 'hengsukho',
            'email' => 'anuwach@gmail.com'
        );

        /* return $this->response
            ->setStatusCode(200)
            ->setJSON($user_info); */

        /* return $this->response
            ->setStatusCode(200)
            ->setContentType('text/plain')
            ->setBody('Hello CI4 API'); */
    }
    
    public function test()
	{
        echo "Test demo";
    }

    public function testLocation(){

        ?>
        <script>
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };
                        console.log(pos);
                        document.write(position.coords.latitude+','+position.coords.longitude);
                        //document.getElementById('location').innerHTML = position.coords.latitude+','+position.coords.longitude;
                    },
                    () => {
                        //handleLocationError(true, infoWindow, map.getCenter());
                        document.write('Cannot get user location');
                    }
                );
            } else {
                    // Browser doesn't support Geolocation
                    //handleLocationError(false, infoWindow, map.getCenter());
                    document.write('Browser doesn\'t support Geolocation');
            }
        </script>
        <?php

    }

	//--------------------------------------------------------------------

}
