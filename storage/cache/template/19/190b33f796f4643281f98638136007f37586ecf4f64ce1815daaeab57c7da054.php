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
class __TwigTemplate_7ba05299ea43c3aa18d373a5157c7c9beb225451e465915821303ab6394e4c61 extends \Twig\Template
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
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face2.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Датчики</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Давление</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Температура</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Влажность</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Бесконтактные датчики</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Уровень</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Реле потока и протока</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a href=\"\">Барьеры искрозащиты</a>
                </div>
            </div>
        </div>
    </div>
</div>





  <!--";
        // line 213
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 214
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 215
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 216
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 217
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 218
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 219
            echo "    ";
        } else {
            // line 220
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 221
            echo "    ";
        }
        // line 222
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 223
        echo ($context["column_right"] ?? null);
        echo "</div>-->


  
</div>
";
        // line 228
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
        return array (  296 => 228,  288 => 223,  280 => 222,  277 => 221,  274 => 220,  271 => 219,  268 => 218,  265 => 217,  262 => 216,  260 => 215,  256 => 214,  252 => 213,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
