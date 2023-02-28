<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* nice/template/common/home.twig */
class __TwigTemplate_159bf24df147dfaaa0f38527839e8031da467726d18e9bfa39c90b51599350e3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\" class=\"container\">
  <div>
    <style>
      html,
      body{
        height: 100%;
        font-size: 15px;
      }
      .swiper{
        width: 1000px;
        height: 100%;
      }
      .swiper-slide{
        text-align: center;
        font-size: 18px;
        background-color: aliceblue;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .swiper-slide img{
        width: 58%;
        object-fit: cover;
      }
      .swiper-button-next, .swiper-rtl .swiper-button-prev{
        right: 140px !important; 
        left: auto;
      }
      .swiper-button-prev, .swiper-rtl .swiper-button-next{
        left: 140px !important; 
        right: auto;
      }

    </style>


    <div class=\"swiper mySwiper\">
      <div class=\"swiper-wrapper\">
        <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
        <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
        <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
        <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
        <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>


    <script>
      var swiper = new Swiper(\".mySwiper\", {
        spaceBetween: 30,
        navigation: {
          nextEl: \".swiper-button-next\",
          prevEl: \".swiper-button-prev\",
        },
        pagination: {
          el: \".swiper-pagination\",
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>
  </div>





  
</div>
";
        // line 74
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "nice/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 74,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
