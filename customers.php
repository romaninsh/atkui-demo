<?php

require_once "init.php";

$app->title = "Customers";

$customer = new \Demo\Model\Contact($db);

$form = new \atk4\ui\Form();
$form->setModel($customer);

$modal = new \Demo\View\Modal();
$modal->addAction('Save',['ui positive right labled icon button']);
$modal->add($form);

$app->add($modal);

$addbtn= new \atk4\ui\Button('ADD');
$addbtn->on('click',$modal->js()->modal('show'));

$app->add($addbtn);
$grid = new \atk4\ui\Grid();
$grid->setModel($customer);


$app->add($grid);
$app->run();