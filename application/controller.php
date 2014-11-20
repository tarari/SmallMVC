<?php
	/**
	**    Controller:
	**    admins the navigation
	*/
	class Controller{
		public $load;
		public $model;
		//to interact with user
		public $route;

		function __construct(){
			$this->load= new Load();
			$this->model= new Model();
			// activar la pagina inicial
			$this->route=Request::getCont();
			print_r($this->route);
			// now we can select the control
			// the view and the model
			if ($this->route==""){
				$this->route='home';
			}
			if (is_readable('views/'.$this->route.'.php')){
				call_user_func(array($this,$this->route));
			}
			else {
				call_user_func(array($this,'error'));
			}
		}

		function home(){
			//load data
			$data=$this->model->user_info();
			//load view
			$this->load->view('home.php',$data);
		}
		function about(){
			//load data
			$data=$this->model->user_info();
			//load view
			$this->load->view('about.php',$data);
		}
		function contact(){
			//load data
			$data=$this->model->user_info();
			//load view
			$this->load->view('contact.php',$data);
		}
		function error(){
			//load data
			$data=$this->model->user_info();
			//load view
			$this->load->view('error.php',$data);
		}
	}