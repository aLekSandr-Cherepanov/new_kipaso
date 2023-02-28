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
class __TwigTemplate_bc3fb1f34877801f987359187d6a29f9dafb4b3975a5b1975445e33d49a9a545 extends \Twig\Template
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
  



 
</div>



<script type=\"text/javascript\"><!--
  \$('home-slider').swiper({
  \tmode: 'horizontal',
  \tslidesPerView: 1,
  \tpagination: '.slideshow";
        // line 29
        echo ($context["module"] ?? null);
        echo "',
  \tpaginationClickable: true,
    spaceBetween: 30,
  \tloop: true
  });
//--></script>
";
        // line 35
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
        return array (  80 => 35,  71 => 29,  52 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/home.twig", "");
    }
}
