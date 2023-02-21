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
class __TwigTemplate_1cd1f5ae04a05c17e1e160a5c9df5ca1644af13702dd6640b84faca916c3414f extends \Twig\Template
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
      <svg width=\"26px\" height=\"26px\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M4.78571 5H18.2251C19.5903 5 20.5542 6.33739 20.1225 7.63246L18.4558 12.6325C18.1836 13.4491 17.4193 14 16.5585 14H6.07142M4.78571 5L4.74531 4.71716C4.60455 3.73186 3.76071 3 2.76541 3H2M4.78571 5L6.07142 14M6.07142 14L6.25469 15.2828C6.39545 16.2681 7.23929 17 8.23459 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM11 19C11 20.1046 10.1046 21 9 21C7.89543 21 7 20.1046 7 19C7 17.8954 7.89543 17 9 17C10.1046 17 11 17.8954 11 19Z\" stroke=\"#000000\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
</svg>
      <span id=\"cart-quantity\">";
        // line 19
        echo ($context["quantity"] ?? null);
        echo "</span>
    </div>
    <div class=\"cart-total-wrapper\">
      <span id=\"cart-total\" class=\"hidden-xs hidden-sm\">";
        // line 22
        echo ($context["total"] ?? null);
        echo "</span>
    </div>
";
        // line 25
        echo "  </button>
  <ul class=\"cart-dropdown-container dropdown-menu pull-right\">
    ";
        // line 27
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 28
            echo "    <li>
      <table class=\"table table-striped cart-table\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 31
                echo "        <tr>
          <td class=\"text-center\">";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 37)) {
                    echo " <br />
            - <small>";
                    // line 38
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 38);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right cart-table--column-quantity\">x ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39);
                echo "</td>
          <td class=\"text-right\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 40);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"cart-btn-remove\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 45
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 47);
                echo "</td>
          <td class=\"text-right \">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 49);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 50);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn-cart-remove\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 59
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 60);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 61);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 65
            echo ($context["cart"] ?? null);
            echo "\" class=\"margin-r-space-2x\"><strong>";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 69
            echo "    <li>
      <p class=\"text-center\">";
            // line 70
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 73
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
        return array (  230 => 73,  224 => 70,  221 => 69,  208 => 65,  205 => 64,  196 => 61,  192 => 60,  189 => 59,  185 => 58,  178 => 53,  167 => 50,  163 => 49,  158 => 47,  154 => 45,  149 => 44,  138 => 41,  134 => 40,  130 => 39,  122 => 38,  117 => 37,  114 => 36,  105 => 35,  98 => 34,  92 => 33,  78 => 32,  75 => 31,  71 => 30,  67 => 28,  65 => 27,  61 => 25,  56 => 22,  50 => 19,  44 => 15,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/cart.twig", "");
    }
}
