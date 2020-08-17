<?php
namespace ProtectedNet\FrontendTest\Components\AboutItem;

use Exception;
use Packaged\Dispatch\ResourceManager;
use Packaged\SafeHtml\ISafeHtmlProducer;
use ProtectedNet\FrontendTest\Components\AbstractComponent;

class AboutItem extends AbstractComponent
{
  /**
   * Use this property to set the tag you want to use as your outer element
   *
   * @var string
   */
  protected $_tag = "aboutItem";
  protected $_title;
  protected $_text;
  protected $_svg;

  public function __construct()
  {
    parent::__construct();
    $this->_setPrimaryAttributes();
  }

  public function setTitle(string $title)
  {
    $this->_title = $title;
    return $this;
  }
  public function setText(string $text)
  {
    $this->_text = $text;
    return $this;
  }
  public function setSvg(string $svg)
  {
    $this->_svg = $svg;
    return $this;
  }

  /** @return AbstractComponent[]/AbstractPartial[] */
  public function getTitle(): string
  {
    return $this->_title;
  }
  public function getText(): string
  {
    return $this->_text;
  }
  public function getSvg(): string
  {
    return $this->_svg;
  }

  /**
   * All our styling used BEM, the name you enter here is the root name for BEM styling
   *
   * @return string
   */
  public function getBlockName(): string
  {
    return 'aboutItem';
  }

  /**
   * Used to set the blockname as an attribute on the component
   * This is used for linking it to typescript component of the same nam
   *
   * @return $this
   */
  protected function _setPrimaryAttributes()
  {
    return $this->setAttribute($this->getBlockName(), true);
  }

  /**
   * We use static i() methods to instantiate as it's shorter and easier to chain
   *
   * @return $this
   */
  public static function i()
  {
    return new static();
  }

  public function rightSide()
  {
    return $this->_addModifier('right');
  }
}
