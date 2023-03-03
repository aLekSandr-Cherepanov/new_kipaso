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
class __TwigTemplate_6fc2aa86dc2210d177789787a8e0489c0741ec44c8d3b88c08ca4a8ad990e75f extends \Twig\Template
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
                    <a class=\"link-category\" href=\"\">Измерители, измерители-регуляторы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">ПИД-регуляторы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Контроллеры отопления, вентиляции, горячего водоснабжения</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Таймеры, счетчики импульсов, тахометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Измерители параметров электрической сети</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Блоки управления, коммутации, защиты</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Дополнительное оборудование</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Комнатные термостаты</a>
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
                    <a class=\"link-category\" href=\"\">Давление</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Температура</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Влажность</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Бесконтактные датчики</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Уровень</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Реле потока и протока</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Барьеры искрозащиты</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face3.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Газовое и котельное оборудование</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Газовое и котельное оборудование</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Газовые фильтры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Регуляторы давления газа</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Предохранительно-сбросные клапаны</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Предохранительно-запорные клапаны</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Приборы контроля и розжига</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Газорегуляторные пункты (ГРПШ)</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Определение утечек</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face4.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Манометры, термометры</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Манометры технические</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Манометры электроконтактные</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Манометры точных измерений</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Коррозионностойкие и виброустойчивые манометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Сварочные манометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Манометры низкого давления (напоромеры)</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Термоманометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Термометры стеклянные</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Термометры биметаллические</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Термометры жидкостные</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Термогигрометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Разделители сред</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face5.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">ПЛК и системы автоматизации</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Моноблочные ПЛК</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Панельные ПЛК</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Модульные ПЛК</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Панели оператора</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Программируемые реле</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Модули ввода-вывода</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Модемы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Преобразователи интерфейсов</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Архиваторы, безбумажные регистраторы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Программное обеспечение</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Блоки питания</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face6.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Загазованность</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Сигнализаторы загазованности на метан (CH4)</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Сигнализаторы загазованности на угарный газ (CO)</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Газоанализаторы для режимной наладки</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Многоканальные сигнализаторы загазованности</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Дополнительное оборудование</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Промышленные газоанализаторы</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face7.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Векторные преобразователи</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Частотные преобразователи</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face8.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Запорная арматура</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Общепромышленные электромагнитные клапаны</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Регулирующие клапаны</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Смесительные клапаны</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Клапаны с пневмоприводом</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Газовые электромагнитные клапаны</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Электромагнитные катушки</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Регуляторы давления</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Электроприводы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Системы регулирования</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face9.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Лампы, кнопки и реле</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Лампы сигнальные</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Кнопки, переключатели</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Реле промежуточные</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Реле твердотельные</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Изделия для электромонтажа</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Микроклимат шкафов управления</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Автоматические выключатели защиты двигателей</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face10.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Счетчики воды, тепла и газа</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Квартирные счетчики воды</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Крыльчатые счетчики воды</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Бытовые счетчики тепла</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Промышленные счетчики воды</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Промышленные счетчики тепла</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face12.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Портативные приборы</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Температура</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Газоанализаторы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Шумомеры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">pH-метры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Дифманометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Пирометры</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Термогигрометры</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"wrapper-category\">
        <div class=\"block-category\">
            <div class=\"category\">
                <div class=\"icon-category\">
                    <img src=\"https://kipaso.ru/assets/templates/new/img/face11.png\" alt=\"прибор\">
                </div>
                <div class=\"wrapper-category-title\">
                    <span class=\"hero-title\">Пневматическое оборудование</span>
                </div>
            </div>
        </div>
        <div class=\"block-category-title\">
            <div class=\"category-title\">
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Вакуум</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Перемещение</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Соединение</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Управление</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Электроприводы</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Арматура трубопроводная</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Подготовка воздуха</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Приводы и проекты автоматизации</a>
                </div>
                <div class=\"subsubcategory-item\">
                    <a class=\"link-category\" href=\"\">Готовые решения</a>
                </div>
            </div>
        </div>
    </div>
</div>





  <!--";
        // line 598
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 599
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 600
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 601
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 602
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 603
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 604
            echo "    ";
        } else {
            // line 605
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 606
            echo "    ";
        }
        // line 607
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 608
        echo ($context["column_right"] ?? null);
        echo "</div>-->


  
</div>
";
        // line 613
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
        return array (  681 => 613,  673 => 608,  665 => 607,  662 => 606,  659 => 605,  656 => 604,  653 => 603,  650 => 602,  647 => 601,  645 => 600,  641 => 599,  637 => 598,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
