<?php
class Loginmodel extends CI_Model
{
	public function isvalidate($username,$password)
	{
		//$pass=md5($password);

       $q=$this->db->where(['username'=>$username,'password'=>$password])
           ->get('users');

           //Debug function  
          // echo "<pre>";
           //print_r($q); 
           
           /**
           check ths 
           echo "<pre> ";
           print_r($q->row()->id);
           exit;**/

        if($q->num_rows())
       {
       	   return $q->row()->id;
       }
       else
       {
       	return false;
       }                
	}
     

     public function ArticleList()
    {
       $id=$this->session->userdata('id');
       $q=$this->db->select('')
       ->from('articles')
       ->where(['user_id'=>$id])
      
       ->get();
       //print_r($q);
       //exit;
       return $q->result();
     //print_r($q->result());
      //exit;

  }

 public function  find_article($articleid)
 {
   $q=$this->db->select(['article_title','article_body','id'])
    ->where('id',$articleid)
   ->get('articles');
   return $q->row();
 }

 public function update_article($articleid,Array $article)
 {
return $this->db->where('id',$articleid)
        ->update('articles',$article);
 }


   //pagination 
     public function num_rows()
     {

      $id=$this->session->userdata('id');
      $q=$this->db->select()
      ->from('articles')
      ->where(['user_id'=>$id])
      ->get();
       return $q->num_rows();
  
     }

       public function add_article($array)
       {
         return $this->db->insert('articles',$array);
       }


   public function add_user($array)
   {
    //  print_r($array);
    //  exit;
      return $this->db->insert('users',$array);

   }

 public function del($id)

 {
  return $this->db->delete('articles',['id'=>$id]);


 }


       

    
    


}


?>