<?php

/** @property services_model $services_model *
 */
class Services extends Front_end
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('services_model');
        $this->load->library('form_validation');

    }


    // this function will redirect to book service page
    function index()
    {
        $this->book_service();
    }

    // this function to load service book page
    function book_service()
    {

        $this->view('content/book_service');

    }
    // this function receive ajax request and return closest providers
    function closest_locations(){

        $location =json_decode( preg_replace('/\\\"/',"\"",$_POST['data']));
        $lan=$location->longitude;
        $lat=$location->latitude;
        $ServiceId=$location->ServiceId;
        $base = base_url();
        $providers= $this->services_model->get_closest_locations($lan,$lat,$ServiceId);
        $indexed_providers = array_map('array_values', $providers);
        // this loop will change retrieved results to add links in the info window for the provider
        $x = 0;
        foreach($indexed_providers as $arrays => &$array){
            foreach($array as $key => &$value){
                if($key === 1){
                    $pieces = explode(",", $value);
                    $value = "$pieces[1]<a href='$base$pieces[0]'>More..</a>";
                }

                $x++;
            }
        }
        echo json_encode($indexed_providers,JSON_UNESCAPED_UNICODE);

    }

    function order_service_two()
    {
        $this->form_validation->set_rules('lat', 'lat', 'trim|required');
        $this->form_validation->set_rules('lng', 'lng', 'trim|required');
        $this->form_validation->set_rules('RequestAddress', 'RequestAddress', 'trim|required');

        if ($this->form_validation->run($this) == FALSE) {
            $data['error'] = validation_errors('
        <div class="alert alert-danger notices errorimg alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert">
         <span aria-hidden="true">×</span><span class="sr-only">Close</span></button>', '</div> ');
            $this->view('content/order_service_two', $data);
        } else {
            print_r($this->input->post());

        }
    }

}
/* End of file news.php */
/* Location: ./application/controllers/Services.php */