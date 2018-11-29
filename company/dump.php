<?php 
include ('dumper.php');

try {

	// dump the database to plain text file
	 
	 
	$countries_dumper = Shuttle_Dumper::create(array(
		'host' => 'localhost',
		'username' => 'camre',
		'password' => 'camre',
		'db_name' => 'campus_recruitment',
		'include_tables' => array('com_sel'), // only include those tables
	));
	$countries_dumper->dump('students_dump.sql.gz');
	$countries_dumper->dump('students_dump.sql');


} catch(Shuttle_Exception $e) {
	echo "Couldn't dump database: " . $e->getMessage();
}