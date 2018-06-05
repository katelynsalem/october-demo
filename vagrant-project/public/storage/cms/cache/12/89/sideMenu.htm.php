<?php 
class Cms5b07448e8620b400798158_c2c11b1d131984687093c127c22cc0a6Class extends Cms\Classes\PartialCode
{
public function onEnd()
{
    $this['parentPage'] = explode("/", substr($this->page->url,1));
    $this['getMenu'] = $this['parentPage'][0];
    $this['subMenu'] = ucwords(str_replace("-"," ",$this['getMenu']));
}
}
