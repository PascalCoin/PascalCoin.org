<?php

namespace App\Extend;

/**
 * Class ParsedownExt
 *
 * A small extension that adds anchor ids just like GFM does it.
 */
class ParsedownExt extends \Parsedown
{
    protected function element(array $Element)
    {
        if (\in_array($Element['name'], ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'], true)) {
            $Element['attributes']['id'] = str_slug($Element['text'], '-');
        }
        return parent::element($Element); // TODO: Change the autogenerated stub
    }

}