<?php
/**
* Article model
*/
class Article extends Illuminate\Database\Eloquent\Model
{
	public $timestamps = false;

	// mysqli操作数据库
	public static function findAll() {
		$connect = mysqli_connect("localhost", 'root', '', 'tour') or die('连接失败'.mysqli_connect_error());
		mysqli_query($connect,"set names utf8");
		$query = mysqli_query($connect, "select * from tr_datas limit 0,15");
    	if(mysqli_num_rows($query) > 0) {
    		while($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
    		}
    		return $result;
    	}
		mysqli_close($connect);
	}
}