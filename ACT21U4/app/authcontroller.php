<?php

if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case 'access':
            $authController =new authController();
            $email=strip_tags($_POST['email']);
            $password=strip_tags($_POST['password']);
            $authController -> login($email,$password);
    }
}

class AuthController{
    public function login($email, $password){

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('email' => $email,'password' => $password),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response=json_decode($response);
        

        if(isset($response->code) && $response->code>0)
        {
            session_start();
            $_SESSION['name']=$response->data->name;
            $_SESSION['lastname']=$response->data->lastname;
            $_SESSION['avatar']=$response->data->avatar;
            $_SESSION['token']=$response->data->token;
            var_dump($response);
            header("location: ../productos/index.php");
        }else{
            var_dump($response);
            header("location: ../?error=true");
        }


    }
}

#'jeju_19@alu.uabcs.mx'
#O338lXPk!5k8I6
#OZ4KIABLHJThlRwxS1epezqL37XQAVQjy0oIF5ZI
?>