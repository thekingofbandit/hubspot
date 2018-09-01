<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Map extends CI_Controller {
function __construct()
{
parent::__construct();
}
function index()
{
// Load the library
$this->load->library('googlemaps');
// Load our model
$this->load->model('map_model', '', TRUE);
// Initialize the map, passing through any parameters
$config['center'] = '1600 Amphitheatre Parkway in Mountain View, Santa Clara County, California';
$config['zoom'] = "auto";
$this->googlemaps->initialize($config);
// Get the co-ordinates from the database using our model
$coords = $this->map_model->get_coordinates();
// Loop through the coordinates we obtained above and add them to the map
foreach ($coords as $coordinate) {
$marker = array();
$marker['position'] = $coordinate->lat.','.$coordinate->lng;
$this->googlemaps->add_marker($marker);
}
// Create the map
$data = array();
$data['map'] = $this->googlemaps->create_map();
// Load our view, passing through the map data
$this->load->view('map_view', $data);
}
}