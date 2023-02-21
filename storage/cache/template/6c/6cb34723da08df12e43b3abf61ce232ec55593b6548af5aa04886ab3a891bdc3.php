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

/* nice/template/block/productpage_review_form_modal.twig */
class __TwigTemplate_4b1a6b920217f8c16d89bef764e42fa41c40559170eec56057ea4f42c6f14f4d extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"review-form--wrapper--modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <p class=\"modal-title\">";
        // line 6
        echo ($context["text_write"] ?? null);
        echo "</p>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" id=\"form-review--modal\">
          ";
        // line 10
        if (($context["review_guest"] ?? null)) {
            // line 11
            echo "            <div class=\"form-group required\">
              <div class=\"col-sm-12\">
                <label class=\"control-label\" for=\"input-name\">";
            // line 13
            echo ($context["entry_name"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"name\" value=\"";
            // line 14
            echo ($context["customer_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group required\">
              <div class=\"col-sm-12\">
                <label class=\"control-label\" for=\"input-review\">";
            // line 19
            echo ($context["entry_review"] ?? null);
            echo "</label>
                <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                <div class=\"help-block\">";
            // line 21
            echo ($context["text_note"] ?? null);
            echo "</div>
              </div>
            </div>
            <div class=\"form-group required\">
              <div class=\"col-sm-12\">
                <!-- star-rating start -->
                <div class=\"form-review--rating-stars\">
                  <label class=\"control-label\">";
            // line 28
            echo ($context["entry_rating"] ?? null);
            echo "</label>
                  <div class=\"form-review--rating-stars-container\">
                    <input id=\"rating-5--modal\" type=\"radio\" name=\"rating\" value=\"5\" />
                    <label class=\"fa fa-stack\" for=\"rating-5--modal\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </label>
                    <input id=\"rating-4--modal\" type=\"radio\" name=\"rating\" value=\"4\" />
                    <label class=\"fa fa-stack\" for=\"rating-4--modal\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </label>
                    <input id=\"rating-3--modal\" type=\"radio\" name=\"rating\" value=\"3\" />
                    <label class=\"fa fa-stack\" for=\"rating-3--modal\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </label>
                    <input id=\"rating-2--modal\" type=\"radio\" name=\"rating\" value=\"2\" />
                    <label class=\"fa fa-stack\" for=\"rating-2--modal\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </label>
                    <input id=\"rating-1--modal\" type=\"radio\" name=\"rating\" value=\"1\" />
                    <label class=\"fa fa-stack\" for=\"rating-1--modal\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </label>
                  </div>
                </div>
                <!-- star-rating end -->
              </div>
            </div>
            ";
            // line 60
            echo ($context["captcha"] ?? null);
            echo "
            
          ";
        } else {
            // line 63
            echo "            ";
            echo ($context["text_login"] ?? null);
            echo "
          ";
        }
        // line 65
        echo "        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" id=\"button-review--modal\" data-loading-text=\"";
        // line 68
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-success\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


";
    }

    public function getTemplateName()
    {
        return "nice/template/block/productpage_review_form_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 68,  131 => 65,  125 => 63,  119 => 60,  84 => 28,  74 => 21,  69 => 19,  61 => 14,  57 => 13,  53 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/block/productpage_review_form_modal.twig", "");
    }
}
