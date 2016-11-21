<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class irrigationController extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('irrigationModel');
	}

	public function index()
	{
		$dados['products'] = $this->db->get('products')->result();
		$this->template->load('template/irrigationTemplate','irrigation/index',$dados);
	}
	public function contact()
	{
		$this->template->load('template/irrigationTemplate','contact');
	}

	public function call_add_Product()
	{	
		$dados['formerror']= NULL;
		$this->template->load('template/irrigationTemplate','irrigation/addProduct',$dados);
	}

	public function create_product()
	{

                       
		$this->form_validation->set_rules('name_product','Nome','required|min_length[3]');
		

		if($this->form_validation->run()==FALSE){
			$dados['formerror']= validation_errors();
			$this->template->load('template/irrigationTemplate', 'irrigation/addProduct',$dados);
		}else{

				  //Configurações necessárias para fazer upload do arquivo
                       $foto = 'foto';

                        //Pasta onde será feito o upload
                        $config['upload_path'] = 'assets/files/irrigation/';
                        //Tipos suportados
                        $config['allowed_types'] = 'gif|jpg|png';
                        //Configurando atributos do arquivo imagem que iremos receber
                      	$config['max_size']    = 102400000;
                     	$config['max_width']   = 1900;
                		$config['max_height']  = 1900;
                        //Carregando a lib com as configurações feitas
                        $this->load->library('upload', $config);
						
						 //Fazendo o upload do arquivo e direcionando para a view de erro ou de sucesso
                        if(  $this->upload->do_upload($foto)){ 
                               
            					$data=$this->upload->data();
            					$url="assets/files/irrigation/".$data['file_name'];

					            $product = array(
									'name_product' => $this->input->post('name_product'),
									'width' => $this->input->post('width'),
									'height' => $this->input->post('height'),
									'circunference' => $this->input->post('circunference'),
									'radius' => $this->input->post('radius'),
									'screw_size' => $this->input->post('screw'),
									'flow_rate' => $this->input->post('flow'),
									'aspersor' => $this->input->post('aspersor'),
									"url" => $url

									);
										
									$this->irrigationModel->create_product($product);
			
									redirect('irrigation');
            					

			            }
                        else
                        {
                              echo ( $this->upload->display_errors());
                                
                        }
			
		}
	}
}
