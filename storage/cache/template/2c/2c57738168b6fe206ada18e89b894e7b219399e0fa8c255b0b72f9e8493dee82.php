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
class __TwigTemplate_07d2892caa15d6e8dc6a6af3d4ea6250054137883bc2a6be38cb329b2f02b045 extends \Twig\Template
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
      h2 {
        font-size: 26px;
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

      .catalog-nav__item {
        display: flex;
        width: 50%;
      }

      .wrapper-category {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .catalog-block__face {
        margin-right: 50px;
      }

      .catalog-block__item {
        list-style-type: none;
      }
      .fa {
        display: none;
      }
      
      .product-thumb--wishlist {
        display: none;
      }

      .product-thumb--compare {
        display: none;
      }
      
      .rating {
        display: none;
      }

  
    </style>
  
  
    <div class=\"swiper mySwiper\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\">
            <div class=\"slide-content\">
              <h1 style=\"color: #000000;\">ТермоБрест</h1>
              <div style=\"display: flex;flex-direction: column;\">
                <span>Изменение прайса с 15.04.2022</span>
                <button style=\"color: white;background-color: #00aed9;border: 0;height: 40px;border-radius: 10px;margin-top: 25px;\">Перейти</button>
              </div>
            </div>
          </div>
          <div class=\"swiper-slide\">
            <img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\">
          </div>
          <div class=\"swiper-slide\">
            <img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\">
          </div>
          <div class=\"swiper-slide\">
            <img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\">
          </div>
          <div class=\"swiper-slide\">
            <img src=\"http://new15939285087473.myaddshop.ru/img/1290x434/1001/sliders/311969cs-960_15939510698078.jpg\">
          </div>
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


  <div class=\"hero-category\">
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face1.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Измерители-регуляторы</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Измерители, измерители-регуляторы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">ПИД-регуляторы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Контроллеры отопления, вентиляции, горячего водоснабжения</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Таймеры, счетчики импульсов, тахометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Измерители параметров электрической сети</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Блоки управления, коммутации, защиты</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Дополнительное оборудование</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Комнатные термостаты</a>
                </div>
            </div>
        </div>
    </div>
</div>





  <!--";
        // line 182
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 183
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 184
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 185
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 186
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 187
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 188
            echo "    ";
        } else {
            // line 189
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 190
            echo "    ";
        }
        // line 191
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 192
        echo ($context["column_right"] ?? null);
        echo "</div>-->


  
</div>
";
        // line 197
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
        return array (  265 => 197,  257 => 192,  249 => 191,  246 => 190,  243 => 189,  240 => 188,  237 => 187,  234 => 186,  231 => 185,  229 => 184,  225 => 183,  221 => 182,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
