<?php

/* pav_celo/template/common/header.twig */
class __TwigTemplate_8902f46bc4f38c826279575994c6e874081584307a823764d2e2bc8ed74c662e extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" class=\"";
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
  <base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
  ";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "  <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
  ";
        }
        // line 17
        echo "  ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "  <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
  ";
        }
        // line 20
        echo "  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 23
            echo "  <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 26
            echo "  <script src=\"";
            echo $context["script"];
            echo "\"> </script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 29
            echo "  <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 32
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</head>
<body class= \"";
        // line 35
        echo (isset($context["body_class"]) ? $context["body_class"] : null);
        echo " row-offcanvas row-offcanvas-left\">

  <div id=\"pavo-sidebar-offcanvas\" class=\"sidebar-offcanvas\">
    <div class=\"offcanvas-inner panel-offcanvas\">
      <div class=\"offcanvas-heading clearfix\">
        ";
        // line 40
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
        <button data-toggle=\"offcanvas\" class=\"btn btn-danger pull-right\" type=\"button\"><span class=\"fa fa-close\"></span></button>
      </div>
      <div class=\"offcanvas-body\">
        <div class=\"inner\">
         <div class=\"offcanvas-center\"> 
           ";
        // line 46
        if (((isset($context["offcanvas"]) ? $context["offcanvas"] : null) == "megamenu")) {
            // line 47
            echo "           ";
            echo (isset($context["pavmegamenu"]) ? $context["pavmegamenu"] : null);
            echo "
           ";
        } else {
            // line 49
            echo "           ";
            echo (isset($context["menu"]) ? $context["menu"] : null);
            echo "
           ";
        }
        // line 51
        echo "         </div>
         <div class=\"offcanvas-bottom\"></div>
       </div>  
     </div>
   </div>
 </div>

 <div class=\"page-inner\">

  ";
        // line 60
        if ( !twig_test_empty((isset($context["pavoheader"]) ? $context["pavoheader"] : null))) {
            // line 61
            echo "  <div class=\"visible-xs visible-sm pav-mobile-nav row\">
    <div class=\"col-xs-12 topbar\">
        ";
            // line 63
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
        ";
            // line 64
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
        <div id=\"top-links\" class=\"nav \">
          <ul class=\"list-inline\">
            <li><a href=\"";
            // line 67
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["telephone"]) ? $context["telephone"] : null);
            echo "</span></li>
            <li class=\"dropdown\"><a href=\"";
            // line 68
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" title=\"";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</span> <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu dropdown-menu-right\">
                ";
            // line 70
            if ((isset($context["logged"]) ? $context["logged"] : null)) {
                // line 71
                echo "                <li><a href=\"";
                echo (isset($context["account"]) ? $context["account"] : null);
                echo "\">";
                echo (isset($context["text_account"]) ? $context["text_account"] : null);
                echo "</a></li>
                <li><a href=\"";
                // line 72
                echo (isset($context["order"]) ? $context["order"] : null);
                echo "\">";
                echo (isset($context["text_order"]) ? $context["text_order"] : null);
                echo "</a></li>
                <li><a href=\"";
                // line 73
                echo (isset($context["transaction"]) ? $context["transaction"] : null);
                echo "\">";
                echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
                echo "</a></li>
                <li><a href=\"";
                // line 74
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\">";
                echo (isset($context["text_download"]) ? $context["text_download"] : null);
                echo "</a></li>
                <li><a href=\"";
                // line 75
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo "\">";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo "</a></li>
                ";
            } else {
                // line 76
                echo " 
                <li><a href=\"";
                // line 77
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a></li>
                <li><a href=\"";
                // line 78
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</a></li>
                ";
            }
            // line 80
            echo "              </ul>
            </li>
            <li><a href=\"";
            // line 82
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total1\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</span></a></li>
            <li><a href=\"";
            // line 83
            echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
            echo "\" title=\"";
            echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
            echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
            echo "</span></a></li>
            <li><a href=\"";
            // line 84
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</span></a></li>
          </ul>
        </div>
      </div>
      
      <div class=\"col-xs-8\">
        <button class=\"btn-show-offcanvas btn btn-primary\" data-toggle=\"offcanvas\"><i class=\"fa fa-bars\"></i></button>
         <div id=\"mobile-logo\">";
            // line 91
            if ((isset($context["logo"]) ? $context["logo"] : null)) {
                echo "<a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\"><img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                // line 92
                echo "              <div class=\"logo-text\"><a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\">";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "</a></div>
              ";
            }
            // line 93
            echo "</div> 
      </div>
      <div class=\"col-xs-4\">
        ";
            // line 96
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "
      </div>
    </div>

    <header id=\"pav-header-builder\" class=\"hidden-xs hidden-sm\">
      ";
            // line 101
            echo (isset($context["pavoheader"]) ? $context["pavoheader"] : null);
            echo "
    </header>
    ";
        } else {
            // line 104
            echo "    <nav id=\"top\" class=\"topbar\">
      <div class=\"container\">
    ";
            // line 106
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
      ";
            // line 107
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
      <div id=\"top-links\" class=\"nav pull-right\">
        <ul class=\"list-inline\">
          <li><a href=\"";
            // line 110
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["telephone"]) ? $context["telephone"] : null);
            echo "</span></li>
          <li class=\"dropdown\"><a href=\"";
            // line 111
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" title=\"";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</span> <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              ";
            // line 113
            if ((isset($context["logged"]) ? $context["logged"] : null)) {
                // line 114
                echo "              <li><a href=\"";
                echo (isset($context["account"]) ? $context["account"] : null);
                echo "\">";
                echo (isset($context["text_account"]) ? $context["text_account"] : null);
                echo "</a></li>
              <li><a href=\"";
                // line 115
                echo (isset($context["order"]) ? $context["order"] : null);
                echo "\">";
                echo (isset($context["text_order"]) ? $context["text_order"] : null);
                echo "</a></li>
              <li><a href=\"";
                // line 116
                echo (isset($context["transaction"]) ? $context["transaction"] : null);
                echo "\">";
                echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
                echo "</a></li>
              <li><a href=\"";
                // line 117
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\">";
                echo (isset($context["text_download"]) ? $context["text_download"] : null);
                echo "</a></li>
              <li><a href=\"";
                // line 118
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo "\">";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo "</a></li>
              ";
            } else {
                // line 119
                echo " 
              <li><a href=\"";
                // line 120
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a></li>
              <li><a href=\"";
                // line 121
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</a></li>
              ";
            }
            // line 123
            echo "            </ul>
          </li>
          <li><a href=\"";
            // line 125
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total2\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</span></a></li>
          <li><a href=\"";
            // line 126
            echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
            echo "\" title=\"";
            echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
            echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
            echo "</span></a></li>
          <li><a href=\"";
            // line 127
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-2 visible-xs\">
          <button class=\"btn-show-offcanvas btn btn-primary\" data-toggle=\"offcanvas\"><i class=\"fa fa-gear\"></i></button>
        </div>
        <div class=\"col-sm-4 col-xs-8 text-xs-center\">
          <div id=\"logo\">";
            // line 139
            if ((isset($context["logo"]) ? $context["logo"] : null)) {
                echo "<a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\"><img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                // line 140
                echo "            <div class=\"logo-text\"><a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\">";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "</a></div>
          ";
            }
            // line 141
            echo "</div>
        </div>
        <div class=\"col-sm-5 hidden-xs\">";
            // line 143
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "</div>
        <div class=\"col-sm-3 col-xs-2\">";
            // line 144
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "</div>
      </div>
    </div>

    <section class=\"header-bottom hidden-xs hidden-sm\">
      <div class=\"container\">
        <div class=\"header-buttom-menu mainmenu clearfix\">
          <div class=\"col-lg-12 col-md-12\">
       <div class=\"row\">
            ";
            // line 153
            if (twig_test_empty((isset($context["pavmegamenu"]) ? $context["pavmegamenu"] : null))) {
                // line 154
                echo "            ";
                echo (isset($context["menu"]) ? $context["menu"] : null);
                echo "
            ";
            } else {
                // line 156
                echo "            ";
                echo (isset($context["pavmegamenu"]) ? $context["pavmegamenu"] : null);
                echo "
            ";
            }
            // line 158
            echo "          </div>
          </div>
          
        </div>
      </div>
    </section>
  </header>
  ";
        }
    }

    public function getTemplateName()
    {
        return "pav_celo/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 158,  504 => 156,  498 => 154,  496 => 153,  484 => 144,  480 => 143,  476 => 141,  468 => 140,  456 => 139,  437 => 127,  429 => 126,  421 => 125,  417 => 123,  410 => 121,  404 => 120,  401 => 119,  394 => 118,  388 => 117,  382 => 116,  376 => 115,  369 => 114,  367 => 113,  358 => 111,  352 => 110,  346 => 107,  342 => 106,  338 => 104,  332 => 101,  324 => 96,  319 => 93,  311 => 92,  299 => 91,  285 => 84,  277 => 83,  269 => 82,  265 => 80,  258 => 78,  252 => 77,  249 => 76,  242 => 75,  236 => 74,  230 => 73,  224 => 72,  217 => 71,  215 => 70,  206 => 68,  200 => 67,  194 => 64,  190 => 63,  186 => 61,  184 => 60,  173 => 51,  167 => 49,  161 => 47,  159 => 46,  150 => 40,  142 => 35,  139 => 34,  130 => 32,  125 => 31,  114 => 29,  109 => 28,  100 => 26,  95 => 25,  82 => 23,  78 => 22,  74 => 20,  68 => 18,  65 => 17,  59 => 15,  57 => 14,  53 => 13,  49 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" class="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/*   <meta charset="UTF-8" />*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>{{ title }}</title>*/
/*   <base href="{{ base }}" />*/
/*   {% if description %}*/
/*   <meta name="description" content="{{ description }}" />*/
/*   {% endif %}*/
/*   {% if keywords %}*/
/*   <meta name="keywords" content="{{ keywords }}" />*/
/*   {% endif %}*/
/*   <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/*   <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/*   {% for style in styles %}*/
/*   <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/*   {% endfor %}*/
/*   {% for script in scripts %}*/
/*   <script src="{{ script }}"> </script>*/
/*   {% endfor %}*/
/*   {% for link in links %}*/
/*   <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/*   {% endfor %}*/
/*   {% for analytic in analytics %}*/
/*   {{ analytic }}*/
/*   {% endfor %}*/
/* </head>*/
/* <body class= "{{ body_class }} row-offcanvas row-offcanvas-left">*/
/* */
/*   <div id="pavo-sidebar-offcanvas" class="sidebar-offcanvas">*/
/*     <div class="offcanvas-inner panel-offcanvas">*/
/*       <div class="offcanvas-heading clearfix">*/
/*         {{ search }}*/
/*         <button data-toggle="offcanvas" class="btn btn-danger pull-right" type="button"><span class="fa fa-close"></span></button>*/
/*       </div>*/
/*       <div class="offcanvas-body">*/
/*         <div class="inner">*/
/*          <div class="offcanvas-center"> */
/*            {% if offcanvas == "megamenu" %}*/
/*            {{ pavmegamenu }}*/
/*            {% else %}*/
/*            {{ menu }}*/
/*            {% endif %}*/
/*          </div>*/
/*          <div class="offcanvas-bottom"></div>*/
/*        </div>  */
/*      </div>*/
/*    </div>*/
/*  </div>*/
/* */
/*  <div class="page-inner">*/
/* */
/*   {% if pavoheader is not empty %}*/
/*   <div class="visible-xs visible-sm pav-mobile-nav row">*/
/*     <div class="col-xs-12 topbar">*/
/*         {{ language }}*/
/*         {{ currency }}*/
/*         <div id="top-links" class="nav ">*/
/*           <ul class="list-inline">*/
/*             <li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></li>*/
/*             <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*               <ul class="dropdown-menu dropdown-menu-right">*/
/*                 {% if logged %}*/
/*                 <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                 <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                 <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                 <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                 <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                 {% else %} */
/*                 <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                 <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="{{ wishlist }}" id="wishlist-total1" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*             <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/*             <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       */
/*       <div class="col-xs-8">*/
/*         <button class="btn-show-offcanvas btn btn-primary" data-toggle="offcanvas"><i class="fa fa-bars"></i></button>*/
/*          <div id="mobile-logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*               <div class="logo-text"><a href="{{ home }}">{{ name }}</a></div>*/
/*               {% endif %}</div> */
/*       </div>*/
/*       <div class="col-xs-4">*/
/*         {{cart}}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <header id="pav-header-builder" class="hidden-xs hidden-sm">*/
/*       {{ pavoheader }}*/
/*     </header>*/
/*     {% else %}*/
/*     <nav id="top" class="topbar">*/
/*       <div class="container">*/
/*     {{ currency }}*/
/*       {{ language }}*/
/*       <div id="top-links" class="nav pull-right">*/
/*         <ul class="list-inline">*/
/*           <li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></li>*/
/*           <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu dropdown-menu-right">*/
/*               {% if logged %}*/
/*               <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*               <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*               <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*               <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*               <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*               {% else %} */
/*               <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*               <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*               {% endif %}*/
/*             </ul>*/
/*           </li>*/
/*           <li><a href="{{ wishlist }}" id="wishlist-total2" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*           <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/*           <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/*   <header>*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-xs-2 visible-xs">*/
/*           <button class="btn-show-offcanvas btn btn-primary" data-toggle="offcanvas"><i class="fa fa-gear"></i></button>*/
/*         </div>*/
/*         <div class="col-sm-4 col-xs-8 text-xs-center">*/
/*           <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*             <div class="logo-text"><a href="{{ home }}">{{ name }}</a></div>*/
/*           {% endif %}</div>*/
/*         </div>*/
/*         <div class="col-sm-5 hidden-xs">{{ search }}</div>*/
/*         <div class="col-sm-3 col-xs-2">{{ cart }}</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <section class="header-bottom hidden-xs hidden-sm">*/
/*       <div class="container">*/
/*         <div class="header-buttom-menu mainmenu clearfix">*/
/*           <div class="col-lg-12 col-md-12">*/
/*        <div class="row">*/
/*             {% if pavmegamenu is empty %}*/
/*             {{ menu }}*/
/*             {% else %}*/
/*             {{ pavmegamenu }}*/
/*             {% endif %}*/
/*           </div>*/
/*           </div>*/
/*           */
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   </header>*/
/*   {% endif %}*/
