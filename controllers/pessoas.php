<?php
class pessoas extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model("pessoas_model");
	}

	public function pessoa () {
        $pessoas = $this->pessoas_model->buscaTodos();

        $dados = array("pessoas" => $pessoas);

		$this->load->view("pessoas/pessoa.php", $dados);
	}

	public function cadastroPessoa () {
			$pessoa = array(
				"Nome" => $this->input->post("Nome"),
			);
			
			$this->pessoas_model->salva($pessoa);
			$this->load->view("pessoas/pessoa.php");

			redirect("pessoas/pessoa", "refresh");
			
		} 


		public function alterar($Codigo)

		{
			$row = $this->pessoas_model->atualizar($Codigo);
			$data['dados'] = $row;
			$this->load->view("pessoas/alterar.php", $data);
		}
		
		public function updateDados() {
				 $data = array(
   
					"Nome" => $this->input->post("Nome"),
				 
				 );

				 $this->pessoas_model->updateL($data, $this->input->post('Codigo'));		
				 redirect('pessoas/pessoa');
		}

	}
