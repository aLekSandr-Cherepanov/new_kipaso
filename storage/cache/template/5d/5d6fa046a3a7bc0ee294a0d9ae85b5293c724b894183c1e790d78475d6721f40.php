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

/* nice/template/product/product.twig */
class __TwigTemplate_8c192b0a44fc3d148b9189aea9c64af8576c3874c2875a2c21e59b9266436dc5 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
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
  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">
      ";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row product-container\">
        <div class=\"col-sm-12\">
          <div class=\"\">
            <h1 class=\"product-h1\">";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"row\">
              <div class=\"col-sm-6\">
                ";
        // line 17
        if (($context["review_status"] ?? null)) {
            // line 18
            echo "                <div class=\"rating\">
                  <p>";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 21
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            echo ($context["reviews"] ?? null);
            echo " / <a href=\"#review-form--wrapper--modal\" data-toggle=\"modal\" data-target=\"#review-form--wrapper--modal\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>

                </div>
                ";
        }
        // line 25
        echo "  ";
        // line 29
        echo "              </div>          
              <div class=\"col-sm-6\">
                ";
        // line 35
        echo "              </div>
            </div>
          </div>            
        </div>
        <div class=\"col-sm-9\">
          <div class=\"row\">
            <div class=\"col-sm-5\">
              ";
        // line 42
        echo ($context["block_image"] ?? null);
        echo "
            </div>
            <div class=\"col-sm-7\">
              <div class=\"product-tab--container\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 47
        echo ($context["nice_tab_general"] ?? null);
        echo "</a></li>
                  ";
        // line 48
        if (($context["description"] ?? null)) {
            echo "<li><a href=\"#tab-description\" data-toggle=\"tab\">";
            echo ($context["tab_description"] ?? null);
            echo "</a></li>";
        }
        // line 49
        echo "                  ";
        if (($context["attribute_groups"] ?? null)) {
            echo "<li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>";
        }
        // line 50
        echo "  ";
        // line 51
        echo "                </ul>
                <div class=\"tab-content\">
                  <!-- tab-general -->
                  <div class=\"tab-pane active\" id=\"tab-general\">
                    <ul class=\"list-unstyled identity-list\">
                      ";
        // line 56
        if (($context["manufacturer"] ?? null)) {
            // line 57
            echo "                      <li><span class=\"meta-label\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span> <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"meta-value\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                      ";
        }
        // line 59
        echo "                      <li><span class=\"meta-label\">";
        echo ($context["text_model"] ?? null);
        echo "</span> <span class=\"meta-value\">";
        echo ($context["model"] ?? null);
        echo "</span></li>
                      <li><span class=\"meta-label\">";
        // line 60
        echo ($context["text_stock"] ?? null);
        echo "</span> <span class=\"meta-value\">";
        echo ($context["stock"] ?? null);
        echo "</span></li>
                      ";
        // line 61
        if (($context["reward"] ?? null)) {
            // line 62
            echo "                      <li><span class=\"meta-label\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> <span class=\"meta-value\">";
            echo ($context["reward"] ?? null);
            echo "</span></li>
                      ";
        }
        // line 64
        echo "                    </ul>

                    ";
        // line 86
        echo "                    ";
        if (($context["short_description"] ?? null)) {
            echo "<div class=\"short-description\">";
            echo ($context["short_description"] ?? null);
            echo "</div>";
        }
        // line 87
        echo "                  </div>

                  ";
        // line 89
        if (($context["description"] ?? null)) {
            // line 90
            echo "                  <!-- tab-description -->
                  <div class=\"tab-pane\" id=\"tab-description\">           
                    <div class=\"product-description\">";
            // line 92
            echo ($context["description"] ?? null);
            echo "</div>
                  </div>
                  ";
        }
        // line 95
        echo "                  ";
        if (($context["attribute_groups"] ?? null)) {
            // line 96
            echo "                    <div class=\"tab-pane\" id=\"tab-specification\">
                      <table class=\"table table-borderless\">
                        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 99
                echo "                          <thead>
                            <tr>
                              <td colspan=\"2\"><strong>";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 101);
                echo "</strong></td>
                            </tr>
                          </thead>
                          <tbody>
                            ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 106
                    echo "                              <tr>
                                <td>";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 107);
                    echo "</td>
                                <td>";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 108);
                    echo "</td>
                              </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                          </tbody>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                      </table>
                    </div>
                  ";
        }
        // line 115
        echo "                
                </div>
              </div>
                
              <div id=\"product\">           
                <div class=\"row\">
                <div class=\"col-xs-12\">
                  ";
        // line 122
        echo ($context["block_conversion"] ?? null);
        echo "             
                </div>
            </div>
            
            </div>
            </div>                       
          </div>
          
        </div>
        <div class=\"col-sm-3\">
          ";
        // line 132
        if (($context["review_status"] ?? null)) {
            // line 133
            echo "          ";
            if ((($context["rating"] ?? null) > 0)) {
                // line 134
                echo "          <div id=\"review\"></div>          
          ";
            } else {
                // line 136
                echo "            ";
                echo ($context["block_review_form"] ?? null);
                echo "
          ";
            }
            // line 138
            echo "          ";
            echo ($context["block_review_form_modal"] ?? null);
            echo "
          ";
        }
        // line 140
        echo "        </div>         
        ";
        // line 141
        if (($context["tags"] ?? null)) {
            // line 142
            echo "        <div class=\"row\" id=\"product-row-2\">
          <div class=\"col-sm-12\">
            <p>";
            // line 144
            echo ($context["text_tags"] ?? null);
            echo "
              ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 146
                echo "                ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 146);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 146);
                    echo "</a>,
                ";
                } else {
                    // line 147
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 147);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 147);
                    echo "</a> ";
                }
                // line 148
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
          </div>
        </div>
        ";
        }
        // line 152
        echo "      </div>     

      ";
        // line 154
        echo ($context["block_products_related"] ?? null);
        echo "

      ";
        // line 156
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
  </div>
    
</div>
<script type=\"text/javascript\">
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('#recurring-description .alert-dismissible, #recurring-description .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
</script> 
<script type=\"text/javascript\">
\$('#button-cart').on('click', function() {

  var data = \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea');
  
  console.log('data:');
  console.debug(data);

\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: data,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('#product .alert-dismissible, #product .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
        \$('#add-to-cart-error').html('<div class=\"alert alert-danger alert-dismissible\">";
        // line 205
        echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "add_to_cart", [], "any", false, false, false, 205);
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
        \$('#report-modal .modal-title').html(json['nice_text_modal_add_to_cart_title']);
        
        \$('#report-modal .modal-body').html('<div class=\"alert alert-success\"><i class=\"fa fa-info-circle\"></i>&nbsp;&nbsp;' + json['success'] + '</div>');  
        
\t\t\t\t\$('#report-modal .modal-footer').html('<button type=\"button\" class=\"btn modal_btn-close\" data-dismiss=\"modal\">'+json['nice_text_modal_button_to_continue']+'</button>\\n\\
\t\t\t\t\t<a href=\"' + json['button_to_cart_link'] + '\" class=\"btn btn-primary modal_btn-to-cart\">'+json['nice_text_modal_button_to_cart']+'</a>');

        \$('#report-modal').modal('show');
        
        \$('#cart > button').html('<div class=\"cart-quantity-wrapper\"><i class=\"fa fa-shopping-bag cart-icon\"></i><span id=\"cart-quantity\">' + json['quantity'] + '</div></span><div class=\"cart-total-wrapper\"><span id=\"cart-total\" class=\"hidden-xs hidden-sm\">' + json['total'] + '</span></div>');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
</script> 
<script type=\"text/javascript\">
\$('.date').datetimepicker({
\tlanguage: '";
        // line 250
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 255
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 261
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
</script> 
<script type=\"text/javascript\">
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 328
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 332
        echo ($context["product_id"] ?? null);
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
\t\t\t\t\$('#form-review').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#form-review').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#form-review input[name=\\'name\\']').val('');
\t\t\t\t\$('#form-review textarea[name=\\'text\\']').val('');
\t\t\t\t\$('#form-review input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$('#button-review--modal').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 362
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review--modal\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review--modal').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review--modal').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#form-review--modal').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#form-review--modal').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#form-review--modal input[name=\\'name\\']').val('');
\t\t\t\t\$('#form-review--modal textarea[name=\\'text\\']').val('');
\t\t\t\t\$('#form-review--modal input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>


<script type=\"text/javascript\">
\$(document).ready(function() {
  function updateQuantity(value) {
    \$('#input-quantity').val(parseInt(\$('#input-quantity').val(), 10) + value);
  }
  
  \$('#input-quantity--pluse').click(function() {
    updateQuantity(1);
    
    \$('#input-quantity').trigger('change');
  });
  
  \$('#input-quantity--minus').click(function() {
    if (\$('#input-quantity').val () > 0) {
      updateQuantity(-1);
    } 

    \$('#input-quantity').trigger('change');
  });
});
</script>
  
<script type=\"text/javascript\">
function AjaxLivePrice() {
  \$.ajax({
    type: 'POST',
    url: 'index.php?route=product/product/priceLive',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product  input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[name=\\'quantity\\']'),
    dataType: 'json',
      success: function(json) {
      if (json.success) {
        \$('#content .price').html(json.new_price.price);
        \$('#content .price-special').html(json.new_price.special);
        \$('#content .tax').html(\"";
        // line 435
        echo ($context["text_tax"] ?? null);
        echo " \" + json.new_price.tax);\t\t\t\t
      }
    }
  });
}\t\t\t
\$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\'], #product input[type=\\'checkbox\\'], #product select, #product textarea').on('change', function() {
  AjaxLivePrice();
});
\$('#product input[name=\\'quantity\\']').on('keyup', function() {
  AjaxLivePrice();
});

";
        // line 447
        if ((($context["minimum"] ?? null) > 1)) {
            // line 448
            echo "AjaxLivePrice(); //on load for 2 or more items
";
        }
        // line 450
        echo "</script>
";
        // line 451
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "nice/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  696 => 451,  693 => 450,  689 => 448,  687 => 447,  672 => 435,  596 => 362,  563 => 332,  556 => 328,  486 => 261,  477 => 255,  469 => 250,  421 => 205,  369 => 156,  364 => 154,  360 => 152,  349 => 148,  342 => 147,  332 => 146,  328 => 145,  324 => 144,  320 => 142,  318 => 141,  315 => 140,  309 => 138,  303 => 136,  299 => 134,  296 => 133,  294 => 132,  281 => 122,  272 => 115,  267 => 113,  260 => 111,  251 => 108,  247 => 107,  244 => 106,  240 => 105,  233 => 101,  229 => 99,  225 => 98,  221 => 96,  218 => 95,  212 => 92,  208 => 90,  206 => 89,  202 => 87,  195 => 86,  191 => 64,  183 => 62,  181 => 61,  175 => 60,  168 => 59,  158 => 57,  156 => 56,  149 => 51,  147 => 50,  140 => 49,  134 => 48,  130 => 47,  122 => 42,  113 => 35,  109 => 29,  107 => 25,  92 => 21,  85 => 20,  81 => 19,  78 => 18,  76 => 17,  70 => 14,  63 => 10,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nice/template/product/product.twig", "");
    }
}
