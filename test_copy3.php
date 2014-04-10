<?php
echo "startinggg";
if(DB::connection()->getDatabaseName())
{
   echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
}else{
	echo "no connection";
}
// $test = DB::table('logs')
// 			->where('uuid','00000000-0000-0000-0000-0025908693ec')
// 			->get();
// echo $test;
echo "run...";
?>