<?php

require_once "init.php";

$app->title = "Customers";

$customer = new \Demo\Model\Contact($db);

$form = new \atk4\ui\Form();
// TODO : remove default Save Button
$form->setModel($customer);

$modal = new \Demo\View\Modal();
$save_btn = $modal->addAction('Save',['ui positive right labled icon button']);
$modal->add($form);

$save_btn->on('click',$form->js()->submit());

$app->add($modal);

$addbtn= new \atk4\ui\Button('ADD');
$addbtn->on('click',$modal->js()->modal('show'));

$app->add($addbtn);
$grid = new \atk4\ui\Grid();
$grid->setModel($customer);


$form->onSubmit(function($f)use($modal,$grid){
	// TODO :: DATA NOT SAVING
	$f->model->save();
	// TODO :: Sucess message comes in Modal popup
	// TODO :: Grid not reloaded, no function defined
	return [$f->success("Done",'Data saved'),$modal->js()->modal('hide'),$grid->js()->reload()];
});


$app->add($grid);
$app->run();