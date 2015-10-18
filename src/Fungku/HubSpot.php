<?php namespace Fungku;

use Fungku\HubSpot\API\Blog;
use Fungku\HubSpot\API\Contacts;
use Fungku\HubSpot\API\Forms;
use Fungku\HubSpot\API\Keywords;
use Fungku\HubSpot\API\LeadNurturing;
use Fungku\HubSpot\API\Leads;
use Fungku\HubSpot\API\Lists;
use Fungku\HubSpot\API\MarketPlace;
use Fungku\HubSpot\API\Properties;
use Fungku\HubSpot\API\Settings;
use Fungku\HubSpot\API\SocialMedia;
use Fungku\HubSpot\API\Workflows;

class HubSpot {

    /**
     * @var string
     */
    private $hapikey;

    /**
     * @var string
     */
    private $userAgent = 'Fungku_haPiHP/1.0 (https://github.com/ryanwinchester/hubspot)';

    /**
     * @param string $hapikey
     * @param string $userAgent
     */
    function __construct($hapikey = null, $connectTimeout = 0)
    {
        $this->hapikey = $hapikey;
        $this->connectTimeout = $connectTimeout;

        if (is_null($this->hapikey))
            $this->hapikey = getenv('HUBSPOT_APIKEY');
    }

    public function blog()          { return new Blog($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function contacts()      { return new Contacts($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function forms()         { return new Forms($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function keywords()      { return new Keywords($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function leadNurturing() { return new LeadNurturing($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function leads()         { return new Leads($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function lists()         { return new Lists($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function marketPlace()   { return new MarketPlace($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function properties()    { return new Properties($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function settings()      { return new Settings($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function socialMedia()   { return new SocialMedia($this->hapikey, $this->connectTimeout, $this->userAgent); }

    public function workflows()     { return new WorkFlows($this->hapikey, $this->connectTimeout, $this->userAgent); }
}
