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

/* nice/template/common/nice_megamenu.twig */
class __TwigTemplate_d7a9b10bd2b43bc6608e197e33af66753f5ab4a47fe74f4701153727d5dd59aa extends \Twig\Template
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
        echo "<div class=\"container\">
  <button class=\"main-nav-trigger\"><div></div></button>
  <nav role=\"navigation\" class=\"main-nav-wrap main-nav-wrap--in-container\">
    ";
        // line 5
        echo "    <ul class=\"main-nav\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_columned"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, $context["category"], "nice_menu_category_columns", [], "any", false, false, false, 7) < 2) &&  !twig_get_attribute($this->env, $this->source, $context["category"], "nmm_promo_status", [], "any", false, false, false, 7))) {
                // line 8
                echo "        ";
                $context["class"] = "one-column";
                // line 9
                echo "      ";
            } else {
                // line 10
                echo "        ";
                $context["class"] = "";
                // line 11
                echo "      ";
            }
            // line 12
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12)) {
                // line 13
                echo "      <li class=\"has-subnav ";
                echo ($context["class"] ?? null);
                echo "\">
        <a href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                echo "\" class=\"has-subnav-link\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                echo "</a>
        <ul class=\"main-dropdown subnav\">
          
          ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["column_i"] => $context["column"]) {
                    // line 18
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["column"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 19
                        echo "          
          ";
                        // line 20
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "grandchildren", [], "any", false, false, false, 20)) {
                            // line 21
                            echo "          <li class=\"has-subnav\" data-nav=\"";
                            echo $context["column_i"];
                            echo "\">
            <a href=\"";
                            // line 22
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 22);
                            echo "\" class=\"has-subnav-link subnav-header\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 22);
                            echo "</a>           
            <ul class=\"subnav\">
              ";
                            // line 24
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grandchildren", [], "any", false, false, false, 24));
                            foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                                // line 25
                                echo "              <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["grandchild"], "href", [], "any", false, false, false, 25);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["grandchild"], "name", [], "any", false, false, false, 25);
                                echo "</a></li>
              ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 27
                            echo "            </ul>
          </li>
          ";
                        } else {
                            // line 30
                            echo "          <li class=\"has-subnav\" data-nav=\"";
                            echo $context["column_i"];
                            echo "\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 30);
                            echo "\" class=\"subnav-header\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 30);
                            echo "</a></li>
          ";
                        }
                        // line 32
                        echo "          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column_i'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "          
          ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["column_i"] => $context["column"]) {
                    // line 37
                    echo "            <li class=\"nav-col\" data-col=\"";
                    echo $context["column_i"];
                    echo "\"><ul class=\"nav\"></ul></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column_i'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "          
          ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["category"], "nmm_promo_status", [], "any", false, false, false, 40)) {
                    echo " 
          <li class=\"subnav-promo\">
            ";
                    // line 42
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "nmm_image", [], "any", false, false, false, 42)) {
                        // line 43
                        echo "            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "nmm_image", [], "any", false, false, false, 43);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "nmm_alt", [], "any", false, false, false, 43);
                        echo "\" class=\"promo-img img-responsive\">
            ";
                    }
                    // line 45
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "nmm_title", [], "any", false, false, false, 45) || twig_get_attribute($this->env, $this->source, $context["category"], "nmm_text", [], "any", false, false, false, 45)) || twig_get_attribute($this->env, $this->source, $context["category"], "nmm_anchor", [], "any", false, false, false, 45))) {
                        // line 46
                        echo "            <div class=\"promo-body\">
              ";
                        // line 47
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "nmm_title", [], "any", false, false, false, 47)) {
                            echo "<p class=\"subnav-promo-header\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "nmm_title", [], "any", false, false, false, 47);
                            echo "</p>";
                        }
                        // line 48
                        echo "              ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "nmm_text", [], "any", false, false, false, 48)) {
                            echo "<div class=\"subnav-promo-text\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "nmm_text", [], "any", false, false, false, 48);
                            echo "</div>";
                        }
                        // line 49
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["category"], "nmm_link", [], "any", false, false, false, 49) && twig_get_attribute($this->env, $this->source, $context["category"], "nmm_anchor", [], "any", false, false, false, 49))) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "nmm_link", [], "any", false, false, false, 49);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "nmm_anchor", [], "any", false, false, false, 49);
                            echo "</a>";
                        }
                        // line 50
                        echo "            </div>
            ";
                    }
                    // line 52
                    echo "          </li>
          ";
                }
                // line 53
                echo "          
          
        </ul>        
      </li>
      ";
            } else {
                // line 58
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 58);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58);
                echo "</a></li>
      ";
            }
            // line 60
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      
    </ul>
    ";
        // line 64
        echo "  </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "nice/template/common/nice_megamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 64,  240 => 61,  234 => 60,  226 => 58,  219 => 53,  215 => 52,  211 => 50,  202 => 49,  195 => 48,  189 => 47,  186 => 46,  183 => 45,  175 => 43,  173 => 42,  168 => 40,  165 => 39,  156 => 37,  152 => 36,  149 => 35,  143 => 34,  136 => 32,  126 => 30,  121 => 27,  110 => 25,  106 => 24,  99 => 22,  94 => 21,  92 => 20,  89 => 19,  84 => 18,  80 => 17,  72 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  42 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/nice_megamenu.twig", "");
    }
}
