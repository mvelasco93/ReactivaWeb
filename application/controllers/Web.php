<?php

if( !defined('BASEPATH')) exit ("No direct script access allowed");

class Web extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('Calendar');
		$this->load->model('User');
		$this->load->model('Therapy');
		$this->load->model('Patient');
		$this->load->model('Limb');
		$this->load->model('Consult');

		setlocale(LC_ALL,"es_ES");
		date_default_timezone_set("America/Guayaquil");
	}

	public function login(){
		if ($this->SecurityCheck()){
			 redirect("web/index");
		}else{
			$dataHeader['PageTitle'] = "Login";

			$data['header'] = $this->load->view('web/header', $dataHeader);

        	$data['contenido'] = $this->load->view('web/login', array());
        	$data['footer'] = $this->load->view('web/footer', array());
        }
	}

	public function index(){
		if ($this->SecurityCheck()){

		$dataHeader['PageTitle'] = "Bienvenidos";

		$menuContent['selection']="None";

		$data['header'] = $this->load->view('web/header', $dataHeader);
		$data['menu'] = $this->load->view('web/menu', $menuContent);

		$data['contenido'] = $this->load->view('web/index', array());
		$data['page-footer'] = $this->load->view('web/page-footer', array());
		}else{
			redirect("web/login");
		}
	}

	public function pacientes(){
		if ($this->SecurityCheck()){


			$dataContent["results"] = Patient::getPatients();

       		$menuContent['selection']="patient";

			$dataHeader['PageTitle'] = "Lista de pacientes";

		    $data['header'] = $this->load->view('web/header', $dataHeader);
		    $data['menu'] = $this->load->view('web/menu', $menuContent);

		    $data['contenido'] = $this->load->view('web/paciente-lista', $dataContent);
		    $data['footer'] = $this->load->view('web/page-footer', array());
		}else{
			redirect("web/login");
		}
	}


	public function paciente(){
		if ($this->SecurityCheck()){

			$id_paciente = $this->uri->segment(3);

			$paciente_obj = Patient::getPatientById($id_paciente);

			if(!is_null($paciente_obj)){
				$dataContent['paciente'] = $paciente_obj;

				$paciente_citas = Consult::getConsultsByPatient($id_paciente);
				$paciente_terapias = Therapy::getTherapiesByPatient($id_paciente);

				$lista = array_merge($paciente_citas, $paciente_terapias); 
				$dataContent['lista'] = $lista;

				$sorted = $this->array_orderby($lista, 'date', SORT_DESC);

				$dataHeader['PageTitle'] = "Paciente";

				$menuContent['selection']="patient";

			    $data['header'] = $this->load->view('web/header', $dataHeader);
			    $data['menu'] = $this->load->view('web/menu', $menuContent);

			    $data['contenido'] = $this->load->view('web/patient', $dataContent);
			    $data['page-footer'] = $this->load->view('web/page-footer', array());
			}else{
				redirect("web/pacientes");
			}

			
		}else{
			redirect("web/login");
		}
	}


   public function nuevoPaciente(){
   		if ($this->SecurityCheck()){
			$dataHeader['PageTitle'] = "Paciente";

			$menuContent['selection']="patient";

		    $data['header'] = $this->load->view('web/header', $dataHeader);
		    $data['menu'] = $this->load->view('web/menu', $menuContent);

		    $data['contenido'] = $this->load->view('web/nuevopaciente', array());
		    $data['page-footer'] = $this->load->view('web/page-footer', array());

    	}else{
			redirect("web/login");
		}
  	}



  	public function editarPaciente(){
   		if ($this->SecurityCheck()){
   			
   			$id_paciente = $this->uri->segment(3);

			$paciente_obj = Patient::getPatientById($id_paciente);

			if(!is_null($paciente_obj)){
				$menuContent['selection']="patient";

				$dataContent['paciente'] = $paciente_obj;

				$dataHeader['PageTitle'] = "Paciente";

			    $data['header'] = $this->load->view('web/header', $dataHeader);
			    $data['menu'] = $this->load->view('web/menu', $menuContent);

			    $data['contenido'] = $this->load->view('web/editpaciente', $dataContent);
			    $data['page-footer'] = $this->load->view('web/page-footer', array());
		    }else{
				redirect("web/pacientes");
			}
    	}else{
			redirect("web/login");
		}
  	}

	public function citas(){
		if ($this->SecurityCheck()){
			$menuContent['selection']="citas";

			$dataHeader['PageTitle'] = "Agenda";

			$dataContent['controller']=$this;

			$data['header'] = $this->load->view('web/header', $dataHeader);
			$data['menu'] = $this->load->view('web/menu', $menuContent);

			$data['contenido'] = $this->load->view('web/calendar', $dataContent);
			$data['page-footer'] = $this->load->view('web/page-footer', array());
		}else{
			redirect("web/login");
		}
	}


	public function terapias(){
		if ($this->SecurityCheck()){
			$menuContent['selection']="terapia";

			$dataHeader['PageTitle'] = "Agenda";

			$dataContent['controller']=$this;

			$data['header'] = $this->load->view('web/header', $dataHeader);
			$data['menu'] = $this->load->view('web/menu', $menuContent);

			$data['contenido'] = $this->load->view('web/terapia-calendar', $dataContent);
			$data['page-footer'] = $this->load->view('web/page-footer', array());
		}else{
			redirect("web/login");
		}
	}

	public function iniciarCita(){
		if ($this->SecurityCheck()){
			$menuContent['selection']="citas";
			$id_consult = $this->uri->segment(3);

			$info = Consult::getConsultInfo($id_consult);

			if(!is_null($info)){
				$dataHeader['PageTitle'] = "Agenda";

				$limbs = Limb::getLimbs();

				$dataContent['limbs']=$limbs;

				$dataContent['patient'] = $info['patient'];
				$dataContent['consult'] = $info['consult'];

				$data['header'] = $this->load->view('web/header', $dataHeader);
				$data['menu'] = $this->load->view('web/menu', $menuContent);

				$data['contenido'] = $this->load->view('web/iniciarCita', $dataContent);
				$data['page-footer'] = $this->load->view('web/page-footer', array());
			}else{
				redirect("web/index");
			}
		}else{
			redirect("web/login");
		}
	}

	public function reagendar(){
		if ($this->SecurityCheck()){
			$menuContent['selection']="citas";
			$type = $this->uri->segment(3);
			$id = $this->uri->segment(4);

			if($type == 1){
				$info = Consult::getConsultInfo($id);
				$dataContent['type'] = 1;
			}else{
				$info = Therapy::getTherapyInfo($id);
				$dataContent['type'] = 2;
			}

			if(!is_null($info)){
				$dataHeader['PageTitle'] = "Agenda";


				$dataContent['patient'] = $info['patient'];
				$dataContent['consult'] = $info['consult'];

				$data['header'] = $this->load->view('web/header', $dataHeader);
				$data['menu'] = $this->load->view('web/menu', $menuContent);

				$data['contenido'] = $this->load->view('web/reagendar', $dataContent);
				$data['page-footer'] = $this->load->view('web/page-footer', array());
			}else{
				redirect("web/index");
			}
		}else{
			redirect("web/login");
		}
	}



	public function logout(){
		if ($this->SecurityCheck()){
			$userAdmin = new User();
			$userAdmin->logout();
			redirect("web/login");
		}else{
			redirect("web/login");
		}
	}


	/*FORM UPLOAD STARTS*/
	public function newPatient(){
  		//Start upload config
		$config['upload_path']          = 'assets/img/patient-profile/';
        $config['allowed_types']        = 'gif|jpeg|jpg|png|tiff';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['encrypt_name']			= TRUE;
        $config['remove_spaces']		= TRUE;
        $config['detect_mime']			= TRUE;
        //End config upload

        $img = "";

        $name = $this->input->post("pax-name");
        $lastname = $this->input->post("pax-lastname");
        $ci = $this->input->post("pax-ci");
        $dd_born = $this->input->post("pax-born-dd");
        $mm_born = $this->input->post("pax-born-mm");
        $yy_born =$this->input->post("pax-born-yy");
        $phone = $this->input->post("pax-phone");
        $cellphone = $this->input->post("pax-cellphone");
        $mail = $this->input->post("pax-mail");
        $address = $this->input->post("pax-address");
        $gender = $this->input->post("pax-gender");
        $blood = $this->input->post("pax-blood");
        $rh = $this->input->post("pax-rh");
        $allergies = $this->input->post("pax-allergies");
        $illness = $this->input->post("pax-illness");
        $observations = $this->input->post("pax-observation");
        $img = $this->input->post("pax-photo");
        $emergencycontact = $this->input->post("pax-emergencycontact");
        $emergencyphone = $this->input->post("pax-emergencyphone");
        $option_med = $this->input->post("pax-option-med");
        $option_other = $this->input->post("pax-option-other");
        $allergies_med = $this->input->post("pax-med-allergies");

        $this->load->library('upload', $config);

        if($option_med == "-"){
        	$allergies_med = NULL;
        }

        if($option_other == "-"){
        	$allergies = NULL;
        }

        if($this->upload->do_upload("pax-photo")) {
            $img_data = $this->upload->data();
            $img_info = $img_data["file_name"];
        }

        $data = array(
        	'ci'=>$ci,
        	'name'=>$name,
        	'lastname'=>$lastname,
        	'born'=>$yy_born.'-'.$mm_born.'-'.$dd_born,
        	'gender'=>$gender,
        	'phone'=>$phone,
        	'cellphone'=>$cellphone,
        	'address'=>$address,
        	'blood'=>$blood,
        	'rh'=>$rh,
        	'allergies'=>$allergies,
        	'observations'=>$observations,
        	'illness'=>$illness,
        	'img'=>$img_info,
        	'email'=>$mail,
        	'allergies_med'=>$allergies_med,
        	'emergency_contact'=>$emergencycontact,
        	'emergency_phone'=>$emergencyphone
        	);

        $this->db->insert('patient', $data);
        $id_patient = $this->db->insert_id();

        redirect("web/paciente/".$id_patient);

  	}

  	public function editPatient(){
  		//Start upload config
		$config['upload_path']          = 'assets/img/patient-profile/';
        $config['allowed_types']        = 'gif|jpeg|jpg|png|tiff';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['encrypt_name']			= TRUE;
        $config['remove_spaces']		= TRUE;
        $config['detect_mime']			= TRUE;
        //End config upload

        $img = "";

        $id_patient = $this->input->post("pax-id");
        $name = $this->input->post("pax-name");
        $lastname = $this->input->post("pax-lastname");
        $ci = $this->input->post("pax-ci");
        $dd_born = $this->input->post("pax-born-dd");
        $mm_born = $this->input->post("pax-born-mm");
        $yy_born =$this->input->post("pax-born-yy");
        $phone = $this->input->post("pax-phone");
        $cellphone = $this->input->post("pax-cellphone");
        $mail = $this->input->post("pax-mail");
        $address = $this->input->post("pax-address");
        $gender = $this->input->post("pax-gender");
        $blood = $this->input->post("pax-blood");
        $rh = $this->input->post("pax-rh");
        $allergies = $this->input->post("pax-allergies");
        $illness = $this->input->post("pax-illness");
        $observations = $this->input->post("pax-observation");
        $img = $this->input->post('dish-prev-img');

        $emergencycontact = $this->input->post("pax-emergencycontact");
        $emergencyphone = $this->input->post("pax-emergencyphone");
        $option_med = $this->input->post("pax-option-med");
        $option_other = $this->input->post("pax-option-other");
        $allergies_med = $this->input->post("pax-med-allergies");

        if (!is_null($img)){
			$strip_foto = explode("/", $img);
			$img = $strip_foto[7];
		}

		if($option_med == "-"){
        	$allergies_med = NULL;
        }

        if($option_other == "-"){
        	$allergies = NULL;
        }

        $this->load->library('upload', $config);

        if($this->upload->do_upload("pax-photo")) {
            $img_data = $this->upload->data();
            $img = $img_data["file_name"];
        }

        $data = array(
        	'ci'=>$ci,
        	'name'=>$name,
        	'lastname'=>$lastname,
        	'born'=>$yy_born.'-'.$mm_born.'-'.$dd_born,
        	'gender'=>$gender,
        	'phone'=>$phone,
        	'cellphone'=>$cellphone,
        	'address'=>$address,
        	'blood'=>$blood,
        	'rh'=>$rh,
        	'allergies'=>$allergies,
        	'observations'=>$observations,
        	'illness'=>$illness,
        	'img'=>$img,
        	'email'=>$mail,
        	'allergies_med'=>$allergies_med,
        	'emergency_contact'=>$emergencycontact,
        	'emergency_phone'=>$emergencyphone
        	);

        $this->db->where('patient.id_patient', $id_patient);
		$this->db->update('patient', $data);

        redirect("web/paciente/".$id_patient);
  	}

  	public function addDiagnostic(){
		$id_consult  = $this->input->post('pax-id');
		$diagnosis  = $this->input->post('pax-diagnosis');

		$limbs = "";



		if(!empty($_POST['check_list'])) {
			foreach($_POST['check_list'] as $check) {
				$limbs[] = array(
					'id_consult'=> $id_consult,
					'id_limb'=>$check);
			}
		}


		$data = array('diagnosis'=>$diagnosis,
			'status'=>"2");

		$this->db->where('patient_consult.id_consult', $id_consult);
		$this->db->update('patient_consult', $data);

		$this->db->insert_batch('patient_consult_limb', $limbs);

		 redirect("web/citas");
	}

	public function reagendacion(){
		$id  = $this->input->post('pax-id');
		$type  = $this->input->post('pax-type');
		$date  = $this->input->post('datetimepicker');

		
		if ($type == "1"){
			$data = array(
			'date_planned'=>$date);

			$this->db->where('patient_consult.id_consult', $id);
			$this->db->update('patient_consult', $data);
		}else{
			$data = array(
			'eta'=>$date);

			$this->db->where('patient_therapy.id_therapy', $id);
			$this->db->update('patient_therapy', $data);
		}

		redirect("web/citas");
		
	}

	public function nuevaCita(){
		$patient = $this->input->post('id-patient');
		$date  = $this->input->post('id-date');
		$id  = $this->input->post('pax-id');
		$observations = $this->input->post('pax-observation');
		$hour = $this->input->post('datetimepicker2');
		$date_created =(new DateTime())->format('Y-m-d H:i:s');


		$data = array(
        	'id_patient'=>$patient,
        	'id_doctor_created'=> $this->session->userdata('ID'),
        	'date_created'=> $date_created,
        	'date_planned'=>$date." ".$hour,
        	'observations'=>$observations,
        	'status'=>0,
        );


		$this->db->insert('patient_consult', $data);
        $id_consult = $this->db->insert_id();


		redirect("web/citas");

	}


	public function nuevaTerapia(){
		$patient = $this->input->post('id-patient');
		$date  = $this->input->post('id-date');
		$hour = $this->input->post('datetimepicker2');
		$date_created =(new DateTime())->format('Y-m-d H:i:s');

		$query = $this->db->query("SELECT id_consult from patient_consult where id_patient = ".$patient." and status = 2 order by date_attended desc limit 1");
		$row = $query->row();



		$data = array(
        	'id_patient'=>$patient,
        	'id_consulta'=>$row->id_consult,
        	'id_doctor_created'=> $this->session->userdata('ID'),
        	'date_created'=> $date_created,
        	'eta'=>$date." ".$hour,
        	'status'=>0,
        );


		$this->db->insert('patient_therapy', $data);
        $id_therapy = $this->db->insert_id();

		redirect("web/terapias");
	}

  	public function deletePatient(){
  		if ($this->SecurityCheck()){
  			$id_patient = $this->uri->segment(3);

  			$this->db->where('patient.id_patient', $id_patient);
			$this->db->delete('patient');

			redirect('web/pacientes');

  		}else{
  			redirect('web/index');
  		}

  	}

  	public function cancelConsult(){
  		if ($this->SecurityCheck()){
  			$id_consult = $this->uri->segment(3);

  			$this->db->set('patient_consult.status', 1);
  			$this->db->where('patient_consult.id_consult', $id_consult);
			$this->db->update('patient_consult');

			redirect('web/calendar');

  		}else{
  			redirect('web/index');
  		}
  	}


  	public function cancelTherapy(){
  		if ($this->SecurityCheck()){
  			$id_consult = $this->uri->segment(3);

  			$this->db->set('patient_therapy.status', 0);
  			$this->db->where('patient_therapy.id_therapy', $id_consult);
			$this->db->update('patient_therapy');

			redirect('web/calendar');

  		}else{
  			redirect('web/index');
  		}
  	}

	/*FORM UPLOAD ENDS*/


	 /* Helpers starts*/

	 public function authenticate(){
		$username = $this->input->post("wa_username");
		$password = $this->input->post("wa_password");

		$userAdmin = new User();

		$userAdmin->login($username, $password);

		$user = $this->session->userdata('Group');

		if ($user){
			if ($user == 1 or $user ==2) {
            redirect("admin/login");
	        }else{
	        	if ($user == 3 or $user ==4){
	        		redirect("web/index");
	        	}else{
	        		redirect("web/logout");
	        	}
			}
		}else{
			redirect("web/login");
		}
	}

	function SecurityCheck(){
		$UserAdmin = new User();
		$user = $this->session->userdata('Group');
		if ($user == 3 or $user ==4){
			return true;
		}else{
			return false;
		}
	}	
	

	function array_orderby(){
		$args = func_get_args();
		$data = array_shift($args);
		foreach ($args as $n => $field) {
		    if (is_string($field)) {
		        $tmp = array();
		        foreach ($data as $key => $row)
		            $tmp[$key] = $row[$field];
		        $args[$n] = $tmp;
		        }
		}
		$args[] = &$data;
		call_user_func_array('array_multisort', $args);
		return array_pop($args);
	}

	 /* Helpers ends*/

	 /*CALENDAR FUNCTIONS START*/

	public function eventGet(){
		$event_post = $this->input->post();
		if(!empty($event_post)){
			if($event_post['func'] == 'getCalender'){
				$this->getCalender($event_post['year'],$event_post['month']);
			}else{
				if ($event_post['func'] == 'getEvents'){
					$this->getEvents($event_post['date']);
				}
			}	
			
				
		}
	}


	public function eventTherapyGet(){
		$event_post = $this->input->post();
		if(!empty($event_post)){
			if($event_post['func'] == 'getCalender'){
				$this->getTherapyCalender($event_post['year'],$event_post['month']);
			}else{
				if ($event_post['func'] == 'getEvents'){
					$this->getTherapyEvents($event_post['date']);
				}
			}	
			
				
		}
	}

	public function getEvents($date = ''){
		$eventListHTML = '';

		//Get events based on the current date
		$result =  Calendar::getDayEvents($date);
		if(count($result) > 0){

			$eventListHTML = '<h2>'.date("d M Y",strtotime($date)).'</h2>';
			$eventListHTML .= '<ul  class="list-unstyled" >';
			foreach($result as $row){
				$eventListHTML .= 
				"<li class='item-agenda mb-10 pl-10 pr-10' data-toggle='modal' data-target='#verCita' onclick = 'updateCitaModal(".$row['id_consult'].")'> 
					
						<div class = 'row'>
							<div class = 'col-xs-6'>
								<span class = 'agenda-label'>Paciente:</span> ".$row['fullname']."
							</div>
							<div class = 'col-xs-6'>
								<span class = 'agenda-label'>Horario:</span> ".$row['hour']."
							</div>
						</div>
					
				</li>

				

				";
			}
			$eventListHTML .= "</ul>
			<div class = 'but-new-cita'>
			<button  type='button' class='btn btn-nuevo mt-10' data-toggle='modal' data-target='#myModal'>
				<div class = 'glyphicon-ring'>
					<span class='glyphicon glyphicon-plus glyphicon-bordered' ></span>
				</div>
				AGENDAR NUEVA CITA
			</button >
			</div>
			";
		}else{
			$eventListHTML .= '<h2>'.date("d M Y",strtotime($date)).'</h2>';
			$eventListHTML .= '<p> No hay citas</p>';
			$eventListHTML .= "
			<div class = 'but-new-cita'>
			<button  type='button' class='btn btn-nuevo mt-10' data-toggle='modal' data-target='#myModal'>
				<div class = 'glyphicon-ring'>
					<span class='glyphicon glyphicon-plus glyphicon-bordered' ></span>
				</div>
				AGENDAR NUEVA CITA
			</button >
			</div>";
		}
		
		echo $eventListHTML;
	}


	public function getTherapyCalender($year = '',$month = ''){
		$CI =& get_instance();
		$dateYear = ($year != '')?$year:date("Y");
		$dateMonth = ($month != '')?$month:date("m");
		$date = $dateYear.'-'.$dateMonth.'-01';
		$currentMonthFirstDay = date("N",strtotime($date));
		$totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
		$totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
		$boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
	?>

		<div class = 'row'>
			<div class = 'col-md-6 col-xs-12'>
				<div class = 'mon-header pt-50'>
		        	<a  onclick="getTherapyCalendar('calendar_therapy_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">
		        		<span class = 'glyphicon glyphicon-chevron-left'></span>
		        	</a>
		            <span class = 'mr-15 ml-15'>
		            <?php setlocale(LC_ALL,"es_ES", 'Spanish_Spain', 'Spanish'); 
		            	echo strftime("%B", date(mktime(0, 0, 0, $dateMonth, 10))); 
		            ?>	
		            </span>
		            <a  onclick="getTherapyCalendar('calendar_therapy_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">
		            	<span class = 'glyphicon glyphicon-chevron-right'></span>
		            </a>
		        </div>
				<div id="calender_section_top">
					<ul>
						<li>Dom</li>
						<li>Lun</li>
						<li>Mar</li>
						<li>Mie</li>
						<li>Jue</li>
						<li>Vie</li>
						<li>Sab</li>
					</ul>
				</div>
				<div id="calender_section_bot">
					<ul>
					<?php 
						$dayCount = 1; 
						for($cb=1;$cb<=$boxDisplay;$cb++){
							if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
								//Current date
								$currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
								$eventNum = 0;
								//Get number of events based on the current date
								$eventNum =  Calendar::getTherapyCountDay($currentDate);
								//Define date cell color
								if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
									echo '<li date="'.$currentDate.'" class="grey date_cell">';
									echo '<a onclick="getTherapyEvents(\''.$currentDate.'\');">';
									echo '<div class="event-mark">';
									echo $dayCount;
									echo '</div>';	
									echo '<div class="event-counter">';
									echo $eventNum;
									echo '</div>';
									echo '</a>';	
								}elseif($eventNum > 0){
									echo '<li date="'.$currentDate.'" class="date_cell">';
									echo '<a onclick="getTherapyEvents(\''.$currentDate.'\');" class = "round-day">';
									echo '<div class="event-mark">';
									echo $dayCount;
									echo '</div>';	
									echo '<div class="event-counter">';
									echo $eventNum;
									echo '</div>';
									echo '</a>';
								}else{
									echo '<li date="'.$currentDate.'" class="date_cell">';
									echo '<a onclick="getTherapyEvents(\''.$currentDate.'\');">';
									echo '<span >';
									echo $dayCount;
									echo '</span>';	
									echo '</a>';	
								}				
								
								
								echo '</li>';
								$dayCount++;
					?>
					<?php }else{ ?>
						<li><span>&nbsp;</span></li>
					<?php } } ?>
					</ul>
				</div>
			</div>
			<div class = 'col-md-6'>
				<div id="event_list_therapy" class="pt-50">
						
				</div>
				
			</div>
		</div>
	<?php
	}

	public function getCalender($year = '',$month = ''){
		$CI =& get_instance();
		$dateYear = ($year != '')?$year:date("Y");
		$dateMonth = ($month != '')?$month:date("m");
		$date = $dateYear.'-'.$dateMonth.'-01';
		$currentMonthFirstDay = date("N",strtotime($date));
		$totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
		$totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
		$boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
	?>

		<div class = 'row'>
			<div class = 'col-md-6 col-xs-12'>
				<div class = 'mon-header pt-50'>
		        	<a  onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">
		        		<span class = 'glyphicon glyphicon-chevron-left'></span>
		        	</a>
		            <span class = 'mr-15 ml-15'><?php setlocale(LC_ALL,"es_ES", 'Spanish_Spain', 'Spanish'); 
		            	echo strftime("%B", date(mktime(0, 0, 0, $dateMonth, 10))); 
		            ?>	</span>
		            <a  onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">
		            	<span class = 'glyphicon glyphicon-chevron-right'></span>
		            </a>
		        </div>
				<div id="calender_section_top">
					<ul>
						<li>Dom</li>
						<li>Lun</li>
						<li>Mar</li>
						<li>Mie</li>
						<li>Jue</li>
						<li>Vie</li>
						<li>Sab</li>
					</ul>
				</div>
				<div id="calender_section_bot">
					<ul>
					<?php 
						$dayCount = 1; 
						for($cb=1;$cb<=$boxDisplay;$cb++){
							if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
								//Current date
								$currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
								$eventNum = 0;
								//Get number of events based on the current date
								$eventNum =  Calendar::getCountDay($currentDate);
								//Define date cell color
								if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
									echo '<li date="'.$currentDate.'" class="grey date_cell">';
									echo '<a onclick="getEvents(\''.$currentDate.'\');">';
									echo '<div class="event-mark">';
									echo $dayCount;
									echo '</div>';	
									echo '<div class="event-counter">';
									echo $eventNum;
									echo '</div>';
									echo '</a>';	
								}elseif($eventNum > 0){
									echo '<li date="'.$currentDate.'" class="date_cell">';
									echo '<a onclick="getEvents(\''.$currentDate.'\');" class = "round-day">';
									echo '<div class="event-mark">';
									echo $dayCount;
									echo '</div>';	
									echo '<div class="event-counter">';
									echo $eventNum;
									echo '</div>';
									echo '</a>';
								}else{
									echo '<li date="'.$currentDate.'" class="date_cell">';
									echo '<a onclick="getEvents(\''.$currentDate.'\');">';
									echo '<span >';
									echo $dayCount;
									echo '</span>';	
									echo '</a>';	
								}				
								
								
								echo '</li>';
								$dayCount++;
					?>
					<?php }else{ ?>
						<li><span>&nbsp;</span></li>
					<?php } } ?>
					</ul>
				</div>
			</div>
			<div class = 'col-md-6'>
				<div id="event_list" class="pt-50">
						
				</div>
				
			</div>
		</div>
	<?php
	}


	public function getTherapyEvents($date = ''){
		$eventListHTML = '';

		//Get events based on the current date
		$result =  Calendar::getTherapyDayEvents($date);
		if(count($result) > 0){

			$eventListHTML = '<h2>'.date("d M Y",strtotime($date)).'</h2>';
			$eventListHTML .= '<ul  class="list-unstyled" >';
			foreach($result as $row){
				$eventListHTML .= 
				"<li class='item-agenda mb-10 pl-10 pr-10' data-toggle='modal' data-target='#verTerapia' onclick = 'updateTerapiaModal(".$row['id_therapy'].")'> 
					
						<div class = 'row'>
							<div class = 'col-xs-6'>
								<span class = 'agenda-label'>Paciente:</span> ".$row['fullname']."
							</div>
							<div class = 'col-xs-6'>
								<span class = 'agenda-label'>Horario:</span> ".$row['hour']."
							</div>
						</div>
					
				</li>

				

				";
			}
			$eventListHTML .= "</ul>
			<div class = 'but-new-cita'>
			<button  type='button' class='btn btn-nuevo mt-10' data-toggle='modal' data-target='#asignarTerapia' id = 'agendarnuevaterapia'>
				<div class = 'glyphicon-ring'>
					<span class='glyphicon glyphicon-plus glyphicon-bordered' ></span>
				</div>
				AGENDAR NUEVA TERAPIA
			</button >
			</div>
			";
		}else{
			$eventListHTML .= '<h2>'.date("d M Y",strtotime($date)).'</h2>';
			$eventListHTML .= '<p> No hay terapias</p>';
			$eventListHTML .= "
				<div class = 'but-new-cita'>
					<button  type='button' class='btn btn-nuevo mt-10' data-toggle='modal' data-target='#asignarTerapia' id = 'agendarnuevaterapia'>
					<div class = 'glyphicon-ring'>
						<span class='glyphicon glyphicon-plus glyphicon-bordered' ></span>
					</div>
					AGENDAR NUEVA TERAPIA
				</button >
				</div>";
		}
		
		echo $eventListHTML;
	}


	 /*CALENDAR FUNCTIONS ENDS*/
}

?>