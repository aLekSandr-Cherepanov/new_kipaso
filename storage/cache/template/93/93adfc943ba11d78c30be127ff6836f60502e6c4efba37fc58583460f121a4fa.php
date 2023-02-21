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

/* nice/template/block/productpage_products_related.twig */
class __TwigTemplate_e6327c9b3f74a6fecb07cbfb04ca14f1d6bc1ea8059aabefc5eed443be4d0651 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "<div class=\"section section--productlist\">
  <div class=\"section--title-wrapper\"><p class=\"section--title\">";
            // line 3
            echo ($context["text_related"] ?? null);
            echo "</p></div>
  <div class=\"row productlist-row\"> ";
            // line 4
            $context["i"] = 0;
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                echo "  <div class=\"product-layout ";
                if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_grid_hover_effect", [], "any", false, false, false, 6)) {
                    echo "grid-hover-effect";
                }
                echo " product-grid col-md-2 col-sm-6 ";
                if (("1" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_cols_on_mobile", [], "any", false, false, false, 6))) {
                    echo "col-xs-12";
                } else {
                    echo "col-xs-6";
                }
                echo "\">
    <div class=\"product-thumb transition\">
      <div class=\"product-thumb--image ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_image_margins", [], "any", false, false, false, 8)) {
                    echo "-has-margins";
                }
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"product-thumb--info\">
        ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "        <div class=\"product-thumb--rating\">
          ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 13
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 13) < $context["i"])) {
                            echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 14
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "        </div>
        ";
                }
                // line 17
                echo "        <a class=\"product-thumb--name ";
                if (("bold" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_name_font_weight", [], "any", false, false, false, 17))) {
                    echo "-bold-sm";
                }
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                echo "</a>
        ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_description", [], "any", false, false, false, 18)) {
                    echo "<p class=\"product-thumb--description ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_description_on_mobile", [], "any", false, false, false, 18)) {
                        echo "hidden-xs hidden-sm";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 18);
                    echo "</p>";
                }
                // line 19
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "        <div class=\"price\">
          ";
                    // line 21
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "          <span class=\"price-value ";
                        if (("bold" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_price_font_weight", [], "any", false, false, false, 22))) {
                            echo "-bold";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22);
                        echo "</span>
          ";
                    } else {
                        // line 24
                        echo "          <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
                        echo "</span><span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24);
                        echo "</span>
          ";
                    }
                    // line 26
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "          <div  class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 27);
                        echo "</div>
          ";
                    }
                    // line 29
                    echo "        </div>
        ";
                }
                // line 31
                echo "        <div class=\"product-thumb--hidden-wrapper\">
          <button type=\"button\" class=\"btn btn-accent product-thumb--button-buy -grid-hover-effect-hidden\" onclick=\"cart.add('";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 32);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 32);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
          <div class=\"product-thumb--compare\" data-toggle=\"tooltip\" title=\"";
                // line 33
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 33);
                echo "');\"><i class=\"fa fa-exchange\"></i></div>
          <div class=\"product-thumb--wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 34
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 34);
                echo "');\"><i class=\"fa fa-heart-o\"></i></div>
        </div>
      </div>
    </div>
  </div>
  ";
                // line 39
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 40
                    echo "  <div class=\"clearfix visible-md visible-sm\"></div>
  ";
                } elseif ((                // line 41
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 42
                    echo "  <div class=\"clearfix visible-md\"></div>
  ";
                } elseif ((((                // line 43
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 44
                    echo "  <div class=\"clearfix visible-md\"></div>
  ";
                }
                // line 46
                echo "  ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 47
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "nice/template/block/productpage_products_related.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 47,  213 => 46,  209 => 44,  207 => 43,  204 => 42,  202 => 41,  199 => 40,  197 => 39,  187 => 34,  181 => 33,  173 => 32,  170 => 31,  166 => 29,  158 => 27,  155 => 26,  147 => 24,  137 => 22,  135 => 21,  132 => 20,  129 => 19,  119 => 18,  108 => 17,  104 => 15,  98 => 14,  91 => 13,  87 => 12,  84 => 11,  82 => 10,  67 => 8,  53 => 6,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/block/productpage_products_related.twig", "");
    }
}
