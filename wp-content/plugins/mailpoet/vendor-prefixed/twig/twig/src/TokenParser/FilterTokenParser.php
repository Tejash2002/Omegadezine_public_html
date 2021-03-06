<?php
namespace MailPoetVendor\Twig\TokenParser;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Node\BlockNode;
use MailPoetVendor\Twig\Node\Expression\BlockReferenceExpression;
use MailPoetVendor\Twig\Node\Expression\ConstantExpression;
use MailPoetVendor\Twig\Node\PrintNode;
use MailPoetVendor\Twig\Token;
final class FilterTokenParser extends AbstractTokenParser
{
 public function parse(Token $token)
 {
 $stream = $this->parser->getStream();
 $lineno = $token->getLine();
 @\trigger_error(\sprintf('The "filter" tag in "%s" at line %d is deprecated since Twig 2.9, use the "apply" tag instead.', $stream->getSourceContext()->getName(), $lineno), \E_USER_DEPRECATED);
 $name = $this->parser->getVarName();
 $ref = new BlockReferenceExpression(new ConstantExpression($name, $lineno), null, $lineno, $this->getTag());
 $filter = $this->parser->getExpressionParser()->parseFilterExpressionRaw($ref, $this->getTag());
 $stream->expect(
 3
 );
 $body = $this->parser->subparse([$this, 'decideBlockEnd'], \true);
 $stream->expect(
 3
 );
 $block = new BlockNode($name, $body, $lineno);
 $this->parser->setBlock($name, $block);
 return new PrintNode($filter, $lineno, $this->getTag());
 }
 public function decideBlockEnd(Token $token)
 {
 return $token->test('endfilter');
 }
 public function getTag()
 {
 return 'filter';
 }
}
\class_alias('MailPoetVendor\\Twig\\TokenParser\\FilterTokenParser', 'MailPoetVendor\\Twig_TokenParser_Filter');
