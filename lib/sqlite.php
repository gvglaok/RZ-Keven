<?php 
	/**
	* sqlite helper
	* 
	class sqliteHelp extends SQLite3
	{
		
		function __construct()
		{
			$this->open('../bd/bd.db');
		}
	}
	*/
	/*$db=new sqliteHelp();
	if(!db){
		echo $db->lastErrorMsg();
	} else {
		echo "success!!!";
	}
	$tsql="SELECT * from brain";
	//EOF;
	$res=$db->query($tsql);
	while ($row=$res->fetchArray(SQLITE3_ASSOC)) {
		echo "ID:".$row['id']."\n";
		echo "Key:".$row['mykey']."\n";
	}
	$sqlOpen=sqlite_open('../bd/bd.db');*/
	$dbhandle = sqlite_open('../bd/bd.db');
	$sqlsql='SELECT main.brain.id, main.brain.mykey,main.brain.res FROM main.brain';
	$result = sqlite_array_query($dbhandle, $sqlsql, SQLITE_ASSOC);
	foreach ($result as $entry) {
    echo 'ID: ' . $entry['id'] . '  Mykey: ' . $entry['mykey'].'\n';
}


?>
