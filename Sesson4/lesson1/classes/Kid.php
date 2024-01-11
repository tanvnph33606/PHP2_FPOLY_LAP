<?php
class Kid extends Person
{

    public function crawl()
    {
        return 'crawl by:  ' . $this->legs . ' legs and ' . $this->arm . ' arms';
    }
}
