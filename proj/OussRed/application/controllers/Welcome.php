<?php

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('getInfo');
		$this->load->view('welcome_view');
	}
	public function get()
	{
		$m = $this->input->post('motCle');
		$this->load->model('getInfo');
		$cars = $this->getInfo->index($m);

		$output ="";
		$output .=	'<table id="table" class="display" cellspacing="0" width="100%">
		<thead>
	      <tr>
	       <th><center>Nom</center></th>
	       <th><center>Cylindres</center></th>
	       <th><center>Puissance fiscale</center></th>
	       <th><center>Accélération</center></th>
	       <th><center>Date</center></th>
	       <th><center>Origine</center></th>
	      </tr>
      	</thead>
      	<tbody>';

      	foreach ($cars as $key) {

		$output .= '
		<tr>
			<td>'.$key['Name'].'</td>
			<td>'.$key['Cylinders'].'</td>
			<td>'.$key['Horsepower'].'</td>
			<td>'.$key['Acceleration'].'</td>
			<td>'.$key['Year'].'</td>
			<td>'.$key['Origin'].'</td>
		</tr>';
	 }
		$output .='</tbody></table>';
		echo $output;
	}
}
?>
