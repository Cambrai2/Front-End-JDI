<?php
namespace ProtectedNet\FrontendTest\Pages\Home;

use ProtectedNet\FrontendTest\Components\HeroBanner\HeroBanner;
use ProtectedNet\FrontendTest\Pages\AbstractPage;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideOne\SlideOne;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideThree\SlideThree;
use ProtectedNet\FrontendTest\Partials\HeroContent\SlideTwo\SlideTwo;
use ProtectedNet\FrontendTest\Partials\HeroContent\TextSideImage\TextSideImage;
use ProtectedNet\FrontendTest\Partials\HeroContent\TextOnImage\TextOnImage;
use ProtectedNet\FrontendTest\Partials\HeroContent\PricingSlide\PricingSlide;
use ProtectedNet\FrontendTest\Partials\HeroContent\StatsSlide\StatsSlide;

class Home extends AbstractPage
{
  protected function _getHeroBanner()
  {
    return HeroBanner::i()
      ->appendSlide(SlideOne::i())
      ->appendSlide(SlideTwo::i())
      ->appendSlide(SlideThree::i());
  }

  protected function _getTextSideImage(array $passValues)
  {
      $this->_TextSideImage = TextSideImage::i()->setData($passValues);
    
      return $this->_TextSideImage;
  }

  protected function _getTextOnImage(array $passValues)
  {
      $this->_TextOnImage = TextOnImage::i()->setData($passValues);
    
      return $this->_TextOnImage;
  }

  protected function _getPricingSlide()
  {
      $this->_PricingSlide = PricingSlide::i();
    
      return $this->_PricingSlide;
  }

  protected function _getStatsSlide()
  {
      $this->_StatsSlide = StatsSlide::i();
    
      return $this->_StatsSlide;
  }
}
