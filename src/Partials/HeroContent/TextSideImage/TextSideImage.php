<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\TextSideImage;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class TextSideImage extends AbstractPartial
{
  protected $contentValues = array("a"=>"alpha", "b"=>"bravo");

  /** @return string */
  public function getBlockName(): string
  {
    return 'TextSideImage';
  }

  public function setData(array $Values)
  {
    $this->contentValues = $Values;
    
    return $this;
  }
  public function getData($key)
  {
    return $this->contentValues[$key];
  }

  public function getSubElements(): array
  {
    return $this->contentValues["repeatItems"];
  }
  /** @return $this */
  public static function i()
  {
    return new static();
  }
}