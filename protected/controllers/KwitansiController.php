<?php

class KwitansiController extends Controller {

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
                'actions' => array('admin', 'delete', 'inputCustomer', 'lihatKwitansi', 'tambahKwitansiCustomer','tambahItem'),
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
        $model = new Kwitansi;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Kwitansi'])) {
            $model->attributes = $_POST['Kwitansi'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->no_resi));
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

        if (isset($_POST['Kwitansi'])) {
            $model->attributes = $_POST['Kwitansi'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->no_resi));
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
        $dataProvider = new CActiveDataProvider('Kwitansi');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Kwitansi('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Kwitansi']))
            $model->attributes = $_GET['Kwitansi'];

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
        $model = Kwitansi::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'kwitansi-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionInputCustomer() {
        $model = new Kwitansi;

        if (isset($_POST['Kwitansi'])) {
            $this->redirect(array('lihatKwitansi', 'idCustomer' => $_POST['Kwitansi']['id_customer']));
        }
        $this->render('inputCustomer', array(
            'model' => $model,
        ));
    }

    public function actionTambahKwitansiCustomer($idCustomer) {
        $modelKwitansi = new Kwitansi;
        $modelKwitansi->id_customer = $idCustomer;
        if (isset($_POST['Kwitansi'])) {
            $modelKwitansi->attributes = $_POST['Kwitansi'];
            if ($modelKwitansi->save()) {
                $this->redirect(array('tambahItem', 'noResi' => $modelKwitansi->no_resi));
            }
        }
        $this->render('tambahKwitansiCustomer', array(
            'modelKwitansi' => $modelKwitansi,
            'idCustomer' => $idCustomer,
        ));
    }

    public function actionTambahItem($noResi) {
        
        $modelKwitansi = Kwitansi::model()->findByPk($noResi);
        $modelList = new ItemKwitansi;
        $modelList->no_resi = $noResi;
        $model = new ItemKwitansi;
        $model->no_resi = $noResi;
        $this->performAjaxValidation($model);
        if (isset($_POST['ItemKwitansi'])) {
            $model->attributes = $_POST['ItemKwitansi'];
            if ($model->save()) {
                $this->redirect(array('tambahItem', 'noResi' => $modelKwitansi->no_resi));
            }
        }
        $this->render('tambahItemKwitansi', array(
            'modelKwitansi' => $modelKwitansi,
            'modelList' => $modelList,
            'model' => $model,
        ));
    }

    public function actionLihatKwitansi($idCustomer) {
        $model = new Kwitansi;
        $model->id_customer = $idCustomer;
        $this->render('kwitansiCustomer', array(
            'model' => $model,
            'idCustomer' => $idCustomer,
        ));
    }

}
