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
class __TwigTemplate_7d84cf7d837e22ff0fe17333c0db58c93f54f7d47f5081a7e1d0ce4950eb3a57 extends \Twig\Template
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
      <div class=\"swiper-slide\">123</div>
      <div class=\"swiper-slide\">123</div>
      <div class=\"swiper-slide\">123</div>
      <div class=\"swiper-slide\">123</div>
      <div class=\"swiper-slide\">123</div>
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
";
        // line 73
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
        return array (  112 => 73,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
