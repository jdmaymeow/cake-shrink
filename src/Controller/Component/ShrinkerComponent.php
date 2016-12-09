<?php
namespace CakeShrink\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Shrinker component
 */
class ShrinkerComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'codeset' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUWVXYZ'
    ];

    public function shrink($id = null)
    {
        return $this->_encodeNumber($id);
    }

    private function _encodeNumber($number = 10)
    {
        //load configuration
        $config = $this->config();
        $codeset = $config['codeset'];
        // get length of our codeset
        $base = strlen($codeset);
        $n = $number; // given link_ID
        //shortened string
        $encoded = '';
        while ($n > 0) {
            $encoded = substr($codeset, ($n % $base), 1) . $encoded;
            $n = floor($n/$base);
        }
        return $encoded;
    }
}
