<?php

class TextFormat
{
    private $nameFile;

    public function __construct($nameFile)
    {
        if (!empty($nameFile)){
            $this->nameFile=$nameFile;
        }else{
            $this->nameFile='undefined';
            return 'Нету файла для определения';
        }
    }

    public function setNameFile($nameFile){
        if (!empty($nameFile)){
            $this->nameFile=$nameFile;
        }else{
            $this->nameFile='undefined';
            return 'Нету файла для определения';
        }
    }

    public function getNameFile(){
        return $this->nameFile;
    }
    /*Метод поведения*/
    public function typeFile($nameFile){
        $final = substr($nameFile,strpos($nameFile, '.')+1);
        $message = '';

        if ($final == 'txt'){
            $message = 'Это TXT файл';
        }elseif ($final == 'php'){
            $message = 'Это PHP файл';
        }elseif ($final == 'py'){
            $message = 'Это PYTHON файл';
        }else{
            $message = 'Файл не определён';
        }
        return $message;
    }

    public function show(){}
}