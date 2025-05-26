<?php

class ProvinceController extends LSYii_Controller
{
    public function actionIndex()
    {
        $data = new CActiveDataProvider('Province');
        $this->render('index', ['dataProvider' => $data]);
    }

    public function actionView($id)
    {
        $province = Province::model()->findByPk($id);
        $this->render('view', ['model' => $province]);
    }

    // Optional: Create, Update, Delete actions
}
?>
