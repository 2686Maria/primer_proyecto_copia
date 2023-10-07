<?php

namespace App\Controllers;

class Home extends BaseController
{
        public function index()
        {
        $data['titulo'] = 'pagina principal'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
        }
        public function quienes_somos()
        {
        $data['titulo'] = 'quienes somos'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
        }
        public function acerca_de()
        {
        $data['titulo'] = 'acerca de'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
        }
        public function registrarse()
        {
        $data['titulo'] = 'registrarse'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/registrarse');
        echo view('front/footer_view');
        }
        public function login()
        {
        $data['titulo'] = 'login'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
        }
        public function requisitos_para_adoptar()
        {
        $data['titulo'] = 'requisitos para adoptar'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/requisitos_para_adoptar');
        echo view('front/footer_view');
        }
}
    

