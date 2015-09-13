<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test1 extends MY_Controller 
{
        var $parent_page = "test1";
	function __construct()
	{
            parent::__construct(); 
	}
        
        private function viewpage($page='v_mainpage', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }


        public function index()
	{
            $data['bus'] = $this->m_bus->getAll();
            $data['haha'] = "tata";
            $this->viewpage('v_paparutama', $data);
        }
        
        public function terimaForm()
        {
            $input = $this->input->post();
            unset($input['nama_saya']);
            
            $array_temp = array(
                'bu_plat' => $input['bu_plat'],
                'bu_status' => 'available'
            );
            
            $bu_id = $this->m_bus->add($array_temp);
            
            redirect(site_url('test1'));
        }
        
        public function antaForm()
        {
            $input = $this->input->post();
            $data['input'] = $input;
            $this->viewpage('v_formConfirm', $data);
        }
        
        public function sje2()
        {
            try{
                    $crud = new grocery_CRUD();

                    $crud->set_theme('datatables');
                    
                    $crud->set_table('images');
                    
                    $crud->set_field_upload('im_image', './assets/uploads/testUpload/');
                    
                    $crud->required_fields('im_image');
                    
                    $crud->display_as('im_image', 'Gambaq');
                    

                    $output = $crud->render();

                    $this->viewpage('v_canggih', $output);

            }catch(Exception $e){
                    show_error($e->getMessage().' --- '.$e->getTraceAsString());
            }
            
        }
}