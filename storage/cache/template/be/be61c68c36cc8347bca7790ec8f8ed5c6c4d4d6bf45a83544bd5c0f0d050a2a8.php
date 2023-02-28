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
class __TwigTemplate_799663582333586aad539522820fb88ae111e7f4571a444c54a1471aa4821b28 extends \Twig\Template
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


  <div class=\"wrapper-category\">
    <div class=\"catalog-nav__item catalog-block\" style=\"height: auto;\">
      <div class=\"catalog-block__face\"><img class=\"lazy-img\" src=\"https://kipaso.ru/assets/templates/new/img/face1.png\"></div>
      <div class=\"catalog-block__content\">
          <h2 class=\"catalog-block__header\">Измерители-регуляторы</h2>
            <ul class=\"catalog-block__list\">
    <li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Измерители, измерители-регуляторы\" href=\"catalog/izmeriteli-regulyatoryi/izmeriteli-izmeriteli-regulyatoryi/\">Измерители, измерители-регуляторы</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"ПИД-регуляторы\" href=\"catalog/izmeriteli-regulyatoryi/pid-regulyatoryi/\">ПИД-регуляторы</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Контроллеры отопления, вентиляции, горячего водоснабжения\" href=\"catalog/izmeriteli-regulyatoryi/kontrolleryi-otopleniya-ventilyaczii-goryachego-vodosnabzheniya/\">Контроллеры отопления, вентиляции, горячего водоснабжения</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Таймеры, счетчики импульсов, тахометры\" href=\"catalog/izmeriteli-regulyatoryi/tajmeryi-schetchiki-impulsov-tahometryi/\">Таймеры, счетчики импульсов, тахометры</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Измерители параметров электрической сети\" href=\"catalog/izmeriteli-regulyatoryi/izmeriteli-parametrov-elektricheskoj-seti/\">Измерители параметров электрической сети</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Блоки управления, коммутации, защиты\" href=\"catalog/izmeriteli-regulyatoryi/bloki-upravleniya-kommutaczii-zashhityi/\">Блоки управления, коммутации, защиты</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Дополнительное оборудование\" href=\"catalog/izmeriteli-regulyatoryi/dopolnitelnoe-oborudovanie/\">Дополнительное оборудование</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Комнатные термостаты\" href=\"catalog/izmeriteli-regulyatoryi/komnatnyie-termostatyi/\">Комнатные термостаты</a>
</li>

</ul>
                        </div>
                      </div>
  </div>





  <!--";
        // line 128
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 129
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 130
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 131
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 132
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 133
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 134
            echo "    ";
        } else {
            // line 135
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 136
            echo "    ";
        }
        // line 137
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 138
        echo ($context["column_right"] ?? null);
        echo "</div>-->

  
</div>
";
        // line 142
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
        return array (  210 => 142,  203 => 138,  195 => 137,  192 => 136,  189 => 135,  186 => 134,  183 => 133,  180 => 132,  177 => 131,  175 => 130,  171 => 129,  167 => 128,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
