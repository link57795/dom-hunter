<?

class DOMHunter {
	 
	private $_params = array(
							'target_url' => '',
							'request_type' => '',
							'browser' => '',
							'custom_headers' => '',
							'output_class' => '',
							'referer' => '',
							'cookie' => ''
					   );
    private $_curlHandler;
    private $defaultHeaders = array(
							    // Headers go here (X_X)
							  );
    private $_responseString;
    private $_preyElements = array();
    private $_huntedObject;
    
    // TODO use some lib, add also the choice for mobile devices
    private $_browserAgents = array(
									'chrome' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36',
									'firefox' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0',
									'ie' => 'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)'
							  );

    public function __construct($inputParams) {
    }
    
    public function addPreyElement($preyElement) {
		// Add if is implements PreyElement
	}
	
	public function huntSingle($object, $targetAttribute) {
		foreach($this->_preyElements as $preyElement) {
			// Search for regex, populate class if found coincidence
			if($preyElement->huntElement()) {
				// Assign $this->_huntedObject-><target_attribute> =  $preyElement->huntElement()
			}
		}
	}
	
	public function huntHerd() {
	}
	
}
?>
