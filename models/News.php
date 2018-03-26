<?php 

include_once ROOT .'/components/Db.php';


class News {

	/**
	* Returns single news item with specified id 
	* param integer id
	*/

	public static function getNewsItemById($id) {

		$id = intval($id);
		// DB request
		if ($id) {

		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM news WHERE id=' .$id);

		//$result->setFetchMode(PDO::FETCH_NUM);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$newsItem = $result->fetch();

		return $newsItem;
		}

	} 


	/**
	return all array of news items
	*/

	public static function getNewsList() {
	
	// DB request
	$db = Db::getConnection();

	$newsList = array();

	$result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10');

	$i = 0;

	while($row = $result->fetch()) {
		$newsList[$i]['id'] = $row['id'];
		$newsList[$i]['title'] = $row['title'];
		$newsList[$i]['date'] = $row['date'];
		$newsList[$i]['short_content'] = $row['short_content'];
		$i++;
	}

	return $newsList;
	}

}

?>