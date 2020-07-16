<?php
namespace ProtectedNet\FrontendTest\Partials\WorkingContent\TextSidelineImage;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class TextSidelineImage extends AbstractPartial
{
  protected $contentValues = array("a"=>"alpha", "b"=>"bravo");

  /** @return string */
  public function getBlockName(): string
  {
    return 'slide-one';
  }

  public function setData(array $Values)
  {
    $this->contentValues = $Values;
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