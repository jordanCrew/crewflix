<?php
class Season {
    private $seasonNumber;
    private $vidoes;

    public function __construct($seasonNumber, $vidoes){
        $this->seasonNumber = $seasonNumber;
        $this->videos = $vidoes;
    }

    public function getSeasonNumber() {
        return $this->seasonNumber;
    }

    public function getVideos() {
        return $this->videos;
    }
}

?>