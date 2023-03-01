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

/* nice/template/product/category.twig */
class __TwigTemplate_143f4ca9efb9b4a63b9a1f85d56c8c41c08b6f3b842b535bedc9947248cf9a3d extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 18
        if (($context["categories"] ?? null)) {
            // line 19
            echo "      <p class=\"h4\">";
            echo ($context["text_refine"] ?? null);
            echo "</p>
      ";
            // line 20
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 21
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 25
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 25);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 31
                echo "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 32
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 35
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 35);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 35);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "</div>
      <br/>
      ";
            }
            // line 42
            echo "      ";
        }
        // line 43
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 44
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 47
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 48
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 52
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-md\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 56
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 59
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 59) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 60
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 60);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 60);
                    echo "</option>
              ";
                } else {
                    // line 62
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 62);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 62);
                    echo "</option>
              ";
                }
                // line 64
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-md\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 70
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 73
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 73) == ($context["limit"] ?? null))) {
                    // line 74
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 74);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 74);
                    echo "</option>
              ";
                } else {
                    // line 76
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 76);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 76);
                    echo "</option>
              ";
                }
                // line 78
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row productlist-row\">
        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 85
                echo "        <div class=\"product-layout ";
                if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_grid_hover_effect", [], "any", false, false, false, 85)) {
                    echo "grid-hover-effect";
                }
                echo " product-grid col-md-4 col-sm-6 ";
                if (("1" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_cols_on_mobile", [], "any", false, false, false, 85))) {
                    echo "col-xs-12";
                } else {
                    echo "col-xs-6";
                }
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"product-thumb--image ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_image_margins", [], "any", false, false, false, 87)) {
                    echo "-has-margins";
                }
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 87);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 87);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"product-thumb--info\">
              ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "              <div class=\"product-thumb--rating\">
                ";
                    // line 91
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 92
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 92) < $context["i"])) {
                            echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 93
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "              </div>
              ";
                }
                // line 96
                echo "              <a class=\"product-thumb--name ";
                if (("bold" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_name_font_weight", [], "any", false, false, false, 96))) {
                    echo "-bold-sm";
                }
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 96);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "</a>
              ";
                // line 97
                if (twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_description", [], "any", false, false, false, 97)) {
                    echo "<p class=\"product-thumb--description ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_description_on_mobile", [], "any", false, false, false, 97)) {
                        echo "hidden-xs hidden-sm";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 97);
                    echo "</p>";
                }
                // line 98
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "              <div class=\"price\">
                ";
                    // line 100
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 100)) {
                        // line 101
                        echo "                <span class=\"price-value ";
                        if (("bold" == twig_get_attribute($this->env, $this->source, ($context["nice"] ?? null), "productlist_price_font_weight", [], "any", false, false, false, 101))) {
                            echo "-bold";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101);
                        echo "</span>
                ";
                    } else {
                        // line 103
                        echo "                <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        echo "</span><span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 103);
                        echo "</span>
                ";
                    }
                    // line 105
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 105)) {
                        // line 106
                        echo "                <div  class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106);
                        echo "</div>
                ";
                    }
                    // line 108
                    echo "              </div>
              ";
                }
                // line 110
                echo "              <div class=\"product-thumb--hidden-wrapper\">
                <button type=\"button\" class=\"btn btn-accent product-thumb--button-buy -grid-hover-effect-hidden\" onclick=\"cart.add('";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 111);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <div class=\"product-thumb--compare\" data-toggle=\"tooltip\" title=\"";
                // line 112
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                echo "');\"><i class=\"fa fa-exchange\"></i></div>
                <div class=\"product-thumb--wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 113
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
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
            // line 119
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 121
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 122
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 125
        echo "        
      ";
        // line 126
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 127
            echo "      <hr>
      <div class=\"row\"> ";
            // line 128
            if (($context["thumb"] ?? null)) {
                // line 129
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 131
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 132
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 133
            echo "</div>
      
      ";
        }
        // line 136
        echo "        
      ";
        // line 137
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 138
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 140
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 143
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 144
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 146
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "nice/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 146,  505 => 144,  500 => 143,  492 => 140,  486 => 138,  484 => 137,  481 => 136,  476 => 133,  470 => 132,  467 => 131,  457 => 129,  455 => 128,  452 => 127,  450 => 126,  447 => 125,  441 => 122,  437 => 121,  433 => 119,  419 => 113,  413 => 112,  405 => 111,  402 => 110,  398 => 108,  390 => 106,  387 => 105,  379 => 103,  369 => 101,  367 => 100,  364 => 99,  361 => 98,  351 => 97,  340 => 96,  336 => 94,  330 => 93,  323 => 92,  319 => 91,  316 => 90,  314 => 89,  299 => 87,  285 => 85,  281 => 84,  274 => 79,  268 => 78,  260 => 76,  252 => 74,  249 => 73,  245 => 72,  240 => 70,  233 => 65,  227 => 64,  219 => 62,  211 => 60,  208 => 59,  204 => 58,  199 => 56,  190 => 52,  183 => 48,  179 => 47,  174 => 44,  171 => 43,  168 => 42,  163 => 39,  155 => 37,  144 => 35,  140 => 34,  136 => 32,  131 => 31,  125 => 27,  114 => 25,  110 => 24,  105 => 21,  103 => 20,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/product/category.twig", "");
    }
}
