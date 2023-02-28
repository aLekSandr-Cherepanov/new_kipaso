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
class __TwigTemplate_7b96ca17e30ec5edd1eaebd4bbac6a8c23338130a6f3bfc978780e667b9edeed extends \Twig\Template
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

   <div class=\"catalog-nav__item catalog-block\" style=\"\">
<div class=\"catalog-block__face\"><img class=\"lazy-img\" src=\"https://kipaso.ru/assets/templates/new/img/face2.png\"></div>
<div class=\"catalog-block__content\">
                          <h2 class=\"catalog-block__header\">Датчики</h2>
                            <ul class=\"catalog-block__list\">
    <li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Давление\" href=\"catalog/datchiki/davlenie/\">Давление</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Температура\" href=\"catalog/datchiki/temperatura/\">Температура</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Влажность\" href=\"catalog/datchiki/vlazhnost/\">Влажность</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Бесконтактные датчики\" href=\"catalog/datchiki/beskontaktnyie-datchiki/\">Бесконтактные датчики</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Уровень\" href=\"catalog/datchiki/uroven/\">Уровень</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Реле потока и протока\" href=\"catalog/datchiki/rele-potoka-i-protoka/\">Реле потока и протока</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Барьеры искрозащиты\" href=\"catalog/datchiki/bareryi-iskrozashhityi/\">Барьеры искрозащиты</a>
</li>

</ul>
  </div>
  </div>

  <div class=\"catalog-nav__item catalog-block\" style=\"height: 285px;\">
<div class=\"catalog-block__face\"><img class=\"lazy-img\" src=\"https://kipaso.ru/assets/templates/new/img/face3.png\"></div>
<div class=\"catalog-block__content\">
                          <h2 class=\"catalog-block__header\">Газовое и котельное оборудование</h2>
                            <ul class=\"catalog-block__list\">
    <li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Газовые фильтры\" href=\"catalog/gazovoe-i-kotelnoe-oborudovanie/gazovyie-filtryi/\">Газовые фильтры</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Регуляторы давления газа\" href=\"catalog/gazovoe-i-kotelnoe-oborudovanie/regulyatoryi-davleniya-gaza/\">Регуляторы давления газа</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Предохранительно-сбросные клапаны\" href=\"catalog/gazovoe-i-kotelnoe-oborudovanie/predohranitelno-sbrosnyie-klapanyi/\">Предохранительно-сбросные клапаны</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Предохранительно-запорные клапаны\" href=\"catalog/gazovoe-i-kotelnoe-oborudovanie/predohranitelno-zapornyie-klapanyi/\">Предохранительно-запорные клапаны</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Приборы контроля и розжига\" href=\"catalog/gazovoe-i-kotelnoe-oborudovanie/priboryi-kontrolya-i-rozzhiga/\">Приборы контроля и розжига</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Газорегуляторные пункты (ГРПШ)\" href=\"catalog/gazovoe-i-kotelnoe-oborudovanie/gazoreguljatornye-punkty-grpsh/\">Газорегуляторные пункты (ГРПШ)</a>
</li>
<li class=\"catalog-block__item\">
    <a class=\"catalog-block__link\" title=\"Определение утечек\" href=\"catalog/gazovoe-i-kotelnoe-oborudovanie/opredelenie-utechek/\">Определение утечек</a>
</li>

</ul>
                        </div>
                      </div>

  </div>





  <!--";
        // line 191
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 192
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 193
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 194
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 195
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 196
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 197
            echo "    ";
        } else {
            // line 198
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 199
            echo "    ";
        }
        // line 200
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 201
        echo ($context["column_right"] ?? null);
        echo "</div>-->

  
</div>
";
        // line 205
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
        return array (  273 => 205,  266 => 201,  258 => 200,  255 => 199,  252 => 198,  249 => 197,  246 => 196,  243 => 195,  240 => 194,  238 => 193,  234 => 192,  230 => 191,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
