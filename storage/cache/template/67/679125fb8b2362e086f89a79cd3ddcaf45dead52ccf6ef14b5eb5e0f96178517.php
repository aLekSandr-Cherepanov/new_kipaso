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
class __TwigTemplate_fd44e580bfecb1f43b723b254dfab31130d50d40bdbf1b34143ca7cbd9b5eecd extends \Twig\Template
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
        // line 24
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 25
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 26
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 28
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 34
        echo ($context["column_right"] ?? null);
        echo "</div>-->
</div>



<script type=\"text/javascript\"><!--
  \$(\"home-slider\").swiper({
  \tmode: 'horizontal',
  \tslidesPerView: 1,
  \tpagination: '.slideshow";
        // line 43
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
        // line 53
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
        return array (  127 => 53,  114 => 43,  102 => 34,  94 => 33,  91 => 32,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  76 => 27,  74 => 26,  70 => 25,  66 => 24,  52 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
