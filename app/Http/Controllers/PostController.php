<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {

		public function __construct() {
			$this->isChanged = false;
		}

		public function showAll(): string {
			return '<h1>All posts from database</h1>';
		}
}
