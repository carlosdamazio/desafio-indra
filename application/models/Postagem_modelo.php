<?php

	class Postagem_modelo extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_postagem($url_post = FALSE){
			if($url_post === FALSE){
				$this->db->order_by('idt_postagem', 'DESC');
				$query = $this->db->get('tb_postagem');
				return $query->result_array();
			}
		
			$query = $this->db->get_where('tb_postagem', array('url_post' => $url_post));
			return $query->row_array();

		}

		public function set_postagem(){
			$url_post = url_title($this->input->post('nme_titulo'));

			$data = array(
				'nme_titulo' => $this->input->post("nme_titulo"),
				'url_post' => $url_post,
				'desc_postagem' => $this->input->post("desc_postagem"),
				);

			return $this->db->insert('tb_postagem', $data);
		}

		public function delete($idt_postagem){
			$this->db->where('idt_postagem', $idt_postagem);
			$this->db->delete('tb_postagem');
			return true;
		}
	
		public function update(){
			$url_post = url_title($this->input->post('nme_titulo'));

			$data = array(
			'nme_titulo' => $this->input->post("nme_titulo"),
			'url_post' => $url_post,
			'desc_postagem' => $this->input->post("desc_postagem"),
			);

			$this->db->where('idt_postagem', $this->input->post('idt_postagem'));
			return $this->db->update('tb_postagem', $data);
		}

	}