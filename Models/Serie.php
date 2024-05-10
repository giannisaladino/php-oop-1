<?php
class TVSerie extends Production
{
    public $stagioni;

    public function __construct($_titolo, $_lingua, $_voto, $_stagioni)
    {
        
        parent::__construct($_titolo, $_lingua, $_voto, );

        $this->stagioni = $_stagioni;

    }

}
