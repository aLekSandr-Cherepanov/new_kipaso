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

/* nice/template/common/footer.twig */
class __TwigTemplate_e49cb2870bf3422b43c856ba6d9dc40459e031f465d5826195646858625756d6 extends \Twig\Template
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
        echo "<footer class=\"py-5\">
    <div class=\"row\">
      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Section</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Главная</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Каталог</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">О Нас</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Контакты</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Новости</a></li>
        </ul>
      </div>

      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Section</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Главная</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Каталог</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">О Нас</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Контакты</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Новости</a></li>
        </ul>
      </div>

      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Section</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Главная</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Каталог</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">О Нас</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Контакты</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Новости</a></li>
        </ul>
      </div>

      <div class=\"col-md-5 offset-md-1 mb-3\">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class=\"d-flex flex-column flex-sm-row w-100 gap-2\">
            <label for=\"newsletter1\" class=\"visually-hidden\">Email address</label>
            <input id=\"newsletter1\" type=\"text\" class=\"form-control\" placeholder=\"Email address\">
            <button class=\"btn btn-primary\" type=\"button\">Подписаться</button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top\">
      <p>© 2004 - 2023 Компания КИПАСО - оборудование КИП и А, промышленная автоматика, манометры Волгоград.</p>
      <ul class=\"list-unstyled d-flex\">
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#twitter\"></use></svg></a></li>
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#instagram\"></use></svg></a></li>
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#facebook\"></use></svg></a></li>
      </ul>
    </div>
  </footer>
<!-- Report Modal -->
<div id=\"report-modal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <div class=\"modal-title\"></div>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\"></div>
    </div>
  </div>    
</div>
";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 72
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 72);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 72);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 72);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 75
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</body></html>";
    }

    public function getTemplateName()
    {
        return "nice/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 77,  130 => 75,  126 => 74,  113 => 72,  109 => 71,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/common/footer.twig", "");
    }
}
