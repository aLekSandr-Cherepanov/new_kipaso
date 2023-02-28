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
class __TwigTemplate_de18393a3888cd5c483a696f3877626d38941b0061b4b8326cde89e45c8a64f2 extends \Twig\Template
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
        <div>
          <h1>sdfdsfsdfsdf</h1>
          <span>sadfasdas</span>
          <button>Кнопка</button>
        </div>
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
        // line 76
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 77
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 78
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 79
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 80
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 81
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 84
            echo "    ";
        }
        // line 85
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 86
        echo ($context["column_right"] ?? null);
        echo "</div>-->
</div>
";
        // line 88
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
        return array (  156 => 88,  151 => 86,  143 => 85,  140 => 84,  137 => 83,  134 => 82,  131 => 81,  128 => 80,  125 => 79,  123 => 78,  119 => 77,  115 => 76,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
