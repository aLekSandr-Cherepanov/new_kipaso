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
class __TwigTemplate_f1eca0df2d4ef282e1ef2a35b30fc48d5546894a5f521e09368a46312be6ea82 extends \Twig\Template
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
  
  
<div class=\"wrapper-category\">
  <div class=\"block-category\">
      <div class=\"category\">
          <div class=\"icon-category\">
              <img src=\"https://kipaso.ru/assets/templates/new/img/face1.png\" alt=\"прибор\">
          </div>
          <div class=\"wrapper-category-title\">
              <span class=\"category-title\">Измерители-регуляторы</span>
          </div>
      </div>
  </div>
    
</div>





  <!--";
        // line 105
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 106
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 107
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 108
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 109
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 110
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 111
            echo "    ";
        } else {
            // line 112
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 113
            echo "    ";
        }
        // line 114
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 115
        echo ($context["column_right"] ?? null);
        echo "</div>-->


  
</div>
";
        // line 120
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
        return array (  188 => 120,  180 => 115,  172 => 114,  169 => 113,  166 => 112,  163 => 111,  160 => 110,  157 => 109,  154 => 108,  152 => 107,  148 => 106,  144 => 105,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
