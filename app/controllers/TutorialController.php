<?php

class TutorialController extends \BaseController {

	public function getIndex()
	{	
		if(BrowserDetect::isIE() == true){
			return View::make('iexplorer');
		}
		return View::make('tutoriales');
	}

}