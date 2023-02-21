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

/* nice/template/common/header.twig */
class __TwigTemplate_de4a5ecd3aac67039d089f0603807782634f45e51ec2482bc2d37458ca2135ab extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 23
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 23);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 23);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 23);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "<link href=\"catalog/view/theme/nice/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 30
        echo "<link href=\"//fonts.googleapis.com/css?family=Inter:100,100i,300,300i,400,400i,700,700i,900,900i\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<script src=\"catalog/view/theme/nice/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 38);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 41
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container top-container\">
    ";
        // line 47
        echo ($context["menu_top"] ?? null);
        echo "
    
    <div class=\"top-buttons pull-right\">     
        
      ";
        // line 51
        echo ($context["currency"] ?? null);
        echo "
      ";
        // line 52
        echo ($context["language"] ?? null);
        echo "
      
      ";
        // line 60
        echo "        
      <div class=\"account-container top-buttons--item\">
        <div class=\"btn-group dropdown\">
          <a href=\"";
        // line 63
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"btn btn-link dropdown-toggle padding-r-n-xs\" data-toggle=\"dropdown\"><i class=\"fa fa-user-o\"></i> <span class=\"\">";
        echo ($context["nice_text_account"] ?? null);
        echo "</span> <i class=\"fa fa-caret-down\"></i></a>

          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 66
        if (($context["logged"] ?? null)) {
            // line 67
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 68
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 69
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 70
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 71
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 73
            echo "            <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 74
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 76
        echo "          </ul>
        </div>
      </div>      
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div id=\"top-2\">      
      <div class=\"top-2--column logo-column\">
        <div id=\"logo\">
          ";
        // line 87
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
          ";
        } else {
            // line 89
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 91
        echo "        </div>
      </div>
        
      ";
        // line 97
        echo "        
      <div class=\"top-2--column search-column--desktop\">";
        // line 98
        echo ($context["search"] ?? null);
        echo "</div>
            
      <div class=\"top-2--column header-icons-column\">
        <div class=\"header-icons-container text-right\">          
          <div class=\"header-icons-item\">
            <a href=\"";
        // line 103
        echo ($context["contact"] ?? null);
        echo "\">
              <span class=\"fa-stack fa-lg header-icon\">
                <i class=\"fa fa-circle-thin fa-stack-2x\"></i>
                <i class=\"fa fa-phone fa-stack-1x \"></i>
              </span>
              <span class=\"header-icon-label hidden-xs\"><span class=\"hidden-xs hidden-sm hidden-md\"> ";
        // line 108
        echo ($context["telephone"] ?? null);
        echo "</span></span>
            </a>
          </div>                  
          <div class=\"header-icons-item\" style=\"display: none;\">
            <a href=\"";
        // line 112
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\">
              <i class=\"fa fa-heart-o fa-2x fa-lg header-icon\"></i>
              <span class=\"header-icon-label hidden-xs\">";
        // line 114
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
            </a>
          </div>          
          <div class=\"header-icons-item\" style=\"display: none;\">
            <a href=\"";
        // line 118
        echo ($context["compare"] ?? null);
        echo "\">
              <span class=\"fa-stack fa-lg header-icon\">
                <i class=\"fa fa-circle-thin fa-stack-2x\"></i>
                <i class=\"fa fa-exchange fa-stack-1x \"></i>
              </span>
              <span class=\"header-icon-label hidden-xs\">";
        // line 123
        echo ($context["nice_text_compare"] ?? null);
        echo "</span>
            </a>
          </div>          
          ";
        // line 130
        echo "          </div>
      </div>
          
      <div class=\"top-2--column cart-column text-right\">";
        // line 133
        echo ($context["cart"] ?? null);
        echo "</div>
      
    </div>
    <div class=\"search--mobile\"></div>
  </div>
</header>
";
        // line 139
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nice/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 139,  342 => 133,  337 => 130,  331 => 123,  323 => 118,  316 => 114,  311 => 112,  304 => 108,  296 => 103,  288 => 98,  285 => 97,  280 => 91,  272 => 89,  259 => 87,  246 => 76,  239 => 74,  232 => 73,  225 => 71,  219 => 70,  213 => 69,  207 => 68,  200 => 67,  198 => 66,  188 => 63,  183 => 60,  178 => 52,  174 => 51,  167 => 47,  161 => 43,  153 => 41,  149 => 40,  138 => 38,  134 => 37,  131 => 36,  122 => 34,  118 => 33,  113 => 30,  110 => 25,  97 => 23,  93 => 22,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/header.twig", "");
    }
}
