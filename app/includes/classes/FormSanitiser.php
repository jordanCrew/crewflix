<?php
class FormSanitiser {
    public static function santiseFormString($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = trim($inputText); //leaves spaces in the middle of the string
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
    }

    public static function santiseFormUsername($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText); //remove all spaces including in the middle of the string
        return $inputText;
    }

    public static function santiseFormPassword($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }
}
?>