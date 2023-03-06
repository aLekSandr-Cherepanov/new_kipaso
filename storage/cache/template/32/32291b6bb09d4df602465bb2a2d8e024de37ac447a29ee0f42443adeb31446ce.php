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

/* nice/template/block/productpage_review_form.twig */
class __TwigTemplate_b98b325869f8a7d4346c710570f4e97f4a07ea52cf71ed1954536f4bdcc4ff14 extends \Twig\Template
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
        echo "<form id=\"form-review\" class=\"form-review form-horizontal\">
<p class=\"block--title\">";
        // line 2
        echo ($context["text_write"] ?? null);
        echo "</p>
";
        // line 3
        if (($context["review_guest"] ?? null)) {
            // line 4
            echo "  <div class=\"form-group required\">
    <div class=\"col-sm-12\">
      <label class=\"control-label\" for=\"input-name\">";
            // line 6
            echo ($context["entry_name"] ?? null);
            echo "</label>
      <input type=\"text\" name=\"name\" value=\"";
            // line 7
            echo ($context["customer_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group required\">
    <div class=\"col-sm-12\">
      <label class=\"control-label\" for=\"input-review\">";
            // line 12
            echo ($context["entry_review"] ?? null);
            echo "</label>
      <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
      <div class=\"help-block\">";
            // line 14
            echo ($context["text_note"] ?? null);
            echo "</div>
    </div>
  </div>
  <div class=\"form-group required\">
    <div class=\"col-sm-12\">
      <!-- star-rating start -->
      <div class=\"form-review--rating-stars\">
        <label class=\"control-label\">";
            // line 21
            echo ($context["entry_rating"] ?? null);
            echo "</label>
        <div class=\"form-review--rating-stars-container\">
          <input id=\"rating-5\" type=\"radio\" name=\"rating\" value=\"5\" />
          <label class=\"fa fa-stack\" for=\"rating-5\">
            <i class=\"fa fa-star fa-stack-1x\"></i>
            <i class=\"fa fa-star-o fa-stack-1x\"></i>
          </label>
          <input id=\"rating-4\" type=\"radio\" name=\"rating\" value=\"4\" />
          <label class=\"fa fa-stack\" for=\"rating-4\">
            <i class=\"fa fa-star fa-stack-1x\"></i>
            <i class=\"fa fa-star-o fa-stack-1x\"></i>
          </label>
          <input id=\"rating-3\" type=\"radio\" name=\"rating\" value=\"3\" />
          <label class=\"fa fa-stack\" for=\"rating-3\">
            <i class=\"fa fa-star fa-stack-1x\"></i>
            <i class=\"fa fa-star-o fa-stack-1x\"></i>
          </label>
          <input id=\"rating-2\" type=\"radio\" name=\"rating\" value=\"2\" />
          <label class=\"fa fa-stack\" for=\"rating-2\">
            <i class=\"fa fa-star fa-stack-1x\"></i>
            <i class=\"fa fa-star-o fa-stack-1x\"></i>
          </label>
          <input id=\"rating-1\" type=\"radio\" name=\"rating\" value=\"1\" />
          <label class=\"fa fa-stack\" for=\"rating-1\">
            <i class=\"fa fa-star fa-stack-1x\"></i>
            <i class=\"fa fa-star-o fa-stack-1x\"></i>
          </label>
        </div>
      </div>
      <!-- star-rating end -->
    </div>
  </div>
  ";
            // line 53
            echo ($context["captcha"] ?? null);
            echo "
  <div class=\"buttons clearfix\">
    <div class=\"pull-right\">
      <button type=\"button\" id=\"button-review\" data-loading-text=\"";
            // line 56
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-success\">";
            echo ($context["button_continue"] ?? null);
            echo "</button>
    </div>
  </div>
";
        } else {
            // line 60
            echo "  ";
            echo ($context["text_login"] ?? null);
            echo "
";
        }
        // line 62
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "nice/template/block/productpage_review_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 62,  127 => 60,  118 => 56,  112 => 53,  77 => 21,  67 => 14,  62 => 12,  54 => 7,  50 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/block/productpage_review_form.twig", "");
    }
}
