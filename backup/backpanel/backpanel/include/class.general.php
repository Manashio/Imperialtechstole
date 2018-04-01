<?php
class general {

    var $html;
    var $text;
    var $output;
    var $html_text;
    var $html_images;
    var $image_types;
    var $build_params;
    var $attachments;
    var $headers;

 function allmonths()
{
	$months=array('1'=>'Jan','2'=>'Feb','3'=>'Mar','4'=>'Apr','5'=>'May','6'=>'Jun','7'=>'Jul','8'=>'Aug','9'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	//$months=range(1,12);
	$mth_dropdown='<select name=mm>';
	$mth_dropdown.='<option selected>MM</option>';
	//for($i=0;$i<count($months);$i++)
	foreach($months as $key=>$val)
	{
		$mth_dropdown.='<option value='.$key.'>'.$val.'</option>';	
	}
	$mth_dropdown.='</select>';
	return $mth_dropdown;
}

  function tep_get_countries($countries_id, $with_iso_codes = false) {
    $countries_array = array();
    if($countries_id==''){ $countries_id='223';}
      $countries = $this->db_execute_query("select countries_id, countries_name from countries order by countries_name",'');
      while ($countries_values = $this->db_fetch_array($countries)) {
        $countries_array[] = array('countries_id' => $countries_values['countries_id'],
                                   'countries_name' => $countries_values['countries_name']);
      }
	  
	  $name='country';
	$dropdown = '<select name='.$name.'>';
	for($k=0;$k<sizeof($countries_array);$k++)
	{
		$dropdown.='<option value="'.$countries_array[$k]['countries_id'].'"';
		if($countries_array[$k]['countries_id']==$countries_id)
		{
			$dropdown.="selected";
		}
		$dropdown.=">";
		$dropdown.=$countries_array[$k]['countries_name'].'</option>';
	}
	$dropdown.='</select>';
	return $dropdown;
  }
  
  function tep_draw_dropdown($array_val,$name)
  {
  	$dropdown='<select name='.$name.'>';
	foreach($array_val as $ids=>$vals)
	{
		$dropdown.='<option value="'.$ids.'">';
		$dropdown.=$vals.'</option>';
	}
	$dropdown.='</select>';
	return $dropdown;
  }


  function db_execute_query($qry,$cond)
  {
  		$result=mysql_query($qry.$cond);
		return $result;
  }
   
     function db_num_record($qry,$cond)
     { 
		return mysql_num_rows($this->db_execute_query($qry,$cond));
     }
  
	function get_current_insert_id($table)
	{
		$q = "SELECT LAST_INSERT_ID() FROM $table"; 
		return mysql_fetch_array(mysql_query($q));
	}

  
     function db_fetch_array($qry_rec)
     {
  		return mysql_fetch_array($qry_rec);
     }
  
  
	function db_insert_data($table,$data_array)
	{
		foreach($data_array as $field=>$value)
		{
			$fields[] = '`' . $field . '`';
			if($value=='now()')
			{
				$values[] = $value ;
			}else{
			$values[] = "'" . mysql_real_escape_string($value) . "'";
			}
  		}
 		 $field_list = join(',', $fields);
  		 $value_list = join(', ', $values);
		$query = "INSERT INTO `" . $table . "` (" . $field_list . ") VALUES (" . $value_list . ")";	
		$result=$this->db_execute_query($query,'');
		return $result;
	}

	function db_update($table,$data,$parameters)
	{
		$query = 'update ' . $table . ' set ';
      while (list($columns, $value) = each($data)) {
        switch ((string)$value) {
          case 'now()':
            $query .= $columns . ' = now(), ';
            break;
          case 'null':
            $query .= $columns .= ' = null, ';
            break;
          default:
            $query .= $columns . ' = \'' . mysql_real_escape_string($value) . '\', ';
            break;
        }
      }
      $query = substr($query, 0, -2) . ' where ' . $parameters;
	  return $this->db_execute_query($query,'');
	  //return $query; 
	}

##    **************************************************************************** #####
  function send_text_mail($to_email_address, $email_subject, $email_text, $from_email_address) {
	if(mail($to_email_address, $email_subject, $email_text, $header))
	{
		return true;
	}else{
		return false;
	}
 }

///////////// Function for displaying User Status /////////////
function statusOnline($id){
$stQry = "select * from ".TBL_PRIVACY_SETTING." where uid='".$id."' and showonlinestatus=1";
$exestQry = $this->db_execute_query($stQry,"");
$stQryRes = $this->db_num_record($stQry,'');

if($stQryRes!=0){
$chkStatus = "select activestatus from ".TBL_USER." where id='".$id."'";
$runChkStatus = $this->db_execute_query($chkStatus,"");

while($onlineStatus = $this->db_fetch_array($runChkStatus)){
	if($onlineStatus[0] == 1){
		print "<img src='".DIR_ONLINE_IMAGE."' border=0 style='border-top:0px;border-left:0px;border-right:0px;border-bottom:0px;' vspace=0 hspace=0>";
	}
	} // End While loop
}// end If
return statusOnline;
}
///////////// End Function for displaying User Status /////////////


} // CLASS CLOSED

?>
