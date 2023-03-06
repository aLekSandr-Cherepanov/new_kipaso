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

/* nice/template/block/productpage_conversion.twig */
class __TwigTemplate_3e2e26815c56172950abd7600e081a402989585603a283b549af265bbf7cec09 extends \Twig\Template
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
        echo "<div class=\"product-conversion-block\">
  <div class=\"row\">
  ";
        // line 3
        if (($context["price"] ?? null)) {
            // line 4
            echo "    <ul class=\"list-unstyled col-xs-6\">
      ";
            // line 5
            if ( !($context["special"] ?? null)) {
                // line 6
                echo "        <li>
          <h2 class=\"price\">";
                // line 7
                echo ($context["price"] ?? null);
                echo "</h2>
        </li>
      ";
            } else {
                // line 10
                echo "        <li><span class=\"price price-old\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
        <li>
          <h2 class=\"price-special\">";
                // line 12
                echo ($context["special"] ?? null);
                echo "</h2>
        </li>
      ";
            }
            // line 15
            echo "      ";
            if (($context["tax"] ?? null)) {
                // line 16
                echo "        <li class=\"tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
        ";
            }
            // line 18
            echo "        ";
            if (($context["points"] ?? null)) {
                // line 19
                echo "        <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
        ";
            }
            // line 21
            echo "        ";
            if (($context["discounts"] ?? null)) {
                // line 22
                echo "        <li>
          <hr>
        </li>
        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 26
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 26);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 26);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "        ";
            }
            // line 29
            echo "    </ul>
  ";
        }
        // line 31
        echo "
  <div class=\"col-xs-6\">
    <div class=\"btn-group pull-right\">
      <div class=\"product-page--compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 34
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></div>
      <div class=\"product-page--wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 35
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart-o\"></i></div>
    </div>
  </div>


    <div class=\"col-xs-12\">
    <div class=\"form-group row\">
      ";
        // line 42
        if ((($context["minimum"] ?? null) > 1)) {
            // line 43
            echo "      <div class=\"col-sm-12\"><div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div></div>
      ";
        }
        // line 45
        echo "
      <label class=\"control-label col-sm-2 input-quantity--label\" id=\"input-quantity--label\" for=\"input-quantity\">";
        // line 46
        echo ($context["entry_qty"] ?? null);
        echo "</label>
      <div class=\"col-sm-4 input-quantity--container\">
        <div class=\"input-group\">
          <div class=\"input-group-btn\"><button id=\"input-quantity--minus\">–</button></div>
          <input class=\"form-control\" type=\"text\" name=\"quantity\" id=\"input-quantity\" size=\"1\" value=\"";
        // line 50
        echo ($context["minimum"] ?? null);
        echo "\" />
          <div class=\"input-group-btn\"><button id=\"input-quantity--pluse\">+</button></div> 
          <input type=\"hidden\" name=\"product_id\" size=\"1\" value=\"";
        // line 52
        echo ($context["product_id"] ?? null);
        echo "\" />
        </div>
      </div>
      <div class=\"col-sm-6\">
        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 56
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-accent btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
      </div>
    </div>
    <div id=\"add-to-cart-error\"></div>
  </div>

  ";
        // line 62
        if ((($context["options"] ?? null) || ($context["recurrings"] ?? null))) {
            // line 63
            echo "  <div class=\"col-xs-12\">
    ";
            // line 64
            echo ($context["block_options"] ?? null);
            echo "
    ";
            // line 65
            if (($context["recurrings"] ?? null)) {
                // line 66
                echo "    <hr>
    <h3>";
                // line 67
                echo ($context["text_payment_recurring"] ?? null);
                echo "</h3>
    <div class=\"form-group required\">
      <select name=\"recurring_id\" class=\"form-control\">
        <option value=\"\">";
                // line 70
                echo ($context["text_select"] ?? null);
                echo "</option>
        ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 72
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 72);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 72);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "      </select>
      <div class=\"help-block\" id=\"recurring-description\"></div>
    </div>
    ";
            }
            // line 78
            echo "
  </div>           
  ";
        }
        // line 80
        echo "                    

</div>
</div><!-- /product-conversion-block -->";
    }

    public function getTemplateName()
    {
        return "nice/template/block/productpage_conversion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 80,  230 => 78,  224 => 74,  213 => 72,  209 => 71,  205 => 70,  199 => 67,  196 => 66,  194 => 65,  190 => 64,  187 => 63,  185 => 62,  174 => 56,  167 => 52,  162 => 50,  155 => 46,  152 => 45,  146 => 43,  144 => 42,  132 => 35,  126 => 34,  121 => 31,  117 => 29,  114 => 28,  103 => 26,  99 => 25,  94 => 22,  91 => 21,  83 => 19,  80 => 18,  72 => 16,  69 => 15,  63 => 12,  57 => 10,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/block/productpage_conversion.twig", "");
    }
}
