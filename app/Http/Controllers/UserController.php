<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    /**
     * @var false
     */
    private bool $isReaded;
    private string $url;

    public function __construct() {
        $this->url = 'https://jsonplaceholder.typicode.com/users';
        $this->isReaded = false;
    }


    public function requestToServer() {


				$ch = $this->createCurlConnection();

        $users = curl_exec($ch);

        $this->closeCurlConnection($ch);

        $this->isReaded = true;

        return view('user.requestToServer', [
            'users' => json_decode($users, true)
        ]);

    }

    private function createCurlConnection() {
	    $ch = curl_init();

	    curl_setopt($ch, CURLOPT_URL, $this->url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	    return $ch;
    }

    private function closeCurlConnection($ch) {
    	curl_close($ch);
    }

}
