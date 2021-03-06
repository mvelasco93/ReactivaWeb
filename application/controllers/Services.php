<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
        $this->load->database();

        date_default_timezone_set("America/Guayaquil");
        header('Access-Control-Allow-Origin: *'); 
        setlocale(LC_TIME, 'spanish');
    }

    public function index() {
        redirect("web/index");
    }

    public function patientAutocomplete(){
    	$term = trim(strip_tags($_GET['term']));

    	$this->db->select("patient.id_patient AS `id`, CONCAT(patient.name, ' ', patient.lastname) AS `value`");
    	$this->db->from('patient');
   		$this->db->like("CONCAT(patient.name, ' ', patient.lastname)", $term);

   		$res = $this->db->get()->result_array();

   		$resultado = array();

   		header('Content-type: application/json');
        echo json_encode($res);
    }


    public function patientTherapyAutocomplete(){
        $term = trim(strip_tags($_GET['term']));

        $this->db->select("DISTINCT(patient.id_patient) AS `id`, CONCAT(patient.name, ' ', patient.lastname) AS `value`");
        $this->db->from('patient');
        $this->db->join('patient_consult', 'patient.id_patient = patient_consult.id_patient');
        $this->db->where('patient_consult.status', 2);
        $this->db->like("CONCAT(patient.name, ' ', patient.lastname)", $term);

        $res = $this->db->get()->result_array();

        $resultado = array();

        header('Content-type: application/json');
        echo json_encode($res);
    }

    public function checklogin(){
    	$query = $this->input->post();   	

		$this->db->select("id_group, CONCAT(name, ' ', lastname) AS 'user'");
		$this->db->from('account');
		$this->db->where('username', $query['user']);
		$this->db->where('password', $query['pass']);
		$res = $this->db->get()->row_array();

		$group = $res['id_group'];

		$resultado = array();

		if ($group){
			if ($group == '5') {
            	$resultado['event'] = 1;
                $resultado['user'] = $res['user'];
	        }else{
	        	$resultado['event'] = 0;
			}
		}else{
			$resultado['event'] = 0;
		}


    	header('Content-type: application/json');
        echo json_encode($resultado);

    }

    public function citaGet(){
    	$query = $this->input->post();

    	$this->db->select("patient_consult.id_consult, patient_consult.id_patient, TIME(patient_consult.`date_planned`) AS `hour`, patient_consult.observations, CASE WHEN patient_consult.status = 0 THEN 'Pendiente' WHEN patient_consult.status = 1 THEN 'Cancelada' WHEN patient_consult.status = 2 THEN 'Asistió' END as `status` ");
    	$this->db->from('patient_consult');
    	$this->db->where('patient_consult.id_consult', $query['id']);
    	$consulta = $this->db->get()->row_array();

    	$id_patient = $consulta['id_patient'];

    	$this->db->select("CONCAT(patient.name, ' ', patient.lastname) as `fullname`, patient.born, patient.ci, patient.email, CASE WHEN patient.gender = 0 THEN 'Femenino' ELSE 'Masculino' END as `gender`, patient.cellphone");
    	$this->db->from('patient');
    	$this->db->where('patient.id_patient', $id_patient);
    	$paciente = $this->db->get()->row_array();

    	$resultado = array();

    	$resultado['patient'] = $paciente;
    	$resultado['consult'] = $consulta;

    	header('Content-type: application/json');
        echo json_encode($resultado);

    }

    public function terapiaGet(){
        $query = $this->input->post();

        $this->db->select("patient_therapy.id_therapy, patient_therapy.id_patient, TIME(patient_therapy.`eta`) AS `hour`,  CASE WHEN patient_therapy.status = 0 THEN 'Pendiente' WHEN patient_therapy.status = 1 THEN 'Cancelada' WHEN patient_therapy.status = 2 THEN 'En proceso'  WHEN patient_therapy.status = 3 THEN 'Asistió' END as `status` ");
        $this->db->from('patient_therapy');
        $this->db->where('patient_therapy.id_therapy', $query['id']);
        $consulta = $this->db->get()->row_array();

        $id_patient = $consulta['id_patient'];

        $this->db->select("CONCAT(patient.name, ' ', patient.lastname) as `fullname`, patient.born, patient.ci, patient.email, CASE WHEN patient.gender = 0 THEN 'Femenino' ELSE 'Masculino' END as `gender`, patient.cellphone");
        $this->db->from('patient');
        $this->db->where('patient.id_patient', $id_patient);
        $paciente = $this->db->get()->row_array();

        $resultado = array();

        $resultado['patient'] = $paciente;
        $resultado['terapia'] = $consulta;

        header('Content-type: application/json');
        echo json_encode($resultado);

    }


    public function therapyGet(){

    	$this->db->select('patient_therapy.id_therapy, patient_therapy.id_consulta, patient_therapy.id_patient');
    	$this->db->from('patient_therapy');
    	$this->db->where('patient_therapy.status', 2);
    	$this->db->where('DATE(patient_therapy.eta) = DATE(NOW())');
    	$consulta = $this->db->get()->result_array();

    	$resultado = array();

    	foreach ($consulta as $row) {
    		$this->db->select("CONCAT(patient.name, ' ', patient.lastname) as `fullname`, 
    			DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(patient.born, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(patient.born, '00-%m-%d')) as `age`, 
    			patient.img, 
    			patient.gender");
			$this->db->from('patient');
			$this->db->where('patient.id_patient', $row['id_patient']);
			$paciente = $this->db->get()->row_array();

			$photo = $paciente['img'];

			if(empty($photo)){
				if($paciente['gender'] == 0){
					$paciente['img'] = base_url('assets/img/patient-default/')."profile-f.png";
				}else{
					$paciente['img'] = base_url('assets/img/patient-default/')."profile-m.png";
				}
			}else{
				$paciente['img'] = base_url('assets/img/patient-default/').$paciente['img'];
			}

			$row_array['therapy'] = $row;
    		$row_array ['info'] = $paciente;

    		$this->db->select("game_limb.icon");
            $this->db->from('patient_consult_limb');
            $this->db->join('game_limb', 'game_limb.id_limb = patient_consult_limb.id_limb');
            $this->db->where('patient_consult_limb.id_consult', $row['id_consulta']);
            $extremidades = $this->db->get()->result_array();
            $extr = array();

            foreach ($extremidades as  $ext) {
                $ext['icon'] = base_url('assets/img/icons-exercise/').$ext['icon'];
                array_push($extr, $ext);
            }

    		$row_array ['limbs'] = $extr;

    		array_push($resultado, $row_array);
    	}

    	header('Content-type: application/json');
        echo json_encode($resultado);
    }

    public function therapyStartInfo(){
    	$query = $this->input->get();

    	$id = $query['id'];

    	$this->db->select('patient_therapy.id_consulta,
    		patient_therapy.id_patient');
    	$this->db->from('patient_therapy');
    	$this->db->where('patient_therapy.id_therapy', $id);
    	$info = $this->db->get()->row_array(); 

    	$this->db->select("CONCAT(patient.name, ' ', patient.lastname) as `fullname`, 
    			DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(patient.born, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(patient.born, '00-%m-%d')) as `age`, 
    			patient.img,
                patient.gender");
		$this->db->from('patient');
		$this->db->where('patient.id_patient', $info['id_patient']);
		$paciente = $this->db->get()->row_array();


		$photo = $paciente['img'];
		if(empty($photo)){
			if($paciente['gender'] == 0){
				$paciente['img'] = base_url('assets/img/patient-default/')."profile-f.png";
			}else{
				$paciente['img'] = base_url('assets/img/patient-default/')."profile-m.png";
			}
		}else{
			$paciente['img'] = base_url('assets/img/patient-default/').$paciente['img'];
		}


		$this->db->select("game_limb.icon");
		$this->db->from('patient_consult_limb');
        $this->db->join('game_limb', 'game_limb.id_limb = patient_consult_limb.id_limb');
		$this->db->where('patient_consult_limb.id_consult', $info['id_consulta']);
		$extremidades = $this->db->get()->result_array();

        $extr = array();

        foreach ($extremidades as  $ext) {
            $ext['icon'] = base_url('assets/img/icons-exercise/').$ext['icon'];
            array_push($extr, $ext);
        }


  

		$resultado = array();
		$resultado['patient'] = $paciente;
		$resultado['limb'] = $extr;
		header('Content-type: application/json');
        echo json_encode($resultado);

    }

    public function patientHistory(){
    	$query = $this->input->get();

    	$id_patient = $query['id'];

    	$this->db->select("CONCAT(patient.name, ' ', patient.lastname) as `fullname`");
    	$this->db->from('patient');
    	$this->db->where('patient.id_patient', $id_patient);
    	$paciente = $this->db->get()->row_array();

    	$this->db->select("patient_consult.id_consult, 
    		patient_consult.diagnosis, 
    		DATE(patient_consult.`date_attended`) AS `date`, 
    		CONCAT(account.name, ' ', account.lastname) AS `doctor`");
    	$this->db->from('patient_consult');
    	$this->db->join('account', 'account.id_account = patient_consult.id_doctor_attended');
    	$this->db->where('patient_consult.status', 2);
        $this->db->where('patient_consult.id_patient', $id_patient);
        $this->db->order_by('date_attended', 'DESC');
        $this->db->limit(1);
    	$consulta = $this->db->get()->row_array();

    	$id_consulta = $consulta['id_consult'];

    	$this->db->select("patient_therapy.id_therapy,
            patient_therapy.id_consulta,
    		DATE(patient_therapy.`eta`) AS `date`,
    		CONCAT(account.name, ' ', account.lastname) AS `therapist`");
    	$this->db->from('patient_therapy');
    	$this->db->join('account', 'account.id_account = patient_therapy.id_doctor_attended');
    	$this->db->where('patient_therapy.id_consulta', $id_consulta);
        $this->db->where('patient_therapy.status', 3);
    	$terapias = $this->db->get()->result_array();

    	$resultado = array();

    	$resultado['patient'] = $paciente;
    	$resultado['consult'] = $consulta;
    	$resultado['therapies'] = $terapias;

    	header('Content-type: application/json');
        echo json_encode($resultado);
    }

    public function getCalendar(){
    	$query = $this->input->get();

    	$month = $query['month'];
    	$year = $query['year'];


    	$this->db->select("DAY(patient_therapy.eta) AS `day`,
    		COUNT(patient_therapy.eta) AS `count`");
    	$this->db->from('patient_therapy');
    	$this->db->where('MONTH(patient_therapy.eta)', $month);
    	$this->db->where('YEAR(patient_therapy.eta)', $year);
    	$this->db->group_by('day');
    	$this->db->order_by('day', "ASC");

    	$mes = $this->db->get()->result_array();


    	$resultado = array();

    	foreach ($mes as $row) {
    		$this->db->select("patient_therapy.id_therapy,
    			patient_therapy.id_patient,
    			patient_therapy.id_consulta,
                DATE_FORMAT(patient_therapy.eta, '%H:%i:%s') as time,
                patient.name as name,
                patient.lastname as last_name,
    			patient_therapy.status");
			$this->db->from('patient_therapy');
			$this->db->join('patient', 'patient_therapy.id_patient = patient.id_patient');
			$this->db->where('DAY(patient_therapy.eta)', $row['day']);
			$this->db->where('MONTH(patient_therapy.eta)', $month);
    		$this->db->where('YEAR(patient_therapy.eta)', $year);
			$terapias = $this->db->get()->result_array();

			$row_array['day'] = $row;
			$row_array['therapies'] = $terapias;

			array_push($resultado, $row_array);
    	}

    	header('Content-type: application/json');
        echo json_encode($resultado);
    }

    public function getTherapyHistory(){
    	$query = $this->input->post();

    	$id_therapy = $query['id'];

    	$this->db->select("patient_therapy.id_therapy,
    		patient_therapy.id_consulta,
    		DATE(patient_therapy.`eta`) AS `date`,
    		CONCAT(patient.name, ' ', patient.lastname) as `fullname`,
    		CONCAT(account.name, ' ', account.lastname) AS `therapist`");
    	$this->db->from('patient_therapy');
    	$this->db->join('account', 'account.id_account = patient_therapy.id_doctor_attended');
    	$this->db->join('patient', 'patient.id_patient = patient_therapy.id_patient');
    	$this->db->where('patient_therapy.id_therapy', $id_therapy);
    	$terapia = $this->db->get()->row_array();

    	$id_consult= $terapia['id_consulta'];

    	$this->db->select("game_limb.icon");
        $this->db->from('patient_consult_limb');
        $this->db->join('game_limb', 'game_limb.id_limb = patient_consult_limb.id_limb');
        $this->db->where('patient_consult_limb.id_consult', $query['id']);
        $extremidades = $this->db->get()->result_array();

        $extr = array();

        foreach ($extremidades as  $ext) {
            $ext['icon'] = base_url('assets/img/icons-exercise/').$ext['icon'];
            array_push($extr, $ext);
        }

		$this->db->select("TIME_FORMAT(TIME(patient_therapy_comment.date), '%H:%i')  AS `hour`,
			patient_therapy_comment.msg");
		$this->db->from('patient_therapy_comment');
		$this->db->where('patient_therapy_comment.id_therapy', $id_therapy);
		$comentarios = $this->db->get_compiled_select();

		$prepare_concat = "TIME_FORMAT(TIME(patient_therapy_photo.date), '%H:%i') AS `hour` ,
			CONCAT('".base_url('assets/uploads/therapy_photo/')."',patient_therapy_photo.img) AS `msg` ";

		$this->db->select($prepare_concat);
		$this->db->from('patient_therapy_photo');
		$this->db->where('patient_therapy_photo.id_therapy', $id_therapy);
		$fotos = $this->db->get_compiled_select();

		$historial = $this->db->query($comentarios." UNION ".$fotos."ORDER BY hour ASC")->result();

		$resultado = array();

		$resultado['therapy'] = $terapia;
		$resultado['limb'] = $extr;
		$resultado['history'] = $historial;

		header('Content-type: application/json');
        echo json_encode($resultado);

    }

     public function consultInfo(){
        $query = $this->input->post();

        $this->db->select("patient_consult.id_consult, 
            patient_consult.id_patient, 
            DATE(patient_consult.`date_planned`) AS `date`,  
            CASE WHEN patient_consult.status = 0 THEN 'Pendiente' WHEN patient_consult.status = 1 THEN 'Cancelada' WHEN patient_consult.status = 2 THEN 'En proceso'  END as `status`, 
            patient_consult.diagnosis, 
            patient_consult.observations");
        $this->db->from('patient_consult');
        $this->db->where('patient_consult.id_consult', $query['id']);
        $consulta = $this->db->get()->row_array();


        $this->db->select("game_limb.name");
        $this->db->from('patient_consult_limb');
        $this->db->join('game_limb', 'game_limb.id_limb = patient_consult_limb.id_limb');
        $this->db->where('patient_consult_limb.id_consult', $query['id']);
        $limbs = $this->db->get()->result_array();

        $resultado = array();

        $resultado['consult'] = $consulta;
		

        if (is_null($limbs)){
        	$resultado['limb'] = $limbs;
        }else{
        	$resultado['limb'] = "Ninguno";
        }

        header('Content-type: application/json');
        echo json_encode($resultado);

    }

     public function therapyInfo(){
        $query = $this->input->post();

        $id_therapy = $query['id'];

         $this->db->select("patient_therapy.id_therapy, DATE(patient_therapy.`eta`) AS `date`,  CASE WHEN patient_therapy.status = 0 THEN 'Pendiente' WHEN patient_therapy.status = 1 THEN 'Cancelada' WHEN patient_therapy.status = 2 THEN 'En proceso'  WHEN patient_therapy.status = 3 THEN 'Asistió' END as `status`, 
         	CASE WHEN patient_therapy.valoration = 0 THEN 'No necesitó compañía' WHEN patient_therapy.valoration = 1 THEN 'Requirió algo de ayuda' WHEN patient_therapy.valoration = 2 THEN 'Se necesitaba apoyo' END as `evaluation`,
         	CONCAT(account.name, ' ', account.lastname) as `doctor` ");
        $this->db->from('patient_therapy');
        $this->db->join('account', 'account.id_account = patient_therapy.id_doctor_attended');
        $this->db->where('patient_therapy.id_therapy', $query['id']);
        $terapia = $this->db->get()->row_array();
        
        $resultado = array();

        $resultado['therapy'] = $terapia;

        $this->db->select("patient_therapy_comment.msg, TIME(patient_therapy_comment.`date`) AS `hour`");
        $this->db->from('patient_therapy_comment');
        $this->db->where('patient_therapy_comment.id_therapy', $query['id']);
        $this->db->order_by('TIME(patient_therapy_comment.`date`)', 'asc');
        $comentarios = $this->db->get()->result_array();

        $resultado['comments'] = $comentarios;


        header('Content-type: application/json');
        echo json_encode($resultado);

    }
}
    
?>