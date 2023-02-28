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
class __TwigTemplate_be6e20f58a2d48444f97042f15ea292e740eeca8570672667a398a11010020bb extends \Twig\Template
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
    <div class=\"swiper-container mySwiper\">
      <div class=\"swiper-wrapper\">
        <div class=\"swiper-slide\">Slide 1</div>
        <div class=\"swiper-slide\">Slide 2</div>
        <div class=\"swiper-slide\">Slide 3</div>
        <div class=\"swiper-slide\">Slide 4</div>
        <div class=\"swiper-slide\">Slide 5</div>
        <div class=\"swiper-slide\">Slide 6</div>
        <div class=\"swiper-slide\">Slide 7</div>
        <div class=\"swiper-slide\">Slide 8</div>
        <div class=\"swiper-slide\">Slide 9</div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  
  </div>
  







  <!--";
        // line 28
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 29
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 30
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 31
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 32
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 33
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 36
            echo "    ";
        }
        // line 37
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 38
        echo ($context["column_right"] ?? null);
        echo "</div>-->
</div>
";
        // line 40
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
        return array (  108 => 40,  103 => 38,  95 => 37,  92 => 36,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  77 => 31,  75 => 30,  71 => 29,  67 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
