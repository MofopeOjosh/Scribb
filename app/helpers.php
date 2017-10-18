<?php 

function flash($message, $type="info"){
	Session::flash('message', $message);
    Session::flash('type', $type);
}
?>