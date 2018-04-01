<?php 
	error_reporting(E_ERROR);
	session_start(); 
	date_default_timezone_set('Asia/Kolkata');
	include("directory_check.php");
	include("fls_dbCn.php");
	include("english.php");
	include_once('sql2excel.class.php');
	 global $chg;
	
	
	mysql_connect($dataServer,$dataUser,$dataPassword) or die(mysql_error());
	mysql_select_db($dataDBName)or die("Error ! Database connection Failure"); 
	
class myclass
{
	function conn()
	{
		include("fls_dbCn.php");
		$s = mysql_connect($dataServer,$dataUser,$dataPassword) or die(mysql_error());
		$d = mysql_select_db($dataDBName)or die("Error ! Database connection Failure"); 
	}
	function save_data_tax_rate($tablename, $var1, $var2, $var3, $var4, $var5 , $var6, $var7, $var8 )
	{
		$result = mysql_query("insert into tbl_tax_rate values ('','$var1','$var2','$var3','$var4', '$var5' , '$var6', '$var7', '$var8')"); 
		return $result;	
	}
	
				
	function delete_table_withCondition($table_name, $field_name, $condition)
	{	
		//$sql="DELETE  FROM $table_name WHERE $field_name='".$condition."' ";
		$sql="update  ".$table_name ." set deleteflag='inactive' WHERE $field_name='".$condition."' ";
		return   $x = mysql_query($sql) ;
	}
		function deletePerma_table_withCondition($table_name, $field_name, $condition)
	{	
		$sql="DELETE  FROM $table_name WHERE $field_name='".$condition."' ";
		//$sql="update  ".$table_name ." set deleteflag='inactive' WHERE $field_name='".$condition."' ";
		return   $x = mysql_query($sql) ;
	}
	function delete_record_withCondition($table_name, $field_name, $condition)
	{	
		  $sql="DELETE  FROM $table_name WHERE $field_name='".$condition."' ";
		return   $x = mysql_query($sql) ;
	}
		function delete_record_withCondition1($table_name1, $field_name1, $condition1)
	{	
		  $sql1="DELETE  FROM $table_name1 WHERE $field_name1='".$condition1."' ";
		return   $x1 = mysql_query($sql1) ;
	}
		function delete_record_withCondition2($table_name2, $field_name2, $condition2)
	{	
		  $sql2="DELETE  FROM $table_name2 WHERE $field_name2='".$condition2."' ";
		return   $x2 = mysql_query($sql2) ;
	}
			function delete_record_withCondition3($table_name3, $field_name3, $condition3)
	{	
		  $sql3="DELETE  FROM $table_name3 WHERE $field_name3='".$condition3."' ";
		return   $x3 = mysql_query($sql3) ;
	}
		function delete_record_withCondition4($table_name4, $field_name4, $condition4)
	{	
		  $sql4="DELETE  FROM $table_name WHERE $field_name4='".$condition4."' ";
		return   $x4 = mysql_query($sql4) ;
	}
		function delete_record_withCondition5($table_name5, $field_name5, $condition5)
	{	
		  $sql5="DELETE  FROM $table_name5 WHERE $field_name5='".$condition5."' ";
		return   $x5 = mysql_query($sql5) ;
	}
		function delete_record_withCondition6($table_name6, $field_name6, $condition6)
	{	
		  $sql6="DELETE  FROM $table_name6 WHERE $field_name6='".$condition6."' ";
		return   $x6 = mysql_query($sql6) ;
	}	
// Function to add or Insert record in Database 

	function insertRecord($table, $dataArray)
	{
 		$sql="Insert into ".$table ." set ";
		$i=0;
		foreach($dataArray as $key => $val)
		{
			if($i==0)
			{
				$sql.=" ".$key." = '".$val."'";
			}
			else
			{
				$sql.=", ".$key." = '".$val."'";	
			}		
			$i++;
		}
		//echo $sql;
		//die;
		$result=mysql_query($sql);
		if (!$result)
		{
			return 1;//error
		}
		else 
		{
			return 0;//not error
		}
	}
	
	
	
	function insertRecord1($table, $dataArray)
	{
 		$sql="Insert into ".$table ." set ";
		$i=0;
		foreach($dataArray as $key => $val)
			{
			if($i==0)
			$sql.=" `".$key."` = '".$val."'";
			else
			$sql.=", `".$key."` = '".$val."'";			
			$i++;
			}
		//echo $sql; exit;
		//echo '&nbsp;';
		$result=mysql_query($sql);
		if (!$result)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
	} 
function insertRecord2($table2, $dataArray2)
	{
 		$sql2="Insert into ".$table2 ." set ";
		$f=0;
		foreach($dataArray2 as $key2 => $val2)
			{
			if($f==0)
			$sql2.=" `".$key2."` = '".$val2."'";
			else
			$sql2.=", `".$key2."` = '".$val2."'";			
			$f++;
			}
		//echo $sql2; exit;
		//echo '&nbsp;';
		$result2=mysql_query($sql2);
		if (!$result2)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
	}
	function insertRecord3($table3, $dataArray3)
	{
 		$sql3="Insert into ".$table3 ." set ";
		$f3=0;
		foreach($dataArray3 as $key3 => $val3)
			{
			if($f3==0)
			$sql3.=" `".$key3."` = '".$val3."'";
			else
			$sql3.=", `".$key3."` = '".$val3."'";			
			$f3++;
			}
		//echo $sql; exit;
		//echo '&nbsp;';
		$result3=mysql_query($sql3);
		if (!$result3)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
	}
function insertRecord4($table4, $dataArray4)
	{
 		$sql4="Insert into ".$table4 ." set ";
		$f4=0;
		foreach($dataArray4 as $key4 => $val4)
			{
			if($f4==0)
			$sql4.=" `".$key4."` = '".$val4."'";
			else
			$sql4.=", `".$key4."` = '".$val4."'";			
			$f4++;
			}
		 //echo $sql; exit;
		//echo '&nbsp;';
		$result4=mysql_query($sql4);
		if (!$result4)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
	}
function insertRecord5($table5, $dataArray5)
	{
 		$sql5="Insert into ".$table5 ." set ";
		$f5=0;
		foreach($dataArray5 as $key5 => $val5)
			{
			if($f5==0)
			$sql5.=" `".$key5."` = '".$val5."'";
			else
			$sql5.=", `".$key5."` = '".$val5."'";			
			$f5++;
			}
		//echo $sql; exit;
		//echo '&nbsp;';
		$result5=mysql_query($sql5);
		if (!$result5)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
	}
function insertRecord6($table6, $dataArray6)
	{
 		$sql6="Insert into ".$table6 ." set ";
		$f6=0;
		foreach($dataArray6 as $key6 => $val6)
			{
			if($f6==0)
			$sql6.=" `".$key6."` = '".$val6."'";
			else
			$sql6.=", `".$key6."` = '".$val6."'";			
			$f6++;
			}
		//echo $sql; exit;
		//echo '&nbsp;';
		$result6=mysql_query($sql6);
		if (!$result6)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
	}
// Function to edit record in Database 
	function editRecord($table, $dataArray, $field , $v, $func='')
		{
		 $sql="update  ".$table ." set ";
		$i=0;
		foreach($dataArray as $key => $val)
			{
			if($i==0)
			$sql.=" ".$key." = '".$val."'";
			else
			$sql.=", ".$key." = '".$val."'";			
			$i++;
			}
			
		$sql .=" where  ". $field ." = ' ". $v ." '" ;
		
		 //echo $sql;  exit;
		
		$result=mysql_query($sql);
		$recordedited = $func;
		if (!$result)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
		
	} 
function editRecord1($table1, $dataArray1, $field1 , $v1)
		{
		 $sql1="update  ".$table1 ." set ";
		$i2=0;
		foreach($dataArray1 as $key1 => $val1)
			{
			if($i2==0)
			$sql1.=" ".$key1." = '".$val1."'";
			else
			$sql1.=", ".$key1." = '".$val1."'";			
			$i2++;
			}
			
		$sql1 .=" where  ". $field1 ." = ' ". $v1 ." '" ;
		$recordedited = "$chg'$sql')";
	
		//echo $sql;  exit;
		$result1=mysql_query($sql1);
		if (!$result1)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
		
	} 
function editRecord2($table2, $dataArray2, $field2 , $v2)
		{
		 $sql2="update  ".$table2 ." set ";
		$i3=0;
		foreach($dataArray2 as $key2 => $val2)
			{
			if($i3==0)
			$sql2.=" ".$key2." = '".$val2."'";
			else
			$sql2.=", ".$key2." = '".$val2."'";			
			$i3++;
			}
			
		$sql2 .=" where  ". $field2 ." = ' ". $v2 ." '" ;
		$recordedited = "$chg'$sql')";
		//echo $sql2;  exit;
		$result2=mysql_query($sql2);
		if (!$result2)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
		
	} 
function editRecord3($table3, $dataArray3, $field3 , $v3)
		{
		 $sql3="update  ".$table3 ." set ";
		$i4=0;
		foreach($dataArray3 as $key3 => $val3)
			{
			if($i4==0)
			$sql3.=" ".$key3." = '".$val3."'";
			else
			$sql3.=", ".$key3." = '".$val3."'";			
			$i4++;
			}
			
		$sql3 .=" where  ". $field3 ." = ' ". $v3 ." '" ;
		$recordedited = "$chg'$sql')";
		//echo $sql3;  exit;
		$result3=mysql_query($sql3);
		if (!$result3)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
		
	} 
function editRecord4($table4, $dataArray4, $field4 , $v4)
		{
		 $sql4="update  ".$table4 ." set ";
		$i5=0;
		foreach($dataArray4 as $key4 => $val4)
			{
			if($i5==0)
			$sql4.=" ".$key4." = '".$val4."'";
			else
			$sql4.=", ".$key4." = '".$val4."'";			
			$i5++;
			}
			
		$sql4 .=" where  ". $field4 ." = ' ". $v4 ." '" ;
		$recordedited = "$chg'$sql')";
		//echo $sql4;  exit;
		$result4=mysql_query($sql4);
		if (!$result4)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
		
	} 
	function editRecord5($table5, $dataArray5, $field5 , $v5)
		{
		 $sql5="update  ".$table5 ." set ";
		$i6=0;
		foreach($dataArray5 as $key5 => $val5)
			{
			if($i6==0)
			$sql5.=" ".$key5." = '".$val5."'";
			else
			$sql5.=", ".$key5." = '".$val5."'";			
			$i6++;
			}
			
		$sql5 .=" where  ". $field5 ." = ' ". $v5 ." '" ;
		$recordedited = "$chg'$sql')";
		//echo $sql5;  exit;
		$result5=mysql_query($sql5);
		if (!$result5)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
		
	} 
 function editRecord6($table6, $dataArray6, $field6 , $v6)
		{
		 $sql6="update  ".$table6 ." set ";
		$i7=0;
		foreach($dataArray6 as $key6 => $val6)
			{
			if($i7==0)
			$sql6.=" ".$key6." = '".$val6."'";
			else
			$sql6.=", ".$key6." = '".$val6."'";			
			$i7++;
			}
			
		$sql6 .=" where  ". $field6 ." = ' ". $v6 ." '" ;
		$recordedited = "$chg'$sql')";
		//echo $sql6;  exit;
		$result6=mysql_query($sql6);
		if (!$result6)
		{
			return (1);//error
		}
		else 
		{
			return (0);//not error
		}
		
	}

function GenXml($code)
{
	$query = mysql_fetch_array(mysql_query("select * from pcf_cors where id='".$code."'"));
	$fp = fopen("../xml/".$query["course_code"].".xml","w");
	$content ="<?xml version=\"1.0\"?><QUIZ>";
	$questQuery = mysql_query("select * from tbl_question where course_id='".$code."'");
	if(mysql_num_rows($questQuery) > 0)
	{
		while($rowQuery = mysql_fetch_array($questQuery))
		{
			$content .="<QUESTION>";
			$content .="<TEXT>".$rowQuery['question']."</TEXT>";
			$content .="<CHOICES>".$rowQuery['option1'].", ".$rowQuery['option2'].", ".$rowQuery['option3'].", ".$rowQuery['option4']."</CHOICES>";
			$content .="<ANSWER>".$rowQuery['right_answer']."</ANSWER>";
			$content .="</QUESTION>";
		}
	}
	$content .="</QUIZ>";
	fwrite($fp,$content);
	fclose($fp);
}
// functions for getting result set , count rows and fetch values in associative arrays 

 function getResult($sql) {
  global $conDataLinkString;
  $result=mysql_query($sql) or die(mysql_error()); 
  return $result;
  }

  function getCountRow($result) {
   $numRow=mysql_num_rows($result);
	return $numRow;
  }
  
  function getNextRow($result) {
   $row=mysql_fetch_assoc($result);
	return $row;
  }
  
  function getRecord($result) {
   $row=mysql_fetch_array($result);
	return $row;
  }
  
  
// Function for getting data Sorted
  function getData_with_sorting($table_name, $field_name, $condition)
	{
		$sql="SELECT * FROM $table_name where deleteflag='active' order by $field_name $condition";
		$result=mysql_query($sql);
		return $result;
	}
//for sum amount
function getSumAmount($table_name, $condition)
	{
		$sql="SELECT sum(fee) as totalFee FROM $table_name $condition";
		
		$result=mysql_fetch_assoc(mysql_query($sql));
		
		return $result;
	}
	
	function getpendingAmount($table_name,$condition)
	{
		 $sql=str_replace("where and","where","SELECT sum(fee) as pendingFee FROM $table_name $condition and feeStatus='0'");
		$result=mysql_fetch_assoc(mysql_query($sql));
		
		return $result;
	}
	
	function getReceviedAmount($table_name,$condition2)
	{
     $sql=str_replace("where and","where","SELECT sum(fee) as receviedFee FROM $table_name $condition2 and feeStatus='1'");
	$result=mysql_fetch_assoc(mysql_query($sql));
		
		return $result;
	}

function checkReginalCenter($condition)
	{
		$sql="SELECT * FROM `pcf_reg_cntr` where  user_name = '".$condition."'";
		$result=mysql_query($sql);
		return $result;
	}
function cordinator($val)
	{
		$sql="SELECT * FROM `pcf_reg_cntr` WHERE status='".$val."'";
		
		$result=mysql_query($sql);
		return $result;
	}

// Function for getting data Sorted
  function getDataWithCondition($table_name,  $condition)
	{
		$sql="SELECT * FROM $table_name   $condition";
		$result=mysql_query($sql);
		return $result;
	}
	
  function getDataWithCondition2($table_name2,  $condition2)
	{
		$sql2="SELECT * FROM $table_name2  $condition2";
		$result2=mysql_query($sql2);
		return $result2;
	}
  function getDataWithCondition3($table_name3,  $condition3)
	{
		$sql3="SELECT * FROM $table_name3 where  $condition3";
		$result3=mysql_query($sql3);
		return $result3;
	}

// Function for getting data with out condition.
 function getData_without_condition($table_name, $orderby='1=1', $ase='asc')
	{
		$sql="SELECT * FROM $table_name where  deleteflag='active' order by $orderby $ase";
		$result=mysql_query($sql);
		return $result;
	}
	/*
function getData_without_condition($table_name)
	{
		$sql="SELECT * FROM $table_name ";
		$result=mysql_query($sql);
		return $result;
	}
*/
// Function for getting data with condition.	
  function getData_with_condition($table_name, $field_name, $condition)
	{
	   	$sql="SELECT * FROM $table_name WHERE  $field_name='".$condition."' ";		
		$result=mysql_query($sql);
		return $result;
	}
	
// Function to redirectPage- just pass the Filename
	function javascriptRedirect($filename)
	{
		echo "<SCRIPT LANGUAGE='JavaScript'>window.location='$filename'</SCRIPT>"; 
	}


function ImageUpload($destnation,$filename,$codeupname,$sizeWidth='400', $Givenheight='0')
{

	if ($_FILES[$filename]['name'] !="")
	{
		//$unique_id_query = strtoupper(substr(md5(uniqid(rand(), true)), 0 ,16));
		//$unique_add = $unique_id_query;
		//$unique_name = $codeupname ;
		
		if($_FILES[$filename]["error"] > 0)
		{
  			return -1;		// file error 
		}
		else
 		{
			$img_type = explode(".",$_FILES[$filename]["name"]);
			$imgtype  = strtoupper($img_type[1]);
			$uploadedfile = $_FILES[$filename]['tmp_name'];
		
			if($imgtype == 'JPG' || $imgtype == 'JPEG')
			{
				$src = imagecreatefromjpeg($uploadedfile);
			}
			else if($imgtype == 'PNG')
			{
				$src = imagecreatefrompng($uploadedfile);
			}
			else if($imgtype == 'GIF')
			{
				$src = imagecreatefromgif($uploadedfile);
			}
			else if($imgtype == 'BMP')
			{
				$src = imagecreatefromwbmp($uploadedfile);
			}
			
			list($width,$height)=getimagesize($uploadedfile);
			$newwidth  = $sizeWidth;
			if($Givenheight != '0')
			{
				$newheight = $Givenheight;
			}
			else
			{
				$newheight = ($height/$width)*$newwidth;
			}
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height); 
			$img_name   = $_FILES[$filename]["name"] ;
			$img_name   = $unique_name.$img_name;
			$image_path = $destnation. $img_name;
			$IMGPATH 	= "../".$image_path ;
			//echo $IMGPATH; exit;
			imagejpeg($tmp,$IMGPATH ,100);
			imagedestroy($src);
			imagedestroy($tmp); 
			return $image_path; // returning image name and path 
		}
	}
	else
	{
		return 0; // no file persent 
	}
}
function ImageUpload1($destnation,$filename,$codeupname,$sizeWidth='400', $Givenheight='0')
{
		
	if ($_FILES[$filename]['name'] !="")
	{
		//$unique_id_query = strtoupper(substr(md5(uniqid(rand(), true)), 0 ,16));
		//$unique_add = $unique_id_query;
		$unique_name = $codeupname;
		
		if($_FILES[$filename]["error"] > 0)
		{
  			return -1;		// file error 
		}
		else
 		{
			$img_type = explode(".",$_FILES[$filename]["name"]);
			$imgtype  = strtoupper($img_type[1]);
			$uploadedfile = $_FILES[$filename]['tmp_name'];
		
			if($imgtype == 'JPG' || $imgtype == 'JPEG')
			{
				$src = imagecreatefromjpeg($uploadedfile);
			}
			else if($imgtype == 'PNG')
			{
				$src = imagecreatefrompng($uploadedfile);
			}
			else if($imgtype == 'GIF')
			{
				$src = imagecreatefromgif($uploadedfile);
			}
			else if($imgtype == 'BMP')
			{
				$src = imagecreatefromwbmp($uploadedfile);
			}
			
			list($width,$height)=getimagesize($uploadedfile);
			$newwidth  = $sizeWidth;
			if($Givenheight != '0')
			{
				$newheight = $Givenheight;
			}
			else
			{
				$newheight = ($height/$width)*$newwidth;
			}
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height); 
			$img_name   = $_FILES[$filename]["name"] ;
			$img_name   = $unique_name.'.'.strtolower($imgtype);
			$image_path = $destnation. $img_name; 
			$IMGPATH 	= "../".$image_path ;
			imagejpeg($tmp,$IMGPATH,100);
			imagedestroy($src);
			imagedestroy($tmp); 
			//exit;
			return $img_name; // returning image name and path 
		}
	}
	else
	{
		return 0; // no file persent 
	}
}
function getDateformate($date,$informate='dmy',$formate='ymd',$spliter='-',$symbolChange='-')
{
	
	//And changing the value like y-m-d and m-d-y
	$dateArray  = split($spliter,$date);
	if($informate == 'dmy')
	{
		if($formate == 'ymd')
		{
			$changeDate = $dateArray[2].$symbolChange.$dateArray[1].$symbolChange.$dateArray[0];
			return $changeDate;
		}
		if($formate == 'mdy')
		{
			$changeDate = $dateArray[1].$symbolChange.$dateArray[0].$symbolChange.$dateArray[2];
			return $changeDate;
		}
		if($formate == 'dmy')
		{
			$changeDate = $dateArray[0].$symbolChange.$dateArray[1].$symbolChange.$dateArray[2];
			return $changeDate;
		}
	}
	if($informate == 'mdy')
	{
		if($formate == 'ymd')
		{
			$changeDate = $dateArray[2].$symbolChange.$dateArray[0].$symbolChange.$dateArray[1];
			return $changeDate;
		}
		if($formate == 'mdy')
		{
			$changeDate = $dateArray[0].$symbolChange.$dateArray[1].$symbolChange.$dateArray[2];
			return $changeDate;
		}
		if($formate == 'dmy')
		{
			$changeDate = $dateArray[1].$symbolChange.$dateArray[0].$symbolChange.$dateArray[2];
			return $changeDate;
		}
	}
	if($informate == 'ymd')
	{
		if($formate == 'ymd')
		{
			$changeDate = $dateArray[0].$symbolChange.$dateArray[1].$symbolChange.$dateArray[2];
			return $changeDate;
		}
		if($formate == 'mdy')
		{
			$changeDate = $dateArray[1].$symbolChange.$dateArray[2].$symbolChange.$dateArray[0];
			return $changeDate;
		}
		if($formate == 'dmy')
		{
			$changeDate = $dateArray[2].$symbolChange.$dateArray[1].$symbolChange.$dateArray[0];
			return $changeDate;
		}
	}
}

//*********************************************************************************//
function backup_tables($tables = '*')
{
	//get all of the tables list
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	//save file
	$filePath = "../uploads/File/database_backup/";
	$fileName = ('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql');
	$file	  = $filePath.$fileName;
	$handle   = fopen($file,'w+');
	$sucess	  = fwrite($handle,$return);
	$fileSize = filesize($filePath.$fileName)/1024;
	$fileSize = $fileSize;
	if ($sucess)
	{ 
		// entering the basic details of a file in the table
		$sql 	= "insert into tbl_datadase_backup (db_filename,db_file_path,db_file_size) values ('$fileName','$filePath','$fileSize')";
		$result = mysql_query($sql);
	}
	else
	{ 
		return 0;
	}	
	
	fclose($handle);
}
//*******************************************************************************//
//*******************************************************************************//
// Download Code
	function output_file($file, $name, $mime_type='')
	{
		
		if(!is_readable($file)) die('File not found or inaccessible!');
		 
		$size = filesize($file);
		$name = rawurldecode($name);
		 
		/* Figure out the MIME type (if not specified) */
		$known_mime_types=array(
		"pdf" => "application/pdf",
		"sql" => "text/plain",
		"txt" => "text/plain",
		"html" => "text/html",
		"htm" => "text/html",
		"exe" => "application/octet-stream",
		"zip" => "application/zip",
		"doc" => "application/msword",
		"xls" => "application/vnd.ms-excel",
		"ppt" => "application/vnd.ms-powerpoint",
		"gif" => "image/gif",
		"png" => "image/png",
		"jpeg"=> "image/jpg",
		"jpg" =>  "image/jpg",
		"php" => "text/plain"
		);
		 
		if($mime_type=='')
		{
			$file_extension = strtolower(substr(strrchr($file,"."),1));
			if(array_key_exists($file_extension, $known_mime_types))
			{
				$mime_type=$known_mime_types[$file_extension];
				
			} 
			else 
			{
				$mime_type="application/force-download";
			}
		}
		 
		@ob_end_clean(); //turn off output buffering to decrease cpu usage
		 
		// required for IE, otherwise Content-Disposition may be ignored
		if(ini_get('zlib.output_compression'))
		ini_set('zlib.output_compression', 'Off');
		 
		header('Content-Type: ' . $mime_type);
		header('Content-Disposition: attachment; filename="'.$name.'"');
		header("Content-Transfer-Encoding: binary");
		header('Accept-Ranges: bytes');
		 
		/* The three lines below basically make the 
		download non-cacheable */
		header("Cache-control: private");
		header('Pragma: private');
		header("Expires: Mon, 5 Jun 2019 05:00:00 GMT");
		 
		// multipart-download and download resuming support
		if(isset($_SERVER['HTTP_RANGE']))
		{
		list($a, $range) = explode("=",$_SERVER['HTTP_RANGE'],2);
		list($range) = explode(",",$range,2);
		list($range, $range_end) = explode("-", $range);
		$range=intval($range);
		if(!$range_end) {
		$range_end=$size-1;
		} else {
		$range_end=intval($range_end);
		}
		 
		$new_length = $range_end-$range+1;
		header("HTTP/1.1 206 Partial Content");
		header("Content-Length: $new_length");
		header("Content-Range: bytes $range-$range_end/$size");
		} else {
		$new_length=$size;
		header("Content-Length: ".$size);
		}
		 
		/* output the file itself */
		$chunksize = 3*(1024*1024); //you may want to change this
		$bytes_send = 0;
		if ($file = fopen($file, 'r'))
		{
		if(isset($_SERVER['HTTP_RANGE']))
		fseek($file, $range);
		 
		while(!feof($file) && 
		(!connection_aborted()) && 
		($bytes_send<$new_length)
		)
		{
		$buffer = fread($file, $chunksize);
		print($buffer); //echo($buffer); // is also possible
		flush();
		$bytes_send += strlen($buffer);
		}
		fclose($file);
		} else die('Error - can not open file.');
		 
		die();
	}	
	 
//*******************************************************************************//
// pagenation code function
function getData_withPages($table_name, $orderby='1=1', $ase='asc',$from='1=1', $max_results='10',$searchRecord='1=1' )
	{
	 	$sql	= "SELECT * FROM $table_name where  $searchRecord order by $orderby $ase LIMIT $from, $max_results";
		$result = mysql_query($sql);
		return $result;
	}
	// pagenation code function with two table
function getData_withPageswitth_two_table($table_name, $orderby='1=1', $ase='asc',$from='1=1', $max_results='10',$searchRecord='1=1',$condition )
	{
	 	$sql	= "SELECT * FROM $table_name ,tbl_aulbum where tbl_banner.aulbum_id=tbl_aulbum.aulbum_id and tbl_banner.aulbum_id =$condition and tbl_banner.banner_type!='album' and $searchRecord order by $orderby $ase LIMIT $from, $max_results";
		$result = mysql_query($sql);
		return $result;
		
		//echo $sql;
		///exit;
	}
// code for getting the no of pages  
function getTotal_pages($table_name, $orderby='1=1',$ase='asc',$max_results='1=1', $searchRecord='1=1')
{
		//echo "SELECT COUNT(*) as Num FROM $table_name where  $searchRecord  order by $orderby $ase";
		$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM $table_name where  $searchRecord  order by $orderby $ase"),0); 
	$total_pages = ceil($total_results / $max_results); 
	return $total_pages;
}	
//this function add n no. of days in current date 
function datePlus($days)
{
	$year  = date('Y');  
	$month = date('m');
	$date  = date('d');
	$dateCode[1] = 31 ;
	$dateCode[3] = 31;
	$dateCode[4] = 30;
	$dateCode[5] = 31;
	$dateCode[6] = 30;
	$dateCode[7] = 31;
	$dateCode[8] = 31;
	$dateCode[9] = 30;
	$dateCode[10] = 31;
	$dateCode[11] = 30;
	$dateCode[12] = 31;
	$datetotal = $date + $days;
	
	while($datetotal > $dateCode[$month])
	{
		$month++;
		if($year % 4 == 0)
		{
			$dateCode[2] =29;
		}
		else
		{
			$dateCode[2] =28;
		}
	
		if($month > 12)
		{
			$month = 1;
			$year  = $year + 1;
		}
		$datetotal = $datetotal - $dateCode[$month];
	}
	
	$completeDate = $year."-".$month."-".$datetotal;
	return $completeDate;
}
//**************************************************************************************//
//function for special price
function calSpecial_price( $proid, $proprice,$Mtye)
{
 	$sql_special = "select * from tbl_product_special where deleteflag='active' and id = $proid and type = '$Mtye'";
	//echo $sql_special ;
	//exit();
	$rs_special  = mysql_query($sql_special);
	if(mysql_num_rows($rs_special)>0)
	{
		$row_special = mysql_fetch_object($rs_special);
		if($row_special->special_type=='percentage')
		{
			$percent_price = ($proprice * $row_special->specials_value)/100;
			$final_price   = $proprice - $percent_price;
			return $final_price;
		}
		else if($row_special->special_type == 'amount')
		{
			$final_price   = $proprice - $row_special->specials_value;
			return $final_price;
		}
	}
	else
	{
		return 0;
	}
}
//**************************************************************************************//
// fetch data from general config table
	function fetchGeneral_config($valueType)
	{
		// to get the logo ----------------- StoreLogo

		// to get the display title -------- displayTitle
		// To Get Tax Location ------------- TaxLocation
		//Stock Enable or Not -------------- stock
		//Max Product Special on home page - special
		//store name ----------------------- store
		//admin email ---------------------- admin
		//order email ---------------------- order
		//customer support eamil ----------- support
		//general contact ------------------ info
		//large image width ---------------- largeimg
		//medium image width --------------- mediumimg
		//small image width ---------------- smallimg
		//shopcatr status ------------------ shopcart
		//max product on page -------------- maxpropage
		// min cols on page ---------------- mincolpage
		
		$sql_mail = "select * from tbl_general_configuraction where deleteflag='active'";
		$rs_mail  =  mysql_query($sql_mail);
		if(mysql_num_rows($rs_mail)>0)
		{
			$row_mail = mysql_fetch_object($rs_mail);
			if($valueType == "StoreLogo")
			{
				return $row_mail->store_logo;
			}
			if($valueType == "address")
			{
				return $row_mail->store_address;
			}
			if($valueType == "displayTitle")
			{
				return $row_mail->display_title;
			}
			if($valueType == "stock")
			{
				return $row_mail->stock_manager;
			}
			if($valueType == "special")
			{
				return $row_mail->max_pro_special;
			}
			if($valueType == "store")
			{
				return $row_mail->store_name;
			}
			else if($valueType == "admin")
			{
				return $row_mail->admin_email;
			}
			else if($valueType == "order")
			{
				return $row_mail->order_email;
			}
			else if($valueType == "support")
			{
				return $row_mail->customer_support__email;
			}
			else if($valueType == "info")
			{
				return $row_mail->gen_contact_email;
			}
			else if($valueType == "TaxLocation")
			{
				return $row_mail->tax_location;
			}
			else if($valueType == "largeimg")
			{
				return $row_mail->large_img_width;
			}
			else if($valueType == "mediumimg")
			{
				return $row_mail->medium_img_width;
			}
			else if($valueType == "smallimg")
			{
				return $row_mail->small_img_width;
			}
			else if($valueType == "maxpropage")
			{
				return $row_mail->max_product_on_page;
			}
			else if($valueType == "mincolpage")
			{
				return $row_mail->min_col_on_page;
			}
			else if($valueType == "shopcart")
			{
				return $row_mail->shopcart_status;
			}
			else
			{
				return "error";
			}
		}
		else 
		{
			return "error";
		}	
	}
// This function return State Name

function StateName($STvalue)
{
	if(is_numeric($STvalue))
	{
		$sqlState = "select * from tbl_zones where zone_id = '$STvalue' and deleteflag = 'active'";
		$rsState  = mysql_query($sqlState);
		$rowState = mysql_fetch_object($rsState);
		$state	  = $rowState->zone_name;
	}
	else
	{
		$state = $STvalue;
	}
	return ucfirst($state);
}
// this function is return the country name

function CountryName($IdValue)
{
	if(is_numeric($IdValue))
	{
		$sqlCountry = "select * from tbl_country where country_id = '$IdValue' and deleteflag = 'active'";
		$rsCountry  = mysql_query($sqlCountry);
		$rowCountry = mysql_fetch_object($rsCountry);
		$country	= $rowCountry->country_name;
	}
	else
	{
		$country 	= $IdValue;
	}
	return ucfirst($country);
}


	function order_gen_info($pcode)
	{
		$sql = "select orders_id, order_type, date_ordered, orders_status, orders_date_finished from tbl_order where deleteflag='active' and orders_id='$pcode'";
		$rs	 = mysql_query($sql); 
		echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='tblBorder'>";
		if(mysql_num_rows($rs)>0)
		{
			$row = mysql_fetch_object($rs);
			echo "<tr class='pagehead'> <td colspan='3' class='pad'>";
			echo $row->order_type;
			echo ": $pcode  (Order confirmation email sent)</td> </tr>";
			echo "<tr class='text'> <td width='30%' class='pad'>Order Status </td><td>: &nbsp;</td><td> $row->orders_status</td></tr>";
			echo "<tr class='text'> <td width='30%' class='pad'>Ordered Date</td><td>: &nbsp;</td><td width='68%'>". $this->getDateformate($row->date_ordered,'ymd','mdy','-') ."</td> </tr>";
			echo "<tr class='text'> <td width='30%' class='pad'>Order Finished Date </td><td>: &nbsp;</td> <td width='68%'> $row->orders_date_finished </td></tr>";
		}
		else
		{
			echo "<tr class='text'><td colspan='2' class='redstar'> &nbsp; No record present in database</td></tr>";
		}
		echo "</table>";
	}

// This Display Customer Information
	function order_account_info($pcode)
	{
		echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='tblBorder'>";
		echo "<tr class='pagehead'> <td colspan='3' class='pad'>Account Information </td></tr>";
		$sql = "select * from tbl_order where  order_id='$pcode'";
		$rs  = mysql_query($sql); 
		if(mysql_num_rows($rs)>0)
		{
			$row = mysql_fetch_object($rs);
			
			echo "<tr class='text'><td width='32%' class='pad'>Customer Name </td><td>: &nbsp;</td><td width='66%'>".ucfirst($row->firstname)."&nbsp;".ucfirst($row->lastname)." </td></tr>";
			echo "<tr class='text'> <td class='pad'>Email</td><td>: &nbsp;</td><td> $row->email</td></tr>";
		}
		else
		{
			echo "<tr class='text'><td colspan='2' class='redstar'> &nbsp; No record present in database</td></tr>";
		}
		echo "</table>";
	}
// This function shows billing address
	function order_billing_address($pcode)
	{
		echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='tblBorder'>";
		echo "<tr class='pagehead'><td colspan='3' class='pad'>Billing Address</td></tr>";
		$sql = "select * from tbl_order where  order_id='$pcode'";
		$rs  = mysql_query($sql); 
		
		if(mysql_num_rows($rs)>0)
		{
			$row = mysql_fetch_object($rs);
	
			echo "<tr class='text'><td width='30%' class='pad'>Name</td><td>: &nbsp;</td><td width='68%'>".ucfirst($row->firstname)."&nbsp;".ucfirst($row->lastname)."</td></tr>";
			echo "<tr class='text'><td class='pad' valign='top'>Street Address</td><td valign='top'>: &nbsp;</td><td>".nl2br($row->address1)."<br>".nl2br($row->address2)."</td></tr>";
			echo "<tr class='text'><td class='pad'>City</td><td>: &nbsp;</td><td>$row->city</td></tr>";
			echo "<tr class='text'><td class='pad'>State/Province</td><td>: &nbsp;</td><td>".$this->StateName($row->state)."</td></tr>";
			echo "<tr class='text'><td class='pad'>Country</td><td>: &nbsp;</td><td>".$this->CountryName($row->country)."</td>";
			echo "<tr class='text'><td class='pad'>Zip/Postal Code</td><td>: &nbsp;</td><td>$row->zip</td></tr>";
			echo "<tr class='text'><td class='pad'>Telephone No.</td><td>: &nbsp;</td><td>$row->phone</td></tr>";

		}
		else
		{
			echo "<tr class='text'><td colspan='2' class='redstar'> &nbsp; No record present in database</td></tr>";
		}
		echo "</table>";
	}
/// This function use to move location
	function pageLocation($filename)
	{
		echo "<SCRIPT LANGUAGE='JavaScript'>window.location='$filename'</SCRIPT>"; 
	}
	////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////// This function use to export data in to .xls file 
	function ExcelExpo($query)
	{
		include("fls_dbCn.php");
		$excel=new Sql2Excel( $dataServer,$dataUser,$dataPassword,$dataDBName);
		$excel->ExcelOutput($query);
	}
	function ZoneRole($STvalue)
{
	if(is_numeric($STvalue))
	{
		$sqlzone = "select * from tpl_zone_roles where roleid 	 = '$STvalue' ";
		$rszone  = mysql_query($sqlzone);
		$rowzone = mysql_fetch_object($rszone);
		$Role_name	  = $rowzone->Role_name;
	}
	else
	{
		$Role_name = $STvalue;
	}
	return ucfirst($Role_name);
}

	function ZoneName($STvalue)
{
	if(is_numeric($STvalue))
	{
		$sqlzone = "select * from tpl_addzones where 	zone_id 	 = '$STvalue' ";
		$rszone  = mysql_query($sqlzone);
		$rowzone = mysql_fetch_object($rszone);
		$zone_name	  = $rowzone->zone_name;
	}
	else
	{
		$zone_name = $STvalue;
	}
	return ucfirst($zone_name);
}


//-----------------------------------------------------------------
	function CountSatesTeamById($STvalue,$roletype)
{
	if(is_numeric($STvalue))
	{
 	$sqlzone = "select count(zone_mid) as tot from tpl_zone_team where AddedBy  = '$STvalue' and jobposition='$roletype' 	 	 ";
	$rszone  = mysql_query($sqlzone);
	$rowzone = mysql_fetch_object($rszone);
	$zone_mid	  = $rowzone->tot;
	}
	else
	{
		$zone_mid = $STvalue;
	}
	
	
	return ($zone_mid);
}
function UploadFile($destnation,$filename,$codeupname)
{
	if ($_FILES[$filename]['name'] !="")
	{
		$unique_id_query = strtoupper(substr(md5(uniqid(rand(), true)), 0 ,16));
		$unique_add = $unique_id_query;
		$unique_name = $codeupname.$unique_add ;
		
		if($_FILES[$filename]["error"] > 0)
		{
  			return -1;		// file error 
		}
		else
 		{
			$temp_name = $_FILES[$filename]["tmp_name"];
			if(move_uploaded_file($temp_name,"../".$destnation.$unique_name.$_FILES[$filename]['name']))
			{
				return $destnation.$unique_name.$_FILES[$filename]['name'];
			}
			else
			{
				return -1;
			}
		}
	}
	else
	{
		return 0; // no file persent 
	}
}
function ImageUploadMulti($destnation,$filename,$codeupname,$i,$sizeWidth='400')
{	if ($_FILES[$filename]['name'][$i] !="")
	{
		$unique_id_query =strtoupper(substr(md5(uniqid(rand(), true)), 0 ,16));
		$unique_add = $unique_id_query;
		$unique_name = $codeupname.$unique_add ;
		
		if($_FILES[$filename]["error"][$i] > 0)
		{
			
  			return -1;		// file error 
		}
		else
 		{
  	 		$uploadedfile = $_FILES[$filename]['tmp_name'][$i];
			$img_type = explode(".",$_FILES[$filename]["name"][$i]);
			$imgtype  = strtoupper($img_type[1]); 
			if($imgtype == 'JPG' || $imgtype == 'JPEG')
			{
				$src = imagecreatefromjpeg($uploadedfile);
			}
			else if($imgtype == 'PNG')
			{
				$src = imagecreatefrompng($uploadedfile);
			}
			else if($imgtype == 'GIF')
			{
				$src = imagecreatefromgif($uploadedfile);
			}
			else if($imgtype == 'BMP')
			{
				$src = imagecreatefromwbmp($uploadedfile);
			}
			//$src = imagecreatefromjpeg($uploadedfile);
			list($width,$height)=getimagesize($uploadedfile);
			$newwidth  = $sizeWidth;
			$newheight = ($height/$width)*$newwidth;
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height); 
			$img_name   = $_FILES[$filename]["name"][$i];
			$img_name   = $unique_name.$img_name;
			$image_path = $destnation. $img_name;
			$IMGPATH 	= "../".$image_path ;
			imagejpeg($tmp,$IMGPATH, 100);
			imagedestroy($src);
			imagedestroy($tmp); 
			return $image_path;
  		}
	}
	else
	{
		return 0; // no file persent 
	}
}
	function deletPerma_table_withCondition($table_name, $field_name, $condition)
	{	
		$sql="DELETE  FROM $table_name WHERE $field_name='".$condition."' "; 
		return   $x = mysql_query($sql) ;
		
	}	
	function getCatIDByCatname($name)
	{
		$sql="select *   FROM $table_name WHERE cate_name='".$name."' and deleteflag='active' and cate_status='active'"; 
		$rsCat = mysql_query($sql) ;
		if(mysql_num_rows($rsCat) > 0)
		{
			$rowCat	= mysql_fetch_object($rsCat);
			return $rowCat->cate_id;
		}
	}
		function selectWhere($table, $query, $star = '*')
	{
		$sql = "select $star from $table where $query";
		//echo $sql;
		//exit(); 
		$rs  = mysql_query($sql);
		return $rs;
	}
	function deleteAll($pcode, $empty = false) 
		{
				//echo "select * from tbl_aulbum where aulbum_id  = '".$pcode."'";
				$query = mysql_fetch_array(mysql_query("select * from tbl_aulbum where aulbum_id  = '".$pcode."'"));
				 $directory = "../uploads/".$query['aulbum_alias']; 
				if(substr($directory,-1) == "/") {
					$directory = substr($directory,0,-1);
				}
			
				if(!file_exists($directory) || !is_dir($directory))
						 {
					return false;
				} elseif(!is_readable($directory)) {
					return false;
				} else {
					$directoryHandle = opendir($directory);
				   
					while ($contents = readdir($directoryHandle)) {
						if($contents != '.' && $contents != '..') {
							$path = $directory . "/" . $contents;
						   
							if(is_dir($path)) {
								deleteAll($path);
							} else {
								unlink($path);
							}
						}
					}
				   
					closedir($directoryHandle);
			
					if($empty == false) {
						if(!rmdir($directory)) {
							return false;
						}
					}
				   
					return true;
				  }
			} 
function createrandomname()
		 { 
					$chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
					srand((double)microtime()*1000000); 
					$i = 0; 
					$pass = '' ; 
				
					while ($i <= 40) { 
						$num = rand() % 33; 
						$tmp = substr($chars, $num, 1); 
						$pass = $pass . $tmp; 
						$i++; 
					} 
					return $pass; 
		} 
function getData_without_any_condition($table_name)
		{
				$sql="SELECT * FROM $table_name ";
				
				$result=mysql_query($sql);
				return $result;
		}
function getData_conditional($table_name , $whereClause)
		{
			
			   $sql="SELECT * FROM $table_name where $whereClause ";
				
				$result=mysql_query($sql);
				
				return $result;
		}

function getExtension($str) 
		{
				$i = strrpos($str,".");
				if (!$i) { return ""; }
				$l = strlen($str) - $i;
				$ext = substr($str,$i+1,$l);
				return $ext;
		}

//remove directory with sub folder and files 

function recursive_remove_directory ( $base )
{
$base = array ( $base );

// delete directory container

$maps = array ();

while ( ! empty ( $base ) )
{
$next = array_pop ( $base );

foreach ( glob ( $next . '*' ) AS $item )
{
if ( ! is_dir ( $item ) )
{
/* remove each file */

unlink ( $item );
}
else
{
/* add the directory so we look in it */

$base[] = $item . '/';

/* keep directories, working backwards */

array_unshift ( $maps, $item . '/' );
}
}
}

/* we cleared the directories, now remove the directories */

array_map ( 'rmdir', $maps );
}
//end Tarun Kumar class	

}



$s = new myclass();
$s->conn();

  
?>