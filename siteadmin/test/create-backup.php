<?php
include("../config/config.inc.php");
if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}
	$accesstoid = $_REQUEST['accesstoid'];
  $filename = DATABASE_NAME4BKUP . '_' . date('YmdHis') . '.sql';
  $backup_file = 'db_backup/' .$filename;
    $fp = fopen($backup_file, 'w');
    $schema = '# Database Backup for ' . WEBSITE_NAME . "\n" .
              '# Database Server: ' . "localhost" . "\n" .
			  '# ' . "\n" .
              '# Backup Date: ' . date('Y-m-d :: H:i:s');
	fputs($fp, $schema);
	$sqltables = "SHOW TABLES";
	$restables = $dbquery->query($sqltables) or die('Error11: ' . $dbquery->error());
	if(($restables->num_rows)>0)
	{
		while($rowtables = $restables->fetch_row())
		{
			$tables = $rowtables[0];
			$tbl=$tables;
			$schema = "\n\n" . 'drop table if exists ' . $tbl . ';' . "\n" .
						'create table ' . $tbl . ' (' . "\n";
			$table_list = array();
			$sql="show fields from ".$tbl;
			$field_query= $dbquery->query($sql) or die('Error: ' . $dbquery->error());
			while ($fields = $field_query->fetch_array())
			{
				$table_list[] = $fields['Field'];
				$schema .= '  ' . $fields['Field'] . ' ' . $fields['Type'];
				if (strlen($fields['Default']) > 0) $schema .= ' default \'' . $fields['Default'] . '\'';
				if ($fields['Null'] != 'YES') $schema .= ' not null';
				if (isset($fields['Extra'])) $schema .= ' ' . $fields['Extra'];
				$schema .= ',' . "\n";
			}
			$schema = ereg_replace(",\n$", '', $schema);
			// add the keys
			$index = array();
			$sql="show keys from ". $tbl;
			$keys_query = $dbquery->query("show keys from " . $tbl);
			while ($keys = $keys_query->fetch_array())
			{
				$kname = $keys['Key_name'];
				if (!isset($index[$kname]))
				{
					$index[$kname] = array('unique' => !$keys['Non_unique'],
										 'columns' => array());
				}
				$index[$kname]['columns'][] = $keys['Column_name'];
			}
			while (list($kname, $info) = each($index))
			{
				$schema .= ',' . "\n";
				$columns = implode($info['columns'], ', ');
				if ($kname == 'PRIMARY') {
				  $schema .= '  PRIMARY KEY (' . $columns . ')';
				} elseif ($info['unique']) {
				  $schema .= '  UNIQUE ' . $kname . ' (' . $columns . ')';
				} else {
				  $schema .= '  KEY ' . $kname . ' (' . $columns . ')';
				}
			}

			$schema .= "\n" . ');' . "\n\n";
			fputs($fp, $schema);
			  
			// dump the data
			$rows_query = $dbquery->query("select " . implode(',', $table_list) . " from " . $tbl);
			while ($rows = $rows_query->fetch_array())
			{
				$schema = 'insert into ' . $tbl . ' (' . implode(', ', $table_list) . ') values (';

				reset($table_list);
				$i=1;
				while (list(,$i) = each($table_list)) {
				  if (!isset($rows[$i])) {
					$schema .= 'NULL, ';
				  } elseif (isset($rows[$i])) {
					$row = addslashes($rows[$i]);
					$row = ereg_replace("\n#", "\n".'\#', $row);
					$schema .= '\'' . $row . '\', ';
				  } else {
					$schema .= '\'\', ';
				  }
				}
				$schema = ereg_replace(', $', '', $schema) . ');' . "\n";
				fputs($fp, $schema);
			}
		}// end outer while loop
	}
	fclose($fp);
	//$backupname = DATABASE_NAME4BKUP . '_' . date('YmdHis') . '.sql';
	$backupdate = date('Y-m-d H:i:s');
	$sqlins = "INSERT INTO tbl_backup(fld_backupname, fld_date)values('$filename', '$backupdate')";
	$rsins = $dbquery->query($sqlins) or die("backup Error:". $dbquery->error);

	##History Add
	$dispedit = $arradmaccess[$accesstoid]["description"];
	$actiondesc = ' by ' . fnUserName($dbquery,$_SESSION['AID']); 
	include('user-history.php');

	echo "<script>document.location.href='db_backup.php?msgupd=1';</script>";
?>