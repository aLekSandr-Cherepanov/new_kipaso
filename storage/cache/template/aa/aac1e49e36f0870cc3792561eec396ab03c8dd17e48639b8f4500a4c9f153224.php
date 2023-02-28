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
class __TwigTemplate_044b98a5ed2ac7bed4e22eadcceb169bcea25dc274c19b7c82ea06aeebad9ae5 extends \Twig\Template
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
  <div class=\"contein\">
    <div class=\"slideshow swiper-viewport\">
    <div id=\"home-slider\" class=\"swiper-container\">
      <div class=\"swiper-wrapper\"> 
        <div class=\"swiper-slide\">123</div>
        <div class=\"swiper-slide\">123</div>
        <div class=\"swiper-slide\">123</div>
        <div class=\"swiper-slide\">123</div>
      </div>
    </div>
    <div class=\"swiper-pagination slideshow";
        // line 13
        echo ($context["module"] ?? null);
        echo "\"></div>
    <div class=\"swiper-pager\">
      <div class=\"swiper-button-next\"></div>
      <div class=\"swiper-button-prev\"></div>
    </div>
  </div>

  
  </div>
  



  <!--";
        // line 26
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 27
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 28
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 30
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 31
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 34
            echo "    ";
        }
        // line 35
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 36
        echo ($context["column_right"] ?? null);
        echo "</div>-->
</div>



<script type=\"text/javascript\"><!--
  \$('home-slider').swiper({
  \tmode: 'horizontal',
  \tslidesPerView: 1,
  \tpagination: '.slideshow";
        // line 45
        echo ($context["module"] ?? null);
        echo "',
  \tpaginationClickable: true,
  \tnextButton: '.slideshow .swiper-button-next',
      prevButton: '.slideshow .swiper-button-prev',
      spaceBetween: 30,
  \tautoplay: 2500,
      autoplayDisableOnInteraction: true,
  \tloop: true
  });
//--></script>
";
        // line 55
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
        return array (  129 => 55,  116 => 45,  104 => 36,  96 => 35,  93 => 34,  90 => 33,  87 => 32,  84 => 31,  81 => 30,  78 => 29,  76 => 28,  72 => 27,  68 => 26,  52 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
