<?php
namespace huzhenghui\hello\controllers;
use Yii;
use yii\web\Controller;
class DefaultController extends Controller
{
public function actionIndex()
{
return $this->render('index');
}
}
