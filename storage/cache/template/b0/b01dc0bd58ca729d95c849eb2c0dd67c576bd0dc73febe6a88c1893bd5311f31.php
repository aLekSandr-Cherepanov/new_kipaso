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
class __TwigTemplate_abea03c91c1c63a8a134a0cb9b6c3c6b3f08dc4944867b4380ff68603ca10bff extends \Twig\Template
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
  <div class=\"slider\">
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
        width: 100%;
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

      .slide-content {
        position: absolute;
        /*top: 0;*/
        z-index: 1000;
        color: #fff;
      }

      .slider {
        margin-bottom: 100px;
      }
  
    </style>
  
  
    <div class=\"swiper mySwiper\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\">
            <div class=\"slide-content\">
              <h1 style=\"color: #000000;\">ТермоБрест</h1>
              <div style=\"display: flex;flex-direction: column;\">
                <span>Изменение прайса с 15.04.2022</span>
                <button style=\"color: black;background-color: #00aed9;border: 0;height: 40px;border-radius: 10px;margin-top: 25px;\">Кнопка</button>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
          <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
          <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
          <div class=\"swiper-slide\"><img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
        
    </div>

  
  
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





  <!--";
        // line 91
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 92
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 93
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 94
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 95
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 96
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 97
            echo "    ";
        } else {
            // line 98
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 99
            echo "    ";
        }
        // line 100
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 101
        echo ($context["column_right"] ?? null);
        echo "</div>-->

  <div>sdafsf</div>
</div>
";
        // line 105
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
        return array (  173 => 105,  166 => 101,  158 => 100,  155 => 99,  152 => 98,  149 => 97,  146 => 96,  143 => 95,  140 => 94,  138 => 93,  134 => 92,  130 => 91,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
