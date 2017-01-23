<?php 

class Message{
	private $author;
	private $date;
	private $content;

	public function __construct ($a, $d, $c){
		setlocale(LC_TIME,"fr_FR");
		$this->author = $a;
		$this->date = $d;
		$this->content = $c;
	}

	public function renderHtml() {
		// on veut retourner 
		// nom date le 23 janvier 2017 heure/min  et le message 
		return "<h2>{$this->author} a dit : </h2> <p>{$this->content} le <time>".strftime("%d %B %Y %H %M", $this->date)."</time></p>";
	}
}