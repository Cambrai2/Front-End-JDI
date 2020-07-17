<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\TextOnImage;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class TextOnImage extends AbstractPartial
{
  /** @return string */
  public function getBlockName(): string
  {
    return 'TextOnImage';
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

  /** @return $this */
  public static function i()
  {
    return new static();
  }
}