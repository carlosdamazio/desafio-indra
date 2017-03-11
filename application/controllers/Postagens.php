<?php

	class Postagens extends CI_Controller{
		public function index(){

			$data['title'] = 'Últimas postagens';

			$data['postagens'] = $this->postagem_modelo->get_postagem();


			$this->load->view('templates/cabecalho');
			$this->load->view('postagens/index', $data);
			$this->load->view('templates/rodape');
		
		}

		public function view($url_post = NULL){
			$data['tb_postagem'] = $this->postagem_modelo->get_postagem($url_post);

			if(empty($data['tb_postagem'])){
				
			}

			$data['titulo'] = $data['tb_postagem']['nme_titulo'];

			$this->load->view('templates/cabecalho');
			$this->load->view('postagens/view', $data);
			$this->load->view('templates/rodape');
		}

		public function create(){
			$data['title'] = 'Criar postagem';

			$this->form_validation->set_rules('nme_titulo', 'Título', 'required');
			$this->form_validation->set_rules('desc_postagem', 'Postagem', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/cabecalho');
				$this->load->view('postagens/create', $data);
				$this->load->view('templates/rodape');
			} else {
				$this->postagem_modelo->set_postagem();
				redirect('postagens');
			}
		}
	
		public function delete($idt_postagem){
			$this->postagem_modelo->delete($idt_postagem);
			redirect('postagens');
		}

		public function edit($url_post){
			$data['tb_postagem'] = $this->postagem_modelo->get_postagem($url_post);

			if(empty($data['tb_postagem'])){
				
			}

			$data['titulo'] = 'Editar postagem';

			$this->load->view('templates/cabecalho');
			$this->load->view('postagens/edit', $data);
			$this->load->view('templates/rodape');
		}

		public function update(){
			$this->postagem_modelo->update();
			redirect('postagens');
		}

	}
