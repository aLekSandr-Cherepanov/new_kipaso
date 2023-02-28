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
class __TwigTemplate_96b424b5eda9de3d162b919d2198f0e588eaa61808dee678f91f699df019cefa extends \Twig\Template
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
  <div id=\"slideshow";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\"> ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "      <div class=\"swiper-slide text-center\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo " </div>
  </div>
  <div class=\"swiper-pagination slideshow";
        // line 10
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 17
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 20
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
  </div>
</div>
  



  <!--";
        // line 36
        echo ($context["block_home_top"] ?? null);
        echo "
  <div class=\"row\">";
        // line 37
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 38
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 39
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 40
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 41
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 42
            echo "    ";
        } else {
            // line 43
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 44
            echo "    ";
        }
        // line 45
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 46
        echo ($context["column_right"] ?? null);
        echo "</div>-->
</div>



<script type=\"text/javascript\"><!--
  \$('#home-slider').swiper({
  \tmode: 'horizontal',
  \tslidesPerView: 1,
  \tpagination: '.slideshow";
        // line 55
        echo ($context["module"] ?? null);
        echo "',
  \tpaginationClickable: true,
    spaceBetween: 30,
  \tloop: true
  });
//--></script>
";
        // line 61
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
        return array (  171 => 61,  162 => 55,  150 => 46,  142 => 45,  139 => 44,  136 => 43,  133 => 42,  130 => 41,  127 => 40,  124 => 39,  122 => 38,  118 => 37,  114 => 36,  95 => 20,  89 => 17,  79 => 10,  75 => 8,  52 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
