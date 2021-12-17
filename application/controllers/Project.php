<?php
class Project extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('ProjectModel');
		$this->load->helper('cookie');
	}
	function classroom()
	{
		$this->load->view('myclassroom');
	}
	function reminder()
	{
		$this->load->view('note');
	}
	function ourview()
	{
		$this->load->view('oursview');
		if ($this->input->post('submit')) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$date = $this->input->post('date');
			$msg = $this->input->post('msg');
			$data = array("name" => $name, "email" => $email, "date" => $date, "msg" => $msg);
			if ($this->ProjectModel->feedbackdata($data)) {
				echo "<script>alert('THANK YOU FOR YOUR FEEDBACK')</script>";
				echo "<script> window.location.href='ourview'</script>";
			} else {
				echo "<script>alert('FEEDBACK SEND FAILED')</script>";
				echo "<script> window.location.href='ourview'</script>";
			}
		}
	}
	function savedata()
	{
		$this->load->view('signup');
		if ($this->input->post('submit')) {
			$name = $this->input->post('name');
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$date = $this->input->post('date');
			$gender = $this->input->post('gender');
			$nationality = $this->input->post('nation');
			$profession = $this->input->post('profession');
			$filename = $_FILES['image']['name'];
			$tempname = $_FILES['image']['tmp_name'];
			$folder = 'image/' . $filename;
			move_uploaded_file($tempname, $folder);

			//echo $name,$address;
			$data = array("name" => $name, "address" => $address, "phone" => $phone, "email" => $email, "password" => $password, "date" => $date, "gender" => $gender, "nationality" => $nationality, "profession" => $profession, "image" => $folder);
			if ($this->ProjectModel->saverecords($data)) {
				//echo "insert successful";
				//redirect('Project/logindata');
				echo "<script>alert('Account Create Sucessful')</script>";
				echo "<script> window.location.href='logindata'</script>";
			} else {
				//echo "not inserted";
				echo "<script>alert('Account Create Failed')</script>";
				echo "<script> window.location.href='savedata'</script>";
			}
		}
	}
	function logindata()
	{
		$this->load->view('login');
		if ($this->input->post('submit')) {
			$_SESSION['email'] = $this->input->post('email');
			$_SESSION['password'] = md5($this->input->post('password'));
			//print_r($password,$_SESSION['email']);
			//$data=array("email"=>$_SESSION['email'],"password"=>$password);
			if ($this->ProjectModel->logindetail($_SESSION['email'], $_SESSION['password'])) {
				//echo "login sucessful";
				redirect('Project/secondpage');
			} else {
				echo "<script>alert('Login failed!!')</script>";
				echo "<script> window.location.href='logindata'</script>";
			}
		}
	}
	function logout()
	{
		session_unset();
		//redirect('Project/classroom');
		echo "<script>alert('Login again!!')</script>";
		echo "<script> window.location.href='logindata'</script>";

		//<script>
		// confirm('Back to home page !!')
		// if(true)
		// {
		// window.location.href="http://localhost/ci_project/index.php/Project/classroom";
		// }
		// </script> 
		//<?php
	}
	function editdata()
	{
		$id = $_SESSION['email'];
		//echo $id;
		//$id=$this->input->get($id1);
		//$id=$this->input->get(''); 
		$result['data'] = $this->ProjectModel->updaterecordbyid($id);
		//print_r($result);
		$this->load->view('edit', $result);
		if ($this->input->post('submit')) {
			$name = $this->input->post('name');
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$date = $this->input->post('date');
			$gender = $this->input->post('gender');
			$nationality = $this->input->post('nation');
			$filename = $_FILES['image']['name'];
			$tempname = $_FILES['image']['tmp_name'];
			$folder = 'image/' . $filename;
			move_uploaded_file($tempname, $folder);

			$data = array("name" => $name, "address" => $address, "phone" => $phone, "email" => $email, "password" => $password, "date" => $date, "gender" => $gender, "nationality" => $nationality, "image" => $folder);
			if ($this->ProjectModel->updaterecords($data, $id)) {
				echo "<script>alert('Data update Sucessful')</script>";
				echo "<script> window.location.href='logindata'</script>";
			} else {
				echo "<script>alert('Data update Unsucessful')</script>";
				echo "<script> window.location.href='logindata'</script>";
			}
		}
	}
	function changepass()
	{
		$this->load->view('changepass');
		if ($this->input->post('submit')) {
			$id = $_SESSION['email'];
			$currentpass = md5($this->input->post('currentpass'));
			$newpass = md5($this->input->post('newpass'));
			$confpass = md5($this->input->post('confpass'));
			if ($currentpass == $_SESSION['password']) {
				if ($newpass == $confpass) {
					$this->ProjectModel->passwordrecords($confpass, $id);
					redirect('Project/logindata');
				} else {
					echo "<script>alert('Newpassword and  Confirmpassword are not same')</script>";
					echo "<script> window.location.href='changepass'</script>";
				}
			} else {
				echo "<script>alert('Enter Correct Password')</script>";
				echo "<script> window.location.href='changepass'</script>";
			}
		}
	}
	function forgotpass()
	{
		$this->load->view('forgot password');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,	//there are two port number for mail sending 465 is secure port and 						587 is default port
			'smtp_user' => 'psaha.bdn9@gmail.com',
			'smtp_pass' => '7477470500@',
			'charset' => 'iso-8859-1',
			'mailtype' => 'html',
			'wordwrap' => TRUE
		);
		$_SESSION['to'] = $this->input->post('email');
		//$_SESSION['forgetmail']=$_COOKIE['to'];
		$sub = ('Reset Password for Myclassroom');
		$body = ('http://localhost/ci_project/index.php/Project/resetpass');
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('psaha.bdn9@gmail.com', '');
		$this->email->to($_SESSION['to']);
		$this->email->subject($sub);
		$this->email->message($body);

		if ($this->email->send()) {
			//echo "mail send succesful";
			echo "<script>alert('Mail send succesful!!')</script>";
			echo "<script> window.location.href='forgotpass'</script>";
		}
	}

	function resetpass()
	{
		$this->load->view('forgotpass');
		if ($this->input->post('submit')) {
			$email = $this->input->post('email');
			$newpass = md5($this->input->post('newpass'));
			$confpass = md5($this->input->post('confpass'));
			//echo $newpass,$confpass,$email;
			if ($newpass == $confpass) {
				$this->ProjectModel->resetpassdata($confpass, $email);
				redirect('Project/logindata');
			} else {
				echo "<script>alert('Newpassword and Confirmpassword are not same')</script>";
				echo "<script> window.location.href='resetpass'</script>";
			}
		}
	}

	function secondpage()
	{
		$id = $_SESSION['email'];
		$result['data'] = $this->ProjectModel->displayrecord($id);
		//print_r($id);
		$this->load->view('secondpage', $result);
	}

	function createclass()
	{
		$id = $_SESSION['email'];
		$this->load->view('createclass');
		if ($this->input->post('submit')) {
			$class_name = $this->input->post('class_name');
			$section = $this->input->post('section');
			$subject = $this->input->post('subject');
			$classcode = $this->input->post('classcode');
			$email = $this->input->post('email');
			$data = array("classname" => $class_name, "section" => $section, "subject" => $subject, "classcode" => $classcode, "email" => $email);
			if ($email == $id) {
				if ($this->ProjectModel->createdetail($data)) {
					//echo "insert successful";
					//redirect('Project/logindata');
					echo "<script>alert('Class Create Sucessful')</script>";
					echo "<script> window.location.href='secondpage'</script>";
				}
			} else {
				echo "<script>alert('Please Check Email id')</script>";
				echo "<script> window.location.href='createclass'</script>";
			}
		}
	}
	function joinclass()
	{
		$id = $_SESSION['email'];
		$this->load->view('joinclass');
		if ($this->input->post('submit')) {
			$_SESSION['class_name'] = $this->input->post('class_name');
			$classcode = $this->input->post('classcode');
			$id1 = $_SESSION['email'] = $this->input->post('email');
			$data = array("email" => $id1);
			$this->ProjectModel->studentmail($data);

			if ($_SESSION['email'] == $id) {
				if ($this->ProjectModel->joindetail($_SESSION['class_name'], $classcode)) {
					echo "<script>alert('Class Admid Sucessfull')</script>";
					echo "<script> window.location.href='stustream'</script>";
				} else {
					echo "<script>alert('Class Join Failed')</script>";
					echo "<script> window.location.href='joinclass'</script>";
				}
			} else {
				echo "<script>alert('Please Check Email id')</script>";
				echo "<script> window.location.href='joinclass'</script>";
			}
		}
	}
	function deleteclass()
	{
		$id = $this->input->get('del');
		//echo $id;	
		if ($this->ProjectModel->deleteclassdata($id)) {
			echo "<script>alert('Delete Sucessfully')</script>";
			echo "<script> window.location.href='secondpage'</script>";
		} else {
			echo "<script>alert('Not Deleted')</script>";
			echo "<script> window.location.href='secondpage'</script>";
		}
	}
	//teacher part------------->>
	function teachstream()
	{
		$result['data'] = $this->ProjectModel->teachstreamdata();
		//print_r($result);
		$this->load->view('teachstream', $result);

		$id = $_SESSION['email'];
		//echo $id;		
		if ($this->input->post('submit')) {
			$text = $this->input->post('text');
			$filename = $_FILES['file']['name'];
			$tempname = $_FILES['file']['tmp_name'];
			$folder = 'image/' . $filename;
			move_uploaded_file($tempname, $folder);
			$data = array("email" => $id, "stream" => $text, "file" => $folder);
			if ($this->ProjectModel->teachinsertstreamdata($data)) {
				redirect('Project/teachstream');
			}
		}
	}
	function teachclasswork()
	{
		//$id=$_SESSION['email'];
		//$this->load->view('teachclasswork');
		$result['data'] = $this->ProjectModel->teachclassworkdata();
		//print_r($result);
		$this->load->view('teachclasswork', $result);

		$id = $_SESSION['email'];
		//echo $id;		
		if ($this->input->post('submit')) {
			$text = $this->input->post('text');
			$filename = $_FILES['file']['name'];
			$tempname = $_FILES['file']['tmp_name'];
			$folder = 'image/' . $filename;
			move_uploaded_file($tempname, $folder);
			$data = array("email" => $id, "classwork" => $text, "file" => $folder);
			if ($this->ProjectModel->teachinsertclassworkdata($data)) {
				redirect('Project/teachclasswork');
			}
		}
	}
	function teachpeople()
	{
		$result['data'] = $this->ProjectModel->peopledata();
		$this->load->view('teachpeople', $result);

		$id1 = $_SESSION['email'];
		if ($this->input->post('submit')) {
			$atten = $this->input->post('atten');
			$remarks = $this->input->post('remark');
			$data = array("attendence" => $atten, "remarks" => $remarks);
			//echo"<br><br><br><br><br><br><br><br>";
			//echo $atten,$remarks;
			//print_r($data);
			if ($this->ProjectModel->remarkdata($data, $id1)) {
				redirect('Project/teachpeople');
			}
		}
	}
	//student part-------------->>
	function stustream()
	{
		// $this->load->view('stustream');	
		$result['data'] = $this->ProjectModel->stustreamdata();
		//print_r($result);
		$this->load->view('stustream', $result);

		$id = $_SESSION['email'];
		//echo $id;		
		if ($this->input->post('submit')) {
			$text = $this->input->post('text');
			$filename = $_FILES['file']['name'];
			$tempname = $_FILES['file']['tmp_name'];
			$folder = 'image/' . $filename;
			move_uploaded_file($tempname, $folder);
			$data = array("email" => $id, "stream" => $text, "file" => $folder);
			if ($this->ProjectModel->stuinsertstreamdata($data)) {
				redirect('Project/stustream');
			}
		}
	}
	function stuclasswork()
	{
		//$this->load->view('stuclasswork');
		$result['data'] = $this->ProjectModel->stuclassworkdata();
		//print_r($result);
		$this->load->view('stuclasswork', $result);
	}

	function stupeople()
	{
		$result['data'] = $this->ProjectModel->peopledata();
		$this->load->view('stupeople', $result);
	}
}
