<?php

class Article {
	protected $id;
    protected $subject;
    protected $content;

    // 3. Для всех типов статей добавить новый атрибут: $preview. В нём будет храниться короткое описание статьи, полученное из первых 15 символов содержимого статьи. Сделать так, чтобы при создании экземпляров статей этот атрибут заполнялся данными автоматически.
    private $preview;

	public function __construct($id, $subject, $content) {
		$this->id = $id;
		$this->subject = $subject;
		$this->content = $content;

        // 3. Для всех типов статей добавить новый атрибут: $preview. В нём будет храниться короткое описание статьи, полученное из первых 15 символов содержимого статьи. Сделать так, чтобы при создании экземпляров статей этот атрибут заполнялся данными автоматически.
        $this->preview = mb_substr($content, 0, MAX_SYMBOL_PREVIEW, ENCODING);
	}

	//  Функция для вывода статьи
    public function view() {
		echo "<h1>$this->subject</h1><p>$this->content</p>";
	}
}

class NewsArticle extends Article {
    private $datetime;

    public function __construct($id, $subject, $content) {
		parent::__construct($id, $subject, $content);
		$this->datetime = time();
	}

	//  Функция для вывода статьи
    public function view() {
		echo "<h1>$this->subject</h1><span style='color: red;'>" .
				strftime('%d.%m.%y', $this->datetime) .
				" <b>Новость</b></span><p>$this->content</p>";
	}
}

class CrossArticle extends Article {
    private $source;

    public function __construct($id, $subject, $content, $source) {
		parent::__construct($id, $subject, $content);
		$this->source = $source;
	}

    public function view() {
		parent::view();
		echo '<small>' . $this->source . '</small>';
	}
}

// 2. Создать потомка класса Article, который будет отвечать за статьи, у которых есть прикреплённое изображение. Создать несколько таких статей и добавить в существующий список (экземпляр класса ArticleList).
class AttachArticle extends Article {
    private $attach;

    public function __construct($id, $subject, $content, $attach) {
        parent::__construct($id, $subject, $content);
        $this->attach = $attach;
    }

    public function view() {
        parent::view();
        echo '<small style="color: blue;">' . $this->attach . '</small>';
    }
}

class ArticleList {
    protected $article_list = array();

    public function add(Article $article) {
		$this->article_list[] = $article;
	}

	//  Вывод статей
    public function view() {
		foreach($this->article_list as $article) {
			$article->view();
			echo '<hr /><br />';
		}
	}

    public function get_atricle_list() {
        return $this->article_list;
    }

    // 5. В класс ArticleList добавить метод, который будет удалять из списка статью по её идентификатору (атрибут $id)
    public function delete($id) {
        $i = 0;
        foreach($this->article_list as $article) {
            if ($article->id == $id) {
                unset($this->article_list[$i]);
                break;
            }
            $i++;
        }
    }
}

// 4. Создать потомок класса ArticleList, который будет выводить статьи в обратном порядке. А не в том, в котором статьи были добавлены.
class ReverseArticleList {
    private $reverse_article_list = array();

    public function __construct(ArticleList $article_list) {
        $this->reverse_article_list = array_reverse($article_list->get_atricle_list());
    }

    public function view() {
        foreach($this->reverse_article_list as $article) {
            $article->view();
            echo '<hr /><br />';
        }
    }
}

// 4. Создать потомок класса ArticleList, который будет выводить статьи в обратном порядке. А не в том, в котором статьи были добавлены.
class AltReverseArticleList extends ArticleList {
    public function view() {
        foreach(array_reverse($this->article_list) as $article) {
            $article->view();
            echo '<hr /><br />';
        }
    }
}

?>
