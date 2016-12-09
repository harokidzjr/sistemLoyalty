<?php

class CustomerController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Customer;

        if (isset($_POST['Customer'])) {
            $model->attributes = $_POST['Customer'];

            $imgUpload = CUploadedFile::getInstance($model, 'scan_ktp');
            $fileName = "DIMG{$model->id}.{$model->nama}-$imgUpload";
            $fileZero = "DIMG{$model->id}.{$model->nama}-no_scan.jpg";
            $model->scan_ktp = $fileName;

            if (empty(strlen($imgUpload))) {
//jika file yg di upload kosong 
//maka field scan_ktp di isi nama dari variable $fileZero
                $model->scan_ktp = $fileZero;
            }
            if ($model->save()) {
                if (strlen($imgUpload) > 0) {

//Jika file ada maka di pindahkan ke folder "/upload/scan" 
//dan diberi nama pada variabel $fileName                    
                    $imgUpload->saveAs(Yii::app()->basePath . '/../upload/scan/' . $fileName);
                } else {
//Jika file tidak ada maka copi file no_scan.jpg di folder "/upload/scan" 
//dan diberi nama pada variabel $fileZero                 
                    $file = Yii::app()->basePath . '/../upload/scan/no_scan.jpg';
                    $newfile = Yii::app()->basePath . '/../upload/scan/' . $fileZero;
                    copy($file, $newfile);
                }
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Customer'])) {
            $Oldfile = $model->scan_ktp;

            $model->attributes = $_POST['Customer'];

            $imgUpload = CUploadedFile::getInstance($model, 'scan_ktp');
            $fileName = "DIMG{$model->id}.{$model->nama}-$imgUpload";
            $fileZero = "DIMG{$model->id}.{$model->nama}-no_scan.jpg";
            $model->scan_ktp = $fileName;

            if (empty(strlen($imgUpload))) {
                //jika file yg di upload kosong 
                //maka field scan_ktp di isi nama dari variable $fileZero
                $model->scan_ktp = $fileZero;
            }
            if ($model->save()) {
                if (!empty($model->nama)) {
                    @unlink(getcwd() . '/upload/scan/' . $Oldfile);

                    if (strlen($imgUpload) > 0) {

                        //Jika file ada maka di pindahkan ke folder "/upload/scan" 
                        //dan diberi nama pada variabel $fileName                    
                        $imgUpload->saveAs(Yii::app()->basePath . '/../upload/scan/' . $fileName);
                    } else {
                        //Jika file tidak ada maka copi file no_scan.jpg di folder "/upload/scan" 
                        //dan diberi nama pada variabel $fileZero                 
                        $file = Yii::app()->basePath . '/../upload/scan/no_scan.jpg';
                        $newfile = Yii::app()->basePath . '/../upload/scan/' . $fileZero;
                        copy($file, $newfile);
                    }
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
// we only allow deletion via POST request
            $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Customer');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Customer('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Customer']))
            $model->attributes = $_GET['Customer'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Customer::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'customer-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
