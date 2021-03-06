<?php
namespace MailPoetVendor\Twig\Node\Expression;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
class ConstantExpression extends AbstractExpression
{
 public function __construct($value, int $lineno)
 {
 parent::__construct([], ['value' => $value], $lineno);
 }
 public function compile(Compiler $compiler)
 {
 $compiler->repr($this->getAttribute('value'));
 }
}
\class_alias('MailPoetVendor\\Twig\\Node\\Expression\\ConstantExpression', 'MailPoetVendor\\Twig_Node_Expression_Constant');
