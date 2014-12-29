<?php
defined('_JEXEC') or die;

abstract class mod_tutorialsHelper
{
	public static function getList(&$params)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('title, id, url');
		$query->from('#__tutorial');
		$query->order('id DESC');
		$db->setQuery($query, 0, $params->get('count', 5));

		try
		{
			$results = $db->loadObjectList();
		}
		catch (RuntimeException $e)
		{
			JError::raiseError(500, $e->getMessage());
			return false;
		}

		foreach ($results as $k => $result)
		{
			$results[$k] = new stdClass;
			$results[$k]->title = htmlspecialchars( $result->title );
			$results[$k]->id = (int)$result->id;
			$results[$k]->url = $result->url;
		}

		return $results;
	}
}