<?php
class default_globals {
	//---------------------------------------------------------------------------
	//-- Globals
	//---------------------------------------------------------------------------	

	function user(){
		global $user;
		return $user;
	}

	function realms(){
		global $config;
		$realms = array();
		foreach($config['db']['realm'] as $key => $value){
			$realms[] = Realm::find($key);
		}
		return $realms;
	}

	function STATUS(){
		global $STATUS;
		return $STATUS;
	}

	function rooturl(){
		global $config;
		return $config['page_root'];
	}

	function themeurl(){
		global $config;
		return $config['page_root'] . '/themes/' . $config['theme'];
	}

	function TICKETSTATUS(){
		global $TICKET_STATUS;
		return $TICKET_STATUS;
	}
}