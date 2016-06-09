<?php

class InfoController extends Controller
{
	public function __construct()
	{
		parent::__construct();

		Auth::checkAuthentication();
	}

	public function index()
	{
		$this->View->render('info/index', array(
			'info' => InfoModel::getProfileInfo()
			));
	}

	public function edit()
	{
		$this->View->render('info/edit', array(
			'info' => InfoModel::getProfileInfo()
			));
	}

	public function editSave()
	{
		InfoModel::updateProfileInfo(
			request::post('name'), request::post('surname'), request::post('occupation'), request::post('gender'), 
			request::post('address'), request::post('email'), request::post('mobile'), request::post('interest'));
			Redirect::to('info');
	}
}