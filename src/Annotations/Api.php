<?php

namespace PhpApi\Annotations;

/**
 * The annotation to specify a pattern that triggers a class method.
 * @Annotation
 * @Target("METHOD")
 * @package PhpApi
 * @copyright (c) 2017, Federal Institute of Rondonia
 * @license http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @author Natanael Simoes <natanael.simoes@ifro.edu.br>
 * @since Release 0.1.0
 * @link https://github.com/ifroariquemes/PHP-API Github repository
 */
class Api
{

    /**
     * The pattern is a portion of URL that will be used to execute some
     * class method. More than one single route can be configured using
     * semicolon to separate them.
     * <pre>
     * *@Api("my/route") // put this in javadoc style
     * public function myRoute() {
     *  // code
     * }</pre>
     * 
     * <pre>
     * *@Api("route/with/$var") // put this in javadoc style
     * public function routeWith($var) {
     *  // code
     * }</pre>
     * 
     * <pre>
     * *@Api("another/$id/maybe/$var;otherwise/$var/goes/$id") // put this in javadoc style
     * public function routeAnother($id, $var) {
     *  // code
     * }</pre>
     * @var string 
     */
    public $pattern;

}
