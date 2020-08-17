<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\AboutUs;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class AboutUs extends AbstractPartial
{
  protected $contentValues = array("a"=>"alpha", "b"=>"bravo");

  /** @return string */
  public function getBlockName(): string
  {
    return 'about';
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