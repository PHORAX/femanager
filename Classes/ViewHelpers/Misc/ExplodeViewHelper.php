<?php
namespace In2code\Femanager\ViewHelpers\Misc;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * View helper to explode a list
 *
 * @package TYPO3
 * @subpackage Fluid
 */
class ExplodeViewHelper extends AbstractViewHelper
{

    /**
     * View helper to explode a list
     *
     * @param string $string Any list (e.g. "a,b,c,d")
     * @param string $separator Separator sign (e.g. ",")
     * @param boolean $trim Should be trimmed?
     * @return array
     */
    public function render($string = '', $separator = ',', $trim = true)
    {
        return $trim ? GeneralUtility::trimExplode($separator, $string, true) : explode($separator, $string);
    }
}
