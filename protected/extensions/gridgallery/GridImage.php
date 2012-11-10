<?php
class GridImage {
	
	// =================== PRIVATE VARIABLES
	private $id;
	private $image;
	private $title;
	private $description;
	private $link;
	
	
	// =================== CONSTRUCTORS
	public function GridImage($id, $image, $title, $description, $link) {
		
		$this->id = $id;
		$this->image = $image;
		$this->title = $title;
		$this->description = $description;
		$this->link = $link;
	}
	
	public function GridImage($id, $image, $title, $description) {
		
		$this->id = $id;
		$this->image = $image;
		$this->title = $title;
		$this->description = $description;
	}
	
	public function GridImage($image, $title, $description) {
		
		$this->image = $image;
		$this->title = $title;
		$this->description = $description;
	}
	
	public function GridImage($image, $title) {
		
		$this->image = $image;
		$this->title = $title;
	}
	
	public function GridImage($image) {
		
		$this->image = $image;
	}
	
	// =================== SETTERS AND GETTERS
	public function setId() {
		$this->id = $id;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setImage() {
		$this->image = $image;
	}
	
	public function getImage() {
		return $this->image;
	}
	
	public function setTitle() {
		$this->title = $title;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function setDescription() {
		$this->description = $description;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setLink() {
		$this->link = $link;
	}
	
	public function getLink() {
		return $this->link;
	}
}