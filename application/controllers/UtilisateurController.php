<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class UtilisateurController extends CI_Controller {

    public function index() {
        $this->load->view('loginUtilisateur');
    }

    public function login() {
        $this->load->model('Utilisateur');
        $email = $_GET['email'];
        $mdp = $_GET['mdp'];
        $data = array();
        if(count($this->Utilisateur->login($email, $mdp)) == 0){
            $data['erreur'] = "Compte invalide";
            $this->load->view('loginUtilisateur', $data);    
        }
        else{
            foreach($this->Utilisateur->login($email, $mdp) as $key){
                $data['utilisateur'] = $key;
            }
            $_SESSION['idUser'] = $data['utilisateur']['id'];
            $this->load->view('accueilUtilisateur', $data);
        }
    }

    public function inscriptionPage() {
        $this->load->view('inscriptionUtilisateur');
    }

    public function inscription() {
        $this->load->model('Utilisateur');
        $nom = $_GET['nom'];
        $email = $_GET['email'];
        $mdp = $_GET['mdp'];
        $this->Utilisateur->inscription($nom, $email, $mdp);
        redirect('UtilisateurController');
    }

    public function demandeAdmission() {
        $this->load->model('Utilisateur');
        $data = array();
        $data['demande'] = $this->Utilisateur->listeDemandeAdmission();
        $this->load->view('listeDemandeAdmission', $data);
    }

    public function validationDemandeAdmission() {
        $this->load->model('Utilisateur');
        $id = $_GET['idUser'];
        $data = array();
        foreach($this->Utilisateur->getUtilisateur($id) as $key){
            $data['utilisateur'] = $key;
        }
        foreach($this->Utilisateur->getUtilisateur($_SESSION['idUser']) as $key){
            $data['super'] = $key;
        }
        
        // -----------------------------------------------------------------------------------

        // Inclure la bibliothèque PHPMailer
        // require '/PHPMailer/PHPMailerAutoload.php';

        // // Créer une nouvelle instance de PHPMailer
        // $mail = new PHPMailer();

        // // Configurer le serveur SMTP
        // $mail->isSMTP();
        // $mail->Host = 'smtp.gmail.com';
        // $mail->SMTPAuth = true;
        // $mail->Username = 'rajerisonnancia@gmail.com';
        // $mail->Password = 'Nancia0902';
        // $mail->SMTPSecure = 'tls';
        // $mail->Port = 587;

        // // Configurer l'adresse de l'expéditeur et du destinataire
        // $mail->setFrom('rajerisonnancia@gmail.com', 'Nancia Rajerison');
        // $mail->addAddress('lalaina.nancia64@gmail.com', 'Nancia Rajerison');

        // // Configurer le sujet et le corps du message
        // $mail->Subject = 'TEST';
        // $mail->Body    = 'Ceci est un test';

        // // Envoyer le message
        // if(!$mail->send()) {
        //     echo 'Erreur lors de l\'envoi du message : ' . $mail->ErrorInfo;
        // } else {
        //     echo 'Le message a été envoyé.';
        // }



            $to       = 'lalaina.nancia64@gmail.com';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: rajerisonnancia@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "WOOHOO, email sent";
else
    echo "BUMMER, email failed";
        // -----------------------------------------------------------------------------------

        // $destinataire = $data['utilisateur']['email'];
        // $sujet = 'ACTIVATION DE COMPTE';
        // $message = 'Bonjour, '.$data['utilisateur']['nom'].'Votre compte a été activé, vous pouvez desormais vous connecter.';

        // // En-têtes de l'e-mail
        // $headers = 'From: '.$data['utilisateur']['email'] . "\r\n" .
        //         'Reply-To: '.$data['super']['email'] . "\r\n" .
        //         'X-Mailer: PHP/' . phpversion();

        // // Envoi de l'e-mail
        // if (mail($destinataire, $sujet, $message, $headers)) {
        //     $this->Utilisateur->validerDemandeAdmission($id);
        //     redirect('UtilisateurController/demandeAdmission');
        // } else {
        //     echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail.';
        // }
    }

}
