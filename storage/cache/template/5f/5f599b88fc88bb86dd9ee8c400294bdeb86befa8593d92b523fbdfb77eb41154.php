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

/* nice/template/extension/module/featured.twig */
class __TwigTemplate_a670e5f1b79e81cae8623253031a8f6841d306292f6d50617b6b1339f53085eb extends \Twig\Template
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
        echo "<div class=\"section section--productlist\">
  <div class=\"section--title-wrapper\"><p class=\"section--title\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</p></div>
  <div class=\"row productlist-row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "    <div class=\"product-layout ";
            if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_grid_hover_effect", [], "any", false, false, false, 5)) {
                echo "grid-hover-effect";
            }
            echo " product-grid col-md-3 col-sm-6 ";
            if (("1" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_cols_on_mobile", [], "any", false, false, false, 5))) {
                echo "col-xs-12";
            } else {
                echo "col-xs-6";
            }
            echo "\">
      <div class=\"product-thumb transition\">
        <div class=\"product-thumb--image ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_image_margins", [], "any", false, false, false, 7)) {
                echo "-has-margins";
            }
            echo "\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive\" /></a></div>
        <div class=\"product-thumb--info\">
          ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 9)) {
                // line 10
                echo "            <div class=\"product-thumb--rating\">
              ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 12
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 12) < $context["i"])) {
                        echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                    // line 13
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            </div>
          ";
            }
            // line 16
            echo "          <a class=\"product-thumb--name ";
            if (("bold" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_name_font_weight", [], "any", false, false, false, 16))) {
                echo "-bold-sm";
            }
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
            echo "</a>
          ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_description", [], "any", false, false, false, 17)) {
                echo "<p class=\"product-thumb--description ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_description_on_mobile", [], "any", false, false, false, 17)) {
                    echo "hidden-xs hidden-sm";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 17);
                echo "</p>";
            }
            // line 18
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18)) {
                // line 19
                echo "          <div class=\"price\">
            ";
                // line 20
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "            <span class=\"price-value ";
                    if (("bold" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_price_font_weight", [], "any", false, false, false, 21))) {
                        echo "-bold";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                    echo "</span>
            ";
                } else {
                    // line 23
                    echo "            <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
                    echo "</span><span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23);
                    echo "</span>
            ";
                }
                // line 25
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "            <div  class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 26);
                    echo "</div>
            ";
                }
                // line 28
                echo "          </div>
          ";
            }
            // line 30
            echo "          <div>
            <button type=\"button\" class=\"btn btn-accent product-thumb--button-buy -grid-hover-effect-hidden\" onclick=\"cart.add('";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 31);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
            <div class=\"product-thumb--compare\" data-toggle=\"tooltip\" title=\"";
            // line 32
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 32);
            echo "');\"><i class=\"fa fa-exchange\"></i></div>
        <div class=\"product-thumb--wishlist\" data-toggle=\"tooltip\" title=\"";
            // line 33
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 33);
            echo "');\"><i class=\"fa fa-heart-o\"></i></div>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "nice/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 39,  181 => 33,  175 => 32,  169 => 31,  166 => 30,  162 => 28,  154 => 26,  151 => 25,  143 => 23,  133 => 21,  131 => 20,  128 => 19,  125 => 18,  115 => 17,  104 => 16,  100 => 14,  94 => 13,  87 => 12,  83 => 11,  80 => 10,  78 => 9,  63 => 7,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/extension/module/featured.twig", "");
    }
}
