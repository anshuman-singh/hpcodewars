<?php 
class Helper{
	public static function format_message($message,$type)
	{
		return '<div class="alert alert-'.$type.'">'.$message.'</div>';
	}
}