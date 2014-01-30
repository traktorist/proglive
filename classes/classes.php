<?php

class Article {
	var $id;
	var $subject;
	var $content;

    // 3. Для всех типов статей добавить новый атрибут: $preview. В нём будет храниться короткое описание статьи, полученное из первых 15 символов содержимого статьи. Сделать так, чтобы при создании экземпляров статей этот атрибут заполнялся данными автоматически.
    var $preview;
	
	function __construct($id, $subject, $content) {
		$this->id = $id;
		$this->subject = $subject;
		$this->content = $content;

        // 3. Для всех типов статей добавить новый атрибут: $preview. В нём будет храниться короткое описание статьи, полученное из первых 15 символов содержимого статьи. Сделать так, чтобы при создании экземпляров статей этот атрибут заполнялся данными автоматически.
        $this->preview = mb_substr($content, 0, MAX_SYMBOL_PREVIEW, ENCODING);
	}
	
	//  Функция для вывода статьи
	function view() {
		echo "<h1>$this->subject</h1><p>$this->content</p>";
	}
}

class NewsArticle extends Article {
	var $datetime;

	function __construct($id, $subject, $content) {
		parent::__construct($id, $subject, $content);
		$this->datetime = time();
	}
	
	//  Функция для вывода статьи
	function view() {
		echo "<h1>$this->subject</h1><span style='color: red'>" .
				strftime('%d.%m.%y', $this->datetime) .
				" <b>Новость</b></span><p>$this->content</p>";
	}
}

class CrossArticle extends Article {
	var $source;
	
	function __construct($id, $subject, $content, $source) {
		parent::__construct($id, $subject, $content);
		$this->source = $source;
	}

	function view() {
		parent::view();
		echo '<small>' . $this->source . '</small>';
	}
}

// 2. Создать потомка класса Article, который будет отвечать за статьи, у которых есть прикреплённое изображение. Создать несколько таких статей и добавить в существующий список (экземпляр класса ArticleList).
class AttachArticle extends Article {
    var $attach;

    function __construct($id, $subject, $content, $attach) {
        parent::__construct($id, $subject, $content);
        $this->attach = $attach;
    }

    function view() {
        parent::view();
        echo '<small>' . $this->attach . '</small>';
    }
}

class ArticleList {
	var $alist;
	
	function add(Article $article) {
		$this->alist[] = $article;
	}
	
	//  Вывод статей
	function view() {
		foreach($this->alist as $article) {
			$article->view();
			echo '<hr /><br />';
		}
	}
}

?>
