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

/* nice/template/common/search.twig */
class __TwigTemplate_ba171f0d7da93ae1f766eb608973d94fb01e2c178b8aa16f9af420e9930e336b extends \Twig\Template
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
        echo "<div id=\"search\" class=\"search\">
  <select name=\"category_id\" class=\"search--category-selector\">
    <option value=\"0\">";
        // line 3
        echo ($context["nice_text_search_category"] ?? null);
        echo "</option>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 5);
            echo "\" ";
            if ((($context["selected_category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 5))) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
            echo "</option>
    
      ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                // line 8
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 9
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 9);
                    echo "\" ";
                    if ((($context["selected_category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 9))) {
                        echo " ";
                        echo "selected";
                        echo " ";
                    }
                    echo "> &nbsp;- ";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 9);
                    echo "</option>
        ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, $context["child"], "grandchildren", [], "any", false, false, false, 10)) {
                        // line 11
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grandchildren", [], "any", false, false, false, 11));
                        foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                            // line 12
                            echo "            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["grandchild"], "category_id", [], "any", false, false, false, 12);
                            echo "\" ";
                            if ((($context["selected_category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["grandchild"], "category_id", [], "any", false, false, false, 12))) {
                                echo " ";
                                echo "selected";
                                echo " ";
                            }
                            echo "> &nbsp; -- ";
                            echo twig_get_attribute($this->env, $this->source, $context["grandchild"], "name", [], "any", false, false, false, 12);
                            echo "</option>
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 14
                        echo "        ";
                    }
                    // line 15
                    echo "        
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "      ";
            }
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </select>
  <input type=\"search\" name=\"search\" value=\"";
        // line 20
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control search--input\" />
  <button type=\"button\" class=\"search--button\" id=\"search-btn\"><i class=\"fa fa-search\"></i></button>
</div>";
    }

    public function getTemplateName()
    {
        return "nice/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 20,  126 => 19,  120 => 18,  117 => 17,  110 => 15,  107 => 14,  90 => 12,  85 => 11,  83 => 10,  70 => 9,  65 => 8,  63 => 7,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/search.twig", "");
    }
}
