<?php

/* pav_celo/template/common/footer.twig */
class __TwigTemplate_dd38f3ce4fb1761addd23d86fe127b2c758dbd3282d5cff1a4b11a8088872a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !twig_test_empty((isset($context["blockbuilder"]) ? $context["blockbuilder"] : null))) {
            // line 2
            echo "<footer class=\"footer-blockbuilder\">
  ";
            // line 3
            echo (isset($context["blockbuilder"]) ? $context["blockbuilder"] : null);
            echo "
</footer>  
";
        } else {
            // line 6
            echo "<footer class=\"pavo-footer\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 9
            if ((isset($context["informations"]) ? $context["informations"] : null)) {
                // line 10
                echo "      <div class=\"col-sm-3\">
        <h5>";
                // line 11
                echo (isset($context["text_information"]) ? $context["text_information"] : null);
                echo "</h5>
        <ul class=\"list-unstyled\">
         ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 14
                    echo "          <li><a href=\"";
                    echo $this->getAttribute($context["information"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["information"], "title", array());
                    echo "</a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        </ul>
      </div>
      ";
            }
            // line 19
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 20
            echo (isset($context["text_service"]) ? $context["text_service"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 22
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 23
            echo (isset($context["return"]) ? $context["return"] : null);
            echo "\">";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 24
            echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
            echo "\">";
            echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
            echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
            // line 28
            echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 30
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 31
            echo (isset($context["voucher"]) ? $context["voucher"] : null);
            echo "\">";
            echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 32
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 33
            echo (isset($context["special"]) ? $context["special"] : null);
            echo "\">";
            echo (isset($context["text_special"]) ? $context["text_special"] : null);
            echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
            // line 37
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 39
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 40
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 41
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 42
            echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
            echo "\">";
            echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
            echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
            // line 47
            echo (isset($context["powered"]) ? $context["powered"] : null);
            echo "</p>
  </div>
</footer>
";
        }
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 52
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div>
";
        // line 59
        echo (isset($context["user_popup"]) ? $context["user_popup"] : null);
        echo "
<div id=\"top\"><a class=\"backtop scrollup\" href=\"\"><i class=\"fa fa-angle-up\"></i></a></div>
</body></html>";
    }

    public function getTemplateName()
    {
        return "pav_celo/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 59,  179 => 54,  170 => 52,  166 => 51,  159 => 47,  149 => 42,  143 => 41,  137 => 40,  131 => 39,  126 => 37,  117 => 33,  111 => 32,  105 => 31,  99 => 30,  94 => 28,  85 => 24,  79 => 23,  73 => 22,  68 => 20,  65 => 19,  60 => 16,  49 => 14,  45 => 13,  40 => 11,  37 => 10,  35 => 9,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if blockbuilder is not empty %}*/
/* <footer class="footer-blockbuilder">*/
/*   {{ blockbuilder }}*/
/* </footer>  */
/* {% else %}*/
/* <footer class="pavo-footer">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <p>{{ powered }}</p>*/
/*   </div>*/
/* </footer>*/
/* {% endif %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </div>*/
/* {{ user_popup }}*/
/* <div id="top"><a class="backtop scrollup" href=""><i class="fa fa-angle-up"></i></a></div>*/
/* </body></html>*/
