<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form','url']);

        $dato['titulo']='Iniciar Sesión';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/login'); //ojo! ver si se usa el mismo o desde el back
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session=session();
        $model = new usuario_Model();
     //traemos los datos del formulario
     $email = $this->request->getVar('email');
     $password = $this->request->getVar('password');

     $data = $model->where('email', $email)->first();
        if($data){
         $pass = $data['password'];
         $ba =  $data['baja'];
       if ($ba =='SI'){ 
        $session->setFlashdata('msg', 'usuario dado de baja'); 
        return redirect()->to('/login_controller');
            }
      //Se verifican los datos ingresados para iniciar, si cumple la verificacion
      //inicia la sesion

        $verify_pass = password_verify($password, $pass);
        //password verify determina los requisitos de configuracion de la contraseña
         if($verify_pass){ $ses_data = [
            'id_usuario'=> $data['id_usuario'],
            'nombre'=> $data['nombre'],
            'apellido'=> $data['apellido'],
            'email' => $data['email'],
            'usuario'=> $data['usuario'],
            'perfil_id'=> $data['perfil_id'],
            'logged_in' => TRUE];
            //Si se cumple la verificacion inicia la sesion

            $session->set($ses_data);
            session()->setflashdata('msg', 'Bienvenido!!'); 
            return redirect()->to('/panel'); 
            // return redirect()->to("/prueba");//pagina principal
         }else{
            //no paso la validación de la password 
            $session->setFlashdata('msg', 'Password Incorrecta'); 
            return redirect()->to('/login');
        } 
        }else{
            $session->setFlashdata('msg', 'No Existe el Email o es Incorrecto'); 
            return redirect()->to('/login');
        }
    }
        public function logout()
        {
            $session = session();
            $session->destroy();
            return redirect()->to('/');
        }

    
}