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
class __TwigTemplate_59f55fc7fb5eb44211ea646cdd9019cb5fd1aa0d6801ed906bbad309880337de extends \Twig\Template
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
  </div>
</div>
  



  <!--";
        // line 20
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 24
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 28
            echo "    ";
        }
        // line 29
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 30
        echo ($context["column_right"] ?? null);
        echo "</div>-->
</div>



<script type=\"text/javascript\"><!--
  \$('home-slider').swiper({
  \tmode: 'horizontal',
  \tslidesPerView: 1,
  \tpagination: '.slideshow";
        // line 39
        echo ($context["module"] ?? null);
        echo "',
  \tpaginationClickable: true,
    spaceBetween: 30,
  \tloop: true
  });
//--></script>
";
        // line 45
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
        return array (  119 => 45,  110 => 39,  98 => 30,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  75 => 24,  72 => 23,  70 => 22,  66 => 21,  62 => 20,  52 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
