<?php
namespace Fungku\HubSpot\API;

class Engagement extends BaseClient {

	//Define required client variables
	protected $API_PATH = 'engagements';
	protected $API_VERSION = 'v1';

	/**
	 * @param array $properties
	 * @return mixed
	 * @throws HubSpotException
	 */
	public function create_engagement(Array $properties) {
		$endpoint = 'engagements';
		$properties = json_encode($properties);
		try{
			return json_decode($this->execute_JSON_post_request($this->get_request_url($endpoint,null),$properties));
		} catch (HubSpotException $e) {
			throw $e;
		}
	}

	/**
	 * @param $id
	 * @return mixed
	 * @throws HubSpotException
	 */
	public function get_engagement_by_id($id)
	{
		$endpoint = 'engagements/'.$id;
		try{
			return json_decode($this->execute_get_request($this->get_request_url($endpoint,null)));
		}
		catch(HubSpotException $e){
			throw $e;
		}
	}
}