<?php
namespace ProtectedNet\FrontendTest\Pages\Home;

use ProtectedNet\FrontendTest\Components\HeroBanner\HeroBanner;
use ProtectedNet\FrontendTest\Pages\AbstractPage;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideOne\SlideOne;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideThree\SlideThree;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideTwo\SlideTwo;
use ProtectedNet\FrontendTest\Partials\WorkingContent\TextSidelineImage\TextSidelineImage;

class Home extends AbstractPage
{
  protected function _getHeroBanner()
  {
    return HeroBanner::i()
      ->appendSlide(SlideOne::i())
      ->appendSlide(SlideTwo::i())
      ->appendSlide(SlideThree::i());
  }

  protected function _getTextSidelineImage()
  {
    return TextSidelineImage::i();
  }
}
