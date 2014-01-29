<?php

class Article
{
	var $id;
	var $title;
	var $content;
	
	function Article($id, $title, $content)
	{
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
	}
	
	//  Функция для вывода статьи
	function view()
	{
		echo "<h1>$this->title</h1><p>$this->content</p>";
	}
}

class NewsArticle extends Article
{
	var $datetime;

	function NewsArticle($id, $title, $content)
	{
		parent::Article($id, $title, $content);
		$this->datetime = time();
	}
	
	//  Функция для вывода статьи
	function view()
	{
		echo "<h1>$this->title</h1><span style='color: red'>".
				strftime('%d.%m.%y', $this->datetime).
				" <b>Новость</b></span><p>$this->content</p>";
	}
}

class CrossArticle extends Article
{
	var $source;
	
	function CrossArticle($id, $title, $content, $source)
	{
		parent::Article($id, $title, $content);
		$this->source = $source;
	}

	function view()
	{
		parent::view();
		echo '<small>'.$this->source.'</small>';
	}
}

class ArticleList
{
	var $alist;
	
	function add(Article $article)
	{
		$this->alist[] = $article;
	}
	
	//  Вывод статей
	function view()
	{
		foreach($this->alist as $article)
		{
			$article->view();
			echo '<hr />';
		}
	}
}
?>