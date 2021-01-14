<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view', 'create'),
				'users' => array('*'),
			),
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'users' => array('@'),
			),
			array(
				'allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete', 'update'),
				'users' => array('admin'),
			),
			array(
				'deny',  // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id, $new = false, $newComentario = false, $fail = false)
	{

		$comentario = new Comentario;

		$comentarios = new CActiveDataProvider(
			"Comentario",
			array(
				"criteria" => array(
					'condition' => "post_id = $id",
					'order' => 'id desc'
				),
			)
		);

		$this->render('view', array(
			'model' => $this->loadModel($id),
			'comentarios' => $comentarios->getData(),
			'comentario' => $comentario,
			"newRecord" => $new,
			"newComentario" => $newComentario,
			"fail" => $fail
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Post;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Post'])) {
			$model->attributes = $_POST['Post'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->id, "new" => true));
		}

		$categorias = Categoria::model()->findAll();

		$categoriasSelect = [
			"" => "Selecione"
		];

		foreach ($categorias as $categoria) {
			$categoriasSelect[$categoria->id] = $categoria->nome;
		}

		$this->render('create', array(
			'model' => $model,
			'categorias' => $categoriasSelect
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Post'])) {
			$model->attributes = $_POST['Post'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->id));
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
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$categoria = null;
		$criteria = [];
		$errors = [];

		if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
			if (!is_numeric($_GET['categoria'])) {
				array_push($errors, "Campo categoria deve ser um número inteiro");
			} else {
				$categoria = intval($_GET['categoria']);
				array_push($criteria, "categoria_id=" . $categoria);
			}
		}
		if (isset($_GET['inicio']) && !empty($_GET['inicio'])) {
			array_push($criteria, "data>='" . $_GET['inicio'] . "'");
		}
		if (isset($_GET['fim']) && !empty($_GET['fim'])) {
			array_push($criteria, "data>='" . $_GET['fim'] . "'");
		}
		$criteria = join(" AND ", $criteria);
		$dataProvider = new CActiveDataProvider(
			'Post',
			array(
				"criteria" => array(
					'condition' => $criteria,
					'order' => 'id desc'
				),
				"pagination" => array(
					"pageSize" => 12
				)
			)
		);
		$this->render('index', array(
			'dataProvider' => $dataProvider,
			'errors' => $errors
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new Post('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Post']))
			$model->attributes = $_GET['Post'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model = Post::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'post-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
