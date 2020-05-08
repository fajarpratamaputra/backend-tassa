<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-Wl3OBz59TsVvrw_PH8PPf_vV', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {
		$code = $this->uri->segment(3);
		
		$query = $this->db->join('users u','u.UserID = o.OrderUserID')
						  ->where('o.OrderCode', $code)
						  ->get('orders o')->row();
		
		$name = $query->OrderShipName;
		$amount = $query->OrderAmount;
		$address = $query->OrderShipAddress;
		$city = $query->OrderCity;
		$zip = $query->OrderZip;
		$phone = $query->OrderPhone;

		$name_bill = $query->UserName;
		$email = $query->UserEmail;
		$phone_bill = $query->UserPhone;


		// Required
		$transaction_details = array(
		  'order_id' => $code,
		  'gross_amount' => $amount, 
		);

		// Optional
		$billing_address = array(
		  'first_name'    => $name_bill,
		  'address'       => $address,
		  'city'          => $city,
		  'phone'         => $phone_bill
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => $name,
		  'address'       => $address,
		  'city'          => $city,
		  'postal_code'   => $zip,
		  'phone'         => $phone
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $name_bill,
		  'email'         => $email,
		  'phone'         => $phone,
		  'billing_address'  => $billing_address,
		  'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'hour', 
            'duration'  => 24
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
    	echo 'RESULT <br><pre>';
    	var_dump($result);
    	echo '</pre>' ;

    }
}
