<?php
/* Controlador para as páginas estáticas,
   ele tem como objetivo redirecionar as requests
   e carregar as views juntos com os templates. 
   Com isso, evita-se tempo perdido em desenvolver
   cada página usando este recurso.

*/
	class Pages extends CI_Controller{
		/*Função de visualização primária das páginas*/
		public function view($page = 'inicial'){

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/cabecalho');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/rodape');
		
		}
	}
