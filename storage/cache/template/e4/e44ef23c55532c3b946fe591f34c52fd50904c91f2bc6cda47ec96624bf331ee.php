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

/* default/template/information/information.twig */
class __TwigTemplate_41798b94a10c3cb159d89de65e7f66fe66dcbdc753c308180a0db6b7ad1bbd91 extends \Twig\Template
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
<div id=\"information-information\" class=\"container\">
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
        // line 19
        if ( !($context["information_exclusion"] ?? null)) {
            // line 20
            echo "      <ul class=\"list-inline text-muted\">
        ";
            // line 21
            if (($context["show_date"] ?? null)) {
                // line 22
                echo "        <li><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                echo ($context["date_added"] ?? null);
                echo "</li>
        ";
            }
            // line 24
            echo "        ";
            if (($context["show_author"] ?? null)) {
                // line 25
                echo "        <li><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> ";
                echo ($context["author"] ?? null);
                echo "</li>
        ";
            }
            // line 27
            echo "        ";
            if ((($context["manufacturer"] ?? null) && ($context["show_manufacturer"] ?? null))) {
                // line 28
                echo "        <li>";
                echo ($context["text_manufacturer"] ?? null);
                echo " <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
        ";
            }
            // line 30
            echo "        ";
            if (($context["show_review"] ?? null)) {
                // line 31
                echo "        <li><a href=\"\" onclick=\"\$('html, body').animate({ scrollTop: \$('#review').offset().top }, 'slow'); return false;\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> ";
                echo ($context["reviews"] ?? null);
                echo "</a></li>
        <li class=\"rating\">";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 33
                    echo "          ";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                    } else {
                        echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                    }
                    // line 34
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</li>
        ";
            }
            // line 36
            echo "      </ul>
      ";
        }
        // line 38
        echo "      ";
        if ((($context["thumb"] ?? null) &&  !($context["images"] ?? null))) {
            // line 39
            echo "      <div class=\"images\">
        <a class=\"thumbnail\" href=\"";
            // line 40
            echo ($context["popup"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"><img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
      </div>
      ";
        } elseif (( !        // line 42
($context["thumb"] ?? null) && (twig_length_filter($this->env, ($context["images"] ?? null)) == 1))) {
            // line 43
            echo "      <div class=\"images\">
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                echo "        <a class=\"thumbnail\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 45);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"> <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 45);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "      </div>
      ";
        } elseif ((twig_length_filter($this->env,         // line 48
($context["images"] ?? null)) > 1)) {
            // line 49
            echo "      <div class=\"swiper-viewport\">
        <div id=\"slideshow-information\" class=\"swiper-container\">
          <div class=\"swiper-wrapper images\">
            ";
            // line 52
            if (($context["thumb"] ?? null)) {
                // line 53
                echo "            <div class=\"swiper-slide text-center\">
              <a href=\"";
                // line 54
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
            </div>
            ";
            }
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 58
                echo "            <div class=\"swiper-slide text-center\">
              <a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 59);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 59);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "          </div>
        </div>
        <div class=\"swiper-pagination slideshow-information\"></div>
        <div class=\"swiper-pager\">
          <div class=\"swiper-button-next\"></div>
          <div class=\"swiper-button-prev\"></div>
        </div>
      </div>
      <script type=\"text/javascript\"><!--
      \$('#slideshow-information').swiper({
      \tmode: 'horizontal',
      \tslidesPerView: 1,
      \tpagination: '.slideshow-information',
      \tpaginationClickable: true,
      \tnextButton: '.swiper-button-next',
      \tprevButton: '.swiper-button-prev',
      \tspaceBetween: 30,
      \tautoplay: 5000,
      \tautoplayDisableOnInteraction: true
      });
      --></script>
      ";
        }
        // line 84
        echo "\t  ";
        echo ($context["description"] ?? null);
        echo "
      ";
        // line 85
        if (($context["attribute_groups"] ?? null)) {
            // line 86
            echo "      <div id=\"specification\">
        <h3>";
            // line 87
            echo ($context["text_attribute"] ?? null);
            echo "</h3>
        <table class=\"table table-bordered\">
          ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 90
                echo "          <thead>
            <tr>
              <td colspan=\"2\"><strong>";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 92);
                echo "</strong></td>
            </tr>
          </thead>
          <tbody>
            ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 97
                    echo "            <tr>
              <td>";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 98);
                    echo "</td>
              <td>";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 99);
                    echo "</td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "          </tbody>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        </table>
      </div>
      ";
        }
        // line 107
        echo "      ";
        if ((($context["show_review"] ?? null) &&  !($context["information_exclusion"] ?? null))) {
            // line 108
            echo "      <h3>";
            echo ($context["text_review"] ?? null);
            echo "</h3>
      <div id=\"review\"></div>
      ";
        }
        // line 111
        echo "      ";
        if ((($context["review_status"] ?? null) &&  !($context["information_exclusion"] ?? null))) {
            // line 112
            echo "      <form class=\"form-horizontal\" id=\"form-review\">
        <h4>";
            // line 113
            echo ($context["text_write"] ?? null);
            echo "</h4>
        ";
            // line 114
            if (($context["review_guest"] ?? null)) {
                // line 115
                echo "        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-name\">";
                // line 117
                echo ($context["entry_name"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"name\" value=\"";
                // line 118
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-review\">";
                // line 123
                echo ($context["entry_review"] ?? null);
                echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
            <div class=\"help-block\">";
                // line 125
                echo ($context["text_note"] ?? null);
                echo "</div>
          </div>
        </div>
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\">";
                // line 130
                echo ($context["entry_rating"] ?? null);
                echo "</label>
            &nbsp;&nbsp;&nbsp; ";
                // line 131
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
            <input type=\"radio\" name=\"rating\" value=\"1\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"2\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"3\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"4\" />
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"5\" />
            &nbsp;";
                // line 141
                echo ($context["entry_good"] ?? null);
                echo "</div>
        </div>
        ";
                // line 143
                echo ($context["captcha"] ?? null);
                echo "
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 146
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
          </div>
        </div>
        ";
            } else {
                // line 150
                echo "        ";
                echo ($context["text_login"] ?? null);
                echo "
        ";
            }
            // line 152
            echo "      </form>
      ";
        }
        // line 154
        echo "      ";
        if (($context["tags"] ?? null)) {
            // line 155
            echo "      <p>";
            echo ($context["text_tags"] ?? null);
            echo "
      ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 157
                echo "      ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 157);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 157);
                    echo "</a>,
      ";
                } else {
                    // line 158
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 158);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 158);
                    echo "</a> ";
                }
                // line 159
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
      ";
        }
        // line 161
        echo "      <hr>
      ";
        // line 162
        echo ($context["share"] ?? null);
        echo "

      ";
        // line 164
        if (($context["informations"] ?? null)) {
            // line 165
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 166
            $context["i"] = 0;
            // line 167
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 168
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 169
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 170
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 171
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 172
                    echo "        ";
                } else {
                    // line 173
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 174
                    echo "        ";
                }
                // line 175
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"thumbnail\">
            <div class=\"image\"><a href=\"";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 177);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 177);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "name", [], "any", false, false, false, 177);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "name", [], "any", false, false, false, 177);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 179);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 179);
                echo "</a></h4>
              ";
                // line 180
                if (((($context["show_related_author"] ?? null) || ($context["show_related_date"] ?? null)) || ($context["show_related_review"] ?? null))) {
                    // line 181
                    echo "              <ul class=\"list-inline text-muted small\">
                ";
                    // line 182
                    if (($context["show_related_date"] ?? null)) {
                        // line 183
                        echo "                <li><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 183);
                        echo "</li>
                ";
                    }
                    // line 185
                    echo "                ";
                    if (($context["show_related_author"] ?? null)) {
                        // line 186
                        echo "                <li><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 186);
                        echo "</li>
                ";
                    }
                    // line 188
                    echo "                ";
                    if (($context["show_related_review"] ?? null)) {
                        // line 189
                        echo "                <li><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 189);
                        echo "</li>
                ";
                    }
                    // line 191
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 191)) {
                        // line 192
                        echo "                <li class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 193
                            echo "                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 193) < $context["j"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                            }
                            // line 194
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</li>
                ";
                    }
                    // line 196
                    echo "              </ul>
              ";
                }
                // line 198
                echo "              <p>";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 198);
                echo "</p>
              <a href=\"";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 199);
                echo "\" class=\"btn btn-primary btn-xs\" role=\"button\">";
                echo ($context["text_read"] ?? null);
                echo "</a>
            </div>
          </div>
        </div>
        ";
                // line 203
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 204
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 205
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 206
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 207
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 208
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 210
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 211
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 213
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 214
            echo "      <h3>";
            echo ($context["text_related_product"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 215
            $context["i"] = 0;
            // line 216
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 217
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 218
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 219
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 220
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 221
                    echo "        ";
                } else {
                    // line 222
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 223
                    echo "        ";
                }
                // line 224
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 226);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 226);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 226);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 226);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 228);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 228);
                echo "</a></h4>
              <p>";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 229);
                echo "</p>
              ";
                // line 230
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 230)) {
                    // line 231
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 232
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 232) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 233
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 235
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 235)) {
                    // line 236
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 236)) {
                        // line 237
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 237);
                        echo "
                ";
                    } else {
                        // line 238
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 238);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 238);
                        echo "</span> ";
                    }
                    // line 239
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 239)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 239);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 240
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 242);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 242);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 243
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 243);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 244
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 244);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 248
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 249
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 250
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 251
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 252
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 253
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 255
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 256
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 258
        echo "        ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 259
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=information/information/review&information_id=";
        // line 273
        echo ($context["information_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=information/information/write&information_id=";
        // line 277
        echo ($context["information_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.images').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
        
";
        // line 316
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 316,  853 => 277,  846 => 273,  829 => 259,  824 => 258,  815 => 256,  812 => 255,  808 => 253,  806 => 252,  803 => 251,  801 => 250,  798 => 249,  796 => 248,  787 => 244,  781 => 243,  773 => 242,  769 => 240,  757 => 239,  750 => 238,  744 => 237,  741 => 236,  738 => 235,  729 => 233,  722 => 232,  717 => 231,  715 => 230,  711 => 229,  705 => 228,  694 => 226,  688 => 224,  685 => 223,  682 => 222,  679 => 221,  676 => 220,  673 => 219,  670 => 218,  667 => 217,  662 => 216,  660 => 215,  655 => 214,  652 => 213,  643 => 211,  640 => 210,  636 => 208,  634 => 207,  631 => 206,  629 => 205,  626 => 204,  624 => 203,  615 => 199,  610 => 198,  606 => 196,  597 => 194,  590 => 193,  585 => 192,  582 => 191,  576 => 189,  573 => 188,  567 => 186,  564 => 185,  558 => 183,  556 => 182,  553 => 181,  551 => 180,  545 => 179,  534 => 177,  528 => 175,  525 => 174,  522 => 173,  519 => 172,  516 => 171,  513 => 170,  510 => 169,  507 => 168,  502 => 167,  500 => 166,  495 => 165,  493 => 164,  488 => 162,  485 => 161,  476 => 159,  469 => 158,  459 => 157,  455 => 156,  450 => 155,  447 => 154,  443 => 152,  437 => 150,  428 => 146,  422 => 143,  417 => 141,  404 => 131,  400 => 130,  392 => 125,  387 => 123,  379 => 118,  375 => 117,  371 => 115,  369 => 114,  365 => 113,  362 => 112,  359 => 111,  352 => 108,  349 => 107,  344 => 104,  337 => 102,  328 => 99,  324 => 98,  321 => 97,  317 => 96,  310 => 92,  306 => 90,  302 => 89,  297 => 87,  294 => 86,  292 => 85,  287 => 84,  263 => 62,  246 => 59,  243 => 58,  238 => 57,  224 => 54,  221 => 53,  219 => 52,  214 => 49,  212 => 48,  209 => 47,  192 => 45,  188 => 44,  185 => 43,  183 => 42,  170 => 40,  167 => 39,  164 => 38,  160 => 36,  151 => 34,  144 => 33,  140 => 32,  135 => 31,  132 => 30,  122 => 28,  119 => 27,  113 => 25,  110 => 24,  104 => 22,  102 => 21,  99 => 20,  97 => 19,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/information.twig", "");
    }
}
