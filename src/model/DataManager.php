<?php
namespace App\src\model;

class DataManager{
	private $_id,
			$_title,
			$_content,
			$_author,
			$_comment,
			$_post_id;


	/*public function __construct(array $data){
		$this->hydrate($data);
	}

	public function hydrate(array $data){
		foreach($data as $key => $value)
		{
			$method = 'set' . ucfirst($key);
			if(method_exists($this, $method))
				$this->$method($value);
		}
	}
*/
	//Setters
	public function setId($id){
		$this->_id = (int) $id;
	}

	public function setTitle($title){
		if(is_string($title))
			$this->_title = $title;
	}

	public function setContent($content){
		if(is_string($content))
			$this->_content = $content;
	}

	public function setAuthor($author){
		if(is_string($author) && strlength($author) < 50)
			$this->_author = $author;
	}

	public function setComment($comment){
		if(is_string($comment))
			$this->_comment = $comment;
	}

	public function setPostId($postId){
		$this->_post_id = (int) $postid;
	}

	//Getters
	public function getId(){
		return $this->_id;
	}

	public function getTitle(){
		return $this->_title;
	}

	public function getContent(){
		return $this->_content;
	}

	public function getAuhtor(){
		return $this->_author;
	}

	public function getComment(){
		return $this->_comment;
	}

	public function getPostId(){
		return $this->_post_id;
	}
}