<?php
class Admin extends MY_Controller
{







    public function _construct()
 {
   parent::_construct();
      if(! $this->session->userdata('id'))
    
          return redirect('login');
     

  
}

public function logout()
{
   //echo "Logout";
   $this->session->unset_userdata('id');
   return redirect('Login');
}
/** 
public function login()
{
	

	//validation for username
	$this->form_validation->set_rules('uname','User Name','required|alpha');


	//validation for a password

	$this->form_validation->set_rules('pass','password','required|alpha|max_length[12]');

	//code for error msg when textbox empty

	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

   if($this->form_validation->run())
   {
   	 $uname=$this->input->post('uname');
   	    $pass=$this->input->post('pass');
         $this->load->model('Loginmodel');
        $login_id=$this->Loginmodel->isvalidate($uname, $pass);
         if($login_id)
         {
         	
         	$this->session->set_userdata('id',$login_id);
         	return redirect('Admin/Welcome');
         }
         else
         	{
         		echo "Deatils  not match";
         	}

   }
   else
   {
      $this->load->view('Admin/Login');
   }

       

}*/
public function Welcome()
{
   
   $this->load->model('Loginmodel');
     
   //pagnation 
   $this->load->library('pagination');

   $config=[
              'base_url'=>base_url('Admin/Welcome'),
              'per_page'=>2,
              'total_rows'=>$this->Loginmodel->num_rows(),
              'full_tag_open'=>'<ul class="pagination">',
              'full_tag_close'=>'</ul>',
              'next_tag_open'=>'<li>',
              'next_tag_close'=>'</li>',
              'prev_tag_open'=>'<li>',
              'prev_tag_close'=>'</li>',
              'num_tag_open'=>'<li>',
              'num_tag_close'=>'<sli>',
              'cur_tag_open'=>'<li class="active"></li><a>',
              'cur_tag_close'=>'</a></sli>' 
           ];
$this->pagination->initialize($config);


	$articles=$this->Loginmodel->ArticleList($config['per_page'],$this->uri->segment(3));
	$this->load->view("Admin/dashboard",['Articles'=>$articles]);
}


//create a fun for Add
public function adduser()
{
   $this->load->view('Admin/add_article');
}

//Create a function validation 

public function userValidation()
{
   if($this->form_validation->run('add_article_rules'))
   {
      $post=$this->input->post();
      $this->load->model('Loginmodel');
      if($this->Loginmodel->add_article($post))
      {
         $this->session->set_flashdata('msg','Article Added successfully');
         $this->session->set_flashdata('msg_class','alert-success');
      }
      else{
         $this->session->set_flashdata('msg','Aricle Not Added successfully');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('Admin/Welcome');
   }
   else
   {
      $this->load->view('Admin/add_article');
   }
}

//create a fun for Edit User 

public function edituser($id)
{
   // echo $id;
   $this->load->model('Loginmodel');
  $art=$this->Loginmodel->find_article($id);
  //echo "<pre>";
  // print_r($art);
   $this->load->view('Admin/edit_article',['article'=>$art]); 
}


// update article 
public function updatearticle($article_id)
{

   // echo $article_id;
   // exit;
   // print_r($this->input->post());
   // exit;
   if($this->form_validation->run('add_article_rules'))
   {

   $post=$this->input->post();
   $this->load->model('Loginmodel');
   if($this->Loginmodel->update_article($article_id,$post))
   {
      $this->session->set_flashdata('msg','Article update successfully');
      $this->session->set_flashdata('msg_class','alert-success');
   }
   else
   {
      $this->session->set_flashdata('msg','Article Not upadate successfuly');
      $this->session->set_flashdata('msg_class','alert-success');
   
   }
   return redirect('Admin/welcome');
}
else{
   $this->edituser($article_id);
}
}

//create a fun for delete a user
public function delarticles()
{
   $id=$this->input->post('id');
   $this->load->model('Loginmodel','delarticle');
   if($this->delarticle->del($id))
   {
      $this->session->set_flashdata('msg','Article Delete successfully');
      $this->session->set_flashdata('msg_class','alert-success');
   }
   else{
      $this->session->set_flashdata('msg','Aricle Not Delete successfully');
      $this->session->set_flashdata('msg_class','alert-danger');
   }
   return redirect('Admin/Welcome');


} 





// Create a fun for register 
	public function register()
   {
      $this->load->view('Admin/register');
   }

}
  

   


?>