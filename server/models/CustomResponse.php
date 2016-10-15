<?php

class CustomResponse extends DataStore {
    const TABLE = 'customresponse';
    
    public static function getProps() {
        return [
            'name',
            'language',
            'content'
        ];
    }

    public function toArray() {
        return [
            'name' => $this->name,
            'language' => $this->language,
            'content' => $this->content,
        ];
    }
}