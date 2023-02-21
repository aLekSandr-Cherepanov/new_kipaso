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

/* nice/template/common/cart.twig */
class __TwigTemplate_68d2a893861f247ea6aceec2ece7052b84dcdc2e3da6180ba0a65fab6d43d969 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"dropdown\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"cart-button dropdown-toggle\">
";
        // line 15
        echo "    <div class=\"cart-quantity-wrapper\">
      <i class=\"fa fa-shopping-bag cart-icon\"></i>
      <span id=\"cart-quantity\">";
        // line 17
        echo ($context["quantity"] ?? null);
        echo "</span>
    </div>
    <div class=\"cart-total-wrapper\">
      <span id=\"cart-total\" class=\"hidden-xs hidden-sm\">";
        // line 20
        echo ($context["total"] ?? null);
        echo "</span>
    </div>
";
        // line 23
        echo "  </button>
  <ul class=\"cart-dropdown-container dropdown-menu pull-right\">
    ";
        // line 25
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 26
            echo "    <li>
      <table class=\"table table-striped cart-table\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "        <tr>
          <td class=\"text-center\">";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 33
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 33);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 33);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 35)) {
                    echo " <br />
            - <small>";
                    // line 36
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 36);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right cart-table--column-quantity\">x ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37);
                echo "</td>
          <td class=\"text-right\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 39);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"cart-btn-remove\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 43
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 45);
                echo "</td>
          <td class=\"text-right \">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 47);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 48);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn-cart-remove\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 57
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 58);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 59);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 63
            echo ($context["cart"] ?? null);
            echo "\" class=\"margin-r-space-2x\"><strong><i class=\"fa fa-shopping-bag\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 67
            echo "    <li>
      <p class=\"text-center\">";
            // line 68
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 71
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "nice/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 71,  222 => 68,  219 => 67,  206 => 63,  203 => 62,  194 => 59,  190 => 58,  187 => 57,  183 => 56,  176 => 51,  165 => 48,  161 => 47,  156 => 45,  152 => 43,  147 => 42,  136 => 39,  132 => 38,  128 => 37,  120 => 36,  115 => 35,  112 => 34,  103 => 33,  96 => 32,  90 => 31,  76 => 30,  73 => 29,  69 => 28,  65 => 26,  63 => 25,  59 => 23,  54 => 20,  48 => 17,  44 => 15,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/cart.twig", "");
    }
}
