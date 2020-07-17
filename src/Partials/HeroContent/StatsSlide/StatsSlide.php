<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\StatsSlide;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class StatsSlide extends AbstractPartial
{
  /** @return string */
  public function getBlockName(): string
  {
    return 'StatsSlide';
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