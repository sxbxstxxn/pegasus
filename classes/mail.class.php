<?php
require('config.php');

class PegasusMail {
	function __construct($type, $receiver, $assignments)
	{
	
		$this->mailreceiver = $receiver;
		$this->mailsubject = $this->getSubject($type);
		$this->mailmessage = $this->getMessage($type, $assignments);
		
		//$this->sendMail($this->mailreceiver, $this->mailsubject, $this->mailmessage, $this-mailheader);
		
	}


	function getSubject($type) {
		switch ($type) {
			case 'confirmation':
				return 'Please confirm your email adress!';
				break;
			default:
				return 'Important message for you';
		}
	}
	
	function getMessage($type, $assignments) {
			
		$smarty = new Smarty;
		$smarty->template_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/';
		$smarty->compile_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates_c/';
		$smarty->config_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/configs/';
		$smarty->cache_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/cache/';		
		
		switch ($type) {
			case 'confirmation':
				$confirmationlink = BASEURL.'/register.php?action=confirm&email='.urlencode($this->mailreceiver).'&key='.urlencode($assignments['key']);
				$contradictlink = BASEURL.'/register.php?action=contradict&email='.urlencode($this->mailreceiver).'&key='.urlencode($assignments['key']);
				$smarty->assign('confirmationlink',$confirmationlink);
				$smarty->assign('contradictlink',$contradictlink);
				$smarty->assign('email',$email);
				$smarty->assign('username',$assignments['username']);
				$message = $smarty->fetch('mails/register_confirmation.tpl');								
				break;
			default:
				$message = 'This is an important message';
		}
		return $message;
	}
	
	
	function send() {

		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$header .= 'FROM: '.SITENAME.' Registration <'.MAILSENDER.'>'."\n\r";		
		
		//echo $header;die;
		return mail($this->mailreceiver, $this->mailsubject, $this->mailmessage, $header);
	}

}
?>