<?php


 class Login extends MY_Controller
 {
     public function _construct()
     {
         parent::_construct();
         if($this->session->userdata('id'))
         return redirect('Admin/Welcome');
     }


  public function index()
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
                   $this->session->set_flashdata('Login_failed','invalid Username/password');
                   return redirect('Login');
               }
  
     }
     else
     {
        $this->load->view('Admin/Login');
     }
 }


 public function sendemail()
   {

      $this->form_validation->set_rules('username','Username','required|alpha');
      $this->form_validation->set_rules('password','password','required|alpha|max_length[12]');
      $this->form_validation->set_rules('firstname','First Name','required|alpha');
      $this->form_validation->set_rules('lastname','Last Name','required|alpha'); 
      $this->form_validation->set_rules('Email', 'Email', 'required|is_unique[users.email]');
      $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

      if($this->form_validation->run())
      {

        $post=$this->input->post();
        $this->load->model('Loginmodel');
        if($this->Loginmodel->add_user($post))
        {
          $this->session->set_flashdata('user','User Added successfully');
          $this->session->set_flashdata('user_class','alert-success');
        }
        else
        {
           $this->session->set_flashdata('user','User Not Added successfully please try again');
          $this->session->set_flashdata('user_class','alert-danger');
        }     

        //  $this->load->library('email');

        //  $this->email->form(set_value('Email'),set_value('firstname'));
        //   $this->email->to("surajkhu@gmail.com");
        //    $this->email->subject("Register Getting..");
        //     $this->email->message("thank for Register");
        //      $this->email->set_newline("\r\n");
        //      $this->email->send();

        //      if(!$this->email->send())
        //      {
        //        show_error($this->email->print_debugger());
        //      }
        //      else
        //      {
        //        echo "Your Email has been sent ";
        //      }

            return redirect('Admin/register');
      }

      else
         {
            $this->load->view('Admin/register');
         }

   
   }
}




?>
